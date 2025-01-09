function myFunction(x) {
  x.classList.toggle("change");
}
// Add active class to Active menu

$(function($) {
 let url = window.location.href;
  $('nav ul .nav-item a').each(function() {
   if (this.href === url) {
    // Only For Menu
   $(this).closest('nav ul .nav-item').addClass('active');
   // For Dropdown Menu
   $(this).parent('.nav-item').addClass("active");
  }
 });
});
// Sticky Navbar
document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
});
          