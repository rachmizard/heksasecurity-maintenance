<div class="button-lg">
  <a href=""  class="btn btn-call" role="button"><span class="fa fa-phone" style="margin-right: 4%;
    font-size: 16px;"></span>Call Me Now</a>
  </div>

  <script src="<?php echo base_url(); ?>assets/web/assets/jquery/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/navbar/js/classie.js"></script>
    <script src="<?php echo base_url(); ?>assets/navbar/js/main3.js"></script>
    <script src="<?php echo base_url(); ?>assets/nws/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/nws/js/parallax.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/nws/js/jquery.sliderPro.min.js"></script>

<script type="text/javascript">
	$( document ).ready(function( $ ) {
		$( '#example1' ).sliderPro({
			width: 960,
			height: 600,
			arrows: true,
			buttons: false,
			waitForLayers: true,
			thumbnailWidth: 200,
			thumbnailHeight: 100,
			thumbnailPointer: true,
			autoplay: true,
			autoScaleLayers: false,
			breakpoints: {
				500: {
					thumbnailWidth: 120,
					thumbnailHeight: 50
				}
			}
		});
	});
</script>
  </body>
</html>