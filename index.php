<?php

/* bootstrap for website*/
include 'define.php';
include 'header.php';
?>

<body data-spy="scroll" data-target=".navbar">
	<div id="scroll_down">
	</div>
	<div class="superscrollorama-pin-spacer" style="position: relative; top: 0px; left: -1363px; height: 10683px;"></div>
	<div id="timeline">
	<?php
	include 'frontpage.php';
	include 'invitation.php';
	include 'event.php';
	?>
	<?php
	//include 'previous.php';
	include 'nite.php';
	?>
	<?php ?>
	<?php
	include 'contact.php';
	?>
	</div>
	<!-- JavaScripts -->

	<script language="Javascript" type="text/javascript" src="js/jquery.lwtCountdown-1.0.js"></script>
	<script language="Javascript" type="text/javascript" src="js/misc.js"></script>
	<!-- Add fancyBox -->
	<link rel="stylesheet" href="fancybox/sources/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="fancybox/sources/jquery.fancybox.pack.js?v=2.1.5"></script>
	<script type="text/javascript" src="js/raphael-min.js"></script>
	<script type="text/javascript" src="js/jquery.lazylinepainter-1.4.1.min.js"></script>
	<script type="text/javascript" src="js/gallery.js"></script>
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
	<script src="js/jquery.parallax.min.js"></script>
	<script type="text/javascript" src="js/animations.js"></script>
	<script src="js/jquery.smooth-scroll.min.js"></script>
</body>

<?
//end
?>