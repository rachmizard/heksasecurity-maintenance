
<section class="engine"><a href="https://mobirise.co/o">bootstrap buttons</a></section><section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-r" data-rv-view="82" style="background-size: 100%;background-image: url(<?php echo base_url(); ?>assets/images/home2sm.JPG);padding-top: 41px; padding-bottom: 120px;height: 200px;">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>

    <div style="margin-top: 10%;position: absolute;">
            <center style="margin-top: 30%;">
            <img src="<?php echo base_url(); ?>assets/images/logo_heksa-circle.png" style="width: 20%;display: block;">
            PT HEKSA GARDA UTAMA
            </center>
    </div>
    <div class="container">
        <div class="row" style="padding-top: 40px;">
            <center class="container">
                <span id="mb-cptn" style="font-weight: bold;"><?php foreach($pelatihankompetensikhusus_content as $u){ ?><?php echo $u->txt_header; ?><?php } ?></span>
            </center>
        </div>
    </div>
</section>

<section style="padding-top: 20%;background-color:#cbcac9;padding-bottom: 3%;">
    <center style="margin-bottom: 20px;padding:10px 20px;padding-top: 20px;">
        <?php foreach($pelatihankompetensikhusus_content as $u){ ?><?php echo $u->txt_header4; ?><?php } ?>
    </center>
    <div class="pelatihan" style="margin: 0px 10px;border-radius: 10px; margin-bottom: 20%; padding: 10px;">
        <div style="padding-top: 0%;background-color:#cbcac9;padding-bottom: 9%;background-color: white;">
        <div class="index-content">
    <div class="container" style="padding: 0px 3px;">
        <center style="padding-bottom: 20px;">
        <h4  style="margin-top: 10px; margin-bottom: 5px; margin-left: 15px; font-weight: bold;"><?php foreach($pelatihankompetensikhusus_content as $u){ ?><?php echo $u->txt_header2; ?><?php } ?></h4><h4 style="color: red;">
            <?php foreach($pelatihankompetensikhusus_content as $u){ ?><?php echo $u->txt_header3; ?><?php } ?>
        </h4></center>
            

<?php foreach($pelatihankompetensikhusus_content as $u){ ?>
     
            <a href="###">

                <div class="col-xs-6" id="kard">
                    <div class="card">
                        <img src="<?php echo base_url("$u->image"); ?>">
                        <p><?php echo $u->caption ?></p>
                    </div>
                </div>
            </a>
<?php } ?>


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

