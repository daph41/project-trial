<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<head>
<title>Carpool</title>
<!-- must have -->
    <link href="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/css/bootstrap.css" type="text/css" rel="stylesheet" />	<link href="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/css/bootstrap-theme.css" type="text/css" rel="stylesheet" /><link href="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/css/style.css" type="text/css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,700italic' rel='stylesheet' type='text/css'>


<script type="text/javascript" src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/jquery-1.7.1.min.js"></script><script type="text/javascript" src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/jquery-ui-1.8.23.min.js"></script><script type="text/javascript">
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
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1550181251959634";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 
<style type="text/css"> iframe[id^='twitter-widget-0']{ width:280px !important;} </style>


                                        
<div class="container-main header-bg">
  <div class="container">
     <div class="logo"> 
     
     <a href="http://www.carpoolingscript.com/demo/home"id="logo" class="navbar-brand"><img src="http://www.carpoolingscript.com/demo/uploads/logo/thumbnails/user1_logo_1444714009.png"style="width:255px; height:53px;"> </a> </div>
        <div class="pull-right head-rht">  
                  
       	                 <ul class="top-nav new-top-nav pull-right">
                 <li> <a href="http://localhost/demoproject/index.html" class=""> Home </a> </li>
            <li> <a href="http://localhost/demoproject/findride.php" class="top-signup">Find Ride </a> </li>
            <li> <a href="http://localhost/demoproject/posttrip.php" class="ride"> POST A TRIP </a> </li>

                </ul>
                        </ul>
    </div>
  </div>
</div><script type="text/javascript" src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/jquery.validate.js"></script>
<script type="text/javascript" src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/travel-details-rules.js"></script>
<script type="text/javascript" src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/notification/goNotification.js"></script><link href="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/notification/goNotification.css" rel="stylesheet" type="text/css">
<script>
$(document).ready(function() {	
	
				$('#phone').attr('readonly', false);
		$('#phone').removeClass('disable');
				
				
			
	});
</script>
<div class="container-fluid margintop40">
        <div class="container">
            <div class="row margintop40">  

      <div class="col-lg-5 col-md-5 col-sm-6 padding20 reg-main">
        <ul class="reg-cont margintop40">
          <li class="margintop40">
            <h3>Road travel made easy !</h3><br>
            <p>A connecting site for online search for Car Poolers.</p><br/> 
           <p> Sign up and meet drivers who are travelling in the same direction. 
           Get in touch with them to reach the common destination at the same time, through the same ride. </p><br/>
           <p>Post your travel need and find fastest and easiest way for reaching your destination.</p> 
          </li>
        </ul>
      </div>      

      <div class="col-lg-6 col-md-6 col-sm-6 fleft padding20 grey-bg reg-main">
        <h2 class="center marginbot40"> Sign in to Carpooling </h2>
         <form action="checklogin.php" method="post" accept-charset="utf-8" id="frmlogin">           <input type="hidden" value="1" name="submitted" />
			<input type="hidden" name="redirect" value="" />
        <ul class="top-nav reg-nav">
          <li> <a href="http://www.carpoolingscript.com/demo/login/facebooklogin" class="flogin regflogin"> Login </a> </li>
          <li class="reg-rht"> <a href="http://www.carpoolingscript.com/demo/login/googlelogin" class="gplogin regglogin"> Login </a> </li>
        </ul>
        <ul class="rowrec reg-inp">
          <li>
            <?php
              if(isset($_SESSION['error']))
              {
                ?>
                
                <div class="alert alert-danger">
  <strong><?php  echo $_SESSION['error']; ?></strong>
</div>

                <?php
                unset($_SESSION['error']);
              } 
            ?>


          </li>
          <li>
            <span>Email / Username</span>
            <input type="text" placeholder="Email / Username" name="email" id="txtUserName"/>
          </li>
          <li>
            <span>Password</span>
            <input type="password" placeholder="Password" name="password" id="txtPassword" />
          </li>
          <li> <p> <a href="http://www.carpoolingscript.com/demo/login/forget_password">Forgot password??</a> </p> </li>
          <li>       
            <input type="Submit" value="Sign in" class="fright reg-sbmt" >
          </li>
        </ul>
        </form>
      </div>
      <!-- Right -->
    </div>
  </div>
</div>
<div class="container-fluid cs-blue-bg margintop40">
  <div class="container">
    <div class="margintop40 marginbot40 center gtcont">
      <h2 class="colorwhite"> Got a Question? </h2>
      <p class="padding20 row colorwhite">We're here to help. Check out our FAQs, Send us an email or call us at 1800 555 555</p>
      <a href="#"> Contact Now </a> </div>
  </div>
</div>

 <div class="container-fluid footerbg paddingtopbot40">
  <div class="container">
    <div class="row footer">
      
        		<div class="col-lg-4 col-md-6 col-sm-6  col-xs-12 log-subs fleft">
			      <div class="logo"> <a href="index.html"> <img src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/logo.png"> </a> </div>
			      <div class="ftr-subs margintop20 marginbot10 fleft lgrey-text">
			        <p class="margintop20 colorwhite size17"> Subscribe to Newsletter </p>
			        <input type="text" placeholder="Email Address" class="emaddr">
			        <input type="submit" value="Sign Up" class="blue-bg white-text subs-brd">
      </div>
      <p class="colorwhite margintop20 size14 fleft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ille, ut dixi, vitiose. Non laboro, inquit, de nomine. Duo Reges:</p>
    </div>

			    <div class="col-lg-2 col-md-6 col-sm-6  col-xs-12">
			      <h3 class="colorwhite size18 marginbot10"> Sitemap </h3>
      <ul class="fleft ftr-ste">
        <li> <a href="#"> Blog </a> </li>
        <li> <a href="#"> Company Directory </a> </li>
        <li> <a href="#"> Contact </a> </li>
        <li> <a href="#"> Find a Candidate  </a> </li>
        <li> <a href="#"> Find a Car </a> </li>       
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
            <li> <a href="#"> <img src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/fb-ico.png"> </a> </li>
            <li> <a href="#"> <img src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/tw-ico.png"> </a> </li>
            <li> <a href="#"> <img src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/gp-ico.png"> </a> </li>
            <li> <a href="#"> <img src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/in-ico.png"> </a> </li>
            <li> <a href="#"> <img src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/pin-ico.png"> </a> </li>
            <li> <a href="#"> <img src="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/vi-ico.png"> </a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</body>
</html>