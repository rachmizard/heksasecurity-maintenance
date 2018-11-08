
		<div class="button-lg" style="margin-bottom: 59px;">
			<a href="contact"  class="btn btn-calll" role="button" >
				<span class="fa fa-handshake-o" style="margin-right: 4%; font-size: 16px;"></span>Free Consultation
			</a>
		</div>
<div class="button-lg">
			<a href="contact"  class="btn btn-call" role="button">
				<span class="fa fa-phone" style="margin-right: 4%; font-size: 16px;"></span>Call Us Now
			</a>
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
		<script src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script>
		<script src="<?php echo base_url(); ?>assets/theme/js/jquery.galereya.js"></script>

		<script src="<?php echo base_url(); ?>assets/navbar/js/classie.js"></script>
		<script src="<?php echo base_url(); ?>assets/navbar/js/main3.js"></script>		
		<script>

			$(document).ready(function(){
				$("#owl-demo").owlCarousel({
					navigation: false,
					autoPlay : 3000,
					slideSpeed : 300,
					paginationSpeed : 400,
					singleItem:true,
					pagination : false,
					paginationNumbers: true,
				});
				$('#textarea1').val('New Text');
				$('#textarea1').trigger('autoresize');// text arera
			});
			$('#gal1').galereya();		
		</script>
	</body>
</html>