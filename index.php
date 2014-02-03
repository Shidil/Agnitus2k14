<?php

/* bootstrap for website*/
include 'define.php';
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
 
// Any mobile device (phones or tablets).
//$detect->setUserAgent('BlackBerry7100i/4.1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 VendorID/103');
if ( $detect->isMobile() ) 
{
	include 'mobile.php';
	die();
}
include 'header.php';
?>

<body data-spy="scroll" data-target=".navbar">


	<div id="scroll_down">
	</div>
	<div class="superscrollorama-pin-spacer" style="position: absolute;
top: 0px;
left: 0px;
min-height: 8000px;
width: 100%;"></div>
	
	<div id="timeline">
	<div id="timeline_overlay"></div>
	<?php
		include 'frontpage.php';
		include 'invitation.php';
		include 'event.php';
		include 'nite.php';
		include 'contact.php';
		//include 'previous.php';
	?>
	<div id="main_nav_container">
		<div id="nav_toggle"><span id="float_menu"></span>
		</div>
		<div id="nav_home">H<span>Home</span></div>
		<div id="nav_about">A<span>About</span></div>
		<div id="nav_events">E <span>Events</span></div>
		<div id="nav_proshows">P <span>Pro shows</span></div>
		<div id="nav_contact">C <span>Contact Us</span></div>
	
	</div>
	<div id="copyright">
		<span id="copyright_text">© 2014 Agnitus.org</span>
		<span id="sponsored">Powered by <a href="http://dCitsie.com">dCitsie</a></span>
	</div>
	</div>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47281614-1', 'agnitus.org');
  ga('send', 'pageview');

</script>
</body>

<?
//end
?>