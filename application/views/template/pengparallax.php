<section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-r" data-rv-view="82">
<div class="mbr-overlay" id="c884"></div>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-xs-center mbr-section-hero">
			<h1 class="mbr-section-title display-2">Pengamanan</h1>
		</div>
	</div>
</div>
</section>
<style>
*{box-sizing: border-box;}body{margin:0;}#msg-box8-r{background-image:url(<?php echo base_url(); ?>public/img/assetImage/1711012001433.jpg);padding-top:120px;padding-bottom:120px;}#c884{opacity:0.5;background-color:rgb(34, 34, 34);}.row{display:table;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;width:100%;}
</style>

<?php 
$no=1;
 ?>

<?php foreach($pengamanan as $u){ ?>





<section class="mbr-section" id="msg-box5-v" data-rv-view="114">
<div class="container" id="a<?php echo $no++ ?>" >
	<div class="col-lg-6" id="Guard-Desc">
		<h3 class="mbr-section-title display-2" id="Guard-Title"><?php echo $u->caption_black ?> <red style="color:red;"><?php echo $u->caption_red?></red></h3>
		<br/><br/>
		 <p><?php echo $u->description ?></p>
	</div>
	<div class="col-lg-6">
		<img id="Guard-Img" src="<?php echo base_url("$u->logo"); ?>"/>
	</div>
</div>
</section>
<section class="mbr-section" id="msg-box5-v" data-rv-view="114">
<div class="container" id="a<?php echo $no++ ?>" >
	<div class="col-lg-6">
		<img id="Guard-Img" src="<?php echo base_url("$u->logo2"); ?>"/>
	</div>
	<div class="col-lg-6" id="Guard-Desc">
		<h3 class="mbr-section-title display-2" id="Guard-Title"><?php echo $u->caption_black2 ?> <red style="color:red;"><?php echo $u->caption_red2?></red></h3>
		<br/><br/>
		 <p><?php echo $u->description2 ?></p>
	</div>
</div>
</section>
<section class="mbr-section" id="msg-box5-v" data-rv-view="114">
<div class="container" id="a<?php echo $no++ ?>" >
	<div class="col-lg-6" id="Guard-Desc">
		<h3 class="mbr-section-title display-2" id="Guard-Title"><?php echo $u->caption_black3 ?> <red style="color:red;"><?php echo $u->caption_red3?></red></h3>
		<br/><br/>
		 <p><?php echo $u->description3 ?></p>
	</div>
	<div class="col-lg-6">
		<img id="Guard-Img" src="<?php echo base_url("$u->logo3") ?>"/>
	</div>
</div>
</section>

<?php } ?>


<style>
*{box-sizing: border-box;}body{margin:0;}#msg-box5-v{background-color:#ffffff;padding-top:30px;padding-bottom:30px;}#Event-Desc{padding-top:10%;text-align:left;}#Event-Title{text-align:left;}#c901{color:#ff0000;}#Event-Img{height:400px;position:relative;float:left;}
*{box-sizing: border-box;}body{margin:0;overflow-x: hidden;}#msg-box5-v{background-color:#ffffff;padding-top:30px;padding-bottom:30px;}#Guard-Desc{padding-top:10%;text-align:left;}#Guard-Title{text-align:left;}#c901{color:#ff0000;}#Guard-Img{height:400px;position:relative;float:left;}
*{box-sizing: border-box;}body{margin:0;}#msg-box5-v{background-color:#ffffff;padding-top:30px;padding-bottom:30px;}#Escort-Img{text-align:right;}#c891{height:300px;position:relative;}#Escort-Desc{padding-top:6%;text-align:right;}#Escort-Title{text-align:right;}#c908{color:#ff0000;}
</style>
