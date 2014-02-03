<?php
include 'define.php';
//include ROOT.'header.php';
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
?>
<?php	
	if($_GET['cat'])
	{
		$item_title = strtoupper(str_replace("-", " ", $_GET['cat']));
		$found_item=isEvent($item_title);
		if($found_item==false){
			header('HTTP/1.0 404 Not Found');
			include('404.html');
			exit();
		}
		if($found_item==1){
			//category found
		}
		if($found_item[0]==2){
			//event found
		}
	}
?>
<html>
	<head>
		<title><?php echo $item_title; ?> | Agnitus 2K14 | National Level Inter-Collegiate Techno Extravaganza</title>
		<script type="text/javascript" src="<?php echo DOMAIN; ?>js/jquery-1.8.3.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Favicon -->
		<link href="<?php echo DOMAIN; ?>img/favicon.png" rel="icon" type="image/png" />
		<script type="text/javascript" src="<?php echo DOMAIN; ?>js/greensock/TweenMax.min.js"></script>
		<script type="text/javascript" src="<?php echo DOMAIN; ?>js/gallery.js"></script>
		<link rel="stylesheet" href="<?php echo DOMAIN; ?>fancybox/sources/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
				<link rel="stylesheet" href="<?php echo DOMAIN; ?>css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo DOMAIN; ?>css/events.css" type="text/css" media="screen" />
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css' />
		<script src="<?php echo DOMAIN; ?>js/jquery.datepick.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Poiret+One|Unica+One|Just+Me+Again+Down+Here' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="<?php echo DOMAIN; ?>fancybox/sources/jquery.fancybox.pack.js?v=2.1.5"></script>
		<script src="<?php echo DOMAIN; ?>js/jquery.nicescroll.min.js"></script>
		<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script>
			var ajaxUrl='<?php echo DOMAIN; ?>';
		</script>
	</head>
<body>

<div id="new_wrapper">
<div id="timeline_overlay"></div>
<!--<div id="header_layer1" class="parallax-layer"></div>
<div id="header_layer2" class="parallax-layer"></div>-->
	<div id="new_logo">

	</div>
	<div id="new_title">
		<?php echo $item_title; ?>
	</div>

	<div id="new_navigation">
		<ul>
			<li class="new_nav_item<?php if($item_title=='PROGRA NOSTICAE') echo ' selected'; ?>"  >
				<a href="<?php echo DOMAIN; ?>events/progra-nosticae">PROGRA NOSTICAE</a>
			</li>
			<li class="new_nav_item<?php if($item_title=='CIRKYUZONIA') echo ' selected'; ?>" >
				<a href="<?php echo DOMAIN; ?>events/cirkyuzonia">CIRKYUZONIA</a>
			</li>
			<li class="new_nav_item<?php if($item_title=='ROBOMANIA') echo ' selected'; ?>" >
				<a href="<?php echo DOMAIN; ?>events/robomania">ROBOMANIA</a>
			</li>
			<li class="new_nav_item<?php if($item_title=='NOE FRICZIONAE') echo ' selected'; ?>" >
				<a href="<?php echo DOMAIN; ?>events/noe-friczionae">NOE FRICZIONAE</a>
			</li>
			<li class="new_nav_item<?php if($item_title=='GENERAL EVENTS') echo ' selected'; ?>" >
				<a href="<?php echo DOMAIN; ?>events/general">GENERAL EVENTS</a>
			</li>
		</ul>
		
	</div>
	<div id="new_scroll_down"></div>
<div id="new_event_container"  >
	<ul id="competetions_list" <?php if($item_title=='GENERAL') echo'style="max-height: 514px;overflow-y: scroll;position: relative;"';?>>
		<?php printEventList($item_title, 1); ?>
	</ul>
</div>

</div>
</body>
</html>