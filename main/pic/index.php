<!DOCTYPE html>
<html>
<!--                   web head                          -->
 <head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script type="text/javascript">

     var $animation_elements = $('.animation-element');
     var $window = $(window);

     function check_if_in_view() {
       var window_height = $window.height();
       var window_top_position = $window.scrollTop();
       var window_bottom_position = (window_top_position + window_height);
       console.log(window_top_position);
       console.log(window_bottom_position);

       $.each($animation_elements, function() {
         var $element = $(this);
         var element_height = $element.outerHeight();
         var element_top_position = $element.offset().top;
         var element_bottom_position = (element_top_position + element_height);

         //check to see if this current container is within viewport
         if ((element_bottom_position >= window_top_position) &&
           (element_top_position <= window_bottom_position)) {
           $element.addClass('in-view');
         } else {
           $element.removeClass('in-view');
         }
       });
     }

     $window.on('scroll resize', check_if_in_view);
     $window.trigger('scroll');
   </script>
        <title> <?php echo "TEST ME"; ?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="../../css/index.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="../../js/index.js"></script>
 </head>

 <body>
   <!--********************************************** web page header*********************************************************************************-->
 <div class="header" id="header">
    <div class="header-container" id="header-container">
        <div class="header-logo"  id="header-logo"> <a href="#"> <span class="logo-1">Code</span><span class="logo-2"> Sack </span></a></div>
        <div class="header-menu"  id="header-menu">

<ul>
  <li>
    <a href="#">MICRO CONTROLLERS</a>
    <ul>
      <li><a href="../atmel/">ATEML</a></li>
      <li><a href="#">MICRO CHIP</a></li>
      <li><a href="../arm/">ARM</a></li>
    </ul>
  </li>
</ul>

<ul>
  <li>
    <a href="#">RTOS</a>
    <ul>
      <li><a href="#">Link 1</a></li>
      <li><a href="#">Link 2</a></li>
      <li><a href="#">Link 3</a></li>
    </ul>
  </li>
</ul>

<ul>
  <li>
    <a href="#">LINUX</a>
    <ul>
      <li><a href="#">Link 1</a></li>
      <li><a href="#">Link 2</a></li>
      <li><a href="#">Link 3</a></li>
    </ul>
  </li>
</ul>

         <a class="menu-icon" href="javascript:void(0);" onclick="ResponseiveHeader('header-container','header-container'); ResponseiveHeader('header-logo','header-logo'); ResponseiveHeader('header-menu','header-menu');"><i class="fa fa-bars"></i></a>
        </div>
    </div>
 </div>


 </div>
  <!--****************************************************header Close**********************************************************************************-->

<div class="page-container" >


</div>
 </body>
</htm>
