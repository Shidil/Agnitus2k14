<?php
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
<html>
	<head>
		<title>Agnitus 2k14</title>

		<link rel="Stylesheet" type="text/css" href="css/dark.css"></link>
		<link rel="Stylesheet" type="text/css" href="css/style.css"></link>
		  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--[if (gte IE 9)|!(IE)]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <![endif]--> 

  <!-- Favicon -->
  <link href="img/favicon.png" rel="icon" type="image/png" />

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.min.css" rel="stylesheet" />
  
  <!-- Styles -->
  <link href="less/styles.less" rel="stylesheet/less" /> 

  <!-- Bootstrap Override -->
  <link href="css/bootstrap-override.css" rel="stylesheet" />

  <!-- Retina Less -->
  <link href="less/retina.less" rel="stylesheet/less" />  

  <!-- Flexslider css -->
  <link href="css/flexslider.css" rel="stylesheet" />

  <!-- Refine Slider -->
  <link href="css/refineslide.css" rel="stylesheet" />  

  <!-- Magnific Popup -->
  <link href="css/magnific-popup.css" rel="stylesheet" /> 

  <!-- Animate -->    
  <link href="css/animate.css" rel="stylesheet" />
            
  <!-- Font Avesome Style -->
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet" />
                                               
  <!-- Entypo Icons -->    
  <link href="css/entypo.css" rel="stylesheet" />

  <!-- Web Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css' />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css' />

  <!-- Countdown Style -->
  <link rel="stylesheet" type="text/css" href="css/jquery.countdown.css" /> 
  
	<!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->   

  <!-- Less JS -->
  <script type="text/javascript" src="js/less-1.3.3.min.js"></script>
  <!-- JavaScripts -->

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
<?php ?>