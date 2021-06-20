(function()
{
	"use strict";

	CVM.Clock = function(hoursHand, minutesHand, secondsHand)
	{
        this.hoursHand = hoursHand;
		this.minutesHand = minutesHand;
		this.secondsHand = secondsHand;
        this.hours;
        this.minutes;
        this.seconds;

		this.init();
	};

	CVM.Clock.prototype.init = function()
	{
		this.update("seconds");

		setInterval(function()
		{
			this.update("seconds");
		}.bind(this), 1000);
	};

	CVM.Clock.prototype.update = function(type)
	{
		var date = new Date;
		var newTimeValue = date["get" + type.charAt(0).toUpperCase() + type.slice(1)]();

		// ne pas aller plus loin si l'aiguille actuelle a une valeur identique à la valeur réelle.
		if (newTimeValue === this[type])
		{
			return;
		}

		this[type] = newTimeValue;
		var deg = this.calculateDeg(type);

		this[type + "Hand"].style.webkitTransform = "rotate3d(0, 0, 1, " + deg + "deg)";
		this[type + "Hand"].style.transform = "rotate3d(0, 0, 1, " + deg + "deg)";
	};

	CVM.Clock.prototype.calculateDeg = function(type)
	{
		if (type == "seconds")
		{
			this.update("minutes");
			return  this.seconds * 6;
		}
		else if (type == "minutes")
		{
			this.update("hours");
			return  this.minutes * 6;
		}
		else
		{
			this.updateDay();
			return  (this.hours * 30) + (this.minutes / 2);
		}
	};

	CVM.Clock.prototype.updateDay = function()
	{
		var date = new Date;
		var day = date.getDay();
		for (var i = 0; i < 7; i++)
		{     
			(document.getElementById("day" + i)).classList.remove("active");
		}
		(document.getElementById("day" + day)).classList.add("active");
	}
}());