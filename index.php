<!DOCTYPE html>
<html>
<!--                   web head                          -->
 <head>
        <title> <?php echo "TEST ME"; ?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/index.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="js/index.js"></script>
 </head>

 <body>
   <!--********************************************** web page header*********************************************************************************-->
 <div class="header">
    <div class="header-container" id="header-container">
        <div class="header-logo"  id="header-logo"> <a href="#"> <span class="logo-1">Code</span><span class="logo-2"> Sack </span></a></div>
        <div class="header-menu"  id="header-menu">
         <a class="h1m1" href="#"> <?php echo "C";   ?></a>
         <a class="h1m2" href="#"> <?php echo "C++"; ?></a>
         <a class="h1m3" href="#"> <?php echo "MICRO CONTROLLER";?></a>
         <a class="h1m4" href="#"> <?php echo "RTOS";  ?></a>
         <a class="h1m5" href="#"> <?php echo "LINUX";  ?></a>
         <a class="menu-icon" href="javascript:void(0);" onclick="ResponseiveHeader('header-container','header-container'); ResponseiveHeader('header-logo','header-logo'); ResponseiveHeader('header-menu','header-menu');"><i class="fa fa-bars"></i></a>
        </div>
    </div>
 </div>
  <!--****************************************************header Close**********************************************************************************-->

<div class="page-container">
  <div class="topics">
    <div class="topic1" >
      <a  href="#"><?php echo "C";    ?> </a>
      <p> Hello This is c language ,its widely used in software and embedded  development.</p>
    </div>
    <div class="topic2" >
      <a  href="#"><?php echo "C++";  ?> </a>
      <p> Hello This is c language ,its widely used in software and embedded  development.</p>
    </div>
    <div class="topic4" >
      <a  href="#"><?php echo "RTOS"; ?> </a>
      <p> Hello This is c language ,its widely used in software and embedded  development.</p>
    </div>
    <div class="topic3" >
      <a  href="#"><?php echo "MCU";  ?> </a>
      <p> Hello This is c language ,its widely used in software and embedded  development.</p>
    </div>
    <div class="topic5" >
      <a  href="#"><?php echo "LINUX";?> </a>
      <p> Hello This is c language ,its widely used in software and embedded  development.</p>
    </div>
  </div>

</div>
 </body>
</htm>
