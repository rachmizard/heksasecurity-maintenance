<section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-r" data-rv-view="82"
	style="background-image: url(<?php echo base_url();?>assets/data1/images/home2.jpg); padding-top: 120px; padding-bottom: 120px;">
	<div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-xs-center mbr-section-hero ">
				<h1 class="mbr-section-title display-2">Gallery</h1>
			</div>
		</div>
	</div>
</section>

<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" data-filter="true" id="gallery4-0" data-rv-view="0" style="">
    
    <div class="pelatihan" style="margin: 0px 10px;border-radius: 10px; margin-bottom: 5%; padding: 10px;">
        <div style="padding-top: 0%;background-color:#cbcac9;padding-bottom: 2%;background-color: white;">
         <!-- Filter -->
    <div class="mbr-gallery-filter container gallery-filter-active" data-slide-to="0" data-toggle="modal">
        <ul style="">
            <li class="mbr-gallery-filter-all active" >All</li><br>
            <li style="margin-right: 20px;">2015</li>
            <li style="margin-right: 20px;">2016</li>
            <li style="margin-right: 20px;">2017</li>
        </ul>
    </div>
            <!-- Gallery -->

    <div class="mbr-gallery-row">
        <div class=" mbr-gallery-layout-default">


 <?php $no=1; ?>


  <?php foreach($gallery as $u){ ?>

                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-video-url="false" data-tags="<?php echo $u->tahun ?>">
                        <div href="#lb-gallery4-0" data-slide-to="<?php echo $no++ ?>" data-toggle="modal">
                            <img src="<?php echo base_url("$u->image") ?>" alt="">
                            <span class="icon-focus"></span>
                        </div>
                    </div>
    <?php } ?>

                    <div class="clearfix"></div>
        </div>
    </div>

    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery4-0">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                                        <li data-app-prevent-settings="" data-target="#lb-gallery4-0" class=" active" data-slide-to="0"></li>
                                                <li data-app-prevent-settings="" data-target="#lb-gallery4-0" data-slide-to="1"></li>
                                        <li data-app-prevent-settings="" data-target="#lb-gallery4-0" data-slide-to="2"></li>
                                        <li data-app-prevent-settings="" data-target="#lb-gallery4-0" data-slide-to="3"></li>
                                        <li data-app-prevent-settings="" data-target="#lb-gallery4-0" data-slide-to="4"></li>
                                        <li data-app-prevent-settings="" data-target="#lb-gallery4-0" data-slide-to="5"></li>
                                        <li data-app-prevent-settings="" data-target="#lb-gallery4-0" data-slide-to="6"></li>
                                        <li data-app-prevent-settings="" data-target="#lb-gallery4-0" data-slide-to="7"></li>
                                        <li data-app-prevent-settings="" data-target="#lb-gallery4-0" data-slide-to="8"></li>
                                        <li data-app-prevent-settings="" data-target="#lb-gallery4-0" data-slide-to="9"></li>
                                        <li data-app-prevent-settings="" data-target="#lb-gallery4-0" data-slide-to="10"></li>
                                        <li data-app-prevent-settings="" data-target="#lb-gallery4-0" data-slide-to="11"></li>
                                        <li data-app-prevent-settings="" data-target="#lb-gallery4-0" data-slide-to="12"></li>
                                        <li data-app-prevent-settings="" data-target="#lb-gallery4-0" data-slide-to="13"></li>
                                </ol>
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img src="<?php echo base_url(); ?>public/img/gallery/1711230432459.jpg">
                        </div>

  <?php foreach($gallery as $u){ ?>

                        <div class="carousel-item">
                            <img src="<?php echo base_url ("$u->image") ?>" alt="<?php echo $u->tahun ?>">
                        </div>
    <?php } ?>  

                            </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery4-0">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery4-0">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

        </div>
    </div>
</section>