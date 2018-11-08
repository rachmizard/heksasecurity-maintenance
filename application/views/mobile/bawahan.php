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
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script>
		<script src="<?php echo base_url(); ?>assets/navbar/js/classie.js"></script>
		<script src="<?php echo base_url(); ?>assets/navbar/js/main3.js"></script>
      	<script src="<?php echo base_url(); ?>assets/js/jquery.aniview.js"></script><!--aniview-->
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
  
  <script>
    $(document).ready(function(){
      $("#owl-demo").owlCarousel({
 
      navigation: false,
      autoPlay : 5000,
      slideSpeed : 500,
      paginationSpeed : 400,
      singleItem:true,
      pagination : false,
      paginationNumbers: false,
        });
    $('#textarea1').val('New Text');
    $('#textarea1').trigger('autoresize');// text arera
    });

    $(document).ready(function(){
      $("#owl-demi").owlCarousel({
 
      navigation: false,
      autoPlay : 5000,
      slideSpeed : 500,
      paginationSpeed : 400,
      singleItem:true,
      pagination : false,
      paginationNumbers: false,
        });
    $('#textarea1').val('New Text');
    $('#textarea1').trigger('autoresize');// text arera
    });

    $(document).ready(function(){
      $("#owl-demo2").owlCarousel({
 
      navigation: false,
      autoPlay : 5000,
      slideSpeed : 500,
      paginationSpeed : 400,
      singleItem:true,
      pagination : false,
      paginationNumbers: true,
        });
    $('#textarea1').val('New Text');
    $('#textarea1').trigger('autoresize');// text arera
    });

    $(document).ready(function(){
      $("#owl-demi2").owlCarousel({
 
      navigation: false,
      autoPlay : 5000,
      slideSpeed : 500,
      paginationSpeed : 400,
      singleItem:true,
      pagination : false,
      paginationNumbers: true,
        });
    $('#textarea1').val('New Text');
    $('#textarea1').trigger('autoresize');// text arera
    });


      $(document).ready(function(){
      $("#owl-demo3").owlCarousel({
 
      navigation: false,
      autoPlay : 5000,
      slideSpeed : 500,
      paginationSpeed : 400,
      singleItem:true,
      pagination : false,
      paginationNumbers: true,
        });
    $('#textarea1').val('New Text');
    $('#textarea1').trigger('autoresize');// text arera
    });

    $(document).ready(function(){
      $("#owl-demi3").owlCarousel({
 
      navigation: false,
      autoPlay : 5000,
      slideSpeed : 500,
      paginationSpeed : 400,
      singleItem:true,
      pagination : false,
      paginationNumbers: true,
        });
    $('#textarea1').val('New Text');
    $('#textarea1').trigger('autoresize');// text arera
    });
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
		
    <script>
       $(document).ready(function(){
         $('.aniview').AniView();
                    var options = {
                    animateThreshold: 50,
                    scrollPollInterval: 20
                }
                    $('.aniview').AniView(options);
                    //this end for scroller
        });  
    </script>

<!--SRART BERITA-->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/nws/js/jquery.sliderPro.min.js"></script>

<script type="text/javascript">
  $( document ).ready(function( $ ) {
    $( '#example3' ).sliderPro({
      width: 960,
      height: 800,
      fade: true,
      arrows: true,
      buttons: false,
      fullScreen: true,
      shuffle: true,
      smallSize: 500,
      mediumSize: 1000,
      largeSize: 3000,
      thumbnailArrows: true,
      autoplay: false
    });
  });
</script>
<script type="text/javascript">
  $( document ).ready(function( $ ) {
    $( '#example4' ).sliderPro({
      width: 960,
      height: 800,
      fade: true,
      arrows: true,
      buttons: false,
      fullScreen: true,
      shuffle: true,
      smallSize: 500,
      mediumSize: 1000,
      largeSize: 3000,
      thumbnailArrows: true,
      autoplay: false
    });
  });
</script>
<script type="text/javascript">
  $( document ).ready(function( $ ) {
    $( '#example5' ).sliderPro({
      width: 960,
      height: 800,
      fade: true,
      arrows: true,
      buttons: false,
      fullScreen: true,
      shuffle: true,
      smallSize: 500,
      mediumSize: 1000,
      largeSize: 3000,
      thumbnailArrows: true,
      autoplay: false
    });
  });
</script>


<!--END BERITA-->

		<input name="animation" type="hidden">
	</body>
</html>