<?php

/* bootstrap for website*/
include 'define.php';
include 'header.php';
?>

<body data-spy="scroll" data-target=".navbar">
	<div id="scroll_down">

	</div>
	<div id="lightbox_wrapper">

	</div>
	<?php
	include 'frontpage.php';
	?>
	<div id='demo'></div>
	<?php
	include 'previous.php';
	?>
	<?php
	include 'invitation.php';
	?>
	<?php
	include 'contact.php';
	?>
	<!-- JavaScripts -->

	<script language="Javascript" type="text/javascript" src="js/jquery.lwtCountdown-1.0.js"></script>
	<script language="Javascript" type="text/javascript" src="js/misc.js"></script>
	<!-- Add fancyBox -->
	<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<script type="text/javascript" src="js/raphael-min.js"></script>
	<script type="text/javascript" src="js/jquery.lazylinepainter-1.4.1.min.js"></script>
	<script type="text/javascript" src="js/gallery.js"></script>

	<script type="text/javascript" src="js/animations.js"></script>
	<script type="text/javascript" src="js/vertical.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.refineslide.js"></script>
	<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/retina.js"></script>
	<script type="text/javascript" src="js/animate.js"></script>
	<script type="text/javascript" src="js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="js/sly.js"></script>
	<script type="text/javascript" src="js/scale.fix.js"></script>
	<script type="text/javascript" src="js/jquery.countdown.js"></script>
	<script type="text/javascript" src="js/jquery.scrollTo.js"></script>
	<script type="text/javascript" src="js/jquery.localScroll.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/greensock/TweenMax.min.js"></script>
	<script src="js/jquery.lettering-0.6.1.min.js"></script>
	<script src="js/jquery.superscrollorama.js"></script>
	<script>
		$(document).ready(function() {

			$('body').css('visibility', 'visible');

			// TimelineLite for title animation, then start up superscrollorama when complete
			(new TimelineLite({
				onComplete : loopAnimation
			})).append([TweenMax.fromTo($('#logo_lights'), 3, {
				css : {
					opacity : '0',
					scaleX : '4',
					scaleY : '4'
				}
			}, {
				css : {
					opacity : '0.7',
					scaleX : '1',
					scaleY : '1'
				},
				ease : Bounce.easeOut
			})/*, TweenMax.fromTo($('#logo_image'), 2, {
			 css : {
			 opacity : '0',
			 scaleX : '0',
			 scaleY : '0'
			 }
			 }, {
			 css : {
			 opacity : '1',
			 scaleX : '1',
			 scaleY : '1'
			 },
			 ease : Quad.easeOut
			 })*/]);
			function loopAnimation() {
				TweenMax.to($('#logo_lights'), 1, {
					css : {
						opacity : '0.7',
						scaleX : '1.2',
						scaleY : '1.2'
					},
					ease : Expo.easeIn,
					repeat : -1,
					yoyo : true
				});
			}

		});

	</script>
</body>

<?
//end
?>