
		<div class="button-lg" style="margin-bottom: 59px;" id="alterm">
			<a href="contact"  class="btn btn-calll" role="button" >
				<span class="fa fa-handshake-o" style="margin-right: 4%; font-size: 16px;"></span>Free Consultation
			</a>
		</div>
<div class="button-lg">
    <a href="contact"  class="btn btn-call" role="button"><span class="fa fa-phone" style="margin-right: 4%;
    font-size: 16px;"></span>Call Us Now</a>
        
    </div>
  
    <script src="<?php echo base_url(); ?>assets/web/assets/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/tether/tether.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dropdown/js/script.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/smooth-scroll/smooth-scroll.js"></script>
    <script src="<?php echo base_url(); ?>assets/touch-swipe/jquery.touch-swipe.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/viewport-checker/jquery.viewportchecker.js"></script>
    <script src="<?php echo base_url(); ?>assets/jarallax/jarallax.js"></script>
    <script src="<?php echo base_url(); ?>assets/masonry/masonry.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
    <script src="<?php echo base_url(); ?>assets/theme/js/script.js"></script>
    <script src="<?php echo base_url(); ?>assets/gallery/player.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/gallery/script.js"></script>
    <script src="<?php echo base_url(); ?>assets/formoid/formoid.min.js"></script>  
  <script src="<?php echo base_url(); ?>assets/dropdown/js/script.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/navbar/js/classie.js"></script>
    <script src="<?php echo base_url(); ?>assets/navbar/js/main3.js"></script>

 <script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>

  <script type="text/javascript">
    var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
  </script>
  
    <input name="animation" type="hidden">
  </body>
</html>