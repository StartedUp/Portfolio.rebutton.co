window.onload = function myMove() {
  var elem = document.getElementById("myAnimation");   
  var pos = 0;
  var id = setInterval(frame, 05);
  function frame() {
    if (pos == 600) {
      clearInterval(id);
    } else {
      pos++; 
      elem.style.left = pos + 'px'; 
      elem.style.right = pos + 'px'; 
    }
  }
}
