(function()
{
	"use strict";

	CVM.AnimeWhenVisible = function(scrollContainer, container, elem, cssClassname, ratioToLaunch, scrollUp, scrollDown, isResetAnimation)
	{
        this.scrollContainer = scrollContainer;
        this.container = container;
        this.elem = elem;
        this.cssClassname = cssClassname;
        this.ratioToLaunch = ratioToLaunch;
        this.scrollUp = scrollUp;
        this.scrollDown = scrollDown;
        this.isResetAnimation = isResetAnimation;
        this.event;

		this.init();
	};

	CVM.AnimeWhenVisible.prototype.init = function()
	{	
        this.elem.classList.add(this.cssClassname + "-init");
        this.elem.classList.add(this.cssClassname);
        this.event = {elem: this.scrollContainer, listener: 'scroll', method: this.launchAnimation.bind(this)};
        this.event.elem.addEventListener(this.event.listener, this.event.method);

        setTimeout(function() {
            this.event.elem.addEventListener(this.event.listener, this.event.method);
            this.launchAnimation();
        }.bind(this), 1);
	};

	CVM.AnimeWhenVisible.prototype.launchAnimation = function()
	{
        var screenHeight = window.innerHeight || document.documentElement.clientHeight;
        var partOfHeight = Math.round(screenHeight * this.ratioToLaunch);
        var containerInfos = this.container.getBoundingClientRect();

        // Reset animation if element is offscreen.
		if (this.isResetAnimation && (containerInfos.top + containerInfos.height < 10 || containerInfos.top > screenHeight - 10))
		{
            this.elem.classList.add(this.cssClassname);
            return;
		}

        var checkScrollUp = this.scrollUp ? containerInfos.top < screenHeight - partOfHeight : true; 
        var checkScrollDown = this.scrollDown ? containerInfos.top + containerInfos.height > partOfHeight : true;

        if (checkScrollUp && checkScrollDown)
        {
            this.elem.classList.remove(this.cssClassname);
        }
    };
}());