(function()
{
	"use strict";

	CVM.Parallax = function(container, action, axesValue)
	{
		this.container = container;
		this.action = action
		this.axesValue = axesValue ? axesValue : {};

		this.h_max = 5;
		this.v_max = 10;
		this.h_percent = null;
		this.v_percent = null;
		this.isWaitingRefreshDom = false;
		this.isMouseOnContainer = false;

		this.init();
	};

	CVM.Parallax.prototype.init = function()
	{	
		if (this.action == "scroll")
		{
			window.addEventListener('scroll', this.checkForUpdate.bind(this, this.updateWithScroll.bind(this)));
		}
		else
		{
			window.addEventListener('mousemove', this.checkForUpdate.bind(this, this.updateWithMouse.bind(this)));
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

		var h_percent = typeof this.axesValue.h_fixed == "number" ? this.axesValue.h_fixed :  Math.round(this.axesValue.h_origin - (this.axesValue.h_focus * (containerInfos.left / containerInfos.width)));
		var v_percent = typeof this.axesValue.v_fixed == "number" ? this.axesValue.v_fixed : Math.round(this.axesValue.v_origin - (this.axesValue.v_focus * (containerInfos.top / containerInfos.height)));

		this.updateValues(h_percent, v_percent);
	};

	CVM.Parallax.prototype.updateWithMouse = function(containerInfos, e)
	{
		var x = e.clientX;
		var y = e.clientY;
		var h_percent = typeof this.axesValue.h_fixed == "number" ? this.axesValue.h_fixed : this.getHorizontalPercent(containerInfos, x);
		var v_percent = typeof this.axesValue.v_fixed == "number" ? this.axesValue.v_fixed : this.getVerticalPercent(containerInfos, y);

		this.updateValues(h_percent, v_percent);
	};

	CVM.Parallax.prototype.getHorizontalPercent = function(containerInfos, x)
	{
		var center = Math.round(containerInfos.width / 2);
		var length = x - center;
		return this.axesValue.h_origin + (-1 * Math.round(this.h_max * (length / center)));
	};

	CVM.Parallax.prototype.getVerticalPercent = function(containerInfos, y)
	{
		var center = Math.round(containerInfos.height / 2);
		var length = y - center;
		return this.axesValue.v_origin + (-1 * Math.round(this.v_max * (length / center)));
	};

	CVM.Parallax.prototype.updateValues = function(h_percent, v_percent)
	{
		if (h_percent != this.h_percent || v_percent != this.v_percent)
		{
			this.v_percent = v_percent;
			this.h_percent = h_percent;
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