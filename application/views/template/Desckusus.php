<section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-r" data-rv-view="82">
<div class="mbr-overlay" id="c884"></div>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-xs-center mbr-section-hero">
			<h1 class="mbr-section-title display-2"><?php foreach($pelatihankompetensikhusus_content as $u){ ?><?php echo $u->txt_header; ?><?php } ?></h1>
		</div>
	</div>
</div>
</section>
<style>
*{box-sizing: border-box;}body{margin:0;overflow-x: hidden;}#msg-box8-r{background-image:url(<?php echo base_url(); ?>public/img/assetImage/1711012001433.jpg);padding-top:120px;padding-bottom:120px;}#c884{opacity:0.5;background-color:rgb(34, 34, 34);}.row{display:table;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;width:100%;}
</style>
<section class="mbr-section" id="msg-box5-v" data-rv-view="114">
<div class="container">
	<h2><?php foreach($pelatihankompetensikhusus_content as $u){ ?><?php echo $u->txt_header2; ?><?php } ?> <span id="c894"><?php foreach($pelatihankompetensikhusus_content as $u){ ?><?php echo $u->txt_header3; ?><?php } ?></span></h2>
	 <?php foreach($pelatihankompetensikhusus_content as $u){ ?><?php echo $u->txt_header4; ?><?php } ?>
</div>
</section>
<style>
*{box-sizing: border-box;}body{margin:0;}#msg-box5-v{background-color:rgb(255, 255, 255);padding:40px;text-align:center;}#c894{color:#ff0000;}
</style>
<section class="mbr-section article mbr-section__container" id="content1-s" data-rv-view="77">
<div class="index-content">
	<div class="container">
		<center id="c893">

		</center>


<?php foreach($pelatihankompetensikhusus_content as $u){ ?>

		<a href="#">
		<div class="col-lg-4">
			<div class="card">
				<img src="<?php echo base_url("$u->image") ?>">
				<h4 class="display-2" id="c918"><?php echo $u->caption ?></h4>
			</div>
		</div>
		</a>


<?php } ?>

	</div>
</div>
</section>
<style>
 *{box-sizing: border-box;}body{margin:0;}#content1-s{padding-top:20px;padding-bottom:20px;margin-bottom:10px;background:white;}#c893{padding-bottom:20px;}#c918{font-size:20px;}#c939{font-size:20px;}#c959{font-size:20px;}#c979{font-size:20px;}#c999{font-size:20px;}#c1019{font-size:20px;}#c1039{font-size:20px;}.card{background-color:white;height:300px;width:300px;margin-bottom:30px;box-shadow:rgba(0, 0, 0, 0.2) 0px 1px 2px 0px;border-top-left-radius:2px;border-top-right-radius:2px;border-bottom-right-radius:2px;border-bottom-left-radius:2px;transition-duration:0.5s;transition-timing-function:ease;transition-delay:initial;transition-property:all;font-weight:100;overflow-x:hidden;overflow-y:hidden;}.card:hosver{margin-top:-5px;box-shadow:rgba(0, 0, 0, 0.2) 0px 20px 30px 0px;}
</style>
<div class="button-lg" style=" margin-right: 225px;">
	<a href="contact" class="btn btn-calll" role="button" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="fa fa-bullhorn" style="margin-right: 4%; font-size: 16px;"></span>Jadwal & Persyaratan</a>
</div>
<style>#alterm{ display: none; }</style>
<div class="modal fade bs-example-modal-lg">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal">&times;</button>Jadwal Pelatihan
			</div>
			<div class="modal-body">
				<img src="<?php echo base_url() ?>public/img/assetImage/1712201415323.png" style="height: 372px;"/><br>
				<br>
				<b>persyaratan :</b>
				<ul>
					<li>Warga Negara Indonesia (WNI)</li>
					<li>pendidikan SLTA / Sederajat</li>
					<li>Tinggi Badan 160 cm</li>
					<li>Usia Min 20 tahun, Max 30 Tahun</li>
				</ul>
			</div>
		</div>
	</div>
</div>