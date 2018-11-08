<section class="engine"><a href="https://mobirise.co/o">bootstrap buttons</a></section><section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-r" data-rv-view="82" style="background-image: url(<?php echo base_url();?>assets/images/home2sm.JPG);padding-top: 41px; padding-bottom: 120px;height: 200px;">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div style="margin-top:;position: absolute;">
            <center style="margin-top: 30%;">
            <img src="<?php echo base_url(); ?>assets/images/logo_heksa-circle.png" style="width: 20%;display: block;">
            PT HEKSA GARDA UTAMA
            </center>
    </div>
    <div class="container">
        <div class="row" style="padding-top: 40px;">
            <center class="container">
                <span id="mb-cptn" style="font-weight: bold;"><?php foreach($testimoni as $u){ echo $u->txt_header; }?></span>
            </center>
        </div>
    </div>
</section>

<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" data-filter="true" id="gallery4-0" data-rv-view="0" style="padding-top: 10%;background-color:#cbcac9;padding-bottom: 3%;">
    <center style="margin-bottom: 20px; margin-top: 30px;padding:0px 20px;">
        <?php foreach($testimoni as $u){ echo $u->txt_header2; }?>
    </center>
    <div class="pelatihan" style="margin: 0px 10px;border-radius: 10px; margin-bottom: 20%; padding: 10px;">
        <div style="padding-top: 0%;background-color:#cbcac9;padding-bottom: 9%;background-color: white;">
            <!-- Gallery -->
    <div class="mbr-gallery-row container">
    <div class="mbr-gallery-layout-default">
        <div>
            <div>


 <?php $no=1; ?>


  <?php foreach($testimoni as $u){ ?>

                <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-video-url="false" data-tags="2015">
                    <div href="#lb-gallery4-0" data-slide-to="<?php echo $no++ ?>" data-toggle="modal">
                        <img src="<?php echo base_url("$u->image"); ?>"/><span class="icon-focus"></span>
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
            <div class= "modal-body">
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
                      <div class="carousel-item active">
                        <img src="<?php echo base_url(); ?>public/img/assetImage/1712221121556.jpg"/>
                    </div>
<?php foreach($testimoni as $u){ ?>
                    <div class="carousel-item">
                        <img src="<?php echo base_url("$u->image"); ?>"/>
                    </div>
<?php } ?>   
                </div>
                <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery4-0"><span class="icon-prev" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery4-0"><span class="icon-next" aria-hidden="true"></span><span class="sr-only">Next</span></a><a class="close" href="#" role="button" data-dismiss="modal"><span aria-hidden="true" style="font-size: 60px;">×</span><span class="sr-only">Close</span></a>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</section>
<a href="<?php echo base_url(); ?>Contact">
<div class="col-xs-12" id="contactbottom">
    <span class="fa fa-phone" style="margin-right: 2%; font-size: 16px;"></span>
    call us now
</div>
</a>
