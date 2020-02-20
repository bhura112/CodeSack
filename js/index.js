function ResponseiveHeader(id,htmlclass) {
  var x = document.getElementById(id);
  if (x.className === htmlclass) {
    x.className += " responsive";
  } else {
    x.className = htmlclass;
  }
}
