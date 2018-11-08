<style>
th,td{
    padding: 10px;
  }
sd{
color: red;
}
</style>
<section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-r" data-rv-view="82">
<div class="mbr-overlay" id="c884"></div>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-xs-center mbr-section-hero">
			<h1 class="mbr-section-title display-2"><?php foreach($pelkomdasar as $u){ ?><?php echo $u->txt_header; ?><?php } ?></h1>
		</div>
	</div>
</div>
</section>
<style>
*{box-sizing: border-box;}body{margin:0;overflow-x: hidden;}#msg-box8-r{background-image:url(<?php echo base_url(); ?>public/img/assetImage/1711012001433.jpg);padding-top:120px;padding-bottom:120px;}#c884{opacity:0.5;background-color:rgb(34, 34, 34);}.row{display:table;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;width:100%;}
</style>
<section class="mbr-section" id="msg-box5-v" data-rv-view="114">
<div class="container" style="padding-top:40px;">
	<h3 class="mbr-section-title display-2" id="c886"><?php foreach($pelkomdasar as $u){ ?><?php echo $u->txt_header2; ?><?php } ?></h3>
	<br/>
	<p><?php foreach($pelkomdasar as $u){ ?><?php echo $u->txt_header3; ?><?php } ?></p>
</div>
</section>
<style>
*{box-sizing: border-box;}body{margin:0;}#msg-box5-v{background-color:rgb(255, 255, 255);padding:40px;text-align:center;}#c886{font-size:40px;}
</style>


<?php foreach($pelkomdasar as $u){ ?>

<section class="mbr-section" id="msg-box5-v" data-rv-view="114">
<div class="container">
	<div class="mbr-table-md-up">
		<div class="mbr-table-cell col-md-12 col-lg-5 text-xs-center text-md-left content-size" id="lf">
			<h3 class="mbr-section-title display-2"><?php echo $u->caption_black ?> <sd> <?php echo $u->caption_red ?></sd></h3>
			<br/>
			<div class="sd">
				<p><?php echo $u->description ?></p>
				<div class="col-lg-6">
					<button class="btn-2" id="beda" onclick="toggle_visibility('foo');">Persyaratan</button>
				</div>
				<div class="col-lg-6">
					<a id="c942" data-toggle="modal" data-target=".bs-example-modal-lg"><button class="btn-2" id="beda">Jadwal</button></a>
				</div>
				<div class="w3-animate-opacity" id="foo">
					<?php echo $u->persyaratan ?>
				</div>
			</div>
		</div>
		<div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size" id="rg">
			<div class="mbr-figure">
				<img src="<?php echo base_url("$u->logo") ?>"/>
			</div>
		</div>
	</div>
</div>
</section>
<div class="modal fade bs-example-modal-lg" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">×</button>Jadwal Pelatihan
			</div>
			<div class="modal-body">
				<center><img src="<?php echo base_url("$u->image_jadwal") ?>" alt="" style="height: 372px;">
				<br>
				<br>
				<br>
				<p>
					keterangan : Tempat Pelatihan dilaksanakan di PUSDIKLAT PT. Heksa Garda Utama
				</p>
				</center>
			</div>
		</div>
	</div>
</div>
<style>
 *{box-sizing: border-box;}body{margin:0;}#msg-box5-v{background-color:rgb(255, 255, 255);padding-top:0px;padding-bottom:0px;}#c911{color:#ff0000;}#beda{margin-left:-10%;}#c942{color:#000;text-decoration:none;}#beda{margin-left:19%;}#foo{display:none;margin-top:20%;}#c956{margin-left:-4%;list-style-type:disc;}#rg{width:60%;}
</style>
<section class="mbr-section" id="msg-box5-v" data-rv-view="114">
<div class="container">
	<div class="mbr-table-md-up">
		<div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size" id="rg">
			<div class="mbr-figure">
				<img src="<?php echo base_url("$u->logo2") ?>"/>
			</div>
		</div>
		<div class="mbr-table-cell col-md-12 col-lg-5 text-xs-center text-md-left content-size" id="lf">
			<h3 class="mbr-section-title display-2"><?php echo $u->caption_black2 ?> <sd> <?php echo $u->caption_red2 ?> </sd></h3>
			<br/>
			<div class="sd">
				<p><?php echo $u->description2 ?></p>
				<div class="col-lg-6">
					<button class="btn-2" id="beda" onclick="toggle_visibility('doo');">Persyaratan</button>
				</div>
				<div class="col-lg-6" id="c960">
					<a id="c964" data-toggle="modal" data-target=".bs-example-modal-lgl"><button class="btn-2" id="beda">Jadwal</button></a>
				</div>
				<div class="w3-animate-opacity" id="doo">
					<?php echo $u->persyaratan2 ?>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<div class="modal fade bs-example-modal-lgl" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">×</button>Jadwal Pelatan
			</div>
			<div class="modal-body">
				<center>
				<h2>JADWAL PELATIHAN GADA MADYA</h2>
				</center><img src="<?php echo base_url("$u->image_jadwal2") ?>" alt="" style="height: 77px;"><br>
				<br>
				<br>
				<p style="text-align:center;">
					keterangan : Tempat Pelatihan dilaksanakan di PUSDIKLAT PT. Heksa Garda Utama
				</p>
			</div>
		</div>
	</div>
</div>
<style>
 *{box-sizing: border-box;}body{margin:0;}#msg-box5-v{background-color:rgb(255, 255, 255);padding-top:0px;padding-bottom:0px;}#rg{width:60%;}#c933{color:#ff0000;}#c960{padding-left:13%;}#c964{color:#000;text-decoration:none;}#doo{display:none;margin-top:20%;}#c978{margin-left:-4%;list-style-type:disc;}th, td{padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;}
</style>
<section class="mbr-section" id="msg-box5-v" data-rv-view="114">
<div class="container">
	<div class="mbr-table-md-up">
		<div class="mbr-table-cell col-md-12 col-lg-5 text-xs-center text-md-left content-size" id="lf">
			<h3 class="mbr-section-title display-2"><?php echo $u->caption_black3 ?> <sd> <?php echo $u->caption_red3 ?> </sd></h3>
			<br/>
			<div class="sd">
				<p><?php echo $u->description2 ?></p>
				<div class="col-lg-6">
					<button class="btn-2" id="beda" onclick="toggle_visibility('goo');">Persyaratan</button>
				</div>
				<div class="col-lg-6">
					<a id="c948" data-toggle="modal" data-target=".bs-example-modal-lg"><button class="btn-2" id="beda">Jadwal</button></a>
				</div>
				<div class="w3-animate-opacity" id="goo">
					<?php echo $u->persyaratan3 ?>
				</div>
			</div>
		</div>
		<div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size" id="rg">
			<div class="mbr-figure">
				<img src="<?php echo base_url("$u->logo3") ?>"/>
			</div>
		</div>
	</div>
</div>
</section>
<div class="modal fade bs-example-modal-lg" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">×</button>Jadwal Pelatan
			</div>
			<div class="modal-body">
				<center>
				<table border="1">
				<tr>
					<th>NAMA</th>
					<th>Jenis</th>
					<th>Tempat</th>
					<th>Waktu</th>
				</tr>
				<tr>
					<td>PELATIHAN</td>
					<td>FISIK</td>
					<td>PT INTI BANDUNG</td>
					<td>08:00 - 22:00</td>
				</tr>
				<tr>
					<td>PELATIHAN</td>
					<td>FISIK</td>
					<td>PT INTI BANDUNG</td>
					<td>08:00 - 22:00</td>
				</tr>
				<tr>
					<td>PELATIHAN</td>
					<td>FISIK</td>
					<td>PT INTI BANDUNG</td>
					<td>08:00 - 22:00</td>
				</tr>
				<tr>
					<td>PELATIHAN</td>
					<td>FISIK</td>
					<td>PT INTI BANDUNG</td>
					<td>08:00 - 22:00</td>
				</tr>
				<tr>
					<td>PELATIHAN</td>
					<td>FISIK</td>
					<td>PT INTI BANDUNG</td>
					<td>08:00 - 22:00</td>
				</tr>
				<tr>
					<td>PELATIHAN</td>
					<td>FISIK</td>
					<td>PT INTI BANDUNG</td>
					<td>08:00 - 22:00</td>
				</tr>
				<tr>
					<td>PELATIHAN</td>
					<td>FISIK</td>
					<td>PT INTI BANDUNG</td>
					<td>08:00 - 22:00</td>
				</tr>
				</table>
				</center>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<style>
*{box-sizing: border-box;}body{margin:0;}#msg-box5-v{background-color:rgb(255, 255, 255);padding-top:0px;padding-bottom:0px;}#c917{color:#ff0000;}#beda{margin-left:-10%;}#c948{color:#000;text-decoration:none;}#beda{margin-left:19%;}#goo{display:none;margin-top:20%;}#c962{margin-left:-4%;list-style-type:disc;}#rg{width:60%;}th, td{padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;}
</style>