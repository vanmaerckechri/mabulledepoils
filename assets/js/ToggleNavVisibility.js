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
        if (this.lastScrollValue > window.scrollY || this.lastScrollValue === null)
        {
            this.container.classList.remove("header-hide");
        }
        else
        {
            this.container.classList.add("header-hide");
        }
        this.lastScrollValue = window.scrollY;
	};
}());