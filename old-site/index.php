<!DOCTYPE html>
<html>
<!--                   web head                          -->
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="css/index.css"/>

<script type="text/javascript" src="js/index.js"></script> 
<script type="text/javascript">

     var $animation_elements = $('.header');
     var $window = $(window);

     $window.on('scroll resize', check_if_in_view);
     $window.trigger('scroll');
   </script>
<title> <?php echo "TEST ME"; ?> </title>
</head>
<body>
	<div class="header" >
	    <div class="header-container">
			<!-- ************************************************************************************* -->
		    <div class="header-logo">
			<div class="img-logo"><a href="#"> <img src="icons/logo.ico"/></a></div>
				<div class="txt-logo"><a href="#"> <span class="logo">Code</span> <span class="sublogo">Sack</span></a></div>
			</div>
			<!-- ************************************************************************************* -->

			<div class="header-menu">
			<div class="icon"> <i class="fa fa-bars"></i></div>
			<!-- ************************************************************************************* -->
			<div class="menu">
			 <ul>
			   <li> <a href="#">MICRO CONTROLLER</a></li>
			   <li> <a href="#">RTOS</a></li>
			   <li> <a href="#">LINUX</a></li>
		     </ul>
			</div>
			
			<!-- ************************************************************************************* -->
			</div>			
		</div>
	</div>

	<!-- ****************************************************************************************  -->
	<!--<div class="header-end"></div>
	<!-- ****************************************************************************************  -->
	
<!--	<div id="pageContainer" class="pageContainer">
	
			<div class="pc-row ">
			<div class="pc-col-md1 ">
			  <p> Code Sack <br/>
				Learn Fast, Build Fast </p>
			  <p>Serach here for code examples, Tutorials, <br />
				Portable library of different periperials like UART, I2C, USB ,Graphical Interface and etc. <br />
				Learn how to bulid your first to high level RTOS and Linux applications.</p>
			  <p>
				<input type="text" class="search-input" placeholder="Ex : Atmega 8 " id="search-input" name ="Search"/>
			  </p>
			</div>
			<div class="pc-col-md2"> <img src="icons/abc11.png"/> </div>
		  </div>
	</div>

	
<!--********************************************** web page header*********************************************************************************
	
<p><strong>Hi there! Welcome to this Wikibook on the wonderful world of Bourne Shell Scripting!
	  
	  This book will cover the practical aspects of using and interacting with the Bourne Shell, the root of all shells in use in the Unix world. That includes interacting with the shell on a day-to-day basis for the purposes of operating the computer in normal tasks, as well as grouping together commands in files (scripts) which can be run over and over again. Since it's not practical to talk about the Bourne Shell in complete isolation, this will also mean some short jaunts into the wondrous world of Unix; not far, just enough to understand what is going on and be able to make full use of the shell's very wide capabilities.
	  
	  There are also some things this book won't do for you. This book is not an in-depth tutorial on any kind of programming theory -- you won't learn the finer points of program construction and derivation or the mathematical backings of program development here. This book also won't teach you about Linux or any other type of Unix or Unix itself or any other operating system any more than is necessary to teach you how to use the shell. Nothing to be found here about Apache, joe, vi, or any other specific program. Nor will we cover firewalls and networking.
	  
	  We will cover the Bourne Shell, beginning with the basic functionality and capabilities as they existed in the initial release, through to the added functionality specified by the international POSIX standard POSIX 1003.1 for this shell. We will have to give you some programming knowledge, but we hope that everyone will readily understand the few simple concepts we explain.
	  
	  Having said that, the authors hope you will find this book a valuable resource for learning to use the shell and for using the shell on a regular basis. And that you might even have some fun along the way.</strong></p>
<h2>Hi there! Welcome to this Wikibook on the wonderful world of Bourne Shell Scripting!
  
  This book will cover the practical aspects of using and interacting with the Bourne Shell, the root of all shells in use in the Unix world. That includes interacting with the shell on a day-to-day basis for the purposes of operating the computer in normal tasks, as well as grouping together commands in files (scripts) which can be run over and over again. Since it's not practical to talk about the Bourne Shell in complete isolation, this will also mean some short jaunts into the wondrous world of Unix; not far, just enough to understand what is going on and be able to make full use of the shell's very wide capabilities.
  
  There are also some things this book won't do for you. This book is not an in-depth tutorial on any kind of programming theory -- you won't learn the finer points of program construction and derivation or the mathematical backings of program development here. This book also won't teach you about Linux or any other type of Unix or Unix itself or any other operating system any more than is necessary to teach you how to use the shell. Nothing to be found here about Apache, joe, vi, or any other specific program. Nor will we cover firewalls and networking.
  
  We will cover the Bourne Shell, beginning with the basic functionality and capabilities as they existed in the initial release, through to the added functionality specified by the international POSIX standard POSIX 1003.1 for this shell. We will have to give you some programming knowledge, but we hope that everyone will readily understand the few simple concepts we explain.
  
Having said that, the authors hope you will find this book a valuable resource for learning to use the shell and for using the shell on a regular basis. And that you might even have some fun along the way.</h2>
	
	
	<h2>Hi there! Welcome to this Wikibook on the wonderful world of Bourne Shell Scripting!

This book will cover the practical aspects of using and interacting with the Bourne Shell, the root of all shells in use in the Unix world. That includes interacting with the shell on a day-to-day basis for the purposes of operating the computer in normal tasks, as well as grouping together commands in files (scripts) which can be run over and over again. Since it's not practical to talk about the Bourne Shell in complete isolation, this will also mean some short jaunts into the wondrous world of Unix; not far, just enough to understand what is going on and be able to make full use of the shell's very wide capabilities.

There are also some things this book won't do for you. This book is not an in-depth tutorial on any kind of programming theory -- you won't learn the finer points of program construction and derivation or the mathematical backings of program development here. This book also won't teach you about Linux or any other type of Unix or Unix itself or any other operating system any more than is necessary to teach you how to use the shell. Nothing to be found here about Apache, joe, vi, or any other specific program. Nor will we cover firewalls and networking.

We will cover the Bourne Shell, beginning with the basic functionality and capabilities as they existed in the initial release, through to the added functionality specified by the international POSIX standard POSIX 1003.1 for this shell. We will have to give you some programming knowledge, but we hope that everyone will readily understand the few simple concepts we explain.

Having said that, the authors hope you will find this book a valuable resource for learning to use the shell and for using the shell on a regular basis. And that you might even have some fun along the way.</h2>
	
	
		<h2>Hi there! Welcome to this Wikibook on the wonderful world of Bourne Shell Scripting!

This book will cover the practical aspects of using and interacting with the Bourne Shell, the root of all shells in use in the Unix world. That includes interacting with the shell on a day-to-day basis for the purposes of operating the computer in normal tasks, as well as grouping together commands in files (scripts) which can be run over and over again. Since it's not practical to talk about the Bourne Shell in complete isolation, this will also mean some short jaunts into the wondrous world of Unix; not far, just enough to understand what is going on and be able to make full use of the shell's very wide capabilities.

There are also some things this book won't do for you. This book is not an in-depth tutorial on any kind of programming theory -- you won't learn the finer points of program construction and derivation or the mathematical backings of program development here. This book also won't teach you about Linux or any other type of Unix or Unix itself or any other operating system any more than is necessary to teach you how to use the shell. Nothing to be found here about Apache, joe, vi, or any other specific program. Nor will we cover firewalls and networking.

We will cover the Bourne Shell, beginning with the basic functionality and capabilities as they existed in the initial release, through to the added functionality specified by the international POSIX standard POSIX 1003.1 for this shell. We will have to give you some programming knowledge, but we hope that everyone will readily understand the few simple concepts we explain.

Having said that, the authors hope you will find this book a valuable resource for learning to use the shell and for using the shell on a regular basis. And that you might even have some fun along the way.</h2>
<!--<div class="header" id="header">
  <div class="header-container" id="header-container">
    <div class="header-logo"  id="header-logo">
      <div class="imgLogo" id="imgLogo"> <a href=""><img src="icons/logo.png" /></a></div>
      <div class="txtLogo" id="txtLogo"> <a href=""><span class="logoText1"> Code </span> <span class="logoText2">Sack</span></a></div>
    </div>
    <div class="header-menu"  id="header-menu">
      <ul>
        <li> <a href="#">MICRO CONTROLLERS</a>
          <ul>
            <li><a href="main/atmel/">ATEML</a></li>
            <li><a href="main/pic/">MICRO CHIP</a></li>
            <li><a href="main/arm/">ARM</a></li>
          </ul>
        </li>
      </ul>
      <ul>
        <li> <a href="#">RTOS</a>
          <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
          </ul>
        </li>
      </ul>
      <ul>
        <li> <a href="#">LINUX</a>
          <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
          </ul>
        </li>
      </ul>
      <a class="menu-icon" href="javascript:void(0);" onclick="ResponseiveHeader('header-container','header-container'); ResponseiveHeader('header-logo','header-logo'); ResponseiveHeader('header-menu','header-menu');"><i class="fa fa-bars"></i></a> </div>
  </div>
</div>
</div>
-->
<!--****************************************************header Close**********************************************************************************-->
<!--
<div class="page-container" >
  <div class="pc-row ">
    <div class="pc-col-md1 ">
      <h2> Code Sack <br/>
        Learn Fast, Build Fast </h2>
      <h4>Serach here for code examples, Tutorials, <br />
        Portable library of different periperials like UART, I2C, USB ,Graphical Interface and etc. <br />
        Learn how to bulid your first to high level RTOS and Linux applications.</h4>
      <p>
        <input type="text" class="search-input" placeholder="Ex : Atmega 8 " id="search-input" name ="Search"/>
      </p>
    </div>
    <div class="pc-col-md2"> <img src="icons/abc11.png"/> </div>
  </div>
</div>-->
<!--********************************************************************************************************************-->

</body>
</htm>
