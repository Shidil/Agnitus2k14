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
