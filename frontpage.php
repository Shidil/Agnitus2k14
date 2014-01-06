<?php

/* front page which contains logo*/

	$now = time();
	$config=array(	'targetDate' => array(	// Target countdown date
		'day'				=> 14,
		'month'				=> 2,
		'year'				=> 2014,
		'hour'				=> 9,
		'minute'			=> 0,
		'second'			=> 0
	)
	);
	$target = mktime(
		$config['targetDate']['hour'], 
		$config['targetDate']['minute'], 
		$config['targetDate']['second'], 
		$config['targetDate']['month'], 
		$config['targetDate']['day'], 
		$config['targetDate']['year']
	);

	$diffSecs = $target - $now;

	$date = array();
	$date['secs'] = $diffSecs % 60;
	$date['mins'] = floor($diffSecs/60)%60;
	$date['hours'] = floor($diffSecs/60/60)%24;
	$date['days'] = floor($diffSecs/60/60/24)%7;
	$date['weeks']	= floor($diffSecs/60/60/24/7);
	
	foreach ($date as $i => $d) {
		$d1 = $d%10;
		$d2 = ($d-$d1) / 10;
		$date[$i] = array(
			(int)$d2,
			(int)$d1,
			(int)$d
		);
	}
?>

<header id="home" class="header">
  
  <div id="front_logo">
  	<img src="images/front/logo_lights.png" id="logo_lights"/>
  	<img src="images/front/layer1.png" id="logo_image"/>
  </div>
  		<h1>Agnitus 2k14</h1>
		<h3>UNDER CONSTRUCTION</h1>
    <!-- Counter Container -->
    <div class="counter-container">

		<!-- Countdown dashboard start
		<div id="countdown_dashboard">
			<div class="dash weeks_dash">
				<span class="dash_title">weeks</span>
				<div class="digit"><?=$date['weeks'][0]?></div>
				<div class="digit"><?=$date['weeks'][1]?></div>
			</div>

			<div class="dash days_dash">
				<span class="dash_title">days</span>
				<div class="digit"><?=$date['days'][0]?></div>
				<div class="digit"><?=$date['days'][1]?></div>
			</div>

			<div class="dash hours_dash">
				<span class="dash_title">hours</span>
				<div class="digit"><?=$date['hours'][0]?></div>
				<div class="digit"><?=$date['hours'][1]?></div>
			</div>

			<div class="dash minutes_dash">
				<span class="dash_title">minutes</span>
				<div class="digit"><?=$date['mins'][0]?></div>
				<div class="digit"><?=$date['mins'][1]?></div>
			</div>

			<div class="dash seconds_dash">
				<span class="dash_title">seconds</span>
				<div class="digit"><?=$date['secs'][0]?></div>
				<div class="digit"><?=$date['secs'][1]?></div>
			</div>

		</div>
		Countdown dashboard end -->



		<!--<script language="javascript" type="text/javascript">
			jQuery(document).ready(function() {
				$('#countdown_dashboard').countDown({
					targetDate: {
						'day': 		<?=$config['targetDate']['day']?>,
						'month': 	<?=$config['targetDate']['month']?>,
						'year': 	<?=$config['targetDate']['year']?>,
						'hour': 	<?=$config['targetDate']['hour']?>,
						'min': 		<?=$config['targetDate']['minute']?>,
						'sec': 		<?=$config['targetDate']['second']?>
					}
				});
				
				// Subscription functions
				$('#email_field').focus(email_focus).blur(email_blur);
				$('#subscribe_form').bind('submit', subscribe_submit);
			});
		</script> -->
      <div class="space50"></div>
      <div class="space200 hidden-phone"></div>
    </div>
    <!-- Counter Container End -->
    
    <!-- Menu Row  -->

  </header>
  <!-- Header End -->
  