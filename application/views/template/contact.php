<section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-r" data-rv-view="82">
<div class="mbr-overlay" id="c884"></div>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-xs-center mbr-section-hero">
			<h1 class="mbr-section-title display-2"><?php foreach($kontak as $u){ ?><?php echo $u->txt_header; ?><?php } ?></h1>
		</div>
	</div>
</div>
</section>
<section id="c876">
<div class="container" id="c880">
	<div class="col-lg-4">

		<h4 id="c890"><?php foreach($kontak as $u){ ?><?php echo $u->txt_header2; ?><?php } ?></h4>
		<p id="c894">PT. Heksa Garda Utama</p>
		<?php foreach($kontak as $u){ ?>
		<p>
			 <?php echo $u->alamat ?>
			<div>
				<br/>
			</div>

			<div><?php echo $u->telepon ?></div>
			<div><?php echo $u->fax ?></div>
			<div> <?php echo $u->no_hp ?></div>
		</p>
		<?php } ?>
	</div>
	<div class="col-lg-8">
		<h4 id="c927"><?php foreach($kontak as $u){ ?><?php echo $u->txt_header3; ?><?php } ?></h4>
		<div class="form-komen center">
			<form class="form-inline">
				<div class="col-xs-6">
					<input type="email" id="email" placeholder="Name"/>
				</div>
				<div class="col-xs-6">
					<input type="email" id="email" placeholder="Email"/>
				</div>
				<div class="col-xs-12">
					<input type="email" id="email" placeholder="Subject *"/>
				</div>
				<div class="col-xs-12">
					<textarea id="c972" name="coment" rows="10" placeholder="Message"></textarea>
				</div>
				<button class="btn-2" id="beda">KIRIM</button>
			</form>
		</div>
	</div>
</div>
</section>
<style>
*{box-sizing: border-box;}body{margin:0;}*{box-sizing:border-box;}body{margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#c876{margin-top:20px;margin-bottom:70px;}#c880{margin-top:30px;}#c890{font-family:Raleway;font-weight:bold;}#c894{font-weight:bold;margin-top:50px;}#c927{font-family:Raleway;font-weight:bold;}#email{width:100%;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;margin-bottom:15px;}#c972{width:100%;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;}#beda{margin-left:15px;}
</style>

<style>
*{box-sizing: border-box;}body{margin:0;}#msg-box8-r{background-image:url(<?php echo base_url(); ?>public/img/assetImage/1711012001433.jpg);padding-top:120px;padding-bottom:120px;}#c884{opacity:0.5;background-color:rgb(34, 34, 34);}.row{display:table;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;width:100%;}
</style>	