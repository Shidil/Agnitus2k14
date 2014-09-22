<html>

	<head>
	<title>Schedule | Agnitus 2K14 | National Level Inter-Collegiate Techno Extravaganza</title>
		<script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
	<style type="text/css" media="screen">
	body{
		background:url(../images/front_bg.jpg);
	}
	.scheduleslider
{
	width:200%;
}
.scheduleslider_img1
{
	background-image:url(http://localhost/agnitus/images/jan9.jpg);
	background-position:center;
	background-repeat:no-repeat;
	height:500px;
	margin:10px;
	float:left;
}
.scheduleslider_img2
{
	background-image:url(http://localhost/agnitus/images/jan10.jpg);
	background-position:center;
	background-repeat:no-repeat;
	height:500px;
	margin:10px;
	float:left;
}
.scheduleslider_nav
{
	margin:0px 10px 20px;
	text-align:center;
}
.slider_container {
    text-align: center;
    display: inline-block;
    border: 1px solid #929292;
    background:rgba(0,0,0,0.5);
    width:180px;
    margin-left:10px;
    margin-right:10px;
    margin-bottom:35px;
	cursor:pointer;
}

.slider_container:hover {
    border:1px solid #666;
	background:rgba(0,0,0,0.8);
}
.slider_container h2 {
font-weight: bold;
line-height: 0.62em;
font-size: 21px;
width: 169px;
height: 11px;
text-align: center;
}
.slider_container h2 {
color: #B5C0C5;
}.slider_container h2:hover {
color: #A4D1E6;
}

.slider-viewport {
position: relative;
overflow: hidden;
width: 100%;
margin: 4% auto 4px;
height: 500px;
}

.slider-carriage {
    position: absolute;
    width: 200%;
}

.slider_show {
    float: left;
    text-align: center;
    width: 50%;
	height:500px
}
.page_title{
	width:100px;
	height:100px;
	cursor:pointer;
	background:url(../images/logo_small.png) no-repeat;
	position:absolute;
	top:2%;
	left:2%;
}
	</style>
	<script type="text/javascript">
	jQuery(function($) {
    $('.slider_container').click(function(evt) {
        evt.preventDefault();
        $('.slider-carriage').stop(false, false).animate({
            left: (-100 * $('#' + $(this).data('title')).position().left / $('.slider-viewport').width()) + '%'
        }, 1000);
    });
});
	</script>
	</head>
	
	<body>
	<a href="../"><div class="page_title"></div></a>
	<div class="slider_content" style="text-align: center;margin-top: 6%;">
	<div class="slider-viewport">
		<div class="slider-carriage">
			<div id="camp" class="slider_show" title="Schedule for Day One" style="	background-image:url(1.jpg);background-position:center;background-repeat:no-repeat;"></div>
			<div id="course" class="slider_show" title="Schedule for Day Two" style="background-image:url(2.jpg);background-position:center;background-repeat:no-repeat;"></div>
		</div>  
	  </div>
	  <a class="slider_container" data-title="camp" style="color:d6d6d6"><h2>Day One</h2></a>
	  <a  class="slider_container" data-title="course" style="color:d6d6d6"><h2>Day Two </h2></a>
	</div>
	</body>
	
</html>