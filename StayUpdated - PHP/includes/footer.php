<!-- Slutet av sidorna -->
<footer class="container-fluid text-center">
  <a href="#myPage" title="Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Website Made By <a href="http://www.vidaraj.se/" title="Visit My Page">VidarAJ.se</a></p>
</footer>

<!-- jquery taget från w3schools bootstrap exempel och gör så att knappen i footern scrollar fint upp till början. -->
<script> 
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
      });
    } // End if
  });
})
</script>

</body>
</html>