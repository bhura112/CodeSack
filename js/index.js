function ResponseiveHeader(id, htmlclass) {
  var x = document.getElementById(id);
  if (x.className === htmlclass) {
    x.className += " responsive";
  } else {
    x.className = htmlclass;
  }
}

function ResizeOnScroll() {
  console.log("Hello ");
}

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);

  var HeaderElement = document.getElementById('header');
  var ImgLogoElement = document.getElementById('imgLogo');
  var TxtLogoElement = document.getElementById('txtLogo');
  /**************************************************************************/
  if (window_top_position > 20 && HeaderElement.className == "header") {
    HeaderElement.className += " header-after-scroll";
  } else if (window_top_position < 20 && HeaderElement.className != "header") {
    HeaderElement.className = "header";
  }

  /************************************************************************************/
}
