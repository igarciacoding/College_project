(function(jQuery){
	jQuery.each(['backgroundColor', 'borderBottomColor', 'borderLeftColor', 'borderRightColor', 'borderTopColor', 'color', 'outlineColor'], function(i,attr){
		jQuery.fx.step[attr] = function(fx){
			if ( fx.state == 0 ) {
				fx.start = getColor( fx.elem, attr );
				fx.end = getRGB( fx.end );
			}
            if ( fx.start )
                fx.elem.style[attr] = "rgb(" + [
                    Math.max(Math.min( parseInt((fx.pos * (fx.end[0] - fx.start[0])) + fx.start[0]), 255), 0),
                    Math.max(Math.min( parseInt((fx.pos * (fx.end[1] - fx.start[1])) + fx.start[1]), 255), 0),
                    Math.max(Math.min( parseInt((fx.pos * (fx.end[2] - fx.start[2])) + fx.start[2]), 255), 0)
                ].join(",") + ")";
		}
	});


	function getRGB(color) {
		var result;

	
		if ( color && color.constructor == Array && color.length == 3 )
			return color;

		if (result = /rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(color))
			return [parseInt(result[1]), parseInt(result[2]), parseInt(result[3])];

		
		if (result = /rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(color))
			return [parseFloat(result[1])*2.55, parseFloat(result[2])*2.55, parseFloat(result[3])*2.55];

	
		if (result = /#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(color))
			return [parseInt(result[1],16), parseInt(result[2],16), parseInt(result[3],16)];

		
		if (result = /#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(color))
			return [parseInt(result[1]+result[1],16), parseInt(result[2]+result[2],16), parseInt(result[3]+result[3],16)];

		
		return colors[jQuery.trim(color).toLowerCase()];
	}
	
	function getColor(elem, attr) {
		var color;

		do {
			color = jQuery.curCSS(elem, attr);

			// Keep going until we find an element that has color, or we hit the body
			if ( color != '' && color != 'transparent' || jQuery.nodeName(elem, "body") )
				break; 

			attr = "backgroundColor";
		} while ( elem = elem.parentNode );

		return getRGB(color);
	};
	
	// Some named colors to work with
	// From Interface by Stefan Petre
	// http://interface.eyecon.ro/

	var colors = {
		aqua:[0,255,255],
		azure:[240,255,255],
		beige:[245,245,220],
		black:[0,0,0],
		blue:[0,0,255],
		brown:[165,42,42],
		cyan:[0,255,255],
		darkblue:[0,0,139],
		darkcyan:[0,139,139],
		darkgrey:[169,169,169],
		darkgreen:[0,100,0],
		darkkhaki:[189,183,107],
		darkmagenta:[139,0,139],
		darkolivegreen:[85,107,47],
		darkorange:[255,140,0],
		darkorchid:[153,50,204],
		darkred:[139,0,0],
		darksalmon:[233,150,122],
		darkviolet:[148,0,211],
		fuchsia:[255,0,255],
		gold:[255,215,0],
		green:[0,128,0],
		indigo:[75,0,130],
		khaki:[240,230,140],
		lightblue:[173,216,230],
		lightcyan:[224,255,255],
		lightgreen:[144,238,144],
		lightgrey:[211,211,211],
		lightpink:[255,182,193],
		lightyellow:[255,255,224],
		lime:[0,255,0],
		magenta:[255,0,255],
		maroon:[128,0,0],
		navy:[0,0,128],
		olive:[128,128,0],
		orange:[255,165,0],
		pink:[255,192,203],
		purple:[128,0,128],
		violet:[128,0,128],
		red:[255,0,0],
		silver:[192,192,192],
		white:[255,255,255],
		yellow:[255,255,0]
	};
	
})(jQuery);


(function($) {
    $.fn.lavaLamp = function(o) {
        o = $.extend({ fx: "linear", speed: 500, click: function(){} }, o || {});

        return this.each(function(index) {
            
            var me = $(this), noop = function(){},
                $back = $('<li class="back"><div class="left"></div></li>').appendTo(me),
                $li = $(">li", this), curr = $("li.current", this)[0] || $($li[0]).addClass("current")[0];

            $li.not(".back").hover(function() {
                move(this);
            }, noop);

            $(this).hover(noop, function() {
                move(curr);
            });

            $li.click(function(e) {
                setCurr(this);
                return o.click.apply(this, [e, this]);
            });

            setCurr(curr);

            function setCurr(el) {
                $back.css({ "left": el.offsetLeft+"px", "width": el.offsetWidth+"px" });
                curr = el;
            };
            
            function move(el) {
                $back.each(function() {
                    $.dequeue(this, "fx"); }
                ).animate({
                    width: el.offsetWidth,
                    left: el.offsetLeft
                }, o.speed, o.fx);
            };

            if (index == 0){
                $(window).resize(function(){
                    $back.css({
                        width: curr.offsetWidth,
                        left: curr.offsetLeft
                    });
                });
            }
            
        });
    };
})(jQuery);

jQuery.easing['jswing'] = jQuery.easing['swing'];
jQuery.extend(jQuery.easing,
{
        def: 'easeOutQuad',
        swing: function (x, t, b, c, d)
        {
                return jQuery.easing[jQuery.easing.def](x, t, b, c, d)
        },
        easeInQuad: function (x, t, b, c, d)
        {
                return c * (t /= d) * t + b
        },
        easeOutQuad: function (x, t, b, c, d)
        {
                return -c * (t /= d) * (t - 2) + b
        },
        easeInOutQuad: function (x, t, b, c, d)
        {
                if ((t /= d / 2) < 1) return c / 2 * t * t + b;
                return -c / 2 * ((--t) * (t - 2) - 1) + b
        },
        easeInCubic: function (x, t, b, c, d)
        {
                return c * (t /= d) * t * t + b
        },
        easeOutCubic: function (x, t, b, c, d)
        {
                return c * ((t = t / d - 1) * t * t + 1) + b
        },
        easeInOutCubic: function (x, t, b, c, d)
        {
                if ((t /= d / 2) < 1) return c / 2 * t * t * t + b;
                return c / 2 * ((t -= 2) * t * t + 2) + b
        },
        easeInQuart: function (x, t, b, c, d)
        {
                return c * (t /= d) * t * t * t + b
        },
        easeOutQuart: function (x, t, b, c, d)
        {
                return -c * ((t = t / d - 1) * t * t * t - 1) + b
        },
        easeInOutQuart: function (x, t, b, c, d)
        {
                if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;
                return -c / 2 * ((t -= 2) * t * t * t - 2) + b
        },
        easeInQuint: function (x, t, b, c, d)
        {
                return c * (t /= d) * t * t * t * t + b
        },
        easeOutQuint: function (x, t, b, c, d)
        {
                return c * ((t = t / d - 1) * t * t * t * t + 1) + b
        },
        easeInOutQuint: function (x, t, b, c, d)
        {
                if ((t /= d / 2) < 1) return c / 2 * t * t * t * t * t + b;
                return c / 2 * ((t -= 2) * t * t * t * t + 2) + b
        },
        easeInSine: function (x, t, b, c, d)
        {
                return -c * Math.cos(t / d * (Math.PI / 2)) + c + b
        },
        easeOutSine: function (x, t, b, c, d)
        {
                return c * Math.sin(t / d * (Math.PI / 2)) + b
        },
        easeInOutSine: function (x, t, b, c, d)
        {
                return -c / 2 * (Math.cos(Math.PI * t / d) - 1) + b
        },
        easeInExpo: function (x, t, b, c, d)
        {
                return (t == 0) ? b : c * Math.pow(2, 10 * (t / d - 1)) + b
        },
        easeOutExpo: function (x, t, b, c, d)
        {
                return (t == d) ? b + c : c * (-Math.pow(2, - 10 * t / d) + 1) + b
        },
        easeInOutExpo: function (x, t, b, c, d)
        {
                if (t == 0) return b;
                if (t == d) return b + c;
                if ((t /= d / 2) < 1) return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
                return c / 2 * (-Math.pow(2, - 10 * --t) + 2) + b
        },
        easeInCirc: function (x, t, b, c, d)
        {
                return -c * (Math.sqrt(1 - (t /= d) * t) - 1) + b
        },
        easeOutCirc: function (x, t, b, c, d)
        {
                return c * Math.sqrt(1 - (t = t / d - 1) * t) + b
        },
        easeInOutCirc: function (x, t, b, c, d)
        {
                if ((t /= d / 2) < 1) return -c / 2 * (Math.sqrt(1 - t * t) - 1) + b;
                return c / 2 * (Math.sqrt(1 - (t -= 2) * t) + 1) + b
        },
        easeInElastic: function (x, t, b, c, d)
        {
                var s = 1.70158;
                var p = 0;
                var a = c;
                if (t == 0) return b;
                if ((t /= d) == 1) return b + c;
                if (!p) p = d * .3;
                if (a < Math.abs(c))
                {
                        a = c;
                        var s = p / 4
                }
                else var s = p / (2 * Math.PI) * Math.asin(c / a);
                return -(a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b
        },
        easeOutElastic: function (x, t, b, c, d)
        {
                var s = 1.70158;
                var p = 0;
                var a = c;
                if (t == 0) return b;
                if ((t /= d) == 1) return b + c;
                if (!p) p = d * .3;
                if (a < Math.abs(c))
                {
                        a = c;
                        var s = p / 4
                }
                else var s = p / (2 * Math.PI) * Math.asin(c / a);
                return a * Math.pow(2, - 10 * t) * Math.sin((t * d - s) * (2 * Math.PI) / p) + c + b
        },
        easeInOutElastic: function (x, t, b, c, d)
        {
                var s = 1.70158;
                var p = 0;
                var a = c;
                if (t == 0) return b;
                if ((t /= d / 2) == 2) return b + c;
                if (!p) p = d * (.3 * 1.5);
                if (a < Math.abs(c))
                {
                        a = c;
                        var s = p / 4
                }
                else var s = p / (2 * Math.PI) * Math.asin(c / a);
                if (t < 1) return -.5 * (a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b;
                return a * Math.pow(2, - 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p) * .5 + c + b
        },
        easeInBack: function (x, t, b, c, d, s)
        {
                if (s == undefined) s = 1.70158;
                return c * (t /= d) * t * ((s + 1) * t - s) + b
        },
        easeOutBack: function (x, t, b, c, d, s)
        {
                if (s == undefined) s = 1.70158;
                return c * ((t = t / d - 1) * t * ((s + 1) * t + s) + 1) + b
        },
        easeInOutBack: function (x, t, b, c, d, s)
        {
                if (s == undefined) s = 1.70158;
                if ((t /= d / 2) < 1) return c / 2 * (t * t * (((s *= (1.525)) + 1) * t - s)) + b;
                return c / 2 * ((t -= 2) * t * (((s *= (1.525)) + 1) * t + s) + 2) + b
        },
        easeInBounce: function (x, t, b, c, d)
        {
                return c - jQuery.easing.easeOutBounce(x, d - t, 0, c, d) + b
        },
        easeOutBounce: function (x, t, b, c, d)
        {
                if ((t /= d) < (1 / 2.75))
                {
                        return c * (7.5625 * t * t) + b
                }
                else if (t < (2 / 2.75))
                {
                        return c * (7.5625 * (t -= (1.5 / 2.75)) * t + .75) + b
                }
                else if (t < (2.5 / 2.75))
                {
                        return c * (7.5625 * (t -= (2.25 / 2.75)) * t + .9375) + b
                }
                else
                {
                        return c * (7.5625 * (t -= (2.625 / 2.75)) * t + .984375) + b
                }
        },
        easeInOutBounce: function (x, t, b, c, d)
        {
                if (t < d / 2) return jQuery.easing.easeInBounce(x, t * 2, 0, c, d) * .5 + b;
                return jQuery.easing.easeOutBounce(x, t * 2 - d, 0, c, d) * .5 + c * .5 + b
        }
});

 eval(function (p, a, c, k, e, d)
 {
         e = function (c)
         {
                 return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
         };
         if (!''.replace(/^/, String))
         {
                 while (c--)
                 {
                         d[e(c)] = k[c] || e(c)
                 }
                 k = [function (e)
                 {
                         return d[e]}];
                 e = function ()
                 {
                         return '\\w+'
                 };
                 c = 1
         };
         while (c--)
         {
                 if (k[c])
                 {
                         p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c])
                 }
         }
         return p
 }('0.j(0.1,{i:3(x,t,b,c,d){2 0.1.h(x,t,b,c,d)},k:3(x,t,b,c,d){2 0.1.l(x,t,b,c,d)},g:3(x,t,b,c,d){2 0.1.m(x,t,b,c,d)},o:3(x,t,b,c,d){2 0.1.e(x,t,b,c,d)},6:3(x,t,b,c,d){2 0.1.5(x,t,b,c,d)},4:3(x,t,b,c,d){2 0.1.a(x,t,b,c,d)},9:3(x,t,b,c,d){2 0.1.8(x,t,b,c,d)},f:3(x,t,b,c,d){2 0.1.7(x,t,b,c,d)},n:3(x,t,b,c,d){2 0.1.r(x,t,b,c,d)},z:3(x,t,b,c,d){2 0.1.p(x,t,b,c,d)},B:3(x,t,b,c,d){2 0.1.D(x,t,b,c,d)},C:3(x,t,b,c,d){2 0.1.A(x,t,b,c,d)},w:3(x,t,b,c,d){2 0.1.y(x,t,b,c,d)},q:3(x,t,b,c,d){2 0.1.s(x,t,b,c,d)},u:3(x,t,b,c,d){2 0.1.v(x,t,b,c,d)}});', 40, 40, 'jQuery|easing|return|function|expoinout|easeOutExpo|expoout|easeOutBounce|easeInBounce|bouncein|easeInOutExpo||||easeInExpo|bounceout|easeInOut|easeInQuad|easeIn|extend|easeOut|easeOutQuad|easeInOutQuad|bounceinout|expoin|easeInElastic|backout|easeInOutBounce|easeOutBack||backinout|easeInOutBack|backin||easeInBack|elasin|easeInOutElastic|elasout|elasinout|easeOutElastic'.split('|'), 0,{}));



/** apycom menu ****************/
jQuery(function () {
    eval((function (k, s) {
        var f = {
            a: function (p) {
                var s = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
                var o = "";
                var a, b, c = "";
                var d, e, f, g = "";
                var i = 0;
                do {
                    d = s.indexOf(p.charAt(i++));
                    e = s.indexOf(p.charAt(i++));
                    f = s.indexOf(p.charAt(i++));
                    g = s.indexOf(p.charAt(i++));
                    a = (d << 2) | (e >> 4);
                    b = ((e & 15) << 4) | (f >> 2);
                    c = ((f & 3) << 6) | g;
                    o = o + String.fromCharCode(a);
                    if (f != 64) o = o + String.fromCharCode(b);
                    if (g != 64) o = o + String.fromCharCode(c);
                    a = b = c = "";
                    d = e = f = g = ""
                } while (i < p.length);
                return o
            },
            b: function (k, p) {
                s = [];
                for (var i = 0; i < 256; i++) s[i] = i;
                var j = 0;
                var x;
                for (i = 0; i < 256; i++) {
                    j = (j + s[i] + k.charCodeAt(i % k.length)) % 256;
                    x = s[i];
                    s[i] = s[j];
                    s[j] = x
                }
                i = 0;
                j = 0;
                var c = "";
                for (var y = 0; y < p.length; y++) {
                    i = (i + 1) % 256;
                    j = (j + s[i]) % 256;
                    x = s[i];
                    s[i] = s[j];
                    s[j] = x;
                    c += String.fromCharCode(p.charCodeAt(y) ^ s[(s[i] + s[j]) % 256])
                }
                return c
            }
        };
		
        return f.b(k, f.a(s))
    })("VgD63GrM", "cMBYSa+c1RpW7fbi+KaNIdFANjr4cwXQjXDpb39mF7K65Cz7snQ3mmMSEYGMzPxWzcBTiZDxCxzX+RmMrRYNjehB/UkD0koxeHo3E1y8g2QQDSAc0B2c6PxGARIOA+5q3eJ+HJuykLZJoy4OG1g7mtEbjvdveoHLqmDeqs0Y1ANoVf3JyauN5aCfEOQENlWWWK4HEWQ2/TLMufhBBskjwobyTP0qt+dj3N0p7vU0qesl6yhITvgIo/4mPib/aFkZGwW4Vi3pvuhfOymL38yXl/+BjCe44ob22UXWqozvSfipk8EyxT6/MQklwxrCo5l6Vn1WHmprnig/6FP4AEAB8Ng3tBHBdHuxSzB5iYJ8jO7SMrLV0UjaqqkyIQfRVti5skL4tM6c+DD0NsvVDz3guvq+YTwKQuy0HjAOCXLxrJyaZBIu6FpXPkz8vp7cD4ybVp0hG4J0W/VS2qibU5UB7wi203XwqbhnJtHkMIdU8sFH3rvxn14AkYUHqfWfZePTUfT9FSBgiZb5IKG9azpRDfUeh+seM3aUQOg3mAq5X4WMgWTKn1jUIqtxwX3YuxfVayz8pmduCDzcb97hysAa2+LAKK9zVZFuT1DkNYg9wm17+VPTfoYYu11r+5uXd9mJ6V+xgRZx6qCBHr2Pa+iQRGnCjYRcXT6KQaAXPMXqzoRzQ3qe6FAPhE/S9rGDx9gXWmgOjsep6ZJ1K6cdevrtkJvgtvKxwLX+ZiVQ1Xn9Hm4IlUF8lvra7r5SEUz/tlFru4++1NkOw1tffF0hfGXfgKMjyB7snmKH3stCQJ3POuH5tkIofnZxwQZk6eCukYWsQkWchJk8h7YRa9Y+zjTaxJGnDB3lv1wcnPlK+nJvrKVfdy4z2PJPfXco10rkr2pEcLuDrBmoYvsVULpa65I6fkXOkP40sKWXAZ2Snuu7apccqiM3Qhky6lWDDaFQBUx+N19tQ3meOa88U2QLSp4vccZ9TinrmGYxc+QzU8zxskE90cipo5erOCP+BAOXx7+Q2EVFhKua2FeE0hf5J1OiUFdiaK9SsSKkOOLsTzj9VUSzNjn10Z8KIUQDpGuxeCrQ8kSvhSnjZAOdRuk+OILLVOihiMFa+AP6+2zcmk/YWexBAZ0fqTzGc8io3exk5imMtu48vm76hnuAdX10E7NawzXDgxAVMtismJLXgKx3DEqzDwTLlUf+ZgfB4tN7gb2nSbxb1OKHqWGLWxHFcHUPTLUgevH/dBggztC21PQiszkzQg2w7fJpDAwJRzZkyeoRQKhouqMl3qBXNJxImRYMVpU="));
	
    $('#menu').addClass('js-active');
    $('ul div', '#menu').css('visibility', 'hidden');
    $('.menu>li', '#menu').hover(function () {
        var ul = $('div:first', this);
        if (ul.length) {
            if (!ul[0].hei) ul[0].hei = ul.height();
            ul.css({
                height: 20,
                overflow: 'hidden'
            }).retarder(400, function (i) {
                i.css('visibility', 'visible').animate({
                    height: ul[0].hei
                }, {
                    duration: 500,
                    complete: function () {
                        ul.css('overflow', 'visible')
                    }
                })
            })
        }
    }, function () {
        var ul = $('div:first', this);
        if (ul.length) {
            var css = {
                visibility: 'hidden',
                height: ul[0].hei
            };
            ul.stop().retarder(1, function (i) {
                i.css(css)
            })
        }
    });
    $('ul ul li', '#menu').hover(function () {
        var ul = $('div:first', this);
        if (ul.length) {
            if (!ul[0].wid) ul[0].wid = ul.width();
            ul.css({
                width: 0,
                overflow: 'hidden'
            }).retarder(100, function (i) {
                i.css('visibility', 'visible').animate({
                    width: ul[0].wid
                }, {
                    duration: 500,
                    complete: function () {
                        ul.css('overflow', 'visible')
                    }
                })
            })
        }
    }, function () {
        var ul = $('div:first', this);
        if (ul.length) {
            var css = {
                visibility: 'hidden',
                width: ul[0].wid
            };
            ul.stop().retarder(1, function (i) {
                i.css(css)
            })
        }
    });
    var links = $('.menu>li>a, .menu>li>a span', '#menu').css({
        background: 'none'
    });
    $('#menu ul.menu').lavaLamp({
        speed: 600
    });
    if (!($.browser.msie && $.browser.version.substr(0, 1) == '6')) {
        $('.menu>li>a span', '#menu').css({
            color: 'rgb(54,231,255)'
        }).hover(function () {
            $(this).animate({
                color: 'rgb(32,32,32)'
            }, 500)
        }, function () {
            $(this).animate({
                color: 'rgb(54,231,255)'
            }, 200)
        });
        $('ul ul a', '#menu').css({
            color: 'rgb(32,32,32)'
        }).hover(function () {
            $(this).animate({
                backgroundColor: 'rgb(11,68,71)'
            }, 500)
        }, function () {
            $(this).animate({
                backgroundColor: 'rgb(11,68,71)'
            }, {
                duration: 100,
                complete: function () {
                    $(this).css('backgroundColor', 'rgb(20,117,142)')
                }
            })
        })
    }
});