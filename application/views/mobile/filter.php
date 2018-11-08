<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<section class="engine"><a href="https://mobirise.co/o">bootstrap buttons</a></section><section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-r" data-rv-view="82" style="background-size: 100%;background-size: 120%;background-image: url(<?php echo base_url(); ?>assets/images/home2sm.JPG);padding-top: 41px; padding-bottom: 120px;height: 200px;">
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
                <span id="mb-cptn" style="font-weight: bold;"><?php foreach($mitrapelatihan as $u){ ?><?php echo $u->txt_header; ?><?php } ?></span>
            </center>
        </div>
    </div>
</section>

<section style="padding-top: 20%;background-color:#cbcac9;padding-bottom: 4%;">
    <div class="pelatihan" style="margin: 0px 10px;border-radius: 10px; margin-bottom: 20%; padding: 10px;margin-top: 3%;">
        <div style="padding-top: 0%;background-color:#cbcac9;padding-bottom: 9%;background-color: white;">
                <div class="index-content">
    <div class="container">

<center>
        <p style="font-size: 22px;color: black;"><?php foreach($mitrapelatihan as $u){ ?><?php echo $u->txt_header2; ?><?php } ?></p>
        <table class="table">
        <tr id="c912" style="padding-bottom:3px;">
            <td>No</td>
            <td>Nama Perusahaan</td>
        </tr>
 <?php $no=1; ?>
<?php foreach($mitrapelatihan as $u){ ?>


        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nama ?></td>
        </tr>
<?php } ?> 

        </table>
        </center>


    </div>
</div>
        </div>
    </div>
</section>
<div class="col-xs-12" id="contactbottom">
    <span class="fa fa-phone" style="margin-right: 2%; font-size: 16px;"></span>
    call us now
</div>

<style>
    tr{
        border-bottom: 1px solid grey; height: 70px;
    }
    
 *{box-sizing: border-box;}body{margin:0;}#content1-s{padding-top:20px;padding-bottom:20px;margin-bottom:10px;background:white;}#c897{margin-top:0px;margin-bottom:10px;font-size:40px;}#c912{background:#000;color:#fff;}
</style>   
