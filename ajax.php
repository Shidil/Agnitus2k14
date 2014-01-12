<?php
include 'define.php';
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

$rules = "";
$description = "";
$contact = "";
$title = "";
if ($_POST) {

	if ($_POST['type'] == "event") {
		if ($_POST['item'] && $_POST['cat']) {

			$path = ROOT . 'events/' . $_POST['cat'] . '/' . $_POST['item'];
			$dpath = 'events/' . $_POST['cat'] . '/' . $_POST['item'];
			if (file_exists($path . '/details.html')) {
				$rules = "";
				$description = "";
				$contact = "";
				$doc = new DOMDocument();
				$doc -> load($path . '/details.html');
				$items = $doc -> getElementsByTagName('rules');
				if (count($items) > 0)//Only if tag1 items are found
				{
					foreach ($items as $tag1) {
						// Do something with $tag1->nodeValue and save your modifications
						$rules .= $tag1 -> nodeValue;
					}
				}
				$items = $doc -> getElementsByTagName('title');
				if (count($items) > 0)//Only if tag1 items are found
				{
					foreach ($items as $tag1) {
						// Do something with $tag1->nodeValue and save your modifications
						$title .= $tag1 -> nodeValue;
					}
				}
				$items = $doc -> getElementsByTagName('contact');
				if (count($items) > 0)//Only if tag1 items are found
				{
					foreach ($items as $tag1) {
						// Do something with $tag1->nodeValue and save your modifications
						$contact .= $tag1 -> nodeValue;
					}
				}
				$items = $doc -> getElementsByTagName('description');
				if (count($items) > 0)//Only if tag1 items are found
				{
					foreach ($items as $tag1) {
						// Do something with $tag1->nodeValue and save your modifications
						$description .= $tag1 -> nodeValue;
					}
				}
			}

			echo '<div class="lightbox_container">
				<div class="lightbox_title">
				' . $title . '
				</div>
				<div class="lightbox_content">
					<div class="lightbox_photo">
						<img src="' . $dpath . '/thumb.jpg" />
					</div>
					<div class="lightbox_details">
						' . $description . '<br/>' . $rules . '
					</div>
				</div>
			</div>
			';

		}
	}
	elseif ($_POST['type'] == "list") {
		if($_POST['cat']) {
			//echo $cat;
			printEventList($_POST['cat']);
		}
	}
}
?>