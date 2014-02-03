<?php
include 'define.php';
function bbcode($input) {
	$these = array('[b]', '[/b]', '[br]','[br/]','[li]','[/li]','[p]','[/p]','[img','[/img]','*DOMAIN*');
	$to = array('<b>', '</b>', '<br>', '<br/>','<li>','</li>','<p>','</p>','<img','/>',DOMAIN);
	return (str_replace($these, $to, $input));
}

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
								<img src="<?php echo DOMAIN; ?>events/' . $cat . '/' . $name1 . '/thumb.jpg" alt="" />
							</li>';
	}
}

$rules = "<ul>";
$description = "";
$format = "";
$contact = "";
$title = "";
$prize = '';
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
				$items = $doc -> getElementsByTagName('format');
				if (count($items) > 0)//Only if tag1 items are found
				{
					foreach ($items as $tag1) {
						// Do something with $tag1->nodeValue and save your modifications
						$format .= $tag1 -> nodeValue;
					}
				}
				$items = $doc -> getElementsByTagName('prize');
				if (count($items) > 0)//Only if tag1 items are found
				{
					foreach ($items as $tag1) {
						// Do something with $tag1->nodeValue and save your modifications
						$prize .= $tag1 -> nodeValue;
					}
				}
			}
			$rules = bbcode($rules).'</ul>';
			$description = bbcode($description);
			$format = bbcode($format);
			$contact = bbcode($contact);
			$prize = bbcode($prize);
			echo '<div class="lightbox_container">
				<div class="lightbox_title">
				' . $title . '
				</div>
				<div class="lightbox_content">
					<div class="lightbox_photo">
						<img src="' . DOMAIN.$dpath . '/thumb.jpg" />
					</div>
					<ul class="lightbox_tabs">
						<li class="selected" rel="lightbox_description">Description</li>
						<li rel="lightbox_format">Format</li>
						<li rel="lightbox_rules">Rules</li>
						<li rel="lightbox_contact">Contact</li>
					</ul>
					<div class="lightbox_details">
						<div class="lightbox_detail_content">
							<div id="lightbox_description" class="lightbox_detail_c visible">' . $description . '</div>
							<div id="lightbox_format" class="lightbox_detail_c hidden"> '.$format.'  </div>
							<div id="lightbox_rules" class="lightbox_detail_c hidden">' . $rules . '</div>
							<div id="lightbox_contact" class="lightbox_detail_c hidden">' . $contact . '</div>
						</div>
						<div class="lightbox_event_prize"> Prize - ' . $prize . '</div>
					</div>
				</div>
			</div>
			';

		}
	} elseif ($_POST['type'] == "list") {
		if ($_POST['cat']) {
			//echo $cat;
			printEventList($_POST['cat']);
		}
	} elseif ($_POST['type'] == 'register') {
		if ($_POST['email'] && $_POST['name'] && $_POST['gender'] && $_POST['phone']) {
			// start registering
			
			$name = $_POST['name'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$phone = $_POST['phone'];
			$college = $_POST['college'];
			$dept = $_POST['dept'];
			$accom = $_POST['accom'];
			$dob = $_POST['dob'];
			// check validity prints true for success or false for failure/invalid input

			// build query
			$query ='INSERT INTO register ( name, dob, college, phone, email, gender, department, accomodation) VALUES (:name,:dob,:college,:phone,:email,:gender,:dept,:accom)';
			//$query = "INSERT INTO register  ( name, dob, college, phone, email, gender, department, accomodation) VALUES ('$name','$dob','$college','$phone','$email','$gender','$dept','$accom')";
			// Insert registration
			//chmod('manage',777);
			$dbh= new PDO('sqlite:manage/register.db');
			$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//$dbhandle = sqlite_open('manage/register.db', 0666, $error);
			if (!$dbh) die ('false');
			try{
				$stmt=$dbh->prepare($query);
				$stmt->execute(array(':name'=>$name,':dob'=>$dob,':college'=>$college,':phone'=>$phone,':email'=>$email,':gender'=>$gender,':dept'=>$dept,':accom'=>$accom));
				//$dbh->exec($query);
			}
			catch(PDOException $e){
				die($e);
			}
			die('true');
		} else
			die ('false');
	}
}
?>