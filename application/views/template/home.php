<div class="content-wrap" style="overflow: hidden;">
	<div class="content">
	<section>

<?php foreach($home as $u){ ?>
<div id="wowslider-container1">
	<div class="ws_images">
		<ul>
			<li>
				<img id="wows1_0" title="<?php echo $u->h1 ?>" src="<?php echo base_url(); ?>public/img/assetImage/1711012001253.jpg"/>
			</li>
			<li>
				<img id="wows1_1" title="<?php echo $u->h2 ?>" src="<?php echo base_url(); ?>public/img/assetImage/1711012001433.jpg"/>
			</li>
			<li>
				<img id="wows1_2" title="<?php echo $u->h3 ?>" src="<?php echo base_url(); ?>public/img/assetImage/1712060611505.jpg"/>
			</li>
		</ul>
	</div>
	<div class="ws_shadow"></div>
	<div class="mbr-overlay"></div>
</div>
</section>
<style>
*{box-sizing: border-box;}body{margin:0;}*{box-sizing:border-box;}body{margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#wowslider-container1{z-index:1;}
</style>



<section id="features8-q" class="features8 cid-qyuKyugBn6 mbr-parallax-background" style="background-color: rgba(204, 60, 40, 0.85); padding-left: 50px; padding-right: 50px; text-align: center; position: absolute; z-index: 10002; width: 52%; display: block; margin: 0 auto; margin-left: 23%; margin-top: -232px; /* margin-bottom: 3%; */box-shadow: 0 10px 15px rgba(25, 25, 25, 0.99), 0 5px 5px #0a0a0a; border-radius: 40px;" data-rv-view="112">
<h4 id="pt" class="card-title" style="padding-top: 2%; text-align: center; color: #fff;"><?php echo $u->sambutan ?></h4>
<div class="container">
	<div class="mbr-cards-row row">
		<div id="sgrid" class="mbr-cards-col col-lg-4 col-xs-4" style="padding-top: 0px; padding-bottom: 0px;">
			<div class="container">
				<div class="card-img">
					<a style="color: #000;" title="Jasa Pengamanan" href="<?php foreach($home as $u){ ?><?php echo $u->txt_header; ?><?php } ?>"><img src="<?php echo base_url(); ?>public/img/assetImage/1711012124060.png" width="85"/></a>
				</div>
				<div class="card-block" style="padding: 1rem;">
					<h5 id="fz" class="title" style="font-size: 13px; color: #fff;"><?php echo $u->captionb ?> <?php echo $u->captionr ?></h5>
				</div>
			</div>
		</div>
		<div class="mbr-cards-col col-lg-4 col-xs-4" style="padding-top: 0px; padding-bottom: 0px;">
			<div class="container">
				<div class="card-img">
					<a style="color: #000;" title="Jasa Pelatihan" href="<?php foreach($home as $u){ ?><?php echo $u->txt_header2; ?><?php } ?>"><img style="width: 85px;" src="<?php echo base_url(); ?>public/img/assetImage/1711012124128.png"/></a>
				</div>
				<div class="card-block" style="padding: 1rem;">
					<h5 id="fz" class="title" style="font-size: 13px; color: #fff;"><?php echo $u->captionb2 ?> <?php echo $u->captionr2 ?></h5>
				</div>
			</div>
		</div>
		<div class="mbr-cards-col col-lg-4 col-xs-4" style="padding-top: 0px; padding-bottom: 0px;">
			<div class="container">
				<div class="card-img">
					<a style="color: #000;" data-toggle="modal" data-target=".bs-example-modal-lg"><img style="width: 85px;" src="<?php echo base_url(); ?>public/img/assetImage/1711012124000.png"/></a>
				</div>
				<div class="card-block" style="padding: 1rem;">
					<h5 id="fz" class="title" style="font-size: 13px; color: #fff;"><?php echo $u->captionb3 ?> <?php echo $u->captionr3 ?></h5>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade bs-example-modal-lg">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal">&times;</button>Jadwal Pelatihan
			</div>
			<div class="modal-body">
				<img src="<?php echo base_url(); ?>public/img/assetImage/1712201415323.png" style="height: 372px;"/>
			</div>
		</div>
	</div>
</div>
</section>
<?php } ?>