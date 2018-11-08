<section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-r" data-rv-view="82">
<div class="mbr-overlay" id="c884"></div>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-xs-center mbr-section-hero">
			<h1 class="mbr-section-title display-2"><?php foreach($testimoni as $u){ ?><?php echo $u->txt_header; ?><?php } ?></h1>
		</div>
	</div>
</div>
</section>
<style>
*{box-sizing: border-box;}body{margin:0;}#msg-box8-r{background-image:url(<?php echo base_url(); ?>public/img/assetImage/1711012001433.jpg);padding-top:120px;padding-bottom:120px;}#c884{opacity:0.5;background-color:rgb(34, 34, 34);}.row{display:table;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;width:100%;}
</style>
<section class="mbr-section" id="msg-box5-v" data-rv-view="114">
<div class="container">
	 <?php foreach($testimoni as $u){ ?><?php echo $u->txt_header2; ?><?php } ?>
</div>
</section>
<style>
*{box-sizing: border-box;}body{margin:0;}#msg-box5-v{background-color:rgb(255, 255, 255);padding:30px;text-align:center;}
</style>
<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" data-filter="true" id="gallery4-0" data-rv-view="0">
<div class="mbr-gallery-row container">
	<div class="mbr-gallery-layout-default">
		<div>
			<div>




 <?php $no=1; ?>


  <?php foreach($testimoni as $u){ ?>

                <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-video-url="false" data-tags="2015">
                    <div href="#lb-gallery4-0" data-slide-to="<?php echo $no++ ?>" data-toggle="modal">
                        <img src="<?php echo base_url("$u->image") ?>"/><span class="icon-focus"></span>
                    </div>
                </div>
    <?php } ?>




			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery4-0">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<ol class="carousel-indicators">
					<li class="active" data-target="#lb-gallery4-0" data-slide-to="0"></li>
					<li data-target="#lb-gallery4-0" data-slide-to="1"></li>
					<li data-target="#lb-gallery4-0" data-slide-to="2"></li>
					<li data-target="#lb-gallery4-0" data-slide-to="3"></li>
					<li data-target="#lb-gallery4-0" data-slide-to="4"></li>
					<li data-target="#lb-gallery4-0" data-slide-to="5"></li>
					<li data-target="#lb-gallery4-0" data-slide-to="6"></li>
					<li data-target="#lb-gallery4-0" data-slide-to="7"></li>
				</ol>
				<div class="carousel-inner">

                <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="<?php echo base_url(); ?>public/img/assetImage/1712221121556.jpg"/>
                    </div>
<?php foreach($testimoni as $u){ ?>
                    <div class="carousel-item">
                        <img src="<?php echo base_url("$u->image") ?>"/>
                    </div>
<?php } ?>   
                </div>

				</div>
				<a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery4-0"><span class="icon-prev" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery4-0"><span class="icon-next" aria-hidden="true"></span><span class="sr-only">Next</span></a><a class="close" href="#" role="button" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></a>
			</div>
		</div>
	</div>
</div>
</section>
<style>
*{box-sizing: border-box;}body{margin:0;}*{box-sizing:border-box;}body{margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#gallery4-0{padding-top:0rem;padding-bottom:0rem;}.clearfix{clear:both;}
</style>