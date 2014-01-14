$(document).ready(function() {
	$('body').css('visibility', 'visible');

	function initScrollAnimations() {
	var controller = $.superscrollorama();
	///controller.addTween(10, TweenMax.to($('#fireball'), 0.9, {css:{top: "100%",right:"100%",scale:1}, ease:Quad.easeOut}),200);
	controller.addTween(
		10,
					(new TimelineLite())
						.append([
							TweenMax.to($('#front_nav'), 1, 
								{css:{top: "-=200"}, immediateRender:true}),
							TweenMax.to($('#fireball'), 0.6, {css:{top: "40%",right:"100%",scale:1,opacity:0}, ease:Quad.easeOut}),
							//TweenMax.to($('#front_logo'), 0.7, {css:{top: "5%",left:"5%",scale:0.3}, ease:Quad.easeOut}),
							TweenMax.to($('#facebook'), 0.7, {css:{top: "20%"}, ease:Bounce.easeOut}),
							TweenMax.to($('#register'), 0.4, {css:{left: "-20%"}, ease:Bounce.easeOut})
						]),
					900 // scroll duration of tween
				);
	
	}
	
	initScrollAnimations();
});

// frontpage parallax
$(document).ready(function() {
	jQuery('.parallax-layer').parallax({mouseport:$("header#home")});
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
