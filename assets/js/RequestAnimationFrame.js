(function()
{
	"use strict";

	CVM.RequestAnimationFrame = function(callback, maxFps)
	{
        this.callback = callback;
        this.maxFps = maxFps;
        this.lastTimestamp = null;

		this.init();
	};

	CVM.RequestAnimationFrame.prototype.init = function()
	{	
        window.requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
        requestAnimationFrame(this.mainLoop.bind(this));
	};

    CVM.RequestAnimationFrame.prototype.mainLoop = function(timestamp)
	{	
        var progress = timestamp - this.lastTimestamp;
        if (progress >= 1000 / this.maxFps)
        {
            this.callback();
            this.lastTimestamp = timestamp;
        }
        requestAnimationFrame(this.mainLoop.bind(this));
	};
}());