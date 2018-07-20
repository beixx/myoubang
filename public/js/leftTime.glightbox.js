(function(y,g){Date.prototype.format=function(a){var d={"M+":this.getMonth()+1,"d+":this.getDate(),"h+":this.getHours(),"m+":this.getMinutes(),"s+":this.getSeconds(),"q+":Math.floor((this.getMonth()+3)/3),S:this.getMilliseconds()};/(y+)/.test(a)&&(a=a.replace(RegExp.$1,(this.getFullYear()+"").substr(4-RegExp.$1.length)));for(var c in d)(new RegExp("("+c+")")).test(a)&&(a=a.replace(RegExp.$1,1==RegExp.$1.length?d[c]:("00"+d[c]).substr((""+d[c]).length)));return a};g.leftTime=function(a,d,c){function w(a){return-1!=
a.indexOf("-")||-1!=a.indexOf("/")?!0:!1}function g(a){return/^(20|21|22|23|[0-1]\d):[0-5]\d$/.test(y.trim(a))?!0:!1}function r(a){10>a&&c&&(a="0"+a);return a}function z(){if("string"===typeof a||"number"===typeof a){var b=(new Date).getTime(),c;"string"===typeof a||12<=a.toString().length?(a="string"===typeof a&&1==w(a)?a.replace(/-/g,"/"):a,c=(new Date(a)).getTime(),b=c-b):(c=a-A.count,b=1E3*c,A.count++);0<b?(h=Math.floor(b/1E3/60/60/24),k=Math.floor(b/1E3/60/60%24),l=Math.floor(b/1E3/60%60),m=
Math.floor(b/1E3%60),n=!0):(window.clearInterval(e),m=l=k=h=0,n=!1)}else"object"===typeof a&&(b=(new Date).getTime()+(0<t?-1*t:Math.abs(t)),c=0,u<f?(c=f,v=1):u>=f&&u<p?(c=p,v=2):u>=p&&(v=3),b=c-b,0<b?(h=Math.floor(b/1E3/60/60/24),k=Math.floor(b/1E3/60/60%24),l=Math.floor(b/1E3/60%60),m=Math.floor(b/1E3%60),n=!0):(window.clearInterval(e),m=l=k=h=0,n=!1));b={d:r(h),h:r(k),m:r(l),s:r(m)};b.status=n;b.step=v;if(d&&"function"===typeof d)return d(b)}var e=this.timer;c||0==c||(c=!0);var A={count:0},h=0,
k=0,l=0,m=0,v=0,n=!1;if("object"===typeof a){a.init||1==a.init||(a.init=!1);var t=0,x,q=0;if(0!=a.setday||"0"!=a.setday)q=864E5*parseInt(a.setday);a.nowdate&&null!=a.nowdate&&void 0!=a.nowdate&&"undefined"!=a.nowdate?(t=(new Date).getTime()-parseInt(a.nowdate),x=new Date(a.nowdate)):(a.nowdate=(new Date).getTime(),x=new Date);var q=new Date(parseInt(a.nowdate)+q),f=0,p=0;0==a.startdate||"0"==a.startdate||a.init||("string"===typeof a.startdate?w(a.startdate)?f=(new Date(a.startdate.replace(/-/g,"/"))).getTime():
g(a.startdate)&&(f=(new Date(q.format("yyyy/MM/dd")+" "+a.startdate)).getTime()):"number"===typeof a.startdate&&(f=a.startdate));if(0!=a.enddate||"0"!=a.enddate)"string"===typeof a.enddate?w(a.enddate)?p=(new Date(a.enddate.replace(/-/g,"/"))).getTime():g(a.enddate)&&(p=(new Date(q.format("yyyy/MM/dd")+" "+a.enddate)).getTime()):"number"===typeof a.enddate&&(f=a.enddate);var u=x.getTime()}z();e=setInterval(z,1E3);if("undefined"!=e||null!=e||void 0!=e)return e};y.extend(g)})(jQuery||zepto,{});

!
function(e, t) {
	if ("function" == typeof define && define.amd) define("GLightbox", ["module"], t);
	else if ("undefined" != typeof exports) t(module);
	else {
		var i = {
			exports: {}
		};
		t(i), e.GLightbox = i.exports
	}
}(this, function(e) {
	"use strict";

	function t() {
		var e = {},
			i = !1,
			n = 0,
			s = arguments.length;
		"[object Boolean]" === Object.prototype.toString.call(arguments[0]) && (i = arguments[0], n++);
		for (var o = function(n) {
				for (var s in n) Object.prototype.hasOwnProperty.call(n, s) && (i && "[object Object]" === Object.prototype.toString.call(n[s]) ? e[s] = t(!0, e[s], n[s]) : e[s] = n[s])
			}; n < s; n++) {
			o(arguments[n])
		}
		return e
	}
	function i(e, t) {
		if ((N.isNode(e) || e === window || e === document) && (e = [e]), N.isArrayLike(e) || N.isObject(e) || (e = [e]), 0 != N.size(e)) if (N.isArrayLike(e) && !N.isObject(e)) for (var i = e.length, n = 0; n < i && !1 !== t.call(e[n], e[n], n, e); n++);
		else if (N.isObject(e)) for (var s in e) if (N.has(e, s) && !1 === t.call(e[s], e[s], s, e)) break
	}
	function n(e) {
		function t(e) {
			N.isFunction(o) && o.call(c, e, this), r && t.destroy()
		}
		var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
			s = n.onElement,
			o = n.withCallback,
			l = n.once,
			r = void 0 !== l && l,
			a = n.useCapture,
			d = void 0 !== a && a,
			c = arguments[2],
			u = s || [];
		return N.isString(u) && (u = document.querySelectorAll(u)), t.destroy = function() {
			i(u, function(i) {
				i.removeEventListener(e, t, d)
			})
		}, i(u, function(i) {
			i.addEventListener(e, t, d)
		}), t
	}
	function s(e, t) {
		l(e, t) || (e.classList ? e.classList.add(t) : e.className += " " + t)
	}
	function o(e, t) {
		var n = t.split(" ");
		n.length > 1 ? i(n, function(t) {
			o(e, t)
		}) : e.classList ? e.classList.remove(t) : e.className = e.className.replace(t, "")
	}
	function l(e, t) {
		return e.classList ? e.classList.contains(t) : new RegExp("(^| )" + t + "( |$)", "gi").test(e.className)
	}
	function r(e) {
		var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "",
			l = arguments.length > 2 && void 0 !== arguments[2] && arguments[2];
		if ("" === t) return !1;
		var r = t.split(" ");
		i(r, function(t) {
			s(e, "g" + t)
		});
		n(T, {
			onElement: e,
			once: !0,
			withCallback: function(e, t) {
				i(r, function(e) {
					o(t, "g" + e)
				}), N.isFunction(l) && l()
			}
		})
	}
	function a(e) {
		var t = document.createDocumentFragment(),
			i = document.createElement("div");
		for (i.innerHTML = e; i.firstChild;) t.appendChild(i.firstChild);
		return t
	}
	function d(e, t) {
		for (; e !== document.body;) if ((e = e.parentElement).matches(t)) return e
	}
	function c(e) {
		e.style.display = "block"
	}
	function u(e) {
		e.style.display = "none"
	}
	function h(e, i, n) {
		var o = this,
			l = i.source,
			r = "gvideo" + i.index,
			d = e.querySelector(".gslide-media"),
			c = i.href,
			u = location.protocol.replace(":", "");
		if ("file" == u && (u = "http"), "vimeo" == l) {
			var h = /vimeo.*\/(\d+)/i.exec(c),
				g = p(this.settings.vimeo.params),
				m = v(u + "://player.vimeo.com/video/" + h[1] + "?" + g, this.settings.videosWidth, this.settings.videosHeight, n);
			m.id = r, m.className = "vimeo-video gvideo", this.settings.autoplayVideos && (m.className += " wait-autoplay"), f(this.settings.vimeo.api, function() {
				var e = new Vimeo.Player(m);
				O[r] = e, d.appendChild(m)
			})
		}
		if ("youtube" == l) {
			var y = p(t(this.settings.youtube.params, {
				playerapiid: r
			})),
				b = v(u + "://www.youtube.com/embed/" +
				function(e) {
					var t = "";
					t = void 0 !== (e = e.replace(/(>|<)/gi, "").split(/(vi\/|v=|\/v\/|youtu\.be\/|\/embed\/)/))[2] ? (t = e[2].split(/[^0-9a-z_\-]/i))[0] : e;
					return t
				}(c) + "?" + y, this.settings.videosWidth, this.settings.videosHeight, n);
			b.id = r, b.className = "youtube-video gvideo", this.settings.autoplayVideos && (b.className += " wait-autoplay"), f(this.settings.youtube.api, function() {
				if (!N.isNil(YT) && YT.loaded) {
					var e = new YT.Player(b);
					O[r] = e
				} else q.push(b);
				d.appendChild(b)
			})
		}
		if ("local" == l) {
			var S = '<video id="' + r + '" ';
			S += 'style="background:#000; width: ' + this.settings.width + "px; height: " + this.settings.height + 'px;" ', S += 'preload="metadata" ', S += 'x-webkit-airplay="allow" ', S += 'webkit-playsinline="" ', S += "controls ", S += 'class="gvideo">';
			var w = {
				mp4: "",
				ogg: "",
				webm: ""
			};
			w[c.toLowerCase().split(".").pop()] = c;
			for (var x in w) if (w.hasOwnProperty(x)) {
				var k = w[x];
				i.hasOwnProperty(x) && (k = i[x]), "" !== k && (S += '<source src="' + k + '" type="video/' + x + '">')
			}
			var E = a(S += "</video>");
			d.appendChild(E);
			var C = document.getElementById(r);
			if (null !== this.settings.jwplayer && null !== this.settings.jwplayer.api) {
				this.settings.jwplayer;
				var A = this.settings.jwplayer.api;
				if (!A) return console.warn("Missing jwplayer api file"), N.isFunction(n) && n(), !1;
				f(A, function() {
					var e = t(o.settings.jwplayer.params, {
						width: o.settings.width + "px",
						height: o.settings.height + "px",
						file: c
					});
					jwplayer.key = o.settings.jwplayer.licenseKey;
					var i = jwplayer(r);
					i.setup(e), O[r] = i, i.on("ready", function() {
						s(C = d.querySelector(".jw-video"), "gvideo"), C.id = r, N.isFunction(n) && n()
					})
				})
			} else s(C, "html5-video"), O[r] = C, N.isFunction(n) && n()
		}
	}
	function v(e, t, i, n) {
		var o = document.createElement("iframe"),
			l = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		return o.className = "vimeo-video gvideo", o.src = e, o.style.height = x && l < 767 ? "" : i + "px", o.style.width = t + "px", o.setAttribute("allowFullScreen", ""), o.onload = function() {
			s(o, "iframe-ready"), N.isFunction(n) && n()
		}, o
	}
	function f(e, t) {
		if (N.isNil(e)) console.error("Inject videos api error");
		else {
			var i = document.querySelectorAll('script[src="' + e + '"]');
			if (N.isNil(i) || 0 == i.length) {
				var n = document.createElement("script");
				return n.type = "text/javascript", n.src = e, n.onload = function() {
					t()
				}, document.body.appendChild(n), !1
			}
			t()
		}
	}
	function g() {
		for (var e = 0; e < q.length; e++) {
			var t = q[e],
				i = new YT.Player(t);
			O[t.id] = i
		}
	}
	function p(e) {
		var t = "",
			n = 0;
		return i(e, function(e, i) {
			n > 0 && (t += "&amp;"), t += i + "=" + e, n += 1
		}), t
	}
	function m(e) {
		var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "";
		if ("" == t) return e.style.webkitTransform = "", e.style.MozTransform = "", e.style.msTransform = "", e.style.OTransform = "", e.style.transform = "", !1;
		e.style.webkitTransform = t, e.style.MozTransform = t, e.style.msTransform = t, e.style.OTransform = t, e.style.transform = t
	}
	function y(e) {
		var t = e.querySelector(".gslide-media"),
			i = e.querySelector(".gslide-description");
		s(t, "greset"), m(t, "translate3d(0, 0, 0)");
		n(A, {
			onElement: t,
			once: !0,
			withCallback: function(e, i) {
				o(t, "greset")
			}
		});
		t.style.opacity = "", i && (i.style.opacity = "")
	}
	function b(e, t) {
		var i = e.querySelector(".desc-more");
		if (!i) return !1;
		n("click", {
			onElement: i,
			withCallback: function(e, i) {
				e.preventDefault();
				var l = d(i, ".gslide-desc");
				if (!l) return !1;
				l.innerHTML = t.description, s(C, "gdesc-open");
				var r = n("click", {
					onElement: [C, d(l, ".gslide-description")],
					withCallback: function(e, i) {
						"a" !== e.target.nodeName.toLowerCase() && (o(C, "gdesc-open"), s(C, "gdesc-closed"), l.innerHTML = t.smallDescription, b(l, t), setTimeout(function() {
							o(C, "gdesc-closed")
						}, 400), r.destroy())
					}
				})
			}
		})
	}
	var S = function() {
			function e(e, t) {
				for (var i = 0; i < t.length; i++) {
					var n = t[i];
					n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
				}
			}
			return function(t, i, n) {
				return i && e(t.prototype, i), n && e(t, n), t
			}
		}(),
		w = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ?
	function(e) {
		return typeof e
	} : function(e) {
		return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
	}, x = navigator.userAgent.match(/(iPad)|(iPhone)|(iPod)|(Android)|(PlayBook)|(BB10)|(BlackBerry)|(Opera Mini)|(IEMobile)|(webOS)|(MeeGo)/i), k = null !== x || void 0 !== document.createTouch || "ontouchstart" in window || "onmsgesturechange" in window || navigator.msMaxTouchPoints, E = document.getElementsByTagName("html")[0], C = document.body, A = function() {
		var e = void 0,
			t = document.createElement("fakeelement"),
			i = {
				transition: "transitionend",
				OTransition: "oTransitionEnd",
				MozTransition: "transitionend",
				WebkitTransition: "webkitTransitionEnd"
			};
		for (e in i) if (void 0 !== t.style[e]) return i[e]
	}(), T = function() {
		var e = void 0,
			t = document.createElement("fakeelement"),
			i = {
				animation: "animationend",
				OAnimation: "oAnimationEnd",
				MozAnimation: "animationend",
				WebkitAnimation: "webkitAnimationEnd"
			};
		for (e in i) if (void 0 !== t.style[e]) return i[e]
	}(), q = [], O = {}, j = {
		selector: "glightbox",
		skin: "clean",
		closeButton: !0,
		startAt: 0,
		autoplayVideos: !0,
		descPosition: "bottom",
		width: 900,
		height: 506,
		videosWidth: 900,
		videosHeight: 506,
		beforeSlideChange: null,
		afterSlideChange: null,
		beforeSlideLoad: null,
		afterSlideLoad: null,
		onOpen: null,
		onClose: null,
		loopAtEnd: !0,
		jwplayer: {
			api: null,
			licenseKey: null,
			params: {
				width: "100%",
				aspectratio: "16:9",
				stretching: "uniform"
			}
		},
		vimeo: {
			api: "https://player.vimeo.com/api/player.js",
			params: {
				api: 1,
				title: 0,
				byline: 0,
				portrait: 0
			}
		},
		youtube: {
			api: "https://www.youtube.com/iframe_api",
			params: {
				enablejsapi: 1,
				showinfo: 0
			}
		},
		openEffect: "zoomIn",
		closeEffect: "zoomOut",
		slideEffect: "slide",
		moreText: "See more",
		slideHtml: "",
		lightboxHtml: "",
		cssEfects: {
			fade: { in : "fadeIn",
				out: "fadeOut"
			},
			zoom: { in : "zoomIn",
				out: "zoomOut"
			},
			slide: { in : "slideInRight",
				out: "slideOutLeft"
			},
			slide_back: { in : "slideInLeft",
				out: "slideOutRight"
			}
		}
	};
	j.slideHtml = '<div class="gslide">         <div class="gslide-inner-content">            <div class="ginner-container">               <div class="gslide-media">               </div>               <div class="gslide-description">                  <h4 class="gslide-title"></h4>                  <div class="gslide-desc"></div>               </div>            </div>         </div>       </div>';
	j.lightboxHtml = '<div id="glightbox-body" class="glightbox-container">            <div class="gloader visible"></div>            <div class="goverlay"></div>            <div class="gcontainer">               <div id="glightbox-slider" class="gslider"></div>               <a class="gnext"></a>               <a class="gprev"></a>               <a class="gclose"></a>            </div>   </div>';
	var N = {
		isFunction: function(e) {
			return "function" == typeof e
		},
		isString: function(e) {
			return "string" == typeof e
		},
		isNode: function(e) {
			return !(!e || !e.nodeType || 1 != e.nodeType)
		},
		isArray: function(e) {
			return Array.isArray(e)
		},
		isArrayLike: function(e) {
			return e && e.length && isFinite(e.length)
		},
		isObject: function(e) {
			return "object" === (void 0 === e ? "undefined" : w(e)) && null != e && !N.isFunction(e) && !N.isArray(e)
		},
		isNil: function(e) {
			return null == e
		},
		has: function(e, t) {
			return null !== e && hasOwnProperty.call(e, t)
		},
		size: function(e) {
			if (N.isObject(e)) {
				if (e.keys) return e.keys().length;
				var t = 0;
				for (var i in e) N.has(e, i) && t++;
				return t
			}
			return e.length
		},
		isNumber: function(e) {
			return !isNaN(parseFloat(e)) && isFinite(e)
		}
	},
		L = function() {
			var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null;
			if (null === e) return !1;
			var n = "",
				s = e.getAttribute("data-glightbox"),
				o = e.nodeName.toLowerCase();
			"a" === o && (n = e.href), "img" === o && (n = e.src);
			var l = {
				href: n,
				title: "",
				description: "",
				descPosition: "bottom",
				effect: ""
			},
				r = B(n);
			if (l = t(l, r), N.isNil(s)) {
				if ("a" == o) {
					var a = e.title;
					N.isNil(a) || "" === a || (l.title = a)
				}
				if ("img" == o) {
					var d = e.alt;
					N.isNil(d) || "" === d || (l.title = d)
				}
				var c = e.getAttribute("data-description");
				N.isNil(c) || "" === c || (l.description = c)
			} else "" !== (s = s.replace(/'/g, '\\"')).trim() && (s = (s = s.split(";")).filter(Boolean)), i(s, function(e) {
				if (e = e.trim().split(":"), 2 == N.size(e)) {
					var t = e[0].trim(),
						i = e[1].trim();
					"" !== i && (i = i.replace(/\\/g, "")), l[t] = i
				}
			});
			var u = e.querySelector(".glightbox-desc");
			return u && (l.description = u.innerHTML), l
		},
		I = function() {
			var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null,
				t = this,
				i = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
				n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2];
			if (l(e, "loaded")) return !1;
			N.isFunction(this.settings.beforeSlideLoad) && this.settings.beforeSlideLoad(e, i);
			var o = i.sourcetype,
				r = i.descPosition,
				a = e.querySelector(".gslide-media"),
				d = e.querySelector(".gslide-title"),
				c = e.querySelector(".gslide-desc"),
				u = e.querySelector(".gslide-description"),
				f = n;
			if (n && N.isFunction(this.settings.afterSlideLoad) && (f = function() {
				n(), t.settings.afterSlideLoad(e, i)
			}), "" == i.title && "" == i.description ? u && u.parentNode.removeChild(u) : (d && "" !== i.title ? d.innerHTML = i.title : d.parentNode.removeChild(d), c && "" !== i.description ? x ? (i.smallDescription = function(e) {
				var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 50,
					i = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
					n = i;
				if ((e = e.trim()).length <= t) return e;
				var s = e.substr(0, t - 1);
				return n ? s + '... <a href="#" class="desc-more">' + i + "</a>" : s
			}(i.description, 60, this.settings.moreText), c.innerHTML = i.smallDescription, b.apply(this, [c, i])) : c.innerHTML = i.description : c.parentNode.removeChild(c), s(a.parentNode, "desc-" + r), s(u, "description-" + r)), s(a, "gslide-" + o), s(e, "loaded"), "video" !== o) if ("external" !== o) if ("inline" !== o) {
				if ("image" === o) {
					var g = new Image;
					return g.addEventListener("load", function() {
						N.isFunction(f) && f()
					}, !1), g.src = i.href, void a.appendChild(g)
				}
				N.isFunction(f) && f()
			} else(function(e, t, i) {
				var n = e.querySelector(".gslide-media"),
					o = document.getElementById(t.inlined.replace("#", ""));
				if (o) {
					var l = o.cloneNode(!0);
					return l.style.height = this.settings.height + "px", l.style.maxWidth = this.settings.width + "px", s(l, "ginlined-content"), n.appendChild(l), void(N.isFunction(i) && i())
				}
			}).apply(this, [e, i, f]);
			else {
				var p = v(i.href, this.settings.width, this.settings.height, f);
				a.appendChild(p)
			} else h.apply(this, [e, i, f])
		};
	void 0 !== window.onYouTubeIframeAPIReady ? window.onYouTubeIframeAPIReady = function() {
		window.onYouTubeIframeAPIReady(), g()
	} : window.onYouTubeIframeAPIReady = g;
	var B = function(e) {
			var t = e,
				i = {};
			if (null !== (e = e.toLowerCase()).match(/\.(jpeg|jpg|gif|png)$/)) return i.sourcetype = "image", i;
			if (e.match(/(youtube\.com|youtube-nocookie\.com)\/watch\?v=([a-zA-Z0-9\-_]+)/) || e.match(/youtu\.be\/([a-zA-Z0-9\-_]+)/)) return i.sourcetype = "video", i.source = "youtube", i;
			if (e.match(/vimeo\.com\/([0-9]*)/)) return i.sourcetype = "video", i.source = "vimeo", i;
			if (null !== e.match(/\.(mp4|ogg|webm)$/)) return i.sourcetype = "video", i.source = "local", i;
			if (e.indexOf("#") > -1) {
				var n = t.split("#").pop();
				if ("" !== n.trim()) return i.sourcetype = "inline", i.source = e, i.inlined = "#" + n, i
			}
			return e.includes("gajax=true") && (i.sourcetype = "ajax", i.source = e), i.sourcetype = "external", i.source = e, i
		},
		M = function() {
			function e(i) {
				!
				function(e, t) {
					if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
				}(this, e), this.settings = t(j, i || {}), this.effectsClasses = this.getAnimationClasses()
			}
			return S(e, [{
				key: "init",
				value: function() {
					var e = this;
					this.baseEvents = n("click", {
						onElement: "." + this.settings.selector,
						withCallback: function(t, i) {
							t.preventDefault(), e.open(i)
						}
					})
				}
			}, {
				key: "open",
				value: function() {
					var e = arguments.length > 0 && void 0 !== arguments[0] && arguments[0];
					if (this.elements = this.getElements(e), 0 == this.elements.length) return !1;
					this.activeSlide = null, this.prevActiveSlideIndex = null, this.prevActiveSlide = null;
					var t = this.settings.startAt;
					e && (t = this.elements.indexOf(e)) < 0 && (t = 0), this.build(), r(this.overlay, this.settings.cssEfects.fade. in );
					var i = C.offsetWidth;
					if (C.style.width = i + "px", s(C, "glightbox-open"), s(E, "glightbox-open"), x && (s(E, "glightbox-mobile"), this.settings.slideEffect = "slide"), this.showSlide(t, !0), 1 == this.elements.length ? (u(this.prevButton), u(this.nextButton)) : (c(this.prevButton), c(this.nextButton)), this.lightboxOpen = !0, N.isFunction(this.settings.onOpen) && this.settings.onOpen(), x && k) return function() {
						var e = this,
							t = void 0,
							i = void 0,
							r = void 0,
							a = void 0,
							d = void 0,
							c = void 0,
							u = !1,
							h = !1,
							v = !1,
							f = !1,
							g = {},
							p = {},
							b = (this.slidesContainer, null),
							S = 0,
							w = 0,
							x = null,
							k = null,
							E = null,
							A = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
						window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight, this.events.doctouchmove = n("touchmove", {
							onElement: document,
							withCallback: function(e, t) {
								if (l(C, "gdesc-open")) return e.preventDefault(), !1
							}
						}), this.events.touchStart = n("touchstart", {
							onElement: C,
							withCallback: function(i, n) {
								l(C, "gdesc-open") || (s(C, "touching"), b = e.getActiveSlide(), x = b.querySelector(".gslide-image"), k = b.querySelector(".gslide-media"), E = b.querySelector(".gslide-description"), t = e.index, p = i.targetTouches[0], g.pageX = i.targetTouches[0].pageX, g.pageY = i.targetTouches[0].pageY, S = i.targetTouches[0].clientX, w = i.targetTouches[0].clientY)
							}
						}), this.events.gestureStart = n("gesturestart", {
							onElement: C,
							withCallback: function(e, t) {
								x && (e.preventDefault(), v = !0)
							}
						}), this.events.gestureChange = n("gesturechange", {
							onElement: C,
							withCallback: function(e, t) {
								e.preventDefault(), m(x, "scale(" + e.scale + ")")
							}
						}), this.events.gesturEend = n("gestureend", {
							onElement: C,
							withCallback: function(e, t) {
								v = !1, e.scale < 1 ? (f = !1, m(x, "scale(1)")) : f = !0
							}
						}), this.events.touchMove = n("touchmove", {
							onElement: C,
							withCallback: function(t, n) {
								if (l(C, "touching") && !(l(C, "gdesc-open") || v || f)) {
									t.preventDefault(), p = t.targetTouches[0];
									var s = b.querySelector(".gslide-inner-content").offsetHeight,
										o = b.querySelector(".gslide-inner-content").offsetWidth,
										x = t.targetTouches[0].clientX,
										T = t.targetTouches[0].clientY,
										q = S - x,
										O = w - T;
									if (Math.abs(q) > Math.abs(O) ? (u = !1, h = !0) : (h = !1, u = !0), u) {
										if (d = r, r = p.pageY - g.pageY, Math.abs(r) >= 0 || u) {
											var j = .75 - Math.abs(r) / s;
											k.style.opacity = j, E && (E.style.opacity = j), m(k, "translate3d(0, " + r + "px, 0)")
										}
									} else if (a = i, i = p.pageX - g.pageX, c = 100 * i / A, h) {
										if (e.index + 1 == e.elements.length && i < -60) return y(b), !1;
										if (e.index - 1 < 0 && i > 60) return y(b), !1;
										var N = .75 - Math.abs(i) / o;
										k.style.opacity = N, E && (E.style.opacity = N), m(k, "translate3d(" + c + "%, 0, 0)")
									}
								}
							}
						}), this.events.touchEnd = n("touchend", {
							onElement: C,
							withCallback: function(t, n) {
								r = p.pageY - g.pageY, i = p.pageX - g.pageX, c = 100 * i / A, o(C, "touching");
								var s = b.querySelector(".gslide-inner-content").offsetHeight,
									l = b.querySelector(".gslide-inner-content").offsetWidth;
								if (u) {
									var a = s / 2;
									return u = !1, Math.abs(r) >= a ? void e.close() : void y(b)
								}
								if (h) {
									h = !1;
									var d = "prev",
										v = !0;
									if (i < 0 && (d = "next", i = Math.abs(i)), "prev" == d && e.index - 1 < 0 && (v = !1), "next" == d && e.index + 1 >= e.elements.length && (v = !1), v && i >= l / 2 - 1000) return void("next" == d ? e.nextSlide() : e.prevSlide());
									y(b)
								}
							}
						})
					}.apply(this), !1;
					(function() {
						var e = this;
						this.events.keyboard = n("keydown", {
							onElement: window,
							withCallback: function(t, i) {
								var n = (t = t || window.event).keyCode;
								39 == n && e.nextSlide(), 37 == n && e.prevSlide(), 27 == n && e.close()
							}
						})
					}).apply(this)
				}
			}, {
				key: "showSlide",
				value: function() {
					var e = this,
						t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
						i = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
					c(this.loader), this.index = t;
					var n = this.slidesContainer.querySelector(".current");
					n && o(n, "current"), this.slideAnimateOut();
					var r = this.slidesContainer.querySelectorAll(".gslide")[t];
					if (c(this.slidesContainer), l(r, "loaded")) this.slideAnimateIn(r, i), u(this.loader);
					else {
						c(this.loader);
						var a = L(this.elements[t]);
						a.index = t, I.apply(this, [r, a, function() {
							u(e.loader), e.slideAnimateIn(r, i)
						}])
					}
					this.preloadSlide(t + 1), this.preloadSlide(t - 1), o(this.nextButton, "disabled"), o(this.prevButton, "disabled"), 0 === t ? s(this.prevButton, "disabled") : t === this.elements.length - 1 && !0 !== this.settings.loopAtEnd && s(this.nextButton, "disabled"), this.activeSlide = r
				}
			}, {
				key: "preloadSlide",
				value: function(e) {
					var t = this;
					if (e < 0 || e > this.elements.length) return !1;
					if (N.isNil(this.elements[e])) return !1;
					var i = this.slidesContainer.querySelectorAll(".gslide")[e];
					if (l(i, "loaded")) return !1;
					var n = L(this.elements[e]);
					n.index = e;
					var s = n.sourcetype;
					"video" == s || "external" == s ? setTimeout(function() {
						I.apply(t, [i, n])
					}, 200) : I.apply(this, [i, n])
				}
			}, {
				key: "prevSlide",
				value: function() {
					var e = this.index - 1;
					if (e < 0) return !1;
					this.goToSlide(e)
				}
			}, {
				key: "nextSlide",
				value: function() {
					var e = this.index + 1;
					if (e > this.elements.length) return !1;
					this.goToSlide(e)
				}
			}, {
				key: "goToSlide",
				value: function() {
					var e = arguments.length > 0 && void 0 !== arguments[0] && arguments[0];
					e > -1 && (this.prevActiveSlide = this.activeSlide, this.prevActiveSlideIndex = this.index, e < this.elements.length ? this.showSlide(e) : !0 === this.settings.loopAtEnd && (e = 0, this.showSlide(e)))
				}
			}, {
				key: "slideAnimateIn",
				value: function(e, t) {
					var i = this,
						n = e.querySelector(".gslide-media"),
						l = e.querySelector(".gslide-description"),
						a = {
							index: this.prevActiveSlideIndex,
							slide: this.prevActiveSlide
						},
						d = {
							index: this.index,
							slide: this.activeSlide
						};
					if (n.offsetWidth > 0 && l && (u(l), e.querySelector(".ginner-container").style.maxWidth = n.offsetWidth + "px", l.style.display = ""), o(e, this.effectsClasses), t) r(e, this.settings.openEffect, function() {
						!x && i.settings.autoplayVideos && i.playSlideVideo(e), N.isFunction(i.settings.afterSlideChange) && i.settings.afterSlideChange.apply(i, [a, d])
					});
					else {
						var c = this.settings.slideEffect,
							h = this.settings.cssEfects[c]. in ;
						this.prevActiveSlideIndex > this.index && "slide" == this.settings.slideEffect && (h = this.settings.cssEfects.slide_back. in ), r(e, h, function() {
							!x && i.settings.autoplayVideos && i.playSlideVideo(e), N.isFunction(i.settings.afterSlideChange) && i.settings.afterSlideChange.apply(i, [a, d])
						})
					}
					s(e, "current")
				}
			}, {
				key: "slideAnimateOut",
				value: function() {
					if (!this.prevActiveSlide) return !1;
					var e = this.prevActiveSlide;
					o(e, this.effectsClasses), s(e, "prev");
					var t = this.settings.slideEffect,
						i = this.settings.cssEfects[t].out;
					this.stopSlideVideo(e), N.isFunction(this.settings.beforeSlideChange) && this.settings.beforeSlideChange.apply(this, [{
						index: this.prevActiveSlideIndex,
						slide: this.prevActiveSlide
					}, {
						index: this.index,
						slide: this.activeSlide
					}]), this.prevActiveSlideIndex > this.index && "slide" == this.settings.slideEffect && (i = this.settings.cssEfects.slide_back.out), r(e, i, function() {
						var t = e.querySelector(".gslide-media"),
							i = e.querySelector(".gslide-description");
						t.style.transform = "", o(t, "greset"), t.style.opacity = "", i && (i.style.opacity = ""), o(e, "prev")
					})
				}
			}, {
				key: "stopSlideVideo",
				value: function(e) {
					N.isNumber(e) && (e = this.slidesContainer.querySelectorAll(".gslide")[e]);
					var t = e.querySelector(".gvideo");
					if (!t) return !1;
					var i = t.id;
					if (O && O.hasOwnProperty(i)) {
						var n = O[i];
						l(t, "vimeo-video") && n.pause(), l(t, "youtube-video") && n.pauseVideo(), l(t, "jw-video") && n.pause(!0), l(t, "html5-video") && n.pause()
					}
				}
			}, {
				key: "playSlideVideo",
				value: function(e) {
					N.isNumber(e) && (e = this.slidesContainer.querySelectorAll(".gslide")[e]);
					var t = e.querySelector(".gvideo");
					if (!t) return !1;
					var i = t.id;
					if (O && O.hasOwnProperty(i)) {
						var n = O[i];
						return l(t, "vimeo-video") && n.play(), l(t, "youtube-video") && n.playVideo(), l(t, "jw-video") && n.play(), l(t, "html5-video") && n.play(), setTimeout(function() {
							o(t, "wait-autoplay")
						}, 300), !1
					}
				}
			}, {
				key: "getElements",
				value: function() {
					var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null;
					if (this.elements = [], !N.isNil(this.settings.elements) && N.isArray(this.settings.elements)) return this.settings.elements;
					var t = !1;
					if (null !== e) {
						var i = e.getAttribute("data-gallery");
						i && "" !== i && document.querySelectorAll('[data-gallery="undefined"]')
					}
					return 0 == t && (t = document.querySelectorAll("." + this.settings.selector)), t = Array.prototype.slice.call(t)
				}
			}, {
				key: "getActiveSlide",
				value: function() {
					return this.slidesContainer.querySelectorAll(".gslide")[this.index]
				}
			}, {
				key: "getActiveSlideIndex",
				value: function() {
					return this.index
				}
			}, {
				key: "getAnimationClasses",
				value: function() {
					var e = [];
					for (var t in this.settings.cssEfects) if (this.settings.cssEfects.hasOwnProperty(t)) {
						var i = this.settings.cssEfects[t];
						e.push("g" + i. in ), e.push("g" + i.out)
					}
					return e.join(" ")
				}
			}, {
				key: "build",
				value: function() {
					var e = this,
						t = a(this.settings.lightboxHtml);
					document.body.appendChild(t);
					var o = document.getElementById("glightbox-body");
					this.modal = o;
					var l = o.querySelector(".gclose");
					this.prevButton = o.querySelector(".gprev"), this.nextButton = o.querySelector(".gnext"), this.overlay = o.querySelector(".goverlay"), this.loader = o.querySelector(".gloader"), this.slidesContainer = document.getElementById("glightbox-slider"), this.events = {}, s(this.modal, "glightbox-" + this.settings.skin), this.settings.closeButton && l && (this.events.close = n("click", {
						onElement: l,
						withCallback: function(t, i) {
							t.preventDefault(), e.close()
						}
					})), this.nextButton && (this.events.next = n("click", {
						onElement: this.nextButton,
						withCallback: function(t, i) {
							t.preventDefault(), e.nextSlide()
						}
					})), this.prevButton && (this.events.prev = n("click", {
						onElement: this.prevButton,
						withCallback: function(t, i) {
							t.preventDefault(), e.prevSlide()
						}
					})), i(this.elements, function() {
						var t = a(e.settings.slideHtml);
						e.slidesContainer.appendChild(t)
					}), k && s(E, "glightbox-touch")
				}
			}, {
				key: "close",
				value: function() {
					var e = this;
					this.stopSlideVideo(this.activeSlide), s(this.modal, "glightbox-closing"), r(this.overlay, this.settings.cssEfects.fade.out), r(this.activeSlide, this.settings.cssEfects.zoom.out, function() {
						if (e.activeSlide = null, e.prevActiveSlideIndex = null, e.prevActiveSlide = null, e.events) for (var t in e.events) e.events.hasOwnProperty(t) && e.events[t].destroy();
						o(C, "glightbox-open"), o(E, "glightbox-open"), o(C, "touching"), o(C, "gdesc-open"), C.style.width = "", e.modal.parentNode.removeChild(e.modal), N.isFunction(e.settings.onClose) && e.settings.onClose()
					})
				}
			}, {
				key: "destroy",
				value: function() {
					this.close(), this.baseEvents.destroy()
				}
			}]), e
		}();
	e.exports = function() {
		var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
		return new M(e).init()
	}
});