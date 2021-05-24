(function()
{
	"use strict";

	CVM.SlideToAction = function(target, slide, start, action)
	{
		this.target = target;
        this.slide = slide;
        this.start = start;
		this.action = action;

		this.init();
	};

	CVM.SlideToAction.prototype.init = function()
	{	
        this.slide.addEventListener('input', this.updateValue.bind(this));
        this.slide.addEventListener('change', this.updateValue.bind(this));
        this.slide.value = this.start;
        this.updateValue();
	};

	CVM.SlideToAction.prototype.updateValue = function(e)
	{
        this.target.setAttribute("style", this.action + ":" + this.slide.value + "%");
	};
}());