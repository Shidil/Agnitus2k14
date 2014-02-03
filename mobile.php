<?php

function isEvent($item) {

	if (is_dir('events/' . strtoupper($item))) {
		return 1;
	} else if (is_dir('events/CIRKYUZONIA/' . strtoupper($item))) {
		return array(2,'CIRKYUZONIA');
	} else if (is_dir('events/EL TEASORO/' . strtoupper($item))) {
		return array(2,'NOE FRICZIONAE');
	} else if (is_dir('events/PROGRA NOSTICAE/' . strtoupper($item))) {
		return array(2,'PROGRA NOSTICAE');
	} else if (is_dir('events/ROBOMANIA/' . strtoupper($item))) {
		return array(2,'ROBOMANIA');
	} else if (is_dir('events/GENERAL/' . strtoupper($item))) {
		return array(2,'GENERAL');
	} else
		return false;

}

function printEventList($cat, $page = '1') {
	$yourStartingPath = ROOT . 'events/' . $cat;
	$section = 1;
	$directories = glob($yourStartingPath . '/*', GLOB_ONLYDIR);
	foreach ($directories as $key => $file) {
		$name = strtolower(str_replace(" ", "-", $file));
		$name = strtolower(str_replace($syourStartingPath . '/', "", $name));
		$name1 = str_replace($yourStartingPath . '/', "", $file);
		if ($key == 4)
			$section = 2;
		echo '  
							<li class="item item' . $key . '" rel="' . $page . '_' . $section . '"> 
							<!-- Gallery Item -->
							<article style="width:170px;margin:0;position:relative;" class="span4 project 2k13gallery" data-tags="celebration,manners" id="gallery_"' . $name1 . ' rel="' . $cat . '">
							  <div class="img-container-image" rel="' . $name1 . '">
								<img src="'.DOMAIN.'events/' . $cat . '/' . $name1 . '/thumb.jpg" alt="" />
								</div>
								<!--<div class="img-container-frame"></div> -->
								<div class="event_container_title">' . $name1 . '</div>
								</article>
							</li>';
	}
}
function isPage($ip){
	switch($ip){
		case 'events': return 'events';
		case 'nite': return 'nite';
		case 'register': return 'register';
		case 'contact': return 'contact';
		default: return '404';
	}
}
?>
<?php
if($_GET['page']){
	$title=isPage($_GET['page']);
}
else{
	$title='home';
}
?>
<html>
	<head>
		<title>Agnitus 2K14 | National Level Inter-Collegiate Techno Extravaganza</title>
		<script type="text/javascript" src="<?php echo DOMAIN; ?>js/jquery-1.8.3.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Favicon -->
		<link href="<?php echo DOMAIN; ?>img/favicon.png" rel="icon" type="image/png" />
		<link rel="stylesheet" href="<?php echo DOMAIN; ?>css/mobile.css" type="text/css" media="screen" />
		<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
<body>

<div id="wrapper">
	<div id="home">
		<div class="logo">
			<img src="<?php echo DOMAIN; ?>images/logo.png" alt="Agnitus 2K14" />
		</div>
		<div class="register">
			<img src="<?php echo DOMAIN; ?>images/register.png" alt="Register now" />
		</div>
	</div>
	<div id="events">
		Events
	</div>
	<div id="nite">
	
	</div>
	<div id="register">
		Register
	</div>
	<div id="contact">
		Contact Us
	</div>
	<div id="footer">
	
	</div>
</div>
</body>
</html>