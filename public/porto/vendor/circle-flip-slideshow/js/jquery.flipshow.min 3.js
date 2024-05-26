window.Modernizr=function(i,u,d){function e(t){l.cssText=t}function f(t,e){return typeof t===e}function r(t,e){return!!~(""+t).indexOf(e)}function p(t,e){for(var n in t){n=t[n];if(!r(n,"-")&&l[n]!==d)return"pfx"!=e||n}return!1}function o(t,e,n){var i=t.charAt(0).toUpperCase()+t.slice(1),r=(t+" "+z.join(i+" ")+i).split(" ");if(f(e,"string")||void 0===e)return p(r,e);var o,a=r=(t+" "+_.join(i+" ")+i).split(" "),s=e,c=n;for(o in a){var l=s[a[o]];if(l!==d)return!1===c?a[o]:f(l,"function")?l.bind(c||s):l}return!1}function t(t,e,n,i){var r,o,a,s=u.createElement("div"),c=u.body,l=c||u.createElement("body");if(parseInt(n,10))for(;n--;)(o=u.createElement("div")).id=i?i[n]:m+(n+1),s.appendChild(o);return r=["&#173;",'<style id="s',m,'">',t,"</style>"].join(""),s.id=m,(c?s:l).innerHTML+=r,l.appendChild(s),c||(l.style.background="",l.style.overflow="hidden",a=h.style.overflow,h.style.overflow="hidden",h.appendChild(l)),r=e(s,t),c?s.parentNode.removeChild(s):(l.parentNode.removeChild(l),h.style.overflow=a),!!r}var n,a,s,c={},h=u.documentElement,m="modernizr",l=u.createElement(m).style,g=u.createElement("input"),v=":)",y={}.toString,b=" -webkit- -moz- -o- -ms- ".split(" "),w="Webkit Moz O ms",z=w.split(" "),_=w.toLowerCase().split(" "),E="http://www.w3.org/2000/svg",k={},O={},x={},$=[],C=$.slice,D=(a={select:"input",change:"input",submit:"form",reset:"form",error:"img",load:"img",abort:"img"},function(t,e){e=e||u.createElement(a[t]||"div");var n=(t="on"+t)in e;return n||(e=e.setAttribute?e:u.createElement("div")).setAttribute&&e.removeAttribute&&(e.setAttribute(t,""),n=f(e[t],"function"),void 0!==e[t]&&(e[t]=d),e.removeAttribute(t)),e=null,n}),S={}.hasOwnProperty,I=void 0!==S&&void 0!==S.call?function(t,e){return S.call(t,e)}:function(t,e){return e in t&&void 0===t.constructor.prototype[e]};for(s in Function.prototype.bind||(Function.prototype.bind=function(n){var i=this;if("function"!=typeof i)throw new TypeError;var r=C.call(arguments,1),o=function(){var t,e;return this instanceof o?((t=function(){}).prototype=i.prototype,t=new t,e=i.apply(t,r.concat(C.call(arguments))),Object(e)===e?e:t):i.apply(n,r.concat(C.call(arguments)))};return o}),k.flexbox=function(){return o("flexWrap")},k.canvas=function(){var t=u.createElement("canvas");return!!t.getContext&&!!t.getContext("2d")},k.canvastext=function(){return!!c.canvas&&!!f(u.createElement("canvas").getContext("2d").fillText,"function")},k.webgl=function(){return!!i.WebGLRenderingContext},k.touch=function(){var e;return"ontouchstart"in i||i.DocumentTouch&&u instanceof DocumentTouch?e=!0:t(["@media (",b.join("touch-enabled),("),m,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(t){e=9===t.offsetTop}),e},k.geolocation=function(){return"geolocation"in navigator},k.postmessage=function(){return!!i.postMessage},k.websqldatabase=function(){return!!i.openDatabase},k.indexedDB=function(){return!!o("indexedDB",i)},k.hashchange=function(){return D("hashchange",i)&&(u.documentMode===d||7<u.documentMode)},k.history=function(){return!!i.history&&!!history.pushState},k.draganddrop=function(){var t=u.createElement("div");return"draggable"in t||"ondragstart"in t&&"ondrop"in t},k.websockets=function(){return"WebSocket"in i||"MozWebSocket"in i},k.rgba=function(){return e("background-color:rgba(150,255,150,.5)"),r(l.backgroundColor,"rgba")},k.hsla=function(){return e("background-color:hsla(120,40%,100%,.5)"),r(l.backgroundColor,"rgba")||r(l.backgroundColor,"hsla")},k.multiplebgs=function(){return e("background:url(https://),url(https://),red url(https://)"),/(url\s*\(.*?){3}/.test(l.background)},k.backgroundsize=function(){return o("backgroundSize")},k.borderimage=function(){return o("borderImage")},k.borderradius=function(){return o("borderRadius")},k.boxshadow=function(){return o("boxShadow")},k.textshadow=function(){return""===u.createElement("div").style.textShadow},k.opacity=function(){return e(b.join("opacity:.55;")+""),/^0.55$/.test(l.opacity)},k.cssanimations=function(){return o("animationName")},k.csscolumns=function(){return o("columnCount")},k.cssgradients=function(){var t="background-image:";return e((t+"-webkit- ".split(" ").join("gradient(linear,left top,right bottom,from(#9f9),to(white));"+t)+b.join("linear-gradient(left top,#9f9, white);"+t)).slice(0,-t.length)),r(l.backgroundImage,"gradient")},k.cssreflections=function(){return o("boxReflect")},k.csstransforms=function(){return!!o("transform")},k.csstransforms3d=function(){var n=!!o("perspective");return n&&"webkitPerspective"in h.style&&t("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(t,e){n=9===t.offsetLeft&&3===t.offsetHeight}),n},k.csstransitions=function(){return o("transition")},k.fontface=function(){var i;return t('@font-face {font-family:"font";src:url("https://")}',function(t,e){var n=u.getElementById("smodernizr"),n=n.sheet||n.styleSheet,n=n?n.cssRules&&n.cssRules[0]?n.cssRules[0].cssText:n.cssText||"":"";i=/src/i.test(n)&&0===n.indexOf(e.split(" ")[0])}),i},k.generatedcontent=function(){var e;return t(["#",m,"{font:0/0 a}#",m,':after{content:"',v,'";visibility:hidden;font:3px/1 a}'].join(""),function(t){e=3<=t.offsetHeight}),e},k.video=function(){var t=u.createElement("video"),e=!1;try{(e=!!t.canPlayType)&&((e=new Boolean(e)).ogg=t.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,""),e.h264=t.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,""),e.webm=t.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,""))}catch(t){}return e},k.audio=function(){var t=u.createElement("audio"),e=!1;try{(e=!!t.canPlayType)&&((e=new Boolean(e)).ogg=t.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/,""),e.mp3=t.canPlayType("audio/mpeg;").replace(/^no$/,""),e.wav=t.canPlayType('audio/wav; codecs="1"').replace(/^no$/,""),e.m4a=(t.canPlayType("audio/x-m4a;")||t.canPlayType("audio/aac;")).replace(/^no$/,""))}catch(t){}return e},k.localstorage=function(){try{return localStorage.setItem(m,m),localStorage.removeItem(m),!0}catch(t){return!1}},k.sessionstorage=function(){try{return sessionStorage.setItem(m,m),sessionStorage.removeItem(m),!0}catch(t){return!1}},k.webworkers=function(){return!!i.Worker},k.applicationcache=function(){return!!i.applicationCache},k.svg=function(){return!!u.createElementNS&&!!u.createElementNS(E,"svg").createSVGRect},k.inlinesvg=function(){var t=u.createElement("div");return t.innerHTML="<svg/>",(t.firstChild&&t.firstChild.namespaceURI)==E},k.smil=function(){return!!u.createElementNS&&/SVGAnimate/.test(y.call(u.createElementNS(E,"animate")))},k.svgclippaths=function(){return!!u.createElementNS&&/SVGClipPath/.test(y.call(u.createElementNS(E,"clipPath")))},k)I(k,s)&&(n=s.toLowerCase(),c[n]=k[s](),$.push((c[n]?"":"no-")+n));c.input||(c.input=function(t){for(var e=0,n=t.length;e<n;e++)x[t[e]]=t[e]in g;return x.list&&(x.list=!!u.createElement("datalist")&&!!i.HTMLDataListElement),x}("autocomplete autofocus list placeholder max min multiple pattern required step".split(" ")),c.inputtypes=function(t){for(var e,n,i,r=0,o=t.length;r<o;r++)g.setAttribute("type",n=t[r]),(e="text"!==g.type)&&(g.value=v,g.style.cssText="position:absolute;visibility:hidden;",/^range$/.test(n)&&g.style.WebkitAppearance!==d?(h.appendChild(g),e=(i=u.defaultView).getComputedStyle&&"textfield"!==i.getComputedStyle(g,null).WebkitAppearance&&0!==g.offsetHeight,h.removeChild(g)):/^(search|tel)$/.test(n)||(e=/^(url|email)$/.test(n)?g.checkValidity&&!1===g.checkValidity():g.value!=v)),O[t[r]]=!!e;return O}("search tel url email datetime date month week time datetime-local number range color".split(" "))),c.addTest=function(t,e){if("object"==typeof t)for(var n in t)I(t,n)&&c.addTest(n,t[n]);else{if(t=t.toLowerCase(),c[t]!==d)return c;e="function"==typeof e?e():e,h.className+=" "+(e?"":"no-")+t,c[t]=e}return c},e("");g=null;var w=this,T=u;function W(){var t=B.elements;return"string"==typeof t?t.split(" "):t}function A(t){var e=G[t[V]];return e||(e={},M++,t[V]=M,G[M]=e),e}function H(t,e,n){return e=e||T,j?e.createElement(t):!(e=(n=n||A(e)).cache[t]?n.cache[t].cloneNode():q.test(t)?(n.cache[t]=n.createElem(t)).cloneNode():n.createElem(t)).canHaveChildren||U.test(t)||e.tagUrn?e:n.frag.appendChild(e)}function R(t){var e,n,i,r,o,a=A(t=t||T);return!B.shivCSS||N||a.hasCSS||(a.hasCSS=(r="article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}",o=(i=t).createElement("p"),i=i.getElementsByTagName("head")[0]||i.documentElement,o.innerHTML="x<style>"+r+"</style>",!!i.insertBefore(o.lastChild,i.firstChild))),j||(e=t,(n=a).cache||(n.cache={},n.createElem=e.createElement,n.createFrag=e.createDocumentFragment,n.frag=n.createFrag()),e.createElement=function(t){return B.shivMethods?H(t,e,n):n.createElem(t)},e.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+W().join().replace(/[\w\-]+/g,function(t){return n.createElem(t),n.frag.createElement(t),'c("'+t+'")'})+");return n}")(B,n.frag)),t}var N,j,F,P=w.html5||{},U=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,q=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,V="_html5shiv",M=0,G={};try{var L=T.createElement("a");L.innerHTML="<xyz></xyz>",N="hidden"in L,j=1==L.childNodes.length||(T.createElement("a"),void 0===(F=T.createDocumentFragment()).cloneNode||void 0===F.createDocumentFragment||void 0===F.createElement)}catch(t){j=N=!0}var B={elements:P.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:"3.7.0",shivCSS:!1!==P.shivCSS,supportsUnknownElements:j,shivMethods:!1!==P.shivMethods,type:"default",shivDocument:R,createElement:H,createDocumentFragment:function(t,e){if(t=t||T,j)return t.createDocumentFragment();for(var n=(e=e||A(t)).frag.cloneNode(),i=0,r=W(),o=r.length;i<o;i++)n.createElement(r[i]);return n}};return w.html5=B,R(T),c._version="2.8.3",c._prefixes=b,c._domPrefixes=_,c._cssomPrefixes=z,c.hasEvent=D,c.testProp=function(t){return p([t])},c.testAllProps=o,c.testStyles=t,c.prefixed=function(t,e,n){return e?o(t,e,n):o(t,"pfx")},h.className=h.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(" js "+$.join(" ")),c}(this,this.document),function(t,p){function d(t){return"[object Function]"==r.call(t)}function h(t){return"string"==typeof t}function f(){}function m(t){return!t||"loaded"==t||"complete"==t||"uninitialized"==t}function g(){var t=b.shift();w=1,t?t.t?v(function(){("c"==t.t?S.injectCss:S.injectJs)(t.s,0,t.a,t.x,t.e,1)},0):(t(),g()):w=0}function e(t,e,n,i,r){return w=0,e=e||"j",h(t)?(a="c"==e?$:x,s=t,e=e,c=this.i++,n=n,i=i,r=(r=r)||S.errorTimeout,l=p.createElement(a),d=u=0,f={t:e,s:s,e:n,a:i,x:r},1===C[s]&&(d=1,C[s]=[]),"object"==a?l.data=s:(l.src=s,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){o.call(this,d)},b.splice(c,0,f),"img"!=a&&(d||2===C[s]?(k.insertBefore(l,E?null:y),v(o,r)):C[s].push(l))):(b.splice(this.i++,0,t),1==b.length&&g()),this;function o(t){if(!u&&m(l.readyState)&&(f.r=u=1,w||g(),l.onload=l.onreadystatechange=null,t))for(var e in"img"!=a&&v(function(){k.removeChild(l)},50),C[s])C[s].hasOwnProperty(e)&&C[s][e].onload()}var a,s,c,l,u,d,f}function s(){var t=S;return t.loader={load:e,i:0},t}var n,i=p.documentElement,v=t.setTimeout,y=p.getElementsByTagName("script")[0],r={}.toString,b=[],w=0,o="MozAppearance"in i.style,E=o&&!!p.createRange().compareNode,k=E?i:y.parentNode,i=t.opera&&"[object Opera]"==r.call(t.opera),i=!!p.attachEvent&&!i,x=o?"object":i?"script":"img",$=i?"script":x,a=Array.isArray||function(t){return"[object Array]"==r.call(t)},c=[],C={},l={timeout:function(t,e){return e.length&&(t.timeout=e[0]),t}},S=function(t){function u(t,e,n,i,r){var o=function(t){for(var e,n,t=t.split("!"),i=c.length,r=t.pop(),o=t.length,r={url:r,origUrl:r,prefixes:t},a=0;a<o;a++)n=t[a].split("="),(e=l[n.shift()])&&(r=e(r,n));for(a=0;a<i;a++)r=c[a](r);return r}(t),a=o.autoCallback;o.url.split(".").pop().split("?").shift(),o.bypass||(e=e&&(d(e)?e:e[t]||e[i]||e[t.split("/").pop().split("?")[0]]),o.instead?o.instead(t,e,n,i,r):(C[o.url]?o.noexec=!0:C[o.url]=1,n.load(o.url,o.forceCSS||!o.forceJS&&"css"==o.url.split(".").pop().split("?").shift()?"c":void 0,o.noexec,o.attrs,o.timeout),(d(e)||d(a))&&n.load(function(){s(),e&&e(o.origUrl,r,i),a&&a(o.origUrl,r,i),C[o.url]=2})))}function e(t,e){function n(n,t){if(n){if(h(n))u(n,s=t?s:function(){var t=[].slice.call(arguments);c.apply(this,t),l()},e,0,o);else if(Object(n)===n)for(r in i=function(){var t,e=0;for(t in n)n.hasOwnProperty(t)&&e++;return e}(),n)n.hasOwnProperty(r)&&(t||--i||(d(s)?s=function(){var t=[].slice.call(arguments);c.apply(this,t),l()}:s[r]=function(e){return function(){var t=[].slice.call(arguments);e&&e.apply(this,t),l()}}(c[r])),u(n[r],s,e,r,o))}else t||l()}var i,r,o=!!t.test,a=t.load||t.both,s=t.callback||f,c=s,l=t.complete||f;n(o?t.yep:t.nope,!!a),a&&n(a)}var n,i,r=this.yepnope.loader;if(h(t))u(t,0,r,0);else if(a(t))for(n=0;n<t.length;n++)h(i=t[n])?u(i,0,r,0):a(i)?S(i):Object(i)===i&&e(i,r);else Object(t)===t&&e(t,r)};S.addPrefix=function(t,e){l[t]=e},S.addFilter=function(t){c.push(t)},S.errorTimeout=1e4,null==p.readyState&&p.addEventListener&&(p.readyState="loading",p.addEventListener("DOMContentLoaded",n=function(){p.removeEventListener("DOMContentLoaded",n,0),p.readyState="complete"},0)),t.yepnope=s(),t.yepnope.executeStack=g,t.yepnope.injectJs=function(t,e,n,i,r,o){var a,s,c=p.createElement("script"),i=i||S.errorTimeout;for(s in c.src=t,n)c.setAttribute(s,n[s]);e=o?g:e||f,c.onreadystatechange=c.onload=function(){!a&&m(c.readyState)&&(a=1,e(),c.onload=c.onreadystatechange=null)},v(function(){a||e(a=1)},i),r?c.onload():y.parentNode.insertBefore(c,y)},t.yepnope.injectCss=function(t,e,n,i,r,o){var a,e=o?g:e||f;for(a in(i=p.createElement("link")).href=t,i.rel="stylesheet",i.type="text/css",n)i.setAttribute(a,n[a]);r||(y.parentNode.insertBefore(i,y),v(e,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))},function(p,e){"use strict";function i(t){e.console&&e.console.error(t)}var h="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==",n=(p.fn.imagesLoaded=function(n){var i=this,r=p.isFunction(p.Deferred)?p.Deferred():0,o=p.isFunction(r.notify),a=i.find("img").add(i.filter("img")),s=[],c=[],l=[];function u(){var t=p(c),e=p(l);r&&(l.length?r.reject(a,t,e):r.resolve(a)),p.isFunction(n)&&n.call(i,a,t,e)}function d(t){f(t.target,"error"===t.type)}function f(t,e){t.src!==h&&-1===p.inArray(t,s)&&(s.push(t),(e?l:c).push(t),p.data(t,"imagesLoaded",{isBroken:e,src:t.src}),o&&r.notifyWith(p(t),[e,a,p(c),p(l)]),a.length===s.length&&(setTimeout(u),a.unbind(".imagesLoaded",d)))}return p.isPlainObject(n)&&p.each(n,function(t,e){"callback"===t?n=e:r&&r[t](e)}),a.length?a.bind("load.imagesLoaded error.imagesLoaded",d).each(function(t,e){var n=e.src,i=p.data(e,"imagesLoaded");i&&i.src===n?f(e,i.isBroken):e.complete&&void 0!==e.naturalWidth?f(e,0===e.naturalWidth||0===e.naturalHeight):(e.readyState||e.complete)&&(e.src=h,e.src=n)}):u(),r?r.promise(i):i},e.Modernizr);p.Flipshow=function(t,e){this.$el=p(e),this._init(t)},p.Flipshow.defaults={speed:700,easing:"ease-out"},p.Flipshow.prototype={_init:function(t){this.options=p.extend(!0,{},p.Flipshow.defaults,t),this.support=n.csstransitions&&n.csstransforms3d&&!/MSIE (\d+\.\d+);/.test(navigator.userAgent);this.support&&(this.transEndEventName={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd",msTransition:"MSTransitionEnd",transition:"transitionend"}[n.prefixed("transition")]+".cbpFWSlider",this.transformName={WebkitTransform:"-webkit-transform",MozTransform:"-moz-transform",OTransform:"-o-transform",msTransform:"-ms-transform",transform:"transform"}[n.prefixed("transform")]),this.transitionProperties=this.transformName+" "+this.options.speed+"ms "+this.options.easing,this.$listItems=this.$el.children("ul.fc-slides"),this.$items=this.$listItems.children("li").hide(),this.itemsCount=this.$items.length,this.current=0,this.$listItems.imagesLoaded(p.proxy(function(){this.$items.eq(this.current).show(),0<this.itemsCount&&(this._addNav(),this.support&&this._layout())},this))},_addNav:function(){var t=this,e=p('<div class="fc-left"><span></span><span></span><span></span><i class="fa fa-arrow-left"></i></div>'),n=p('<div class="fc-right"><span></span><span></span><span></span><i class="fa fa-arrow-right"></i></div>');p("<nav></nav>").append(e,n).appendTo(this.$el),e.find("span").on("click.flipshow touchstart.flipshow",function(){t._navigate(p(this),"left")}),n.find("span").on("click.flipshow touchstart.flipshow",function(){t._navigate(p(this),"right")})},_layout:function(t,e){this.$flipFront=p('<div class="fc-front"><div></div></div>'),this.$frontContent=this.$flipFront.children("div:first"),this.$flipBack=p('<div class="fc-back"><div></div></div>'),this.$backContent=this.$flipBack.children("div:first"),this.$flipEl=p('<div class="fc-flip"></div>').append(this.$flipFront,this.$flipBack).hide().appendTo(this.$el)},_navigate:function(t,e){if(this.isAnimating&&this.support)return!1;this.isAnimating=!0;var n=this.$items.eq(this.current).hide(),i=("right"===e?this.current<this.itemsCount-1?++this.current:this.current=0:"left"===e&&(0<this.current?--this.current:this.current=this.itemsCount-1),this.$items.eq(this.current));this.support?this._flip(n,i,e,t.index()):i.show()},_flip:function(t,e,n,i){var r="",o=p('<div class="fc-overlay-light"></div>'),a=p('<div class="fc-overlay-dark"></div>');if(void 0!==this.$flipEl){this.$flipEl.css("transition",this.transitionProperties),this.$flipFront.find("div.fc-overlay-light, div.fc-overlay-dark").remove(),this.$flipBack.find("div.fc-overlay-light, div.fc-overlay-dark").remove(),"right"===n?(this.$flipFront.append(o),this.$flipBack.append(a),a.css("opacity",1)):"left"===n&&(this.$flipFront.append(a),this.$flipBack.append(o),o.css("opacity",1));var s={transition:"opacity "+this.options.speed/1.3+"ms"};switch(o.css(s),a.css(s),i){case 0:r="left"===n?"rotate3d(-1,1,0,-179deg) rotate3d(-1,1,0,-1deg)":"rotate3d(1,1,0,180deg)";break;case 1:r="left"===n?"rotate3d(0,1,0,-179deg) rotate3d(0,1,0,-1deg)":"rotate3d(0,1,0,180deg)";break;case 2:r="left"===n?"rotate3d(1,1,0,-179deg) rotate3d(1,1,0,-1deg)":"rotate3d(-1,1,0,179deg) rotate3d(-1,1,0,1deg)"}this.$flipBack.css("transform",r),this.$frontContent.empty().html(t.html()),this.$backContent.empty().html(e.html()),this.$flipEl.show();var c=this;setTimeout(function(){c.$flipEl.css("transform",r),o.css("opacity","right"===n?1:0),a.css("opacity","right"===n?0:1),c.$flipEl.on(c.transEndEventName,function(t){"fc-overlay-light"!==t.target.className&&"fc-overlay-dark"!==t.target.className&&c._ontransitionend(e)})},25)}},_ontransitionend:function(t){t.show(),this.$flipEl.off(this.transEndEventName).css({transition:"none",transform:"none"}).hide(),this.isAnimating=!1}};p.fn.flipshow=function(e){var n;return"string"==typeof e?(n=Array.prototype.slice.call(arguments,1),this.each(function(){var t=p.data(this,"flipshow");t?p.isFunction(t[e])&&"_"!==e.charAt(0)?t[e].apply(t,n):i("no such method '"+e+"' for flipshow instance"):i("cannot call methods on flipshow prior to initialization; attempted to call method '"+e+"'")})):this.each(function(){var t=p.data(this,"flipshow");t?t._init():p.data(this,"flipshow",new p.Flipshow(e,this))}),this}}(jQuery,window);