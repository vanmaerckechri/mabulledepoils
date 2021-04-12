(function()
{
	"use strict";

	CVM.ToggleNavVisibility = function(container)
	{
		this.container = container;

		this.lastScrollValue = null;

		this.init();
	};

	CVM.ToggleNavVisibility.prototype.init = function()
	{	
        window.addEventListener('scroll', this.toggleVisibility.bind(this));
	};

    CVM.ToggleNavVisibility.prototype.toggleVisibility = function()
	{	
		if (this.lastScrollValue == document.documentElement.scrollTop || document.documentElement.scrollTop < 0)
		{
			return;
		}

		// scroll up
		if (this.lastScrollValue > document.documentElement.scrollTop || this.lastScrollValue === null)
		{
			this.container.classList.remove("header-hide");
		}
		// scoll down
		else
		{
			this.container.classList.add("header-hide");
		}
		this.lastScrollValue = document.documentElement.scrollTop;
	};
}());