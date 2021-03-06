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
		<script language="Javascript" type="text/javascript" src="js/jquery.lwtCountdown-1.0.js"></script>
		<script language="Javascript" type="text/javascript" src="js/misc.js"></script>
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

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
	<body data-spy="scroll" data-target=".navbar">
	  <!-- Color Picker -->
  <div class="color-picker">
		<a href="#" class="handle"><i class="icon-cog"></i></a>
		<div class="settings-header">
			<h3>Setting Panel</h3>
			<span>set your favourite style</span>
		</div>
		<div class="section">
			<h4 class="color"><i class="icon-tint"></i> Color Schemes:</h4>
			<div class="colors">         
        <a href="#" class="orange" title="orange"></a>
        <a href="#" class="red" title="red"></a>
        <a href="#" class="red-2" title="red-2"></a>
        <a href="#" class="purple" title="purple"></a>
        <a href="#" class="violet" title="violet"></a>
        <a href="#" class="orange-2" title="orange-2"></a>
        <a href="#" class="yellow" title="yellow"></a>
        <a href="#" class="brown" title="brown"></a>
        <a href="#" class="green" title="green"></a>
        <a href="#" class="green-2" title="green-2"></a>
        <a href="#" class="green-3" title="green-3"></a>
        <a href="#" class="green-4" title="green-4"></a>
        <a href="#" class="blue" title="blue"></a>
        <a href="#" class="blue-2" title="blue-2"></a>
        <a href="#" class="blue-3" title="blue-3"></a>
        <a href="#" class="blue-4" title="blue-4"></a>
			  <div style="clear:both;"></div>
			</div>
		</div>
	</div>
  <!-- Color Picker End -->
  
  <!-- Header -->
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
    
    <!-- Menu Row -->  
        <div id="menu" class="default">  
      <div class="container">

          <div class="row">
            <div class="span3">        
              <a href="index.html">
                <!-- Logo -->
                <img class="logo" src="img/logo.png" alt="" />
              </a>
            </div>
            <div class="span9">
              <nav id="box-links" class="navbar">
                <!-- Menu -->
                <ul class="nav">
                  <li class="active"><a href="#home" title="">Home</a></li>
                  <li><a href="#invitation" title="">Invitation</a></li>
                  <li><a href="#event" title="">Event</a></li>
                  <li><a href="#blog" title="">Blog</a></li>
                  <li><a href="#gallery" title="">Gallery</a></li>
                  <li><a href="#contact" title="">Contact</a></li>
                  <!-- 
                  <li><a href="index.html" title=""><i class="icon-reorder"></i> Menu</a></li>
                  -->
                </ul>
                <!-- Menu End -->
              </nav>
            </div>
          </div>    
  
      </div>  
    </div>  
    <!-- Menu Row End -->   
  </header>
  <!-- Header End -->
  
  <!-- Content -->

  <!-- Invitation -->
  <div id="invitation" class="invitation"> 
    <div class="container">   
      <div class="row">   
        <div class="span12">
          <div class="space100"></div>   
          <h2 class="dark">Invitation</h2>
          <h4>HO! HO! HO! Christmas Event!</h4>
          <div class="space60"></div>
          <div class="invitation-content">
            <p>
              We invite all friends and business partners to a Christmas event to be held in the best local pube.  Let’s eat and drink :) We look forward to meeting you!
            </p> 
            <div class="space20"></div>  
            <!-- Video -->
            <iframe class="video-content" src="//www.youtube.com/embed/3gMcelIyC00"></iframe>
          </div>
        </div>  
      </div>
      
      <div class="row space40"></div>
      
      <div class="row">
        <div class="span12">
          <div class="social-container">
            <div class="social">
              <a href="#"><i class="icon-facebook a-pulse"></i></a>
              <a href="#"><i class="icon-google-plus a-pulse"></i></a>
              <a href="#"><i class="icon-twitter a-pulse"></i></a>
              <a href="#"><i class="icon-dribbble a-pulse"></i></a>
              <a href="#"><i class="icon-instagram a-pulse"></i></a>
   
            
            </div>
          </div>
        </div>  
      </div> 
      
      <div class="row space60"></div>

    </div>
  </div>
  <!-- Invitation End -->
  
  <!-- Event -->  
  <div id="event" class="event"> 
    <div class="container"> 
    
      <div class="row space90"></div>
      
      <div class="row">   
        <div class="span12">   
          <h2>Christmas Event</h2>
          <h4 class="theme-color">Read Detail Information</h4>
        </div>
      </div>  
      <div class="row space40"></div>  
         
      <div class="row">   
        <div class="span6 e-left">   

        </div>    
        <div class="span6 e-right">   
          <h4>Date & Time</h4>
        </div>
        <div class="span12 e-icon"> 
          <i class="icon-time"></i>
        </div>                    
      </div>         
      
      <div class="row info-row">   
        <div class="span12 content-right">
          <div class="row">  
            <div class="span5 offset6">
              <p>   
                24.12.2013<br />
                Start 18:00 pm  
              </p>
            </div>
          </div>
        </div>
      </div>  

      <div class="row">   
        <div class="span6 e-left">   
          <h4>Event Location</h4>
        </div>    
        <div class="span6 e-right">   

        </div>
        <div class="span12 e-icon"> 
          <i class="icon-location-arrow"></i>
        </div>                    
      </div>   
      
      <div class="row info-row">   
        <div class="span12 content-left">
          <div class="row">  
            <div class="span5 offset1">
              <p>
                The Monro, 92 Duke Street Liverpool<br />
                www.themonro.com | 0151 707 9933   
              </p>
            </div>
          </div>
        </div>
      </div>   

      <div class="row">   
        <div class="span6 e-left">   

        </div>    
        <div class="span6 e-right">   
          <h4>Info</h4>
        </div>
        <div class="span12 e-icon"> 
          <i class="icon-comment-alt"></i>
        </div>                    
      </div>      

      <div class="row info-row">   
        <div class="span12 content-right">
          <div class="row">  
            <div class="span5 offset6">
              <p>   
                Maybe I will give you a call sometime. Your number still 911? It’s because i’m green isn’t it! brain freeze. We’re going for a ride on the information super highway.         
              </p>
            </div>
          </div>
        </div>
      </div>   

      <div class="row">   
        <div class="span12">
          <div class="circle">
            <i class="icon-bell"></i>
          </div>
        </div>
      </div>      
      
      <div class="row space100"></div>
      
    </div>
  </div>
  <!-- Event End--> 
  
  <!-- Blog -->
  <div class="blog"> 
    <div class="container"> 

      <div class="row space90"></div> 
      
      <div class="row">  
        <div class="span12">
          <h2 class="dark">Blog</h2>
          <h4>SHARE EVERYTHING WITH FRIENDS</h4>
        </div>
      </div>    
      
      <div class="row space50"></div> 
  
      <div class="row">  
        <div class="span8">
          <h4 class="dark left">The Gifts are bought and wrapped</h4>
          <ul class="infoline upper">
            <li><span class="gray">By</span> Admin</li> 
            <li><span class="gray">Published</span> October 8, 2013</li> 
            <li><span class="gray">Tagged</span> Gift, Christmas</li>
          </ul>  
          <img src="img/blog/01.jpg" alt="" />
          <div class="space25"></div> 
          <p>     
            Reach out to all you know with this cute and brightpod. It’s not the size mate, it’s how you use it. Yes, i used a machine gun. You are as precious to me as you were to your own mother and father. I swore to them that i <span class="highlight-1">would protect you</span>, and i haven’t <span class="highlight-2">Christmas ecard</span>... Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis.
          </p>   
          <p>     
            <a href="#">Continue Reading <i class="icon-long-arrow-right"></i></a>
          </p>
          
          <div class="space30"></div> 
          
          <h4 class="dark left">The Gifts are bought and wrapped</h4>
          <ul class="infoline upper">
            <li><span class="gray">By</span> Admin</li> 
            <li><span class="gray">Published</span> October 8, 2013</li> 
            <li><span class="gray">Tagged</span> Gift, Christmas</li>
          </ul>  
          <blockquote>     
            Reach out to all you know with this cute and brDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est ght Christmas ecar. Doach out to all you knopiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis.          </blockquote>  
          <p>     
            <a href="#">Continue Reading <i class="icon-long-arrow-right"></i></a>
          </p>

          <div class="space30"></div> 
          
          <div class="paging">
            <button class="btn">First</button>
            <button class="btn active">1</button>
            <button class="btn">2</button>
            <button class="btn">3</button>
            <button class="btn">4</button>
            <button class="btn">5</button>
            <button class="btn">6</button>
            <button class="btn">Next</button>
            <button class="btn">Last</button>             
          </div>
           
          <div class="visible-phone space40"></div>  
           
        </div>
        <div class="span4">
          <!-- Right Bar -->
          <div class="sidebar">   
          
            <form class="search-form" />
              <input type="text" class="search" name="search" value="" placeholder="To search type and hit enter" />
            </form>
            
            <div class="space20"></div>
            
            <h6>Recent Posts</h6>
            <ul class="recent-posts">   
              <li>
                <span class="gray">PUBLISHED</span> July 8, 2013<br />
                <a href="#">Non auge inter mus, mattis tempor</a>
              </li>
              <li>
                <span class="gray">PUBLISHED</span> July 7, 2013<br />
                <a href="#">Lauge inter mus, mattis tempor</a>
              </li>
              <li>
                <span class="gray">PUBLISHED</span> July 6, 2013<br />
                <a href="#">How you use it. Yes, i used a machine</a>
              </li>
              <li>
                <span class="gray">PUBLISHED</span> July 4, 2013<br />
                <a href="#">Preparations for the party</a>
              </li>   
              <li>
                <span class="gray">PUBLISHED</span> July 3, 2013<br />
                <a href="#">Playlist: Man With No Name, Talamasca</a>
              </li>
              <li>
                <span class="gray">PUBLISHED</span> July 1, 2013<br />
                <a href="#">This is the real Party!!!</a>
              </li>   
            </ul>    
            
            <div class="space30"></div>

            <h6>Archive</h6>
            <ul class="list-a">
              <li><a href="#"><i class="icon-chevron-right"></i>August 2013</a></li>
              <li><a href="#"><i class="icon-chevron-right"></i>July 2013</a></li>
              <li><a href="#"><i class="icon-chevron-right"></i>June 2013</a></li>
              <li><a href="#"><i class="icon-chevron-right"></i>May 2013</a></li>         
            </ul>    
            
            <div class="space30"></div>
    
            <h6>Flickr Images</h6>
            <div class="flickr-widget">
                <img src="img/flickr/01.jpg" alt="" />

                <img src="img/flickr/02.jpg" alt="" />

                <img src="img/flickr/03.jpg" alt="" />

                <img src="img/flickr/04.jpg" alt="" />
            </div>     
            
            <div class="space30"></div>
            
            <h6>Text Widget</h6>
            Amet, consectetur adipisicing elit, sedure doruod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me iatl. Integer pore velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit orn.
          </div>
          <!-- Right Bar End --> 

        </div>
      </div>   

    </div>
  </div> 
  <!-- Blog End -->
  
  <!-- Blog Detail -->
  <div id="blog" class="blog"> 
    <div class="container"> 
    
      <div class="row space90"></div> 
      
      <div class="row">  
        <div class="span12">
          <h2 class="dark">Blog</h2>
          <h4>Concrete Detail from Posts</h4>
        </div>
      </div>    
      
      <div class="row space50"></div> 
  
      <div class="row">  
        <div class="span12">
          <h4 class="dark left">Preparations for the christmas party ended</h4>
          <ul class="infoline upper">
            <li><span class="gray">By</span> Admin</li> 
            <li><span class="gray">Published</span> October 8, 2013</li> 
            <li><span class="gray">Tagged</span> Gift, Christmas</li>
          </ul>  
        </div>
      </div>  

      <div class="row">  
        <div class="span12">
        
          <!-- Flex-1 -->
          <div class="flex-1">
            <ul class="slides">
              <li>
                <img src="img/blog-detail/01.jpg" alt="" />
              </li>
              <li>
                <img src="img/blog-detail/02.jpg" alt="" />
              </li>
              <li>
                <img src="img/blog-detail/03.jpg" alt="" />
              </li>                   
            </ul>
          </div>
          <!-- Flex-1 End -->
          
        </div>
      </div> 
      
      <div class="row space30"></div> 
      
      <div class="row">  
        <div class="span12">
          <p>     
            You’re a tripod. It’s not the size mate, it’s how you use it. Yes, i used a machine gun. You are as precious to me as you were to your own mother and father. I swore to them that i <span class="highlight-1">would protect you</span>, and i haven’t. Reach out to all you know with this cute and bright <span class="highlight-2">Christmas ecard</span>... Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis.
          </p>   
          <blockquote>     
            Reach out to all you know with this cute and bright Christmas ecard... Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis. Sed non leo nisl, ac euismod nisi.  Reach out to all you know with this cute and bright Christmas ecard... Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis.
          </blockquote>  
          <p>     
            <a href="#">Continue Reading <i class="icon-long-arrow-right"></i></a>
          </p> 
        </div>
      </div>   
      
      <div class="row space40"></div> 
  
      <div class="row">  
        <div class="span2 share-text">
          <p>Like it? Share it!</p>
        </div>
        <div class="span10">
          <div class="social">
            <a href="#"><i class="icon-foursquare a-bounce"></i></a>
            <a href="#"><i class="icon-github a-bounce"></i></a>
            <a href="#"><i class="icon-facebook a-bounce"></i></a>
            <a href="#"><i class="icon-twitter a-bounce"></i></a>
          </div>
        </div>
      </div>
        
      <div class="row space70"></div> 
    
      <div class="row">  
        <div class="span6">
          <h6>Comments</h6>
          
          <!-- Comment -->              
          <div class="comment">
            <span class="gray">By</span> Stefan <span class="gray">Published</span> October 7, 2013 <a href="#">REPLY</a>
            <p>
              It only took me nine day. Same time it took the Jessica.
            </p>
          </div>  
          <!-- Comment End --> 
          
          <!-- Comment -->
          <div class="comment">
            <span class="gray">By</span> Anny.121 <span class="gray">Published</span> October 7, 2013 <a href="#">REPLY</a>
            <p>
              It only took me two day. I once heard a wie man sy there are no perfect men. Only perfect intentions. I now issue a new commandment.
            </p>
            
            <!-- Answer L1 -->
            <div class="comment-answer">
              <i class="icon-level-down"></i>
              <span class="gray">By</span> John <span class="gray">Published</span> October 7, 2013 <a href="#">REPLY</a>
              <p>
                Only perfect intentions. I now issue a new commandment.
              </p>
              
              <!-- Answer L2 -->
              <div class="comment-answer">
                <i class="icon-level-down"></i>
                <span class="gray">By</span> Alex <span class="gray">Published</span> October 7, 2013 <a href="#">REPLY</a>
                <p>
                  I once heard a wie man sy there are no perfect men. 
                </p>
              </div> 
              <!-- Answer L2 End -->
              
            </div> 
            <!-- Answer L1 End --> 
            
          </div>  
          <!-- Comment  End --> 

          <!-- Comment -->
          <div class="comment">
            <span class="gray">By</span> Alexsander <span class="gray">Published</span> October 8, 2013 <a href="#">REPLY</a>
            <p>
              Lorem ipsum took me four day. Same time it took...
            </p> 
          </div>  
          <!-- Comment  End --> 
                                   
          <!-- Comment -->
          <div class="comment">
            <span class="gray">By</span> Kano <span class="gray">Published</span> October 10, 2013 <a href="#">REPLY</a>
            <p>
              Haha, this is good joke man! :)
            </p>  
          </div>  
          <!-- Comment  End --> 
               
          <div class="space30"></div> 
          
          <div class="paging">
            <button class="btn">First</button>
            <button class="btn active">1</button>
            <button class="btn">2</button>
            <button class="btn">3</button>
            <button class="btn">4</button>
            <button class="btn">5</button>
            <button class="btn">6</button>
            <button class="btn">Next</button>
            <button class="btn">Last</button>             
          </div>
          
        </div>
        <div class="span6">
          <h6>Form</h6>
          <!-- Blog Form -->  
            <form class="form-comment" method="post" action="#" />
              <input type="text" class="span6" placeholder="E-mail *" value="" /><br />
              <input type="text" class="span6" placeholder="Name" value="" />
              <input type="text" class="span6" placeholder="URL" value="" />
              <textarea class="span6" placeholder="Message *"></textarea>
              <div class="row space10"></div>
              <button class="btn right">Post Comment</button>
            </form>
            <!-- Blog Form End -->   
        </div>
      </div>

    <div class="row space100"></div> 
  
    </div>
  </div> 
  <!-- Blog Detail End -->

  <!-- Parallax -->
  <div id="parallax-two" class="parallax" style="background-image:url(img/parallax/02.jpg);">
    <div class="parallax-text-container">
      <div class="parallax-text-item">
        <h2>What You Can Do For Others</h2>
        <h3>"THE GIFTS ARE BOUGHT AND WRAPPED"</h3>
      </div>
    </div>        
  </div> 
  <!-- Parallax End -->

  <!-- Social Networks -->
  <div class="social-networks"> 
    <div class="container"> 
    
      <div class="row space100"></div> 
      
      <div class="row">  
        <div class="span12">
          <h4>Of Course!</h4>
          <h5>We are also on the social networks</h5>
        </div>
      </div>    
      
      <div class="row space30"></div> 
  
      <div class="row">
        <div class="span12">
          <div class="social-container">
            <div class="social">
              <a href="#"><i class="icon-adn small a-pulse"></i></a>
              <a href="#"><i class="icon-android a-pulse"></i></a>
              <a href="#"><i class="icon-bitbucket small a-pulse"></i></a>
              <a href="#"><i class="icon-apple a-pulse"></i></a>
              <a href="#"><i class="icon-google-plus small a-pulse"></i></a>
              <a href="#"><i class="icon-dribbble a-pulse"></i></a>
              <a href="#"><i class="icon-css3 small a-pulse"></i></a>
            </div>
          </div>
        </div>
      </div>   
  
      <div class="row space80"></div> 
  
    </div>
  </div> 
  <!-- Social Networks End -->
                             
  <!-- Gallery -->
  <div id="gallery" class="gallery"> 
    <div class="container"> 
    
      <div class="row space90"></div> 
      
      <div class="row">  
        <div class="span12">
          <h2>Gallery</h2>
          <h4>There is something for everyone</h4>
        </div>
      </div>    
      
      <div class="row space30"></div> 
          
      <div class="row">
        <div class="span12">  

          <!-- portfolio filter -->	
          <div class="portfolio-container">       
        		<ul id="portfolio-filter">
        			<li class="active"><a href="#" class="filter" data-filter="*">All</a></li>
        			<li><a href="#" class="filter" data-filter=".gifts">Gifts</a></li>
              <li><a href="#" class="filter" data-filter=".manners">Manners</a></li>
        			<li><a href="#" class="filter" data-filter=".decorations">Decorations</a></li>
              <li><a href="#" class="filter" data-filter=".celebration">Celebration</a></li>
              <li><a href="#" class="filter" data-filter=".dinner">Dinner</a></li>
        		</ul>
          </div>  
          
      		<section class="row" id="portfolio-items">
            <ul class="portfolio popup-gallery">
              
              <li> 
                <!-- Gallery Item -->
                <article class="span4 project" data-tags="celebration,manners">
                  <div class="img-container-image">
                    <!-- Image -->
                    <img src="img/gallery/01.jpg" alt="" />
                    <!-- Item Link -->  
  						      <a href="img/gallery/01b.jpg" title="some text">
                      <!-- Icon -->  
                      <i class="icon-zoom-in"></i>
                    </a>
                  </div>
                </article>
                <!-- Gallery Item End -->
              </li> 
                            
              <li> 
                <!-- Gallery Item -->
                <article class="span4 project" data-tags="gifts,dinner">
                  <div class="img-container-image">
                    <!-- Image -->
                    <img src="img/gallery/02.jpg" alt="" />
                    <!-- Item Link -->  
  						      <a href="img/gallery/02b.jpg" title="some text">
                      <!-- Icon -->  
                      <i class="icon-zoom-in"></i>
                    </a>
                  </div>
                </article>
                <!-- Gallery Item End -->
              </li> 
                            
              <li> 
                <!-- Gallery Item -->
                <article class="span4 project" data-tags="decorations,gifts">
                  <div class="img-container-image">
                    <!-- Image -->
                    <img src="img/gallery/03.jpg" alt="" />
                    <!-- Item Link -->  
  						      <a href="img/gallery/03b.jpg" title="some text">
                      <!-- Icon -->  
                      <i class="icon-zoom-in"></i>
                    </a>
                  </div>
                </article>
                <!-- Gallery Item End -->
              </li> 
                            
              <li> 
                <!-- Gallery Item -->
                <article class="span4 project" data-tags="manners,decorations">
                  <div class="img-container-image">
                    <!-- Image -->
                    <img src="img/gallery/04.jpg" alt="" />
                    <!-- Item Link -->  
  						      <a href="img/gallery/04b.jpg" title="some text">
                      <!-- Icon -->  
                      <i class="icon-zoom-in"></i>
                    </a>
                  </div>
                </article>
                <!-- Gallery Item End -->
              </li> 
                            
              <li> 
                <!-- Gallery Item -->
                <article class="span4 project" data-tags="celebration,dinner">
                  <div class="img-container-image">
                    <!-- Image -->
                    <img src="img/gallery/05.jpg" alt="" />
                    <!-- Item Link -->  
  						      <a href="img/gallery/05b.jpg" title="some text">
                      <!-- Icon -->  
                      <i class="icon-zoom-in"></i>
                    </a>
                  </div>
                </article>
                <!-- Gallery Item End -->
              </li> 
                            
              <li> 
                <!-- Gallery Item -->
                <article class="span4 project" data-tags="dinner,decorations">
                  <div class="img-container-image">
                    <!-- Image -->
                    <img src="img/gallery/06.jpg" alt="" />
                    <!-- Item Link -->  
  						      <a href="img/gallery/06b.jpg" title="some text">
                      <!-- Icon -->  
                      <i class="icon-zoom-in"></i>
                    </a>
                  </div>
                </article>
                <!-- Gallery Item End -->
              </li> 
                            
              <li> 
                <!-- Gallery Item -->
                <article class="span4 project" data-tags="decorations,manners">
                  <div class="img-container-image">
                    <!-- Image -->
                    <img src="img/gallery/07.jpg" alt="" />
                    <!-- Item Link -->  
  						      <a href="img/gallery/07b.jpg" title="some text">
                      <!-- Icon -->  
                      <i class="icon-zoom-in"></i>
                    </a>
                  </div>
                </article>
                <!-- Gallery Item End -->
              </li> 
                            
              <li> 
                <!-- Gallery Item -->
                <article class="span4 project" data-tags="celebration,manners,gifts">
                  <div class="img-container-image">
                    <!-- Image -->
                    <img src="img/gallery/08.jpg" alt="" />
                    <!-- Item Link -->  
  						      <a href="img/gallery/08b.jpg" title="some text">
                      <!-- Icon -->  
                      <i class="icon-zoom-in"></i>
                    </a>
                  </div>
                </article>
                <!-- Gallery Item End -->
              </li> 
                            
              <li> 
                <!-- Gallery Item -->
                <article class="span4 project" data-tags="gifts,dinner">
                  <div class="img-container-image">
                    <!-- Image -->
                    <img src="img/gallery/09.jpg" alt="" />
                    <!-- Item Link -->  
  						      <a href="img/gallery/09b.jpg" title="some text">
                      <!-- Icon -->  
                      <i class="icon-zoom-in"></i>
                    </a>
                  </div>
                </article>
                <!-- Gallery Item End -->
              </li> 
              
            </ul> 
          </section>    
                         
          <div class="space100"></div>  
          
        </div>
      </div>
  
  
  
  
    </div>
  </div> 
  <!-- Gallery End -->

  <!-- Parallax -->
  <div id="parallax-one" class="parallax" style="background-image:url(img/parallax/01.jpg);">
    <div class="parallax-text-container">
      <div class="parallax-text-item">
        <h2>The Best Party!</h2>
        <h3>Present your Event at the highest level</h3>
      </div>
    </div>        
  </div> 
  <!-- Parallax End -->
    
  <!-- Content End -->
  
  <!-- Footer -->  
  <footer id="contact" class="footer">
    <div class="container">  

      <div class="row space90"></div> 
      
      <div class="row">  
        <div class="span12">
          <h2 class="dark">GET IN TOUCH</h2>
          <h4>Contact Information</h4>
        </div>
      </div> 
    
      <div class="row space50"></div> 
    
      <div class="row">
        <div class="span6">
          <h6>Contact Form</h6>
          <!-- Contact Form -->  
          <form class="form-comment" method="post" action="#" />
            <input type="text" class="span6" name="mail" placeholder="E-mail *" value="" />
            <input type="text" class="span6" name="name" placeholder="Name" value="" />
            <input type="text" class="span6" name="url" placeholder="URL" value="" />
            <textarea class="span6" name="message" placeholder="Message *"></textarea>
            <div class="row space10"></div>
            <button class="btn right">Send Message</button>
          </form>
          <!-- Contact Form End -->   
        </div>
        <div class="span6">
          <div class="row">
            <div class="span3">
              <h6>Address</h6>
              <p>
                81 Sunnyvale Street<br />
                Los Angeles, CA 90185<br />
                United States
              </p>
            </div>
            <div class="span3">
              <h6>Contact Us</h6>
              <p>
                <i class="icon-phone"></i>+48 880 440 110<br />
                <i class="icon-envelope-alt"></i><a href="mailto:info@example.com">info@example.com</a><br />
                <i class="icon-home"></i><a href="http://www.example.com" rel="external">www.example.com</a>
              </p>
            </div>
          </div>  
          
          <div class="space40"></div> 
          
          <h6>Location</h6>
          <iframe id="map" src="https://maps.google.sk/maps/ms?msa=0&amp;msid=210946297010027755543.0004c74af772bb9276d33&amp;ie=UTF8&amp;ll=48.576981,19.13117&amp;spn=0,0&amp;t=m&amp;output=embed"></iframe>
        </div>
      </div>
    
      <div class="row space80"></div> 
    
      <div class="row">
        <div class="span12 social-container">
          <div class="social-inner">
            <div class="share-text">
              <p>Like it? Share it!</p>
            </div>
            <div class="social">
              <a href="#"><i class="icon-facebook a-bounce"></i></a>
              <a href="#"><i class="icon-twitter a-bounce"></i></a>
              <a href="#"><i class="icon-google-plus a-bounce"></i></a>
            </div>
          </div>          
        </div>
      </div>
      
      <div class="row space80"></div> 
    
    </div>
  </footer>   
  <!-- Footer End -->  
    
  <!-- Copyright --> 
  <div class="copyright">
    <div class="container">               
      <div class="row space40"></div> 
      <div class="row">
        <div class="span4">
          <img src="img/logo-footer.png" alt="" />
        </div>
        <div class="span8">
          <p>&copy; 2013 POLARIS. All rights reserved. Designed by <a href="http://www.entiri.com" rel="external">entiri</a></p>
        </div>
      </div> 
      <div class="row space20"></div>  
    </div>
  </div>    
  <!-- Copyright End -->  

  <!-- JavaScripts -->
  <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="js/jquery.easing.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
  <script type="text/javascript" src="js/jquery.refineslide.js"></script>
  <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
  <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script> 
  <script type="text/javascript" src="js/retina.js"></script> 
  <script type="text/javascript" src="js/animate.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script> 
  <script type="text/javascript" src="js/sly.js"></script>
  <script type="text/javascript" src="js/scale.fix.js"></script>
  <script type="text/javascript" src="js/jquery.countdown.js"></script> 
 	<script type="text/javascript" src="js/jquery.scrollTo.js"></script> 
  <script type="text/javascript" src="js/jquery.localScroll.js"></script> 
	<script type="text/javascript" src="js/functions.js"></script> 
	</body>
</html>