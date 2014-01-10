<?php
include 'define.php';
$rules = "";
$description = "";
$contact = "";
$title="";
if ($_POST) {

	if ($_POST['type'] == "gallery") {
		if ($_POST['item'] && $_POST['cat']) {

			$path = ROOT . 'events/' . $_POST['cat'] . '/' . $_POST['item'];
			$dpath= 'events/' . $_POST['cat'] . '/' . $_POST['item'];
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
				'.$title.'
				</div>
				<div class="lightbox_content">
					<div class="lightbox_photo">
						<img src="'.$dpath.'/thumb.jpg" />
					</div>
					<div class="lightbox_details">
						' . $description . '<br/>'.$rules.'
					</div>
				</div>
			</div>
			';

		}
	}
}
?>