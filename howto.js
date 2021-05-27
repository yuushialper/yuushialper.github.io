/* When the 利用者 scrolls downwards, hide the bar of navigation.  When the 利用者 scrolls upwards, show the bar of navigation */
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPoss = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("HowToDo").style.top = "0";
  } else {
    document.getElementById("HowToDo").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
