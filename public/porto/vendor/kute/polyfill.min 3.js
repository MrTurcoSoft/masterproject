// KUTE.js Polyfill v2.1.1-alpha1 | 2021 © thednp | MIT-License
"use strict";
var r,t,e,n;Array.from||(Array.from=(r=Object.prototype.toString,t=function(t){return"function"==typeof t||"[object Function]"===r.call(t)},e=Math.pow(2,53)-1,n=function(r){var t=function(r){var t=Number(r);return isNaN(t)?0:0!==t&&isFinite(t)?(t>0?1:-1)*Math.floor(Math.abs(t)):t}(r);return Math.min(Math.max(t,0),e)},function(r){var e=this,i=Object(r);if(null==r)throw new TypeError("Array.from requires an array-like object - not null or undefined");var o,a=arguments.length>1?arguments[1]:void 0;if(void 0!==a){if(!t(a))throw new TypeError("Array.from: when provided, the second argument must be a function");arguments.length>2&&(o=arguments[2])}for(var u,f=n(i.length),p=t(e)?Object(new e(f)):new Array(f),c=0;c<f;)u=i[c],p[c]=a?void 0===o?a(u,c):a.call(o,u,c):u,c+=1;return p.length=f,p})),Array.prototype.flat||Object.defineProperty(Array.prototype,"flat",{configurable:!0,value:function r(){var t=isNaN(arguments[0])?1:Number(arguments[0]);return t?Array.prototype.reduce.call(this,(function(e,n){return Array.isArray(n)?e.push.apply(e,r.call(n,t-1)):e.push(n),e}),[]):Array.prototype.slice.call(this)},writable:!0}),Array.prototype.includes||(Array.prototype.includes=function(r){var t=Object(this),e=parseInt(t.length)||0;if(0===e)return!1;var n,i,o=parseInt(arguments[1])||0;for(o>=0?n=o:(n=e+o)<0&&(n=0);n<e;){if(r===(i=t[n])||r!=r&&i!=i)return!0;n++}return!1}),String.prototype.includes||(String.prototype.includes=function(r,t){if(r instanceof RegExp)throw TypeError("first argument must not be a RegExp");return void 0===t&&(t=0),-1!==this.indexOf(r,t)}),Number.isFinite||(Number.isFinite=function(r){return"number"==typeof r&&isFinite(r)}),Number.isInteger||(Number.isInteger=function(r){return"number"==typeof r&&isFinite(r)&&Math.floor(r)===r}),Number.isNaN||(Number.isNaN=function(r){return"number"==typeof r&&r!=r});
