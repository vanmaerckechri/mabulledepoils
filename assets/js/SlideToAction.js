(function()
{
	"use strict";

	CVM.SlideToAction = function(target, slide, startValue, endValue, action, isAutoRefresh)
	{
		this.target = target;
        this.slide = slide;
		this.startValue = startValue;
		this.currentValue = startValue;
		this.endValue = endValue;
		this.action = action;
		this.isAutoRefresh = typeof isAutoRefresh != "undefined" ? isAutoRefresh : true;
		this.demoInterval = null;
		this.isDemoEnable = true;

		this.init();
	};

	CVM.SlideToAction.prototype.init = function()
	{	
        this.slide.addEventListener('input', this.updateValue.bind(this, false));
        this.slide.addEventListener('change', this.updateValue.bind(this, false));
        this.slide.value = this.startValue;
        this.updateValue(true);
	};

	CVM.SlideToAction.prototype.updateValue = function(isForceRefresh, e)
	{
		this.currentValue = this.slide.value;
		if (this.isAutoRefresh || isForceRefresh)
		{
			this.refreshDom();
		}
	};

	CVM.SlideToAction.prototype.refreshDom = function()
	{
        this.target.setAttribute("style", this.action + ":" + this.currentValue + "%");
	};

	CVM.SlideToAction.prototype.startDemo = function(isResetDemo)
	{
		// réactiver la démo.
		if (isResetDemo === true)
		{
			this.isDemoEnable = isResetDemo;
			this.stopDemo();
			return;
		}
		// ne pas continuer si la démo est occupée d'être jouée ou si elle désactivée.
		if (this.demoInterval !== null || this.isDemoEnable === false)
		{
			return;
		}
		// désactiver la démo après avoir été lancée.
		this.isDemoEnable = false;
		this.slide.classList.add("disable");

		this.slide.value = this.startValue;
		var direction = -1;
		this.demoInterval = setInterval(function() 
		{
			// changer de direction lorsque le bouton du slider arrive à l'une des extrémités.
			direction = this.slide.value == 0 ? 1 : direction;
			direction = this.slide.value == 100 ? -1 : direction;
			this.slide.value = parseInt(this.currentValue, 10) + direction;
			this.updateValue(true);

			// terminer la démo lorsque le bouton du slider revient à son point d'origine avec le retour.
			if (direction == -1 && this.slide.value == this.endValue)
			{
				this.stopDemo();
			}
        }.bind(this), 10);
	};

	CVM.SlideToAction.prototype.stopDemo = function()
	{
		clearInterval(this.demoInterval);				
		this.demoInterval = null;
		this.slide.value = this.endValue;
		this.updateValue(true);
		this.slide.classList.remove("disable");
	};
}());