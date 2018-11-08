<?php
	defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>PT Heksa Garda Utama</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="crsf-token" content="<?php echo $this->session->userdata('__ci_last_regenerate'); ?>">
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />

		<link rel="shortcut icon" href="<?php echo base_url('public/img/logo.png'); ?>"/>

  		<!-- DataTables -->
  		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css">
		<!--global styles-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/css/components.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/css/custom.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/vendors/Buttons/css/buttons.min.css"/>
		<!-- end of global styles-->

		<!-- angularjs important -->
		<script type="text/javascript" src="<?php echo base_url(); ?>public/angular/js/angular.js"></script>
		<!-- <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery-3.2.1.min.js"></script> -->
		<!-- end angularjs -->

		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/vendors/select2/css/select2.min.css" />
		<!-- <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/css/pages/dataTables.bootstrap.css" /> -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/vendors/summernote/css/summernote.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/vendors/bootstrap-switch/css/bootstrap-switch.min.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/vendors/switchery/css/switchery.min.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/vendors/radio_css/css/radiobox.min.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/vendors/checkbox_css/css/checkbox.min.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/vendors/modal/css/component.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/vendors/animate/css/animate.min.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/vendors/rateyo/css/jquery.rateyo.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/vendors/fileinput/css/fileinput.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/vendors/daterangepicker/css/daterangepicker.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/vendors/datepicker/css/bootstrap-datepicker.min.css" />

		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/vendors/toastr/css/toastr.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/vendors/switchery/css/switchery.min.css" />

		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/vendors/fancybox/css/jquery.fancybox.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/vendors/fancybox/css/jquery.fancybox-thumbs.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/vendors/imagehover/css/imagehover.min.css" />

		<!-- <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/css/pages/tables.css" /> -->

		<style type="text/css">
			.border{
				border: solid 1px black;
			}
		</style>
		<script type="text/javascript">
			var urlbase = "<?php echo base_url(); ?>";
		</script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery2.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/grapes.min.css">
		<script src="<?php echo base_url(); ?>public/js/grapes.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/js/fungsisend.js"></script>
		<script src="<?php echo base_url(); ?>public/js/sweetalert2.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/sweetalert2.min.css">
	</head>
	<body>
		<?php include_once('loadingGif.php'); ?>
		<div class="bg-dark" id="wrap">
			<?php include_once('top_nav.php'); ?>
				<div class="wrapper">
					<?php include_once('left_nav.php'); ?>
					<div id="content" class="bg-container">
						<?php $this->load->view($content); ?>
					</div>
				</div>
		</div>

<style>
	.card{
		padding: 35px;
	}
</style>
		<!-- global scripts-->
		<script type="text/javascript" src="<?php echo base_url(); ?>public/js/components.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/js/custom.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/Buttons/js/buttons.js"></script>
		<!-- global scripts end-->
		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/toastr/js/toastr.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/switchery/js/switchery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/flotchart/js/jquery.flot.js" ></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/flotchart/js/jquery.flot.categories.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/countUp.js/js/countUp.min.js"></script>

		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/select2/js/select2.js"></script>
		<!-- DataTables -->
		<script src="<?php echo base_url(); ?>assets/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/dataTables.bootstrap.min.js"></script>

		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/bootstrap-switch/js/bootstrap-switch.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/switchery/js/switchery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/raphael/js/raphael-min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/tinymce/js/tinymce.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.all.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/daterangepicker/js/daterangepicker.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/datepicker/js/bootstrap-datepicker.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/summernote/js/summernote.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/rateyo/js/jquery.rateyo.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/fileinput/js/fileinput.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/fileinput/js/theme.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/fancybox/js/jquery.mousewheel-3.0.6.pack.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/fancybox/js/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/vendors/fancybox/js/jquery.fancybox-thumbs.js"></script>
		<script>
		  $(function () {
		    $('#tabeladmin1').DataTable()
		    $('#tabeladmin2').DataTable({
		      'paging'      : true,
		      'lengthChange': false,
		      'searching'   : true,
		      'ordering'    : true,
		      'info'        : true,
		      'autoWidth'   : false
		    })
		  })
		</script>
	</body>
</html>