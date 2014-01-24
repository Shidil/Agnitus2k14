<?php
include 'define.php';
include ROOT.'header.php';
function isEvent($item) {

	if (is_dir('events/' . strtoupper($item))) {
		return 1;
	} else if (is_dir('events/CIRKYUZONIA/' . strtoupper($item))) {
		return 2;
	} else if (is_dir('events/EL TEASORO/' . strtoupper($item))) {
		return 2;
	} else if (is_dir('events/PROGRA NOSTICAE/' . strtoupper($item))) {
		return 2;
	} else if (is_dir('events/ROBOMANIA/' . strtoupper($item))) {
		return 2;
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
								<div class="img-container-frame"> </div>
								<div class="event_container_title">' . $name1 . '</div>
								</article>
							</li>';
	}
}
?>
<body>
<?php if($_GET):
?>
<?php	if($_GET['cat'] and ! $_GET['event']):
?>

<?php
$item_title = strtoupper(str_replace("-", " ", $_GET['cat']));
//echo isEvent($_GET['cat']);
?>

<?php endif; ?>
<?php endif; ?>
<div id="new_wrapper">
<div id="new_event_header">
	<div id="new_logo">

	</div>
	<div id="new_title">
		<?php echo $item_title; ?>
	</div>

	<div id="new_navigation">
		<ul>
			<li class="new_nav_item">
				PROGRA NOSTICAE
			</li>
			<li class="new_nav_item">
				CIRKYUZONIA
			</li>
			<li class="new_nav_item">
				ROBOMANIA
			</li>
			<li class="new_nav_item">
				NOE FRICZIONAI
			</li>
			<li class="new_nav_item">
				OTHER EVENTS
			</li>
		</ul>
	</div>
</div>
<div id="new_event_container">
	<ul id="competetions_list">
		<?php printEventList('PROGRA NOSTICAE', 1); ?>
		<?php printEventList('CIRKYUZONIA', 2); ?>
		<?php printEventList('ROBOMANIA', 3); ?>
		<?php printEventList('EL TEASORO', 4); ?>
	</ul>
</div>

</div>
</body>
</html>