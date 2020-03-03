<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../js/script.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
     var $animation_elements = $('.header');
     var $window = $(window);
     $window.on('scroll resize', check_if_in_view);
     $window.trigger('scroll');
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="css/style.css">
		 <link rel = "icon" href =  "../icons/logo.ico" 
        type = "image/x-icon"> 
	<title> <?php echo "Learn Real Time Operating System"?></title>
</head>
<body>
<header  id="header" class="header">
  <div class="header-container">
    <div class="header-logo">
      <div class="header-logo-img">
        <p class="logo-img-p"><img class="logo-img" src="../icons/logo.ico"/></p>
      </div>
      <div class="header-logo-txt"> <a href="#"><span>Code</span> <span class="subtxt">Sack</span></a></div>
    </div>
	  
    <nav class="header-menu">
		<i onMouseOver="AddResponseiveClass('menu-ul','menu-ul')" class="menu-icon fa fa-bars"></i>
        <ul class="menu-ul" id="menu-ul">
          <li><a href="../mcu/"> CONTROLLERS</a></li>
          <li><a href="#"> RTOS</a></li>
          <li><a href="../linux/"> LINUX</a></li>
        </ul>
      </nav>
    </div>
</header>
<div class="header-end"> </div>
	<!-- ************************************************-->
<div class="page-conatiner">
	<div>a</div>
 </div>
</body>
</html>