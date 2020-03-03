<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script src="js/script.js"></script> 
<script type="text/javascript">
     var $animation_elements = $('.header');
     var $window = $(window);
     $window.on('scroll resize', check_if_in_view);
     $window.trigger('scroll');
</script>
<!--	<script src="https://kit.fontawesome.com/876ecdabdb.js" crossorigin="anonymous"></script>-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel = "icon" href =  "icons/logo.ico" 
        type = "image/x-icon">
<title> <?php echo "Welcome to Code Sack"?></title>
</head>
<body>
<header  id="header" class="header">
  <div class="header-container">
    <div  class="header-logo">
      <div  id="headerlogoImg" class="header-logo-img">
        <p  class="logo-img-p"><a href="#"><img  class="logo-img" src="icons/logo.ico"/></a></p>
      </div>
      <div id="headerlogoTxt" class="header-logo-txt"> 
		  <a  class="logo-txt" href="#"><span>Code</span> <span class="subtxt">Sack</span></a>
	  </div>
    </div>
    <nav class="header-menu"> 
		<i onMouseOver="AddResponseiveClass('menu-ul','menu-ul')" class="menu-icon fa fa-bars"></i>
      <ul class="menu-ul" id="menu-ul">
        <li><a href="mcu/"> CONTROLLERS</a></li>
        <li><a href="rtos/"> RTOS</a></li>
        <li><a href="linux/"> LINUX</a></li>
		 <li><a href="#"><i class="fa fa-search"> </i></a></li>
      </ul>
    </nav>
  </div>
</header>
<div class="header-end"> </div>
<!-- ************************************************-->
<div class="page-conatiner">
	
  <div class="page-intro-card">
    <div class="card-row-1">
      <div class="card-col-1"> 
		<div class="card-header">
			<h1> Code <span>Sack </span><br/>Learn Fast, Build Fast</h1>
		  </div>
		<div class="card-data"><p>Serach here for code examples, Tutorials,
		Portable library of different periperials like UART, I2C, USB ,Graphical Interface and etc.
		Learn how to bulid your first to high level RTOS and Linux applications.</p> </div>
		<div class="card-footer">
		  <h3>Get the latest tutorials and update</h3>
		  <form class="example" action="/action_page.php">
		  <input type="text" placeholder="Enter email address" name="search">
		  <i class="fa fa-envelope" aria-hidden="true"></i>
		  <button type="submit">Subscribe</i></button>
		</form>
		  
		  </div>
	  </div>
      <div class="card-col-2"> 
		<div class="card-header"> <h3>Download free & open source code examples use in you <br/>application without any licences restrictions. </h3>
		  </div>
		<div class="card-data"> 
			<i class="fa fa-microchip" aria-hidden="true"></i> 
			<i class="fa fa-terminal" aria-hidden="true"></i>
			<i class="fa fa-cog" aria-hidden="true"></i>
			<i class="fa fa-code" aria-hidden="true"></i>
		  </div>
		  <p>Follow Us: </p> 
		  <div class="card-footer"><a href="#"> <i class="fa fa-youtube" aria-hidden="true"></i></a>
		  <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a>
		  <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
		   <a href="#"> <i class="fa fa-github" aria-hidden="true"></i></a>
		  </div>
		  </div>
    </div>
  </div>
</div>
</body>
</html>