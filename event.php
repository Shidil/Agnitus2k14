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
							<article style="width:170px" class="span4 project 2k13gallery" data-tags="celebration,manners" id="gallery_"' . $name1 . ' rel="' . $cat . '">
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
	<div class="page_quote" id="events_quote"></div>
	<div class="page_content" id="events_content">
		<div id="events_tabs">
			<ul class="events_tabs_list">
				<li class="events_tab" title="PROGRA NOSTICAE">
					PROGRA NOSTICAE
				</li>
				<li class="events_tab" title="CIRKYUZONIA">
					CIRKYUZONIA
				</li>
				<li class="events_tab" title="ROBOMANIA">
					ROBOMANIA
				</li>
				<li class="events_tab" title="EL TEASORO">
					EL TEASORO
				</li>
			</ul>
		</div>
		<div class="evens_page" id="events_page_container">
			<ul id="event_list">
				<li id="events_quote">
					<span class="quote_line">"Competitive toughness is an acquired skill and not an inherited gift."</span>
					<span class="quote_author"> - Chris Evert</span>
				</li>
			</ul>
		</div>
	</div>

</section>
