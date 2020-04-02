/**
 * author Christopher Blum
 *    - based on the idea of Remy Sharp, http://remysharp.com/2009/01/26/element-in-view-event-plugin/
 *    - forked from http://github.com/zuk/jquery.inview/
 */
(function(e){function f(){var t,n,r={height:s.innerHeight,width:s.innerWidth};if(!r.height){t=i.compatMode;if(t||!e.support.boxModel){n=t==="CSS1Compat"?o:i.body;r={height:n.clientHeight,width:n.clientWidth}}}return r}function l(){return{top:s.pageYOffset||o.scrollTop||i.body.scrollTop,left:s.pageXOffset||o.scrollLeft||i.body.scrollLeft}}function c(){var i=e(),s,u=0;e.each(t,function(e,t){var n=t.data.selector,r=t.$element;i=i.add(n?r.find(n):r)});s=i.length;if(s){n=n||f();r=r||l();for(;u<s;u++){if(!e.contains(o,i[u])){continue}var a=e(i[u]),c={height:a.height(),width:a.width()},h=a.offset(),p=a.data("inview"),d,v,m;if(!r||!n){return}if(h.top+c.height>r.top&&h.top<r.top+n.height&&h.left+c.width>r.left&&h.left<r.left+n.width){d=r.left>h.left?"right":r.left+n.width<h.left+c.width?"left":"both";v=r.top>h.top?"bottom":r.top+n.height<h.top+c.height?"top":"both";m=d+"-"+v;if(!p||p!==m){a.data("inview",m).trigger("inview",[true,d,v])}}else if(p){a.data("inview",false).trigger("inview",[false])}}}}var t={},n,r,i=document,s=window,o=i.documentElement,u=e.expando,a;e.event.special.inview={add:function(n){t[n.guid+"-"+this[u]]={data:n,$element:e(this)};if(!a&&!e.isEmptyObject(t)){a=setInterval(c,250)}},remove:function(n){try{delete t[n.guid+"-"+this[u]]}catch(r){}if(e.isEmptyObject(t)){clearInterval(a);a=null}}};e(s).bind("scroll resize scrollstop",function(){n=r=null});if(!o.addEventListener&&o.attachEvent){o.attachEvent("onfocusin",function(){r=null})}})(jQuery)