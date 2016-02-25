<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<head>
<title>Carpooling</title>
<!-- must have -->
<script type="text/javascript" src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/jquery-1.7.1.min.js"></script><script type="text/javascript" src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/jquery-ui-1.8.23.min.js"></script><script type="text/javascript" src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/bootstrap.js"></script><script src="https://maps.googleapis.com/maps/api/js?sensor=true&libraries=places&language=en"></script>

<script type="text/javascript" src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/jquery.validate.js"></script>
<script type="text/javascript">

var baseurl = "http://www.carpoolingscript.com/demo/";  
var country = '';
</script>
<link rel="stylesheet" type="text/css" href="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/jquery.datepick/redmond.datepick.css"> 
<script type="text/javascript" src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/jquery.datepick/jquery.plugin.js"></script><script type="text/javascript" src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/jquery.datepick/jquery.datepick.js"></script>

<script type="text/javascript" src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/home.js"></script><link href="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/css/style.css" type="text/css" rel="stylesheet" /><link href="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/css/bannerscollection_kenburns.css" type="text/css" rel="stylesheet" /><link href="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/css/bootstrap.css" type="text/css" rel="stylesheet" /><link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,700italic' rel='stylesheet' type='text/css'>



<script type="text/javascript" src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/jquery.ui.touch-punch.min.js"></script><script type="text/javascript" src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/bannerscollection_kenburns.js"></script><!--[if IE]><script type="text/javascript" src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/excanvas.compiled"></script><![endif]-->
<!-- must have -->
	<script>
		jQuery(function() {
			jQuery('#bannerscollection_kenburns_generous').bannerscollection_kenburns({
				skin: 'generous',
				responsive:true,
				width: 1920,
				height: 680,
				width100Proc:true,
				thumbsOnMarginTop:14,
				thumbsWrapperMarginTop: -110,
				autoHideBottomNav:false,
        showBottomNav: false,
        showCircleTimer:false,
        showCircleTimerIE8IE7:false,
        showAllControllers:false
			});					
		});
	</script>
    <script type="text/javascript" src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/jquery.ddslick.js"></script>    <script type="text/javascript" src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/script.js"></script>    
<script type="text/javascript">
$(document).ready(function(){
  $(".my-account-button").click(function(){
	$(".my-account-details").fadeToggle("fast", function(){
	  if($(".my-account-details").css('display') == "none")
		$(".my-account-button").removeClass("active");
	  else
		$(".my-account-button").addClass("active");
	});
  });
});
</script>  
<link rel="shortcut icon" href="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/favicon.ico">  
  
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1618861935012037";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 
<style type="text/css"> iframe[id^='twitter-widget-0']{ width:280px !important;} </style>

	<div class="container-fluid pull-top topbg paddingtopbot10">
  <div class="container">
    <div class="row">  
      <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 tophdr"> <a href="http://www.carpoolingscript.com/demo/home" id="logo" class="navbar-brand"> <img src="http://www.carpoolingscript.com/demo/uploads/logo/thumbnails/user1_logo_1444714009.png" style="width:255px; height:53px;"> </a>  </div>
        <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">        
                             <ul class="top-nav new-top-nav">              
					  <!-- <li> <a href="http://localhost/demoproject/index.html" class="">Home</a> </li> -->
            <li> <a href="http://localhost/demoproject/index.html" class="ride">Home </a> </li>
            <li> <a href="http://localhost/demoproject/logout.php" class="ride">logout </a> </li>
					  <!-- <li> <a href="http://localhost/demoproject/register.html" class="top-signup"> Register </a> </li>
					  <li> <a href="http://localhost/demoproject/addtrip/form.php" class="ride"> POST A TRIP </a> </li> -->
				</ul>
                        </ul>                     
        </div>
    </div>
  </div>
</div>





    <div class="container-fluid padding0 banner">

    <div id="bannerscollection_kenburns_generous">

    	<div class="myloader"></div>
        <!-- CONTENT -->
        <ul class="bannerscollection_kenburns_list">

	       		<li data-initialZoom="1" data-finalZoom="1" data-horizontalPosition="center" data-verticalPosition="left" data-text-id="#bannerscollection_kenburns_photoText1" ><img src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/slider001.jpg" alt="" width="2500" height="919" /></li>
            
	          <li data-initialZoom="1" data-finalZoom="1" data-horizontalPosition="center" data-verticalPosition="left" data-text-id="#bannerscollection_kenburns_photoText2" ><img src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/slider002.jpg" alt="" width="2500" height="919" /></li>

	          <li data-text-id="#bannerscollection_kenburns_photoText3" data-horizontalPosition="center" data-verticalPosition="top" data-initialZoom="1" data-finalZoom="1"><img src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/slider003.jpg" alt="" width="2500" height="782" /></li>       
        
        </ul>        
        <!-- TEXTS -->

        <div id="bannerscollection_kenburns_photoText1" class="bannerscollection_kenburns_texts">
          <div class="bannerscollection_kenburns_text_line textElement11_generousFullWidth" data-initial-left="200" data-initial-top="50" data-final-left="200" data-final-top="320" data-duration="0.5" data-fade-start="0" data-delay="0">Life is about the journey</div>
       </div>   
                 
        <div id="bannerscollection_kenburns_photoText2" class="bannerscollection_kenburns_texts">
        	<div class="bannerscollection_kenburns_text_line textElement21_generousFullWidth" data-initial-left="200" data-initial-top="50" data-final-left="200" data-final-top="280" data-duration="0.5" data-fade-start="0" data-delay="0.5">Carpool easily in a fun, safe &amp;  <br>economical way!</div>         
        </div>
       
        <div id="bannerscollection_kenburns_photoText3" class="bannerscollection_kenburns_texts">
       		<div class="bannerscollection_kenburns_text_line textElement31_generousFullWidth" data-initial-left="200" data-initial-top="50" data-final-left="200" data-final-top="320" data-duration="0.5" data-fade-start="0" data-delay="0">Helping the planet, one shared ride at a time</div>
        </div> 
    


<div class="bottom-bar padding10">       
        <div class="search-bar">

	        <h2> Find a Ride </h2>

          <form method="get" id="searchform"  action="searchtrip.php">
            <input type="text" placeholder="From"  name="source" id="source" class="srcdes marker-ico"> 
            <input type="hidden" name="formlatlng" id="formlatlng"  value=""/>
            <input type="text"  placeholder="To"   name="destination" id="destination" class="srcdes marker-ico" />
            <input type="hidden" name="tolatlng" id="tolatlng"  value=""/>
            <input type="date" placeholder="DD/MM/YYYY" id="journey_date" class="srcdes cal-ico" onchange="getfrequency();"  name="journey_date" >
             
             <input type="hidden" name="frequency" id="frequency"  value=""/>
			<input type="submit"  value="Search"   class="ind-src-but"/>       
               </form>
        </div>      
    </div>

</div>  
</div> 
 <div class="container-fluid padding0 banner-search">

	    <div class="bottom-bar padding10">  

	      <div class="search-bar">

	        <h2> Find a Ride </h2>

	        <form method="get" id="searchform"  action="http://www.carpoolingscript.com/demo/search">
            <input type="text" placeholder="From"  name="source" id="source" class="srcdes marker-ico"> 
            <input type="hidden" name="formlatlng" id="formlatlng"  value=""/>
            <input type="text"  placeholder="To"   name="destination" id="destination" class="srcdes marker-ico" />
            <input type="hidden" name="tolatlng" id="tolatlng"  value=""/>
            <input type="text" placeholder="DD/MM/YYYY" id="journey_dater" class="srcdes cal-ico" onchange="getfrequency();"  name="journey_date" >
             
             <input type="hidden" name="frequency" id="frequency"  value=""/>
			<input type="submit"  value="Search"   class="ind-src-but"/>       
               </form>

	      </div>     

	    </div>

    </div>
    <script type="text/javascript" src="H:\xampp\htdocs\demoproject\carpooling\themes\carpooling\assets/js/tinycarousel/jquery.tinycarousel.min.js"></script>
    <link href="H:\xampp\htdocs\demoproject\carpooling\themes\carpooling\assets/js/tinycarousel/tinycarousel.css " rel="stylesheet" type="text/css">
<script>
$(document).ready(function() {
$('#slider1').tinycarousel({
	start: 1, // where should the carousel start?
	display: 4, // how many blocks do you want to move at a time?
	axis: 'X', // vertical or horizontal scroller? 'x' or 'y' .
	controls: true, // show left and right navigation buttons?
	pager: false, // is there a page number navigation present?
	interval: true, // move to the next block on interval.
	intervaltime: 3000, // interval time in milliseconds.
	animation: true, // false is instant, true is animate.
	duration: 1000, // how fast must the animation move in milliseconds?
	callback: null, // function that executes after every move
	}); 
});
</script>
