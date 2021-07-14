(function()
{
	"use strict";

	CVM.Parallax = function(elem, options)
	{
		this.elem = elem;
		this.options = options ? options : {};

		this.isWaitingUpdate = false;

		this.elemInfos;
		this.screenHeight
		this.screenHeightHalf; 
		this.screenWidthHalf; 
		this.mouseX;
		this.mouseY;
		this.h_percent;
		this.v_percent;

		this.init();
	};

	CVM.Parallax.prototype.init = function()
	{	
		this.elemInfos = this.elem.getBoundingClientRect();

		this.options.isMouse = typeof this.options.isMouse == "undefined" ? false : this.options.isMouse;
		this.options.h_min = typeof this.options.h_min == "undefined" ? -Infinity : this.options.h_min;
		this.options.h_max = typeof this.options.h_max == "undefined" ? Infinity : this.options.h_max;
		this.options.v_min = typeof this.options.v_min == "undefined" ? -Infinity : this.options.v_min;
		this.options.v_max = typeof this.options.v_max == "undefined" ? Infinity : this.options.v_max;
		this.options.h_inverse = !this.options.h_inverse ? 1 : -1;
		this.options.v_inverse = !this.options.v_inverse ? 1 : -1;

		window.addEventListener('resize', this.onResize.bind(this));
		this.onResize();

		// parallax basé sur le scrolling.
		if (this.options.isMouse === false)
		{
			window.addEventListener('scroll', this.initUpdate.bind(this));
		}
		// parallax basé sur la position de la souris.
		else
		{
			window.addEventListener('mousemove', this.initUpdate.bind(this));
		}
	};

	
	CVM.Parallax.prototype.onResize = function()
	{
		this.screenHeight = window.innerHeight || document.documentElement.clientHeight;
		this.screenWidthHalf = (window.innerWidth || document.documentElement.clientWidth) / 2; 
		this.screenHeightHalf = this.screenHeight / 2;
	};

	CVM.Parallax.prototype.initUpdate = function(e)
	{
		// ne pas pratiquer la mise à jour si l'élément de référence est en dehors de l'écran.
		this.elemInfos = this.elem.getBoundingClientRect();
		if (this.elemInfos.top >= this.screenHeight || this.elemInfos.top + this.elemInfos.height <= 0)
		{
			return false;
		}
		if (this.options.isMouse === true)
		{
			this.mouseX = e.clientX;
			this.mouseY = e.clientY;
		}
		this.isWaitingUpdate = true;
	};

	CVM.Parallax.prototype.update = function()
	{
		if (this.isWaitingUpdate === false)
		{
			return;
		}

		if (this.options.isMouse === true)
		{
			var percents = this.calculatePercents(this.mouseX, this.mouseY);
			this.refreshDom(
				this.options.h_fixed ? this.options.h_fixed : percents.x,
				this.options.v_fixed ? this.options.v_fixed : percents.y
			);
		}
		else
		{
			this.refreshDom(
				this.options.h_fixed ? this.options.h_fixed : Math.round(this.options.h_origin + ((this.options.h_max - this.options.h_min) * (-1 / this.elemInfos.width) * this.elemInfos.left)),
				this.options.v_fixed ? this.options.v_fixed : Math.round(this.options.v_origin + ((this.options.v_max - this.options.v_min) * (-1 / this.elemInfos.height) * this.elemInfos.top))
			);
		}
	};
	
	CVM.Parallax.prototype.calculatePercents = function(x, y)
	{
		var diffX = this.screenWidthHalf - x;
		var diffY = this.screenHeightHalf - y;

		var ratioX = diffX > 0 ? this.options.h_max - this.options.h_origin : this.options.h_origin - this.options.h_min;
		var ratioY = diffY > 0 ? this.options.v_max - this.options.v_origin : this.options.v_origin - this.options.v_min;

		return {
			x: Math.round(this.options.v_origin + (ratioX * this.options.h_inverse * (diffX / this.screenWidthHalf))),
			y: Math.round(this.options.v_origin + (ratioY * this.options.v_inverse * (diffY / this.screenHeightHalf)))
		};
	};

	CVM.Parallax.prototype.refreshDom = function(h_percent, v_percent)
	{
		// effectuer la mise à jour des valeur uniquement si elles ont changé.
		if (h_percent != this.h_percent || v_percent != this.v_percent)
		{
			var list = [
				["h", h_percent],
				["v", v_percent]
			];
			for (var i = list.length - 1; i >= 0; i--)
			{
				// utiliser la valeur min. si la valeur actuelle lui est inf.
				this[list[i][0] + "_percent"] = Math.max(this.options[list[i][0] + "_min"], list[i][1]);
				// utiliser la valeur max. si la valeur actuelle lui est sup.
				this[list[i][0] + "_percent"] = Math.min(this.options[list[i][0] + "_max"], list[i][1]);
			}
			this.elem.style.perspectiveOrigin = this.h_percent + "% " + this.v_percent + "%";
		}
		this.isWaitingUpdate = false;
	};
}());