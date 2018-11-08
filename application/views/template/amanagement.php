<div class="content-wrap" style="overflow: hidden;">
	<div class="content">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
		<div class="bg-image"></div>
		<div id="da-slider" class="da-slider">





  <?php foreach($about as $u){ ?>







			<div class="da-slide">
				<h1 id="cptnabt"><?php echo $u->caption ?></h1>
				<h2 id="cptn1"><?php echo $u->detail ?></h2>
				<p id="cont" style="font-size: 19px;">
					<?php echo $u->detail_description ?>
				</p>
				<div class="da-img">
					<img src="<?php echo base_url("$u->logo"); ?>" alt="image01"  style="width: 56%; margin-top: 36%;"/>
				</div>
			</div>
			



    <?php } ?>








	<nav class="da-arrows"><span class="da-arrows-prev"></span><span class="da-arrows-next"></span></nav>
	</div>
	</div>
	</div>