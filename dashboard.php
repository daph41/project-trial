<?php session_start(); 
include("global_settings.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<head>
<title>Carpool</title>
<!-- must have -->
    <link href="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/css/bootstrap.css" type="text/css" rel="stylesheet" /> <link href="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/css/bootstrap-theme.css" type="text/css" rel="stylesheet" /><link href="http://www.carpoolingscript.com/demo/carpooling/themes/carpooling/assets/css/style.css" type="text/css" rel="stylesheet" />
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
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1618861935012037";
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
             <!-- <li> <a href="http://localhost/demoproject/index.html" class="top-signup"> Home</a> </li>            
              <li> <a href="http://localhost/demoproject/posttrip.php" class=""> Post Trip</a> </li>-->
            <ul class= "navset"> 
             <li> <a href="http://localhost/demoproject/mytrips.php" class="top-signup">My Trips</a> </li>
             <li> <a href="http://localhost/demoproject/vehicles.php" class="top-signup">My Vehicles</a> </li>
             <li> <a href="http://localhost/demoproject/settings.php" class="top-signup">Settings</a> </li>
             <li> <a href="http://localhost/demoproject/findride.php" class="top-signup">Find Ride</a> </li>
            <li> <a href="http://localhost/demoproject/posttrip.php" class="top-signup"> Post Trip </a> </li>
            <li> <a href="http://localhost/demoproject/posttrip.php" class="top-signup"> Ratings </a> </li>
            <li> <a href="http://localhost/demoproject/logout.php" class="top-signup"> logout</a> </li>
 
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
      <div class="" style="margin-right:auto; margin-left:auto;">
        <ul class="reg-cont margintop40">
          <li class="margintop40">
          <div class="panel panel-info">

           <?php
           $email = $_SESSION['login_user'];

            $query = mysqli_query($connection, "select * from users where email='$email'");
            
            foreach ($query as $row) {
             ?>

            <div class="panel-heading">
              <h3 class="panel-title"><?php echo "Hello, "; ?> <?php echo  ucfirst($row['fname']);?></h3>

            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                     <!--  <tr>
                        <td>Department:</td>
                        <td>Programming</td>
                      </tr>
                      <tr>
                        <td>Hire date:</td>
                        <td>06/23/2013</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>01/24/1988</td>
                      </tr>
                   
                      -->    <tr>
                             <tr>
                        <td>Gender</td>
                        <td><?php echo  $row['gender'];?></td>
                      </tr>

                       <!--  <tr>
                        <td>Home Address</td>
                        <td>Metro Manila,Philippines</td>
                      </tr>
 -->                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com"><?php echo  $row['email'];?></a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td><?php echo  $row['mobileno'];?>
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>

                  <?php
                    }
                  ?>
                  
                  <a href="personalinfo.php" class="btn btn-primary">Update Profile</a>
                  <a href="#" class="btn btn-primary">view profiles</a>
                </div>
              </div>
            </div>
           <div class="panel-footer">
                  <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                  <span class="pull-right">
                      <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                      <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                  </span>
              </div>
            
          </diSSv>
          </li>
        </ul>
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

 <!-- <div class="container-fluid footerbg paddingtopbot40">
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
</div> -->
</body>
</html>