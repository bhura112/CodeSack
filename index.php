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
		<i onclick="AddResponseiveClass('menu-ul','menu-ul')" class="menu-icon fa fa-bars"></i>
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
<div class="main-conatiner">
	<!--*********************************************************************************************-->
	<div class="main-row">
	<div class="col1"> <img src="icons/autohome.gif"/></div>
	<div class="col2"> 
		<h3>Embedded System</h3>
		<p> An embedded system is a combination of computer hardware and software, either fixed in capability or programmable, designed for a specific function or functions within a larger system. </p>
		</div>
	
	</div>
	
	<div class="main-row">
	<div class="col1"> <img src="icons/rtos.gif"/></div>
	<div class="col2"> 
		<h3>Real Time Operating System</h3>
		<p> A real-time operating system (RTOS) is an operating system (OS) intended to serve real-time applications that process data as it comes in, typically without buffer delays. Processing time requirements (including any OS delay) are measured in tenths of seconds or shorter increments of time. </p>
		</div>
	
	</div>
	
	<div class="main-row">
	<div class="col1"> <img src="icons/iotcover.gif"/></div>
	<div class="col2"> 
		<h3>Internet Of Things</h3>
		<p> The Internet of things (IoT) is a system of interrelated computing devices, mechanical and digital machines are provided with unique identifiers (UIDs) and the ability to transfer data over a network without requiring human-to-human or human-to-computer interaction. </p>
		</div>
	
	</div>
	
	<div class="main-row">
	<div class="col1 web-page-end"> <img  style="margin: 10px 0px 0px 0px;  width: 80px ; height: 80px;" src="icons/logo.ico"/></div>
	<div class="col2 web-page-end"> 
		<h3>Code Sack <br>Learn Fast, Build Fast</h3>
		<p>Subscribe our newsletter for new code examples, tutorials 
		and portable libraries update.</p>
		</div>
	    <form class="example" action="/action_page.php">
		  <input type="text" placeholder="Enter email address" name="search">
		  <i class="fa fa-envelope" aria-hidden="true"></i>
		  <button type="submit">Subscribe</button>
		</form>
	</div>
	<!--*********************************************************************************************-->
	<!--<div class="main-row-1">
		<div class="col1">
			<h2>Code Sack <br/>Learn Fast, Build Fast !</h2>
			<p>Serach here for code examples, tutorials 
		and portable libraries for different periperials <br/>like UART, I2C, USB ,Graphical Interface and etc.
		Learn how to bulid your first to high level<br/> RTOS and LINUX applications.</p>
			 <h3>Get the latest tutorials and update</h3>
		  <form class="example" action="/action_page.php">
		  <input type="text" placeholder="Enter email address" name="search">
		  <i class="fa fa-envelope" aria-hidden="true"></i>
		  <button type="submit">Subscribe</button>
		</form>
		</div>
	
	   
	</div>-->
  <!--<div class="page-intro-card">
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
  </div>-->
</div>
</body>
</html>