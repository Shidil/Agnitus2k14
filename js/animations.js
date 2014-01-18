$(document).ready(function() {
	$('#presents_regster a').on('click', function() {
		$.smoothScroll({
		offset: 6900,
		easing: 'swing',
		speed: 2000,
		scrollElement: $('div.superscrollorama-pin-spacer'),
		scrollTarget: link.hash
		});
		return false;
	});
	
	
	$('body').css('visibility', 'visible');
	function blabla(){
		$('#competetion_bg').fadeIn("fast");
	}
	function addItemTween(item){
		
	}
	// title animations 
	$("#presents_title").css({scale:1,opacity:1});
	(new TimelineLite({onComplete:logoIn})).append([
		TweenMax.from($('#presents_title'), 0.7, {delay:0.5,css : {scale : 0},ease : Quad.easeInOut}),
		TweenMax.to($('#presents_title'), 0.5, {delay:1.5,css : {top : "-50%"/*scale:2*/,opacity:0},ease : Quad.easeInOut})
		]);
	//(new TimelineLite()).append([TweenMax.to($('#presents_title'), 0.5, {delay:1,css : {top : "-50%"/*scale:2*/,opacity:0},ease : Quad.easeInOut})]);
	
	// Logo Animation
	function logoIn () {
	  (new TimelineLite({onComplete:scrollIn})).append([
	  	
	  	TweenMax.to($('#logo_ag1'), 1, {delay:0.1,css : {left : "55px",top:"378px",opacity:1},ease : Quad.easeOut}),
	  	TweenMax.to($('#logo_ag2'), 1, {delay:0.1,css : {left : "106px",top:"340px",opacity:1},ease : Quad.easeOut}),
	  	TweenMax.to($('#logo_ag3'), 1, {delay:0.1,css : {left : "156px",top:"315px",opacity:1},ease : Quad.easeOut}),
	  	TweenMax.to($('#logo_ag4'), 1, {delay:0.1,css : {left : "209px",top:"274px",opacity:1},ease : Quad.easeOut}),
	  	TweenMax.to($('#logo_ag5'), 1, {delay:0.1,css : {left : "260px",top:"242px",opacity:1},ease : Quad.easeOut}),
	  	TweenMax.to($('#logo_ag6'), 1, {delay:0.1,css : {left : "311px",top:"224px",opacity:1},ease : Quad.easeOut}),
	  	TweenMax.to($('#logo_center'), 0.4, {delay:0.1,css : {top:"166px",opacity:1},ease : Quad.easeOut}),
	  	//TweenMax.to($('#logo_center'), 0.5, {delay:0.6,css : {rotate:360},ease : Quad.easeOut}),
		TweenMax.fromTo($('#logo_left'), 0.6, {delay:0.2,css : {left : "-150%",opacity:0},ease : Quad.easeOut},{css : {left : "61px",opacity:1},ease : Quart.easeOut}),
		TweenMax.fromTo($('#logo_right'), 0.6, {delay:0.2,css : {left : "+150%",opacity:0},ease : Quad.easeOut},{css : {left : "137px",opacity:1},ease : Quart.easeOut}),
		TweenMax.to($('#logo_text'), 1, {delay:0.6,css : {opacity:1},ease : Quad.easeOut})
		]);
	}
	function scrollIn(){
	(new TimelineLite({
			onComplete : initScrollAnimations})).append([
			TweenMax.to($('#presents_register'), .75, {css:{right: "5%"}, ease:Quad.easeOut}),
			TweenMax.fromTo($('#scroll_down'), 0.8, {css : {opacity : '0',top : '78%',left : '-20%'}}, {css : {opacity : '0.7',top : '78%',left : '64%'},ease : Quad.easeOut})
			]);
	}
	function loopScrollDown() {
		TweenMax.to($('#scroll_down'), 0.5, {
			css : {
				height : $('#scroll_down').height() + 30
				//margin : '6px 0px'
			},
			ease : Quart.easeIn,
			repeat : -1,
			yoyo : true
		});
	}
	// Scroll Animations
	function initScrollAnimations() {
	loopScrollDown();
	var controller = $.superscrollorama();
	///controller.addTween(10, TweenMax.to($('#fireball'), 0.9, {css:{top: "100%",right:"100%",scale:1}, ease:Quad.easeOut}),200);
	//controller.addTween(10, TweenMax.to($('#cover_top'), .75, {css:{top: -1600}, ease:Quad.easeOut}),1200);
	//controller.addTween(13, TweenMax.to($('#cover_bottom'), .75, {css:{top: +1600}, ease:Quad.easeOut}),1200);
	//controller.addTween(140, TweenMax.to($('#presents_title'), .75, {css:{top: -600}, ease:Quad.easeOut}),400);
	controller.addTween(200, TweenMax.to($('#logo_container'), .9, {css:{top: "-138%"}, ease:Quad.easeOut}),400);
	controller.addTween(220, TweenMax.to($('#presents_register'), .75, {css:{right: "-38%"}, ease:Quad.easeOut}),200);
	controller.addTween(300, TweenMax.to($('#page_info'), .7, {css:{top: "0%"}, ease:Quad.easeOut}),400);
	controller.addTween(
					550,
					(new TimelineLite({onComplete:blabla}))
						.append([
							 TweenMax.to($('#info_know'), .456, {css:{left: "29%",opacity:1}, ease:Circ.easeOut}),
							 TweenMax.to($('#info_about'), .6, {css:{top: "10%",opacity:1}, ease:Circ.easeOut}),
							 TweenMax.to($('#info_agnitus'), .6, {css:{left: "52%",opacity:1}, ease:Circ.easeOut}),
							 TweenMax.to($('#info_globe'), .6, {css:{top: "18%",opacity:1}, ease:Quad.easeOut})
						]),
					700 // scroll duration of tween
				);
		controller.addTween(1500, TweenMax.to($('#competetion_bg'), .2, {css:{top: "0%"}, ease:Quad.easeOut}),30);		
		$('.info_content').each(function() {
					controller.addTween(1000, TweenMax.from( $(this), 0.8, {delay:Math.random()*.2,css:{left:Math.random()*1200-600,top:Math.random()*600-300,opacity:0}, ease:Quart.easeOut}),200);
				});
		controller.addTween(1800, TweenMax.to($('#page_info'), 1, {css:{top: "-100%"}, ease:Quad.easeOut}),400);
		controller.addTween(
					2000,
					(new TimelineLite())
						.append([
							 TweenMax.to($('#half_top'), 0.6, {css:{marginTop: "0px",opacity:1}, ease:Quad.easeOut}),
							 TweenMax.to($('#half_bottom'), 0.6, {css:{marginTop: "0px",opacity:1}, ease:Quad.easeOut})
						]),
					400 // scroll duration of tween
				);
		controller.addTween(2000,TweenMax.to($('#comp_title'), 6, {css:{top: "30%",opacity:1,zIndex:255}, ease:Quad.easeOut}),200);
		$('#competetions_nav').find('li').each(function() {
			controller.addTween(2500, TweenMax.to( $(this), Math.random()*.2, {delay:Math.random()*.2,css:{top:"0%",opacity:1}, ease:Quart.easeOut}),400);
				});		
		controller.addTween(2700,TweenMax.to($('#comp_title'), 0.6, {css:{top: "130%",opacity:0}, ease:Quad.easeOut}),400);	
		// cat1
		$('#competetions_list').find('li[rel=1_2]').each(function() {
			controller.addTween(2800, TweenMax.to( $(this), 0.6, {delay:Math.random()*.2,css:{top:"55%",opacity:1}, ease:Quart.easeOut}),400);
				});		
		$('#competetions_list').find('li[rel=1_1]').each(function() {
					controller.addTween(2800, TweenMax.to( $(this), 0.8, {delay:Math.random()*.2,css:{top:"15%",opacity:1}, ease:Quart.easeOut}),400);
				});	
		$('#competetions_list').find('li[rel=1_2]').each(function() {
			controller.addTween(3300, TweenMax.to( $(this), 0.6, {delay:Math.random()*.2,css:{top:"155%",opacity:0}, ease:Quart.easeOut}),400);
				});		
		$('#competetions_list').find('li[rel=1_1]').each(function() {
					controller.addTween(3300, TweenMax.to( $(this), 0.8, {delay:Math.random()*.2,css:{top:"150%",opacity:0}, ease:Quart.easeOut}),400);
				});	
		// cat 2
		$('#competetions_list').find('li[rel=2_2]').each(function() {
			controller.addTween(3400, TweenMax.to( $(this), 0.6, {delay:Math.random()*.2,css:{top:"55%",opacity:1}, ease:Quart.easeOut}),400);
				});		
		$('#competetions_list').find('li[rel=2_1]').each(function() {
					controller.addTween(3400, TweenMax.to( $(this), 0.8, {delay:Math.random()*.2,css:{top:"15%",opacity:1}, ease:Quart.easeOut}),400);
				});	
		$('#competetions_list').find('li[rel=2_2]').each(function() {
			controller.addTween(3900, TweenMax.to( $(this), 0.6, {delay:Math.random()*.2,css:{top:"155%",opacity:0}, ease:Quart.easeOut}),400);
				});		
		$('#competetions_list').find('li[rel=2_1]').each(function() {
					controller.addTween(3900, TweenMax.to( $(this), 0.8, {delay:Math.random()*.2,css:{top:"150%",opacity:0}, ease:Quart.easeOut}),400);
				});	
		// cat3	
		$('#competetions_list').find('li[rel=3_2]').each(function() {
			controller.addTween(4000, TweenMax.to( $(this), 0.6, {delay:Math.random()*.2,css:{top:"55%",opacity:1}, ease:Quart.easeOut}),400);
				});		
		$('#competetions_list').find('li[rel=3_1]').each(function() {
					controller.addTween(4000, TweenMax.to( $(this), 0.8, {delay:Math.random()*.2,css:{top:"15%",opacity:1}, ease:Quart.easeOut}),400);
				});	
		$('#competetions_list').find('li[rel=3_2]').each(function() {
			controller.addTween(4500, TweenMax.to( $(this), 0.6, {delay:Math.random()*.2,css:{top:"155%",opacity:0}, ease:Quart.easeOut}),400);
				});		
		$('#competetions_list').find('li[rel=3_1]').each(function() {
					controller.addTween(4500, TweenMax.to( $(this), 0.8, {delay:Math.random()*.2,css:{top:"150%",opacity:0}, ease:Quart.easeOut}),400);
				});	
		//cat 4
		$('#competetions_list').find('li[rel=4_2]').each(function() {
			controller.addTween(4600, TweenMax.to( $(this), 0.6, {delay:Math.random()*.2,css:{top:"55%",opacity:1}, ease:Quart.easeOut}),400);
				});		
		$('#competetions_list').find('li[rel=4_1]').each(function() {
					controller.addTween(4600, TweenMax.to( $(this), 0.8, {delay:Math.random()*.2,css:{top:"15%",opacity:1}, ease:Quart.easeOut}),400);
				});	
		$('#competetions_list').find('li[rel=4_2]').each(function() {
			controller.addTween(5100, TweenMax.to( $(this), 0.6, {delay:Math.random()*.2,css:{top:"155%",opacity:0}, ease:Quart.easeOut}),400);
				});		
		$('#competetions_list').find('li[rel=4_1]').each(function() {
					controller.addTween(5100, TweenMax.to( $(this), 0.8, {delay:Math.random()*.2,css:{top:"150%",opacity:0}, ease:Quart.easeOut}),400);
				});	
				$('#competetions_nav').find('li').each(function() {
		controller.addTween(5300, TweenMax.to( $(this), Math.random()*.2, {delay:Math.random()*.2,css:{top:"-50%",opacity:0}, ease:Quart.easeOut}),400);
				});		
		controller.addTween(
					5300,
					(new TimelineLite())
						.append([
							 TweenMax.to($('#half_top'), 0.6, {css:{marginTop: "-1300px",opacity:0}, ease:Quad.easeOut}),
							 TweenMax.to($('#half_bottom'), 0.6, {css:{marginTop: "1300px",opacity:0}, ease:Quad.easeOut})
						]),
					400 // scroll duration of tween
				);
		controller.addTween(
					5400,
					(new TimelineLite())
						.append([
							 TweenMax.to($('#thaikkudam_bridge'), 0.6, {css:{top:0,opacity:1}, ease:Quad.easeOut}),
							 TweenMax.to($('#bandits_stunts'), 0.6, {css:{top:"50%",opacity:1}, ease:Quad.easeOut}),

						]),
					400 // scroll duration of tween
				);
		controller.addTween(
					6300,
					(new TimelineLite())
						.append([
							 TweenMax.to($('#thaikkudam_bridge'), 0.6, {css:{top:"-120%",opacity:0}, ease:Quad.easeOut}),
							 TweenMax.to($('#bandits_stunts'), 0.6, {css:{top:0,opacity:1}, ease:Quad.easeOut}),
							 TweenMax.to($('#dj_show'), 0.6, {css:{top:"50%",opacity:1}, ease:Quad.easeOut}),

						]),
					400 // scroll duration of tween
				);
		/*controller.addTween(
					6100,
					(new TimelineLite())
						.append([
							 TweenMax.to($('#bandits_stunts'), 0.6, {css:{top:"-150%",opacity:1}, ease:Quad.easeOut}),
							 TweenMax.to($('#dj_show'), 0.6, {css:{top:"50%",opacity:1}, ease:Quad.easeOut}),

						]),
					400 // scroll duration of tween
				);*/
		controller.addTween(6800, TweenMax.to($('#page_contact'), .75, {css:{top: "0%"}, ease:Quad.easeOut}),400);									 
	}
});

// frontpage parallax
$(document).ready(function() {
	jQuery('.parallax-layer').parallax({mouseport:$("#page_presents")});
});