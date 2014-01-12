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
	<div class="page_quote" id="events_quote">"Competitive toughness is an acquired skill and not an inherited gift." - Chris Evert</div>
	<div class="page_content" id="events_content">
		<div id="diamond_wrapper">
			<div id="diamond" class="diamond center">
				<div class="inner">
					<div class="sst-cross">
						<div class="sst-cross-lines">
							<div class="sst-cross-line first"></div><div class="sst-cross-line"></div>
						</div><div class="sst-cross-center"></div>
					</div>

					<h1 id="site-title"><a id="logo" href=""> <img src="images/logo-small.png" width="143" height="143"> </a></h1>

					<nav id="main-nav" class="header-nav">
						<ul id="menu-main-nav" class="menu">
							<li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23">
								<a title="PROGRA NOSTICAE" >PROGRA NOSTICAE</a>
							</li>
							<li id="menu-item-24" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24">
								<a title="CIRKYUZONIA" >CIRKYUZONIA</a>
							</li>
							<li id="menu-item-25" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25">
								<a title="ROBOMANIA" >ROBOMANIA</a>
							</li>
							<li id="menu-item-26" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26">
								<a title="EL TEASORO">EL TEASORO</a>
							</li>
						</ul>
					</nav>

					<!--<div class="rotateinner">
					<ul class="social-links icons ">
					<li class="social-link twitter ">
					<a class="icon" href="http://twitter.com/secretstudy" target="_blank"><span class="text-content">Twitter</span></a>
					</li>
					</ul>
					</div>-->

				</div>
			</div>
		</div>
	</div>
	<div class="evens_page" id="events_page_container">
		<div id="diamond-small" class="diamond dark">
			<div class="inner">
				<div class="sst-cross">
					<div class="sst-cross-lines">
						<div class="sst-cross-line first"></div><div class="sst-cross-line"></div>
					</div><div class="sst-cross-center" style="-webkit-transform: rotate(45deg); height: 8px; width: 8px; margin-top: -4px; margin-left: -4px; background-color: rgb(235, 98, 98);"></div>
				</div>

				<nav id="main-nav-small" class="header-nav">
					<ul id="menu-main-nav-1" class="menu">
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23">
							<a title="About">PROGRA NOSTICAE</a>
						</li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 current-menu-item">
							<a title="Services" >CIRKYUZONIA</a>
						</li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25">
							<a title="Clients" >ROBOMANIA</a>
						</li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26">
							<a title="Projects" >EL TEASORO</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<ul id="event_list">

		</ul>
	</div>
</section>
