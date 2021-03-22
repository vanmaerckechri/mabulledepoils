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
		this.update("minutes");

		var style = document.createElement('style');
		style.setAttribute('type', 'text/css');

		var maxDegForSeconds = 360 + this.calculateSecondsInDeg();
		style.innerHTML += "@-webkit-keyframes clock {100% {-webkit-transform: rotate3d(0, 0, 1, " + maxDegForSeconds + "deg);}} @-moz-keyframes clock {100% {-webkit-transform: rotate3d(0, 0, 1, " + maxDegForSeconds + "deg);}}";
		document.getElementsByTagName('head')[0].appendChild(style);

		setInterval(function()
		{
			this.update("minutes");
		}.bind(this), 1000);
	};

	CVM.Clock.prototype.update = function(type)
	{
		var date = new Date;
		var newTimeValue = date["get" + type.charAt(0).toUpperCase() + type.slice(1)]();

		if (type != "hours" && newTimeValue === this[type])
		{
			return;
		}

		this[type] = newTimeValue;

		var deg;
		if (type == "seconds")
		{
			deg = this.calculateSecondsInDeg();
		}
		else if (type == "minutes")
		{
			deg = this.calculateMinutesInDeg();
			this.update("hours");
		}
		else
		{
			deg = this.calculateHoursInDeg();
			this.updateDay();
		}

		this[type + "Hand"].style.webkitTransform = "rotate3d(0, 0, 1, " + deg + "deg)";
		this[type + "Hand"].style.transform = "rotate3d(0, 0, 1, " + deg + "deg)";
	};

	CVM.Clock.prototype.calculateSecondsInDeg = function()
	{
		return  this.seconds * 6;
	};

	CVM.Clock.prototype.calculateMinutesInDeg = function()
	{
		return  this.minutes * 6;
	};

	CVM.Clock.prototype.calculateHoursInDeg = function()
	{
		return  (this.hours * 30) + (this.minutes / 2);
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