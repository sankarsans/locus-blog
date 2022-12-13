// scroll based progress bar visible
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}



// progress bar hide/show
progressBar = document.getElementById("header");

var myScrollFunc = function () {
    var y = window.scrollY;
    if (y >= 800) {
      progressBar.className = "header visible"
    } else {
      progressBar.className = "header d-none"
    }
};

window.addEventListener("scroll", myScrollFunc);


// subscribe button hide/show
subscribeButton = document.getElementById("subscribeButton");



var myScrollFunc = function () {
    var y = window.scrollY;
    if (y >= 1200) {
      subscribeButton.className = "subscribe-section sec-padding subscribe-fixed"
    } else {
      subscribeButton.className = "subscribe-section sec-padding"
    }
    // else if(window.innerHeight + window.scrollY > document.body.clientHeight){
    //   document.getElementById("subscribeButton").classList.add('d-none')
    // } 
};

window.addEventListener("scroll", myScrollFunc);

