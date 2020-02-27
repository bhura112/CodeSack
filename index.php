<!DOCTYPE html>
<html>
<!--                   web head                          -->
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="css/index.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<!--********************************************** web page header*********************************************************************************-->
<div class="header" id="header">
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
<!--****************************************************header Close**********************************************************************************-->

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
  <h2>heloow</h2>
  <h2>heloow</h2>
</div>
<!--********************************************************************************************************************-->

</body>
</htm>
