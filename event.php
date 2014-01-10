<?php

function printEventList($cat) {
	$yourStartingPath = ROOT . 'events/' . $cat;
	$directories = glob($yourStartingPath . '/*', GLOB_ONLYDIR);
	foreach ($directories as $file) {
		$name = strtolower(str_replace(" ", "-", $file));
		$name = strtolower(str_replace($yourStartingPath . '/', "", $name));
		$name1 = str_replace($yourStartingPath . '/', "", $file);
		echo '  
							<li> 
							<!-- Gallery Item -->
							<article style="width:170px" class="span4 project 2k13gallery" data-tags="celebration,manners" id="gallery_"' . $name1 . ' rel="'.$cat.'">
							  <div class="img-container-image" rel="' . $name1 . '">
								<!-- Image -->
								<img src="events/' . $cat . '/' . $name1 . '/thumb.jpg" alt="" />
							</li>';
	}
}
?>
<section class="chart_section" id="events_container">
	<div class="page_title" id="events_title">
		Competetions
	</div>
	<div class="page_content" id="events_content">
		<div class="event_category" data-tags="cs">
			<div class="event_category_img">
				<!-- Image -->
				<span class="event_category_title">Coding</span>
				<img src="events/coding/thumb.jpg" alt="" />
			</div>
			<article class="event_category_list" id="coding_list" style="display: block;">
				<ul class="event_list">
					<?php printEventList('coding'); ?>
				</ul>
			</article>
		</div>
		<div class="event_category" data-tags="cs">
			<div class="event_category_img">
				<!-- Image -->
				<span class="event_category_title">Coding</span>
				<img src="events/robotic/thumb.jpg" alt="" />
			</div>
			<article class="event_category_list" id="robotic_list">
				<ul class="event_list">
					<?php printEventList('robotic'); ?>
				</ul>
			</article>
		</div>
		<!-- Event category Item -->
		<div class="event_category" data-tags="cs">
			<div class="event_category_img">
				<!-- Image -->
				<img src="events/circuits/thumb.jpg" alt="" />
			</div>
			<article class="event_category_list" id="circuits_list">
				<ul class="event_list">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</article>
		</div>
		<!-- Event category Item -->
		<div class="event_category" data-tags="cs">
			<div class="event_category_img">
				<!-- Image -->
				<img src="events/electric/thumb.jpg" alt="" />
			</div>
			<article class="event_category_list" id="electric_list">
				<ul class="event_list">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</article
		</div>
	</div>
	<div class="page_foot" id="events_foot">

	</div>
</section>
