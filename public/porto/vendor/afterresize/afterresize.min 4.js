(function(f){"use strict";var k={action:function(){},runOnLoad:false,duration:500};var b=k,e=false,g;var c={};c.init=function(){for(var a=0;a<=arguments.length;a++){var d=arguments[a];switch(typeof d){case"function":b.action=d;break;case"boolean":b.runOnLoad=d;break;case"number":b.duration=d;break}}return this.each(function(){if(b.runOnLoad){b.action()}f(this).resize(function(){c.timedAction.call(this)})})};c.timedAction=function(h,i){var j=function(){var a=b.duration;if(e){var d=new Date()-g;a=b.duration-d;if(a<=0){clearTimeout(e);e=false;b.action();return}}l(a)};var l=function(a){e=setTimeout(j,a)};g=new Date();if(typeof i==='number'){b.duration=i}if(typeof h==='function'){b.action=h}if(!e){j()}};f.fn.afterResize=function(a){if(c[a]){return c[a].apply(this,Array.prototype.slice.call(arguments,1))}else{return c.init.apply(this,arguments)}}})(jQuery);