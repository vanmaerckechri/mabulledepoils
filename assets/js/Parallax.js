(function()
{
	"use strict";

	CVM.Parallax = function(container, action, axesValue)
	{
		this.container = container;
		this.action = action
		this.axesValue = axesValue ? axesValue : {};

		this.h_percent = null;
		this.v_percent = null;
		this.isWaitingRefreshDom = false;
		this.isMouseOver = false;

		this.init();
	};

	CVM.Parallax.prototype.init = function()
	{	
		this.axesValue.h_inverse = !this.axesValue.h_inverse ? 1 : -1;
		this.axesValue.v_inverse = !this.axesValue.v_inverse ? 1 : -1;

		if (this.action == "scroll")
		{
			window.addEventListener('scroll', this.checkForUpdate.bind(this, this.updateWithScroll.bind(this)));
		}
		else
		{
			window.addEventListener('mousemove', this.checkForUpdate.bind(this, this.updateWithMouse.bind(this)));
		}
		if (this.axesValue.isOnlyHover)
		{
			this.container.addEventListener("mouseover", function(){this.isMouseOver = true;}.bind(this));
			this.container.addEventListener("mouseout", function(){this.isMouseOver = false;}.bind(this));
		}
	};

	CVM.Parallax.prototype.checkForUpdate = function(update, e)
	{
		var screenHeight = window.innerHeight || document.documentElement.clientHeight;
		var containerInfos = this.container.getBoundingClientRect();

		// Don't update if element is offscreen.
		if (containerInfos.top + containerInfos.height < 0 || containerInfos.top > screenHeight)
		{
			return false;
		}

		update(containerInfos, e);
	};

	CVM.Parallax.prototype.updateWithScroll = function(containerInfos)
	{

		var h_percent = this.axesValue.h_fixed ? this.axesValue.h_fixed :  Math.round(this.axesValue.h_origin - (this.axesValue.h_max * this.axesValue.h_inverse * (containerInfos.left / containerInfos.width)));
		var v_percent = this.axesValue.v_fixed ? this.axesValue.v_fixed : Math.round(this.axesValue.v_origin - (this.axesValue.v_max * this.axesValue.v_inverse * (containerInfos.top / containerInfos.height)));

		this.updateValues(h_percent, v_percent);
	};

	CVM.Parallax.prototype.updateWithMouse = function(containerInfos, e)
	{
		var x = e.clientX;
		var y = e.clientY;
		var percents = this.calculatePercents(x, y);
		var h_percent = this.axesValue.h_fixed ? this.axesValue.h_fixed : percents.x;
		var v_percent = this.axesValue.v_fixed ? this.axesValue.v_fixed : percents.y;

		this.updateValues(h_percent, v_percent);
	};

	CVM.Parallax.prototype.calculatePercents = function(x, y)
	{
		var center = {};
		var maxLength = {};
		var centerToMouse_length = {};
		var percents = {};

		if (this.axesValue.isOnlyHover)
		{
			var container = this.container.getBoundingClientRect();
			// reset parallax position if mouse is out of container
			if (!this.isMouseOver)
			{
				return {x: this.axesValue.h_origin, y: this.axesValue.v_origin};
			}

			center.x = container.left + (container.width / 2); 
			center.y = container.top + (container.height / 2);
			maxLength.w = container.width / 2;
			maxLength.h = container.height / 2;
		}
		else
		{
			center.x = (window.innerWidth || document.documentElement.clientWidth) / 2; 
			center.y = (window.innerHeight || document.documentElement.clientHeight) / 2;
			maxLength.w = (window.innerWidth || document.documentElement.clientWidth) - center.x;
			maxLength.h = (window.innerHeight || document.documentElement.clientHeight) - center.y;
		}

		centerToMouse_length.x = center.x - x;
		centerToMouse_length.y = center.y - y;

		var ratio = this.calculateRatio(centerToMouse_length);

		percents.x = Math.round(this.axesValue.v_origin + (ratio.x * this.axesValue.h_inverse * (centerToMouse_length.x / maxLength.w)));
		percents.y = Math.round(this.axesValue.v_origin + (ratio.y * this.axesValue.v_inverse * (centerToMouse_length.y / maxLength.h)));

		return percents;
	};

	CVM.Parallax.prototype.calculateRatio = function(centerToMouse_length)
	{
		var ratio = {};
		if (centerToMouse_length.x > 0)
		{
			ratio.x = this.axesValue.h_max - this.axesValue.h_origin;
		}
		else
		{
			ratio.x = this.axesValue.h_origin - this.axesValue.h_min;
		}
		if (centerToMouse_length.y > 0)
		{
			ratio.y = this.axesValue.v_max - this.axesValue.v_origin;
		}
		else
		{
			ratio.y = this.axesValue.v_origin - this.axesValue.v_min;
		}
		return ratio;
	};

	CVM.Parallax.prototype.updateValues = function(h_percent, v_percent)
	{
		if (h_percent != this.h_percent || v_percent != this.v_percent)
		{
			var list = [
				["h", h_percent],
				["v", v_percent]
			];
			for (var i = list.length - 1; i >= 0; i--)
			{
				// result is below the authorized limit
				if (list[i][1] < this.axesValue[list[i][0] + "_min"])
				{
					this[list[i][0] + "_percent"] = this.axesValue[list[i][0] + "_min"];
				}
				// result is above the authorized limit
				else if (list[i][1] > this.axesValue[list[i][0] + "_max"])
				{
					this[list[i][0] + "_percent"] = this.axesValue[list[i][0] + "_max"];
				}
				else
				{
					this[list[i][0] + "_percent"] = list[i][1];
				}
			}
			this.isWaitingRefreshDom = true;
		}
	};

	CVM.Parallax.prototype.refreshDom = function()
	{
		if (this.isWaitingRefreshDom === false || this.v_percent === null || this.h_percent === null)
		{
			return;
		}
		this.isWaitingRefreshDom = false;
		this.container.style.perspectiveOrigin = this.h_percent + "% " + this.v_percent + "%";
	};
}());