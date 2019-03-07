// Get the container element
var btnContainer = document.getElementById("menunav");

// Get all buttons with class="btn" inside the container
var li = btnContainer.getElementsByClassName("btn-nav");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < li.length; i++) {
  li[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active-nav");
    current[0].className = current[0].className.replace(" active-nav", "");
    this.className += " active-nav";
  });
}