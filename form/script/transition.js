// When the user scrolls down 10px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
    document.getElementById("navbar").style.padding = "5px 1px";
    document.getElementById("sidebar").style.paddingTop = "70px";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementById("navbar").style.padding = "10px 1px";
    document.getElementById("sidebar").style.paddingTop = "80px";
    document.getElementById("logo").style.fontSize = "28px";
  }
}