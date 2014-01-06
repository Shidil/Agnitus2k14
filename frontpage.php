<?php

/* front page which contains logo*/

?>
<header id="home" class="header">
  
    <!-- Counter Container -->
    <div class="counter-container">
		<h1>Agnitus 2k14</h1>
		<h2>UNDER CONSTRUCTION</h1>
		<h3 class="subtitle">Stay tuned for news and updates.</h2>

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
		<div class="dev_comment">
			This is a place holder for your comments.<br/>
			This page has been tested with <br />IE 6, IE 7, IE 8, FF 3, Safari 4, Opera 9, Chrome 4
		</div>


		<script language="javascript" type="text/javascript">
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
		</script> 
      <div class="space50"></div>
      <div class="space200 hidden-phone"></div>
    </div>
    <!-- Counter Container End -->
    
    <!-- Menu Row  -->

  </header>
  <!-- Header End -->
  