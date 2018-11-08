<section class="engine"><a href="https://mobirise.co/o">bootstrap buttons</a></section><section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-r" data-rv-view="82" style="background-image: url(<?php echo base_url(); ?>assets/images/home2sm.JPG);padding-top: 41px; padding-bottom: 120px;height: 200px;">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div style="margin-top: 5%;position: absolute;">
            <center style="margin-top: 30%;">
            <img src="<?php echo base_url(); ?>assets/images/logo_heksa-circle.png" style="width: 20%;display: block;">
            PT HEKSA GARDA UTAMA
            </center>
    </div>
</section>
<section style="padding-top: 20%;background-color:#cbcac9;padding-bottom: 3%;">
    <div class="pelatihan" style="margin: 0px 10px;border-radius: 10px; margin-bottom: 20%; padding: 10px;">
        <div class="container">


<?php foreach($pengamanan as $u){ ?>

    <div class="col-xs-12">
        <center style="margin-top: 20px;">
            <img src="<?php echo base_url("$u->logo"); ?>" style="width: 100%;">
            <p style="font-size: 25px"><?php echo $u->caption_black ?> <red style="color:red; font-size: 25px"><?php echo $u->caption_red?></red></p>
            <p><?php echo $u->description ?></p>
        </center>
    </div>

    <div class="col-xs-12">
        <center style="margin-top: 20px;">
            <img src="<?php echo base_url("$u->logo2"); ?>" style="width: 100%;">
            <p style="font-size: 25px"><?php echo $u->caption_black2 ?> <red style="color:red; font-size: 25px"><?php echo $u->caption_red2?></red></p>
            <p><?php echo $u->description2 ?></p>
        </center>
    </div>

    <div class="col-xs-12">
        <center style="margin-top: 20px;">
            <img src="<?php echo base_url("$u->logo3"); ?>" style="width: 100%;">
            <p style="font-size: 25px"><?php echo $u->caption_black3 ?> <red style="color:red; font-size: 25px"><?php echo $u->caption_red3?></red></p>
            <p><?php echo $u->description3 ?></p>
        </center>
    </div>
<?php } ?>

    </div>
    </div>
</section>
<a href="<?php echo base_url(); ?>Contact">
<div class="col-xs-12" id="contactbottom">
    <span class="fa fa-phone" style="margin-right: 2%; font-size: 16px;"></span>
    call us now
</div>
</a>
