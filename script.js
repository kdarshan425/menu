/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function myFunction() {
var x = document.getElementById("myTopnav");
if (x.className === "topnav") {
x.className += " responsive";
} else {
x.className = "topnav";
}
}
// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function dk_open() {
if (mySidebar.style.display === 'block') {
mySidebar.style.display = 'none';
} else {
mySidebar.style.display = 'block';
}
}

// Close the sidebar with the close button
function dk_close() {
mySidebar.style.display = "none";
}


//sticky navbar
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("myTopnav");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
if (window.pageYOffset >= sticky) {
navbar.classList.add("sticky")
} else {
navbar.classList.remove("sticky");
}
}


//ser



// progress bar
wind.on('scroll', function() {
$(".skills-progress span").each(function() {
    var bottom_of_object =
        $(this).offset().top + $(this).outerHeight();
    var bottom_of_window =
        $(window).scrollTop() + $(window).height();
    var myVal = $(this).attr('data-value');
    if (bottom_of_window > bottom_of_object) {
        $(this).css({
            width: myVal
        });
    }
});
});

