<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<head>
<title>carpool</title>
<!-- must have -->
    <link href="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/css/bootstrap.css" type="text/css" rel="stylesheet" />	<link href="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/css/bootstrap-theme.css" type="text/css" rel="stylesheet" /><link href="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/css/style.css" type="text/css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,700italic' rel='stylesheet' type='text/css'>


<script type="text/javascript" src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/jquery-1.7.1.min.js"></script><script type="text/javascript" src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/jquery-ui-1.8.23.min.js"></script><script type="text/javascript">
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
<link rel="shortcut icon" href="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/favicon.ico">
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

                                       
<div class="container-main header-bg">
  <div class="container">
     <div class="logo"> 
     
     <a href="http://carpoolingscript.com/demo/home"id="logo" class="navbar-brand"><img src="http://carpoolingscript.com/demo/uploads/logo/thumbnails/user1_logo_1453733967.png"style="width:255px; height:53px;"> </a> </div>
        <div class="pull-right head-rht">  
                 
       	 	
            <ul class="top-nav new-top-nav pull-right">
              <li>  <a href="http://carpoolingscript.com/demo/addtrip/form" class="ride">POST A TRIP</a> </li>
              <li>
                <div id="my-account">
                  <div class="my-account-button">  <div class="profile-img"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/default.png" width="30" height="30"> </div> <span> Moraa Daphne </span> <p> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/drop-white.png"> </p>  </div>
                  <div class="my-account-details" style="display: none">
                    <ul class="nav-set">
                      <li><a href="http://carpoolingscript.com/demo/profile"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/driver-ico.png"> PROFILE </a></li>
                      <li><a href="http://carpoolingscript.com/demo/profile#settings"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/settings-ico.png"> SETTINGS </a></li>
                      <li><a href="http://carpoolingscript.com/demo/profile#my-cars-info"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/mail-ico.png" width="13"> MY VEHICLES </a></li>
                       <li><a href="http://carpoolingscript.com/demo/addtrip"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/mail-ico.png" width="13"> MY TRIPS </a></li>
						<li><a href="http://carpoolingscript.com/demo/rating"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/star-ico.png" width="13"> MY RATINGS </a></li>
						<li><a href="http://carpoolingscript.com/demo/addtrip/enquery_list"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/star-ico.png" width="13"> MY ENQUIRY </a></li>
						
                      <li><a href="http://carpoolingscript.com/demo/login/logout"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/logout-ico.png" width="13"> LOGOUT </a></li>
                    </ul>
                  </div>
                </div>
              </li>
              
                          </ul>
    </div>
  </div>
</div>

<script type="text/javascript" src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/tab.js"></script> <script type="text/javascript" src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/notification/goNotification.js"></script><link href="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/notification/goNotification.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/popup/css/jquery-confirm.css" />

<link rel="stylesheet" href="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/popup/boxy.css">
<script type="text/javascript" src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/popup/jquery.boxy.js"></script><script>
 var baseurl = "http://carpoolingscript.com/demo/";
$(document).ready(function() {
	
	/* Slider Expand Click */
	$('body').on("click",'.slider',function()
	{
		var ID = $(this).attr("rel");
		if($('#slide'+ID).is(':visible'))
		{
			close()
		}
		else
		{
			close()
					
			$('#slide'+ID).addClass('open').removeClass('close');		
			 $('#slide'+ID).slideToggle('slow');
			
			return false;
		}
	});
	
	function close() {
        opened = $(document).find('.open');
        $.each(opened, function() {
            //give the proper class to the linked element
            $(this).addClass('close').removeClass('open');
             $(this).slideToggle('slow');
        });
    }
	
	
					
	});
	
	
	
</script>
<script type="text/javascript" src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/common.js"></script> <div class="container-fluid margintop40">
  <div class="container">
  <div class="row">
    <ul class="brd-crmb">
      <li><a href="#"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/home-ico.png"> </a></li>
      <li> / </li>
      <li><a href="#">MY TRIPS</a></li>
    </ul>
    <div class="container-fluid">
        <div class="container">
            <div class="fleft width100 margin">
     
      <h2 class="pst-trip-tit">MY TRIPS</h2>
      </div>
      </div>
      </div>
      

      <div class="fleft width100 margin">
        <div class="p_top">
         <a id="a_tab" class="b_t_1  active" onclick="tab_tab(this, 'p_block_bottom'), height_right()">As a car owner</a>
         <a id="a_tab" class="b_t_1 enquery" href="http://carpoolingscript.com/demo/addtrip/upcoming_trip_passenger" >As a passenger</a>
         <div class="cr">
        </div>
      </div>
      
      <div class="obj_cont p_block_bottom rowrec" style="display: block;">
        <div class="my-trp-tab row">
          <div class="my-trp-main">
             <a href="javascript:void(0)" class="trp-main-active up_trip">Upcoming Trips </a>
            <a href="http://carpoolingscript.com/demo/addtrip/past_trip" class="past_trip">Past Trip</a>
          </div>
          <div class="my-trp-content rowrec" id="pageresult">
            <p class="para">This Page lists all your passenger seats on offer for each of your upcoming trips</p>


                        <!-- Ena Main Trip -->
           
          </div>
        </div>        
        
        
      </div>
      <!-- end tab1 -->
    
      <div class="obj_cont p_block_bottom" style="display: none;">
		  <div class="my-trp-tab row">
          <div class="my-trp-main">
			   <a href="javascript:void(0)" class="trp-main-active up_trip">Upcoming Trips </a>
			   <a href="javascript:void(0)" class="past_trip">Past Trip</a>
			  </div>
			  <div class="my-trp-content rowrec" id="pageresult">
            <p class="para">This Page lists all your passenger seats on offer for each of your upcoming trips</p>
			
				
		 </div>
      </div>
      <!-- end tab2 -->
      
      </div>

    </div>
    <!-- End -->

    </div>


  </div>
  
<script type="text/javascript" src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/jquery.validate.js"></script>
<script type="text/javascript" src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/subscribe.js"></script>  
<div class="container-fluid footerbg paddingtopbot40">
  <div class="container">
    <div class="row footer">
      
        		<div class="col-lg-4 col-md-6 col-sm-6  col-xs-12 log-subs fleft">
			      <div class="logo"> <a href="http://carpoolingscript.com/demo/"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/logo.png"> </a> </div>
			      <div class="ftr-subs margintop20 marginbot10 fleft lgrey-text">
			        <form id="subscribe">   
                        <p class="margintop20 colorwhite size17"> Subscribe to Newsletter </p>
                        <input type="text" placeholder="Email Address" id="email_id" name="email_id" class="emaddr">
                        <div id="send">
                            <input type="submit" value="Sign Up" class="blue-bg white-text subs-brd">
                        </div>
                    </form>
      </div>
      <p class="colorwhite margintop20 size14 fleft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ille, ut dixi, vitiose. Non laboro, inquit, de nomine. Duo Reges:</p>
    </div>

			    <div class="col-lg-2 col-md-6 col-sm-6  col-xs-12">
			      <h3 class="colorwhite size18 marginbot10"> Sitemap </h3>
      <ul class="fleft ftr-ste">
       <li> <a href="http://carpoolingscript.com/demo/blog"> Blog </a> </li>
        <li> <a href="http://carpoolingscript.com/demo/company-directory"> Company Directory </a> </li>
        <li> <a href="http://carpoolingscript.com/demo/contact"> Contact </a> </li>
        <li> <a href="http://carpoolingscript.com/demo/find_a_candidate"> Find a Candidate  </a> </li>
		  <li> <a href="http://carpoolingscript.com/demo/help_us"> Help us</a></li>     
      </ul>
    </div>
    
<div class="hideall">
   <div class="fleft width20p ftr-arti">
      <div class="fb-page" data-href="https://www.facebook.com/pages/Carpoolingscript/807705419319976?ref=aymt_homepage_panel" data-width="180" data-height="370" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
      <div class="fb-xfbml-parse-ignore">
      <blockquote cite="https://www.facebook.com/pages/Carpoolingscript/807705419319976?ref=aymt_homepage_panel">
      <a href="https://www.facebook.com/pages/Carpoolingscript/807705419319976?ref=aymt_homepage_panel">Carpoolingscript</a>
      </blockquote>
      </div>
      </div>
   </div> 
   <div class="fright width20p ftr-arti"> 
    <a class="twitter-timeline" href="https://twitter.com/carpoolingscrip" data-widget-id="588318601595125760">Tweets by @carpoolingscrip</a> 
    </div>

</div>

    </div>
  </div>
</div>


    <div class="container-fluid ftrbg padding10">
  <div class="container">
    <div class="row footer colorwhite">
      <p class="size14 fleft"> &copy; 2015 Carpooling - All Rights Reserved. </p>
      <div class="fright">
        <ul class="fleft soc-ico">
            <li> <a href="#"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/fb-ico.png"> </a> </li>
            <li> <a href="#"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/tw-ico.png"> </a> </li>
            <li> <a href="#"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/gp-ico.png"> </a> </li>
            <li> <a href="#"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/in-ico.png"> </a> </li>
            <li> <a href="#"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/pin-ico.png"> </a> </li>
            <li> <a href="#"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/vi-ico.png"> </a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</body>
</html>