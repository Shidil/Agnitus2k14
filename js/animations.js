$(document).ready(function() {
	$('body').css('visibility', 'visible');
	function blabla(){
		$('#competetion_bg').fadeIn("fast");
	}
	function addItemTween(controller,item){
			$('#competetions_list').find('li[rel='+item+'_2]').each(function() {
			controller.addTween(2600+(parseInt(item)*200), TweenMax.to( $(this), 0.6, {delay:Math.random()*.2,css:{top:"55%",opacity:1}, ease:Expo.easeOut}),400);
				});		
		$('#competetions_list').find('li[rel='+item+'_1]').each(function() {
					controller.addTween(2600+(parseInt(item)*200), TweenMax.to( $(this), 0.8, {delay:Math.random()*.2,css:{top:"15%",opacity:1}, ease:Expo.easeOut}),400);
				});	
		$('#competetions_list').find('li[rel='+item+'_2]').each(function() {
			controller.addTween(2600+(parseInt(item)*200), TweenMax.to( $(this), 0.6, {delay:Math.random()*.2,css:{top:"155%",opacity:0}, ease:Expo.easeOut}),400);
				});		
		$('#competetions_list').find('li[rel='+item+'_1]').each(function() {
					controller.addTween(2600+(parseInt(item)*200), TweenMax.to( $(this), 0.8, {delay:Math.random()*.2,css:{top:"150%",opacity:0}, ease:Expo.easeOut}),400);
				});	
	}
	function initScrollAnimations() {
	var controller = $.superscrollorama();
	///controller.addTween(10, TweenMax.to($('#fireball'), 0.9, {css:{top: "100%",right:"100%",scale:1}, ease:Quad.easeOut}),200);
	controller.addTween(10, TweenMax.to($('#cover_top'), .75, {css:{top: -1600}, ease:Quad.easeOut}),1200);
	controller.addTween(13, TweenMax.to($('#cover_bottom'), .75, {css:{top: +1600}, ease:Quad.easeOut}),1200);
	controller.addTween(140, TweenMax.to($('#presents_title'), .75, {css:{top: -600}, ease:Quad.easeOut}),400);
	controller.addTween(140, TweenMax.to($('#presents_logo'), .75, {css:{top: "38%"}, ease:Quad.easeOut}),200);
	controller.addTween(800, TweenMax.to($('#page_info'), .75, {css:{top: "0%"}, ease:Quad.easeOut}),400);
	controller.addTween(
					850,
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
					controller.addTween(1000, TweenMax.from( $(this), 0.8, {delay:Math.random()*.2,css:{left:Math.random()*1200-600,top:Math.random()*600-300,opacity:0}, ease:Expo.easeOut}),200);
				});
		controller.addTween(1800, TweenMax.to($('#page_info'), .75, {css:{top: "-100%"}, ease:Quad.easeOut}),400);
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
		controller.addTween(2700,TweenMax.to($('#comp_title'), 2, {css:{top: "130%",opacity:0}, ease:Quad.easeOut}),1400);	
		addItemTween(controller,1);
		//addItemTween(controller,2);
		//addItemTween(controller,3);
		//addItemTween(controller,4);
	}
	initScrollAnimations();
});

// frontpage parallax
$(document).ready(function() {
	jQuery('.parallax-layer').parallax({mouseport:$("#page_presents")});
});
$(document).ready(function() {

	$('body').css('visibility', 'visible');

	// TimelineLite for title animation, then start up superscrollorama when complete
	(new TimelineLite({
		onComplete : loopScrollDown
	})).append([TweenMax.fromTo($('#scroll_down'), 0.8, {
		css : {
			opacity : '0',
			top : '78%',
			left : '-20%'
		}
	}, {
		css : {
			opacity : '0.7',
			top : '78%',
			left : '64%'
		},
		ease : Quad.easeOut
	})]);

	function loopScrollDown() {
		TweenMax.to($('#scroll_down'), 0.5, {
			css : {
				height : $('#scroll_down').height() + 30
				//margin : '6px 0px'
			},
			ease : Expo.easeIn,
			repeat : -1,
			yoyo : true
		});
	}

});
