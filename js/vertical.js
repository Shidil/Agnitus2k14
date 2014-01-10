$(document).ready(function() {
	
	var introFinished   = false;
	var maxcount        = 16000;
	var logoLeft        = false;
	var keep            = false;
	var delayStopScroll = 1000;
    var timeoutScroll   = null;
	var intervalCheck;
	var scrollTarget    = null;
	var blackBlocsAnimationDuration = 0;
	var blackBlocsAnimationOffset = -200;
	
	/*
	 *			Front Page
	 */
	
	/*
	 *			Events Page
	 */
	
	/*
	 *			Nite Page
	 */
	
	/*
	 *			Nite Page
	 */
    $(document).on('scroll',function(e) {
        
        //Logos left appears when start scrolling
        /*if ($(document).scrollTop() > 640 && logoLeft == false){
        	logoLeft = true; 
        	TweenMax.fromTo( $('#logo'), .5, {css:{opacity:0}}, {css:{opacity:1}});
        	TweenMax.fromTo( $('#logo-alpinist'), .5, {css:{opacity:0}}, {css:{opacity:1}});
        }else if ($(document).scrollTop() < 640 && logoLeft == true) {logoLeft = false;TweenMax.fromTo( $('#logo'), .5, {css:{opacity:1}}, {css:{opacity:0}});TweenMax.fromTo( $('#logo-alpinist'), .5, {css:{opacity:1}}, {css:{opacity:0}});}
        */
        //Keep scolling ico appears when start scrolling
        if (keep == true) {keep = false;TweenMax.to( $('#scroll_down'), .5, {css:{opacity:0}});}
        clearTimeout(timeoutScroll);
	    timeoutScroll = setTimeout(function(){
	        if (keep == false && $(document).scrollTop()<18450) {keep = true; $('#scroll_down').css({'display':'block'}); TweenMax.to( $('#scroll_down'), .5, {css:{opacity:1}});}
	    },delayStopScroll);
	});
});