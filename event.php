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
								<div class="event_container_title">'.$name1.'</div>
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
					NOE FRICZIONAI
				</li>
			</ul>
		</div>
		<ul id="competetions_cat">
			<li id="cat_code" style="left:0%;">
				<a href="<?php echo DOMAIN; ?>events/progra-nosticae" target="_blank">
				<article style="width:200px;margin:0;position:relative;" class="span4 project"  >
					<div class="img-container-image">
						<img src="images/code.jpg" alt="" style="height: 100%;"/>
					</div>
					<div class="img-container-frame" style="width: 100%;z-index: 223;top: 259px;height: 214px;"> </div>
					<div class="event_container_title" style="text-shadow: 0px 0px 3px #DFDFDF;width: 100%;font-size: 18px;z-index: 224;top: 368px;">PROGRA NOSTICAE</div>
				</article>
				</a>
			</li>
			<li id="cat_circuit" style="left:20%;">
				<a href="<?php echo DOMAIN; ?>events/cirkyuzonia" target="_blank">
				<article style="width:200px;margin:0;position:relative;" class="span4 project"  >
					<div class="img-container-image">
						<img src="images/circuit.jpg" alt="" style="height: 100%;"/>
					</div>
					<div class="img-container-frame" style="width: 100%;z-index: 223;top: 259px;height: 214px;"> </div>
					<div class="event_container_title" style="text-shadow: 0px 0px 3px #DFDFDF;width: 100%;font-size: 18px;z-index: 224;top: 368px;">CIRKYUZONIA</div>
				</article>
				</a>
			</li>
			<li id="cat_robo" style="left:40%;">
				<a href="<?php echo DOMAIN; ?>events/robomania" target="_blank">
				<article style="width:200px;margin:0;position:relative;" class="span4 project"  >
					<div class="img-container-image">
						<img src="images/robo.jpg" alt="" style="height: 100%;"/>
					</div>
					<div class="img-container-frame" style="width: 100%;z-index: 223;top: 259px;height: 214px;"> </div>
					<div class="event_container_title" style="text-shadow: 0px 0px 3px #DFDFDF;width: 100%;font-size: 18px;z-index: 224;top: 368px;">ROBOMANIA</div>
				</article>
				</a>
			</li>
			<li id="cat_mech" style="left:60%;">
				<a href="<?php echo DOMAIN; ?>events/noe-friczionae" target="_blank">
				<article style="width:200px;margin:0;position:relative;" class="span4 project"  >
					<div class="img-container-image">
						<img src="images/mech.jpg" alt="" style="height: 100%;"/>
					</div>
					<div class="img-container-frame" style="width: 100%;z-index: 223;top: 259px;height: 214px;"> </div>
					<div class="event_container_title" style="text-shadow: 0px 0px 3px #DFDFDF;width: 100%;font-size: 18px;z-index: 224;top: 368px;">NOE FRICZIONAE</div>
				</article>
				</a>
			</li>
			<li id="cat_other" style="left:80%;">
				
				<article style="width:200px;margin:0;position:relative;" class="span4 project">
					<div class="img-container-image">
						
  <a href="<?php echo DOMAIN; ?>events/general" target="_blank">
    <img alt="" style="height: 43%;" id="img_general" src="images/other1.jpg"></a></div><div class="img-container-image" style="
    top: 43%;
">
<a href="<?php echo DOMAIN; ?>events/fun-zone" target="_blank">
  <img alt="" style="height: 43%;padding-top: 51px;background: black;" id="img_fun" src="images/other.jpg"></a>
					</div>
					<div class="img-container-frame" style="width: 100%;z-index: 220;top: 259px;height: 220px;"> </div>
					<div class="event_container_title" style="text-shadow: 0px 0px 3px #DFDFDF;width: 100%;font-size: 18px;z-index: 224;top: 178px;">GENERAL EVENTS</div><div class="event_container_title" style="text-shadow: 0px 0px 3px #DFDFDF;width: 100%;font-size: 18px;z-index: 224;top: 407px;">FUNZONE</div>
				</article>
				</a>
			</li>
		</ul>
		<ul id="competetions_list">
			<?php //printEventList('PROGRA NOSTICAE', 1); ?>
			<?php //printEventList('CIRKYUZONIA', 2); ?>
			<?php //printEventList('ROBOMANIA', 3); ?>
			<?php //printEventList('NOE FRICZIONAE', 4); ?>
		</ul>
	</div>
</section>

