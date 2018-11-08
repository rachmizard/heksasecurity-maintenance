<section class="engine"><a href="https://mobirise.co/o">bootstrap buttons</a></section><section class="mbr-section article  mbr-after-navbar" id="msg-box8-r" data-rv-view="82" style="background-size: 100%; background-image: url(<?php echo base_url(); ?>assets/images/home2.JPG);padding-top: 41px; padding-bottom: 120px;height: 250px; ">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div style="margin-top: 10%;position: absolute;">
            <center style="margin-top: 30%;">
            <img src="<?php echo base_url(); ?>assets/images/logo_heksa-circle.png" style="width: 20%;display: block;">
            PT HEKSA GARDA UTAMA
            </center>
    </div>
</section>

<?php foreach($mitra as $u){ ?>
<section style="padding-top: 20%;background-color:#cbcac9;padding-bottom: 3%;">
    <div class="pelatihan" style="margin: 0px 10px;border-radius: 10px; margin-bottom: 20%; padding: 10px;">
    <center style="padding-top: 20px;"> <h4 style="font-weight: bold;"> <?php echo $u->sambutan ?></h4> </center>
             <div class="mbr-cards-row row" style="padding-bottom: 40px;padding-top: 0px;">
                <a href="<?php echo $u->link1 ?>">
                    <img src="<?php echo base_url(); ?>assets/images/button_pengamanan.png" style="width: 100%;">
                                                <p style="margin-top: -23%;">
                            <div class="col-xs-5"></div>
                            <div class="col-xs-7">
                            <span style="color: red;"><?php echo $u->captionb ?></span><br>
                            </div>
                            <div class="col-xs-5"></div>
                            <div class="col-xs-7">
                            <span style="color: white;"><?php echo $u->captionr ?></span>
                            </div>
                        </p>
                </a>

                <a href="<?php echo $u->link2 ?>">
                    <img src="<?php echo base_url(); ?>assets/images/button_pelatihan.png" style="width: 100%; margin-top: 15%;">
                                                <p style="margin-top: -23%;">
                            <div class="col-xs-5"></div>
                            <div class="col-xs-7">
                            <span style="color: red;"><?php echo $u->captionb2 ?></span><br>
                            </div>
                            <div class="col-xs-5"></div>
                            <div class="col-xs-7">
                            <span style="color: white;"><?php echo $u->captionr2 ?></span>
                            </div>
                        </p>
                </a>
    </div>
</section>
<?php } ?>
<a href="<?php echo base_url(); ?>Contact">
<div class="col-xs-12" id="contactbottom">
    <span class="fa fa-phone" style="margin-right: 2%; font-size: 16px;"></span>
    call us now
</div>
</a>