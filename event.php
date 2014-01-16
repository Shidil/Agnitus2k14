<?php

function printEventList($cat, $page = '1') {
	$yourStartingPath = ROOT . 'events/' . $cat;
	$section = 1;
	$directories = glob($yourStartingPath . '/*', GLOB_ONLYDIR);
	foreach ($directories as $key => $file) {
		$name = strtolower(str_replace(" ", "-", $file));
		$name = strtolower(str_replace($yourStartingPath . '/', "", $name));
		$name1 = str_replace($yourStartingPath . '/', "", $file);
		if ($key == 4)
			$section = 2;
		echo '  
							<li class="item item' . $key . '" rel="' . $page . '_' . $section . '"> 
							<!-- Gallery Item -->
							<article style="width:170px;margin:0;position:relative;" class="span4 project 2k13gallery" data-tags="celebration,manners" id="gallery_"' . $name1 . ' rel="' . $cat . '">
							  <div class="img-container-image" rel="' . $name1 . '">
								<img src="events/' . $cat . '/' . $name1 . '/thumb.jpg" alt="" />
								</div>
								<div class="img-container-frame"> </div>
								</article>
							</li>';
	}
}
?>

<section id="page_competetions">
	<div class="viewport">
		<div id="competetion_bg"></div>
		<div id="half_top"></div>
		<div id="half_bottom"></div>
		<div id="comp_title">
			EVENTS
		</div>
		<div id="competetions_nav_container">
			<ul id="competetions_nav">
				<li style="left:0%">
					PROGRA NOSTICAE
				</li>
				<li style="left:25%">
					CIRKYUZONIA
				</li>
				<li style="left:50%">
					ROBOMANIA
				</li>
				<li style="left:75%">
					EL TEASORO
				</li>
			</ul>
		</div>
		<ul id="competetions_list">
			<?php printEventList('PROGRA NOSTICAE', 1); ?>
			<?php printEventList('CIRKYUZONIA', 2); ?>
			<?php printEventList('ROBOMANIA', 3); ?>
			<?php printEventList('EL TEASORO', 4); ?>
		</ul>
	</div>
</section>

