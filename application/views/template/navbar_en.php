<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/flags.css">
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.flagstrap.min.js" ></script>
<div class="cont menu-wrap" style="position: fixed;">
				<nav class="menu">
					<div class="icon-list">
						<a  href="<?php echo base_url(); ?>en/Home"><i class="fa fa-fw fa-home"></i><span>Home</span></a>
						<a href="<?php echo base_url(); ?>en/About"><i class="fa fa-fw fa-question-circle"></i><span>About Us</span></a>
						<a href="<?php echo base_url(); ?>en/Partners"><i class="fa fa-fw fa-handshake-o"></i><span>Partners</span></a>
						<a href="<?php echo base_url(); ?>en/Security"><i class="fa fa-fw fa-shield"></i><span>Security</span></a>
						<a href="<?php echo base_url(); ?>en/Training"><i class="fa fa-fw fa-bullhorn"></i><span>Training</span></a>
						<a href="<?php echo base_url(); ?>en/News"><i class="fa fa-fw fa-book"></i><span>Articles & News</span></a>
						<a href="<?php echo base_url(); ?>en/Testimonials"><i class="fa fa-fw fa-star"></i><span>Testimonials</span></a>
						<a href="<?php echo base_url(); ?>en/Gallery"><i class="fa fa-fw fa-camera-retro"></i><span>Gallery</span></a>
						<a href="<?php echo base_url(); ?>en/Career"><i class="fa fa-fw fa-users"></i><span>Career</span></a>
						<a href="<?php echo base_url(); ?>en/Contact"><i class="fa fa-fw fa-phone-square"></i><span>Contact</span></a>
					</div>

					<div style="    margin-top: 19%;">
					<p style="color: #fff; font-size: 13px; margin-left: 6%;">Follow Us On:</p>
<a href="https://web.facebook.com/pages/Pt-Heksa-Garda-Utama/257360880962235?_rdc=1&_rdr"><i style="   font-size: 21px;" class="fa fa-fw fa-facebook"></i></a>
<a href="https://www.instagram.com/explore/locations/1029099254/pt-heksa-garda-utama/"><i style="   font-size: 21px;" class="fa fa-fw fa-instagram"></i></a>
<a href="https://twitter.com/search?q=heksa%20garda%20utama&src=typd"><i style="   font-size: 21px; padding-left: 10px" class="fa fa-fw fa-twitter"></i></a>
<a href="https://www.google.co.id/maps/place/PT.+Heksa+Garda+Utama/@-6.9582819,107.652155,15z/data=!4m5!3m4!1s0x0:0xec964a23cdea917d!8m2!3d-6.9582819!4d107.652155"><i style="   font-size: 21px; padding-left: 19px" class="fa fa-fw fa-google-plus"></i></a>
					</div>
				</nav>

				<button class="close-button" id="close-button"></button>
				<div class="morph-shape" id="morph-shape" data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
					<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
						<path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z"/>
					</svg>
				</div>
			</div>
	<button class="menu-button" id="open-button"></button>
	
	<div class="logonavbar">
		<div class="col-lg-5"></div>
		<div class="col-lg-2">
				<img src="<?php echo base_url(); ?>assets/images/logo_heksa.png" style="width: 30%;margin: 0 auto;display: block;">
				<p>PT. HEKSA GARDA UTAMA</p>
		</div>
		<div class="col-lg-5">
			<form style="float:right;">
				<div id="options"
					data-selected-country="US">
				</div>
			</form>
		</div>
	</div>

<script type="text/javascript">
	$('#options').flagStrap({
		countries: {
			"ID": "ID",
			"US": "EN"
		},
		inputName: 'country',
		buttonSize: "",
		buttonType: "white",
		labelMargin: "",
		scrollable: false,
		scrollableHeight: "",
		onSelect: function(value, element) {
			changeLanguage(value);
		},
		placeholder: {
			value: "",
			text: ""
		}
	});

	function changeLanguage(val){
		var href = $(location).attr('href');
		var url = href.replace(urlbase+'en/', "");
		var form = {
			urlbase : urlbase,
			menu: url,
			language: val
		};
		httpsendPost('getNavbar', form).done(r => {
			if(r.status == 'success'){
				window.location.href = r.url;
			}else {
				alert('Gagal Ganti Bahasa');
			}
		});
	}
</script>