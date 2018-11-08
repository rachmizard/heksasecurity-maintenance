<div class="content-wrap" style="overflow: hidden;">
	<div class="content">
<?php foreach($pelatihan as $u){ ?>
		<section>
		<div id="wowslider-container1">
			<div class="ws_images">
				<ul>
					<li>
						<img src="<?php echo base_url(); ?>public/img/assetImage/1711012001253.jpg" title="<?php echo $u->h1 ?>" id="wows1_0"/>
					</li>
					<li>
						<img src="<?php echo base_url(); ?>public/img/assetImage/1711012001433.jpg" title="<?php echo $u->h2 ?>" id="wows1_1"/>
					</li>
					<li>
						<img src="<?php echo base_url(); ?>public/img/assetImage/1711012002325.jpg" title="<?php echo $u->h3 ?>" id="wows1_2"/>
					</li>
				</ul>
			</div>
			<div class="ws_shadow"></div>
			<div class="mbr-overlay"></div>
		</div>
		</section>
		<style>
*{box-sizing: border-box;}body{margin:0;}#wowslider-container1{z-index:1;}
		</style>
		<section class="features8 cid-qyuKyugBn6 mbr-parallax-background" id="features8-q" data-rv-view="112">
		<h4 class="card-title" id="pt"><?php echo $u->sambutan ?></h4>
		<div class="container">
			<div class="mbr-cards-row row">
				<div class="mbr-cards-col col-lg-4 col-xs-4" id="sgrid">
					<div class="container">
						<a id="c908" href="<?php foreach($pelatihan as $u){ ?><?php echo $u->txt_header; ?><?php } ?>">
						<div class="card-img">
							<img id="c918" src="<?php echo base_url(); ?>public/img/assetImage/1711172218393.png"/>
						</div>
						<h5 class="title" id="fz"><?php echo $u->captionb ?> <?php echo $u->captionr ?></h5>
						</a>
					</div>
				</div>
				<div class="mbr-cards-col col-lg-4 col-xs-4" id="c926">
					<div class="container">
						<a id="c934" href="<?php foreach($pelatihan as $u){ ?><?php echo $u->txt_header2; ?><?php } ?>">
						<div class="card-img">
							<img id="c943" src="<?php echo base_url(); ?>public/img/assetImage/1711172218485.png"/>
						</div>
						<h5 class="title" id="fz"><?php echo $u->captionb2 ?> <?php echo $u->captionr2 ?></h5>
						</a>
					</div>
				</div>
			</div>
		</div>

		<style>
*{box-sizing: border-box;}body{margin:0;}*{box-sizing:border-box;}body{margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#features8-q{background-color:rgba(204, 60, 40, 0.85);padding-left:50px;padding-right:50px;text-align:center;position:absolute;z-index:10002;width:52%;display:block;margin-right:auto;margin-bottom:0px;margin-left:23%;margin-top:-232px;box-shadow:rgba(25, 25, 25, 0.99) 0px 10px 15px, rgb(10, 10, 10) 0px 5px 5px;border-top-left-radius:40px;border-top-right-radius:40px;border-bottom-right-radius:40px;border-bottom-left-radius:40px;}#pt{padding-top:2%;text-align:center;color:rgb(255, 255, 255);}#sgrid{padding-top:0px;padding-bottom:0px;}#c908{color:rgb(0, 0, 0);}#c918{width:85px;}#fz{font-size:13px;color:rgb(255, 255, 255);padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem;}#c926{padding-top:0px;padding-bottom:0px;}#c934{color:rgb(0, 0, 0);}#c943{width:85px;}.card-title{font-size:1.4em;margin-bottom:5px;}.row{display:table;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;width:100%;}
		</style>
	</div>
</div><?php } ?>