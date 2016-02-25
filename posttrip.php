<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<head>
<title>Carpool</title>
<!-- must have -->
    <link href="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/css/bootstrap.css" type="text/css" rel="stylesheet" /> <link href="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/css/bootstrap-theme.css" type="text/css" rel="stylesheet" /><link href="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/css/style.css" type="text/css" rel="stylesheet" />
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
     
     <a href="http://carpoolingscript.com/demo/home"id="logo" class="navbar-brand"><img src="http://carpoolingscript.com/demo/uploads/logo/thumbnails/user1_logo_1444714009.png"style="width:255px; height:53px;"> </a> </div>
        <div class="pull-right head-rht">  
                  
          
            <ul class="top-nav new-top-nav pull-right">

                <ul class="top-nav new-top-nav pull-right">
              <li> <a href="http://localhost/demoproject/index.html" class="top-signup"> Home</a> </li>            
             <!-- <li> <a href="http://localhost/demoproject/posttrip.php" class=""> Post Trip</a> </li>
             -->
             <li> <a href="http://localhost/demoproject/mytrips.php" class="top-signup">My Trips</a> </li>
             <li> <a href="http://localhost/demoproject/vehicles.php" class="top-signup">My Vehicles</a> </li>
             <li> <a href="http://localhost/demoproject/findride.php" class="top-signup">Find Ride</a> </li>
            <li> <a href="http://localhost/demoproject/posttrip.php" class="top-signup"> Post Trip </a> </li>
            <li> <a href="http://localhost/demoproject/logout.php" class="top-signup"> logout</a> </li>



              <!-- <li>  <a href="http://carpoolingscript.com/demo/addtrip/form" class="ride"> Post a Trip </a> </li>
              <li>
                <div id="my-account">
                  <div class="my-account-button">  <div class="profile-img"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/default.png" width="30" height="30"> </div> <span> Moraa Daphne </span> <p> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/drop-white.png"> </p>  </div>
                  <div class="my-account-details" style="display: none">
                    <ul class="nav-set">
                      <li><a href="http://carpoolingscript.com/demo/profile"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/driver-ico.png"> PROFILE </a></li>
                      <li><a href="http://carpoolingscript.com/demo/profile#settings"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/settings-ico.png"> SETTINGS </a></li>
                      <li><a href="http://carpoolingscript.com/demo/profile#my-cars-info"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/mail-ico.png" width="13"> MY VEHICLES </a></li>
                       <li><a href="http://carpoolingscript.com/demo/addtrip"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/mail-ico.png" width="13"> MY TRIPS </a></li>
                      <li><a href="http://carpoolingscript.com/demo/login/logout"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/logout-ico.png" width="13"> LOGOUT </a></li>
                    </ul>
                  </div>
                </div>
              </li> -->
              
                          </ul>
    </div>
  </div>
</div><style type="text/css">
 .mandatory,spnerror { color:red; }
</style>
<script type="text/javascript" src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/travel-details-rules.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=true&libraries=places&language=en"></script>
<link rel="stylesheet" type="text/css" href="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/jquery.datepick/redmond.datepick.css"> 
<script type="text/javascript" src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/jquery.datepick/jquery.plugin.js"></script><script type="text/javascript" src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/jquery.datepick/jquery.datepick.js"></script>
<script type="text/javascript" src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/notification/goNotification.js"></script><link href="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/notification/goNotification.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/popup/css/jquery-confirm.css" />

<link rel="stylesheet" href="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/popup/boxy.css">
<script type="text/javascript" src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/popup/jquery.boxy.js"></script><script>
$(document).ready(function() {
  
  $('#rpt_from_date').datepick({
   changeMonth: false,autoSize: true,minDate: 0,dateFormat: 'dd/mm/yyyy'});
    
    change_trip(1);
        
    $('#tzone').attr('selectedIndex', 0);
    
                    $('#regu').attr('checked',true);
                    $('#no').attr('checked',true);
    var initValues = '';
    //alert(initValues);
    $('#frmtrip').find(':checkbox[name^="frequency[]"]').each(function () {
      $(this).attr("checked", ($.inArray($(this).val(), initValues) != -1));
    });
    
    
    
    
    
      
  });
  
</script>
<link href="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/css/jquery.tagbox.css" type="text/css" rel="stylesheet" /><script type="text/javascript" src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/jquery.tagbox.js"></script><script type="text/javascript" src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/jquery.validate.js"></script>
<script type="text/javascript">
var baseurl = "http://carpoolingscript.com/demo/";
var country = '';
</script>
<script type="text/javascript" src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/js/trip.js"></script>  
  
<div class="container-fluid margintop40">
  <div class="container">
   <div class="row">
     <ul class="brd-crmb">
      <li><a href="#"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/home-ico.png"> </a></li>
      <li> / </li>
     <!--  <li><a href="#">Register your Carpool</a></li> -->
    </ul>
    <div class="row margin">
   
             <form class="bbq" id="frmtrip">
     <input type="hidden" name="tripid" id="tripid" value="" />
    <input type="hidden" name="submitted" id="route-map" value="submitted" />
        <input type="hidden" name="edited" id="edited" value="" />
        <input type="hidden" name="checktrip" id="checktrip" value="1" />
    <input type="hidden" name="redirect" value="" />     
         <div class="container-fluid">
        <div class="container">
            <div class="fleft width100">
              
              <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">     
      <div class="trip-lft">
        
        <h2 class="pst-trip-tit">Post your Trip</h2>
          <!--<div class="fleft width100 margintop20">
          <ul class="trp-part">
            <li> <p>Part 1 Of 2</p> <span class="cs-blue-bg"></span> </li>
            <li> <p>Part 2 Of 2</p> <span></span> </li>
          </ul>
        </div>-->
        <div class="fleft width100 line4"></div>
                <div class="fleft width100 margintop20"> 
          <div class="roundstep-no fleft size13">Step: 1 &nbsp;</div> 
          <span class="size16 fleft bold">Add Vehicle Info</span>   
        </div>
       <div class="fleft width100 margintop20">
          <span class="size14 bold"><span class="mandatory">*</span> Vehicle:</span>
           <select name="vechicletype"  id="vechicletype" class="fleft width100 padding10" onchange="get_vehicle();">
<option value="" selected="selected">Select your car</option>
<option value="367">BENTLEY - kbx 342w</option>
<option value="368">BENTLEY - kbx 342w</option>
</select>        </div>
        <div class="fleft width100 margintop20">
          <span class="size14 bold fleft paddingright10">Vehicle Number </span>
          <p class="fleft size16 bold" id="vehnum"></p>          
        </div>
        <div class="fleft width100 line4"></div>
                <div class="fleft width100 margintop20"> 
          <div class="roundstep-no fleft size13">Step: 2 &nbsp;</div> 
          <span class="size16 fleft bold">Add Trip</span>   
        </div>
        <div class="fleft width100 margintop20">
          <span class="size14 bold"><span class="mandatory">*</span> From :</span>          
          <input type="text" class="fleft width100 padding10" placeholder="your departure point (address,city,station...)"   name="txtsource" id="txtsource"class="frt_src" value="" >
                    <input type="hidden" name="source_ids" id="source_ids"  value=""/>
        </div>
        <div class="fleft width100 margintop20">
          <span class="size14 bold"><span class="mandatory">*</span> To :</span>          
            <input type="text" class="fleft width100 padding10" placeholder="your arrival point (address,city,station...)"  name="txtdestination" id="txtdestination"  value=""/>
                    <input type="hidden" name="destination_ids" id="destination_ids"  value=""/>
        </div>
        <div class="fleft width100 margintop20">
          <span class="size14 bold row"><span class="mandatory">*</span> Add Route :</span>
          <input  type="text" id="jquerytagboxtext" class="fleft padding10 width51" name="jquerytagboxtext"  value=""/>
           <input type="hidden" name="routes" id="routes" value="" />
          <input type="hidden" name="routesdata" id="routesdata" value="" />
         <input type="hidden" name="route_lanlat" id="route_lanlat" value="" />         
        </div>      
        <div class="fleft width100 line4"></div>
                <div class="fleft width100 margintop20"> 
          <span class="size14 bold row"><span class="mandatory">*</span> Frequency :</span>
          <p class="row bold paddingtop10"> 
        
            <span class="fleft size14"> <input type="radio" name="trip_type" id="regu" onclick="change_type(1)"/> Recurring </span>
            <span class="fleft size14 marginleft30"> <input type="radio" name="trip_type" id="casu" onclick="change_type(2)"/> One time  </span>
          </p>
          <p class="row paddingtop10 bold" id="regular"> 
            <span class="fleft size14"> <input type="checkbox" name="frequency[]" value="0" onchange="filter_result()"/> Sun </span>
            <span class="fleft size14 marginleft30"> <input type="checkbox" name="frequency[]" value="1" onchange="filter_result()"/> Mon </span>
            <span class="fleft size14 marginleft30"> <input type="checkbox" name="frequency[]" value="2" onchange="filter_result()"/> Tue </span>
            <span class="fleft size14 marginleft30"> <input type="checkbox" name="frequency[]" value="3" onchange="filter_result()"/> Wed </span>
            <span class="fleft size14 marginleft30"> <input type="checkbox" name="frequency[]" value="4" onchange="filter_result()"/> Thu </span>
            <span class="fleft size14 marginleft30"> <input type="checkbox" name="frequency[]" value="5" onchange="filter_result()"/> Fri </span>
            <span class="fleft size14 marginleft30"> <input type="checkbox" name="frequency[]" value="6" onchange="filter_result()"/> Sat </span>
             <input type="hidden" name="frequency_ids" id="frequency_ids" value="" />
          </p>
          <p class="row paddingtop10 bold" id="casuals"> 
            <span class="size14 bold"> </span>    
             <input type="text" id="rpt_from_date" placeholder="Date Of Journey " class="fleft width100 padding10 row" name="rpt_from_date" onchange="clearnow();" value="">        
          </p>
        </div>
       <div class="fleft width100 margintop20">           
          <span class="row size14 bold"><span class="mandatory">*</span> Type of Trip :</span>
        </div>
        <div class="fleft width100 margintop20">
          <ul class="trp-part paddingtop10">
            <li class="bold"> <input name="return" type="radio" value="no" id="no" onclick="change_trip(1)"> One Way Trip </li>
            <li class="bold"> <input name="return" type="radio" value="yes" id="yes" onclick="change_trip(2)"> Return Trip </li>             
          </ul>
        </div>
        <div class="fleft width100 margintop20">
          <ul class="trp-step">
            <li id="departure"> 
              <span class="row size14 bold">Departure Time :</span>              
              <select name="fhh"  id="fhh" class="fleft padding10 " onchange="clearnow();"  placeholder="hh">
<option value="" selected="selected">HH</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>              <p class="marginleft10 paddingtop6 size16 fleft">:</p>
              <select name="fmm"  id="fmm" class="fleft padding10 marginleft10" onchange="clearnow();" >
<option value="" selected="selected">MM</option>
<option value="00">00</option>
<option value="15">15</option>
<option value="30">30</option>
<option value="45">45</option>
</select>              <p class="marginleft10 paddingtop6 size16 fleft"> </p>
                  <select name="fzone"  id="fzone" class="fleft padding10 marginleft10" onchange="clearnow();" >
<option value="" selected="selected">AM/PM</option>
<option value="am">AM</option>
<option value="pm">PM</option>
</select>            </li>
            <li id="return"> 
              <span class="row size14 bold">Departure Time :</span>
              <select name="thh"  id="thh" class="fleft padding10 " onchange="clearnow();"  placeholder="hh">
<option value="" selected="selected">HH</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>              <p class="marginleft10 paddingtop6 size16 fleft">:</p>
              <select name="tmm" id="tmm" class="fleft padding10 marginleft10" onchange="clearnow();" >
<option value="" selected="selected">MM</option>
<option value="00">00</option>
<option value="15">15</option>
<option value="30">30</option>
<option value="45">45</option>
</select>              <p class="marginleft10 paddingtop6 size16 fleft"> </p>
              <select name="tzone"   id="tzone" class="fleft padding10 marginleft10">
<option value="">AM/PM</option>
<option value="am">AM</option>
<option value="pm">PM</option>
</select>            </li>
            <input type="hidden" name="depature_time" id="depature_time" value="" />
            <input type="hidden" name="arrival_time" id="arrival_time" value="" />
          </ul>
        </div>  
        
        <div class="fleft width100 line4"></div>
                <div class="fleft width100 margintop20">
          <span class="size14 bold row"><span class="mandatory">*</span> Available Seat :</span>          
          <input type="text" name="avail_seats" value="" id="avail_seats" class="fleft width100 padding10 row" placeholder="Available Seat"  />        </div>
        <div class="fleft width100 margintop20">
          <span class="size14 bold row"><span class="mandatory">*</span> Phone Number :</span>
          <input type="text" name="number" value="" id="number" class="fleft width100 padding10 row" placeholder="Contact Person Number"  />        </div>
        <div class="fleft width100 margintop20">
          <span class="size14 bold row"><span class="mandatory">*</span> Comments :</span>
           <textarea name="comments" cols="40" rows="4" class="fleft width100 padding10 rows" id="comments" ></textarea> 
         
        </div>
        <div class="fleft width100 line4"></div>
        <div class="margintop20 fright">
          <input type="submit" value="Post" class="padding10 colorwhite cs-blue-bg trp-cont-but size16 bold">
        </div>

    </div>
     </div>
    <!-- End Left -->
      <div class="col-lg-4  col-md-12 col-sm-12 col-xs-12">
    <div class="trip-right">

      <h2 class="pst-trip-titrht size22">Journey Route</h2>

      <div class="float width100 line4"></div>

      <div class="row ">
        <div id="route-map-data">       
        </div>
        
      </div>

      <div class="fleft width100 line4"></div>

    </div>
    <!-- End Right -->

    </div>
    <!-- End -->

    </div>


  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
 
 <div class="container-fluid footerbg paddingtopbot40">
  <div class="container">
    <div class="row footer">
      
            <div class="col-lg-4 col-md-6 col-sm-6  col-xs-12 log-subs fleft">
            <div class="logo"> <a href="index.html"> <img src="http://carpoolingscript.com/demo/carpooling/themes/carpooling/assets/img/logo.png"> </a> </div>
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
