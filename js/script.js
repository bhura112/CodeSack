// JavaScript Document
function AddResponseiveClass(id, htmlclass) {
		  var x = document.getElementById(id);
		  if (x.className == htmlclass) {
			x.className += " responsive";
		  } else {
			x.className = htmlclass;
		  }
		}

  function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
	  
  var headerElement =  document.getElementById("header");
  var headerLogoImg =  document.getElementById("headerlogoImg");
  var headerLogoTxt =  document.getElementById("headerlogoTxt");
	  
  if( window_top_position > 50 && headerElement.className == "header")
		 {
			headerElement.className += " header-after-scroll";
			headerLogoImg.style.display = "none";
			headerLogoTxt.style.display = "block"
		 }else if(window_top_position < 50){
			 headerElement.className = "header";
			headerLogoImg.style.display = "block";
			headerLogoTxt.style.display = "none"
		 }
	}