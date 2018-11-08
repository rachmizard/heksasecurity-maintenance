<section class="engine"><a href="https://mobirise.co/o">bootstrap buttons</a></section><section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-r" data-rv-view="82" style="  background-attachment: local;background-size: 100%;background-image: url(<?php echo base_url(); ?>assets/images/home2sm.JPG);padding-top: 41px; padding-bottom: 120px;height: 200px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">

    </div>

    <div style="margin-top: ;position: absolute;">

            <center style="margin-top: 30%;">

            <img src="<?php echo base_url(); ?>assets/images/logo_heksa-circle.png" style="width: 20%;display: block;">

            PT HEKSA GARDA UTAMA

            </center>

    </div>

    <div class="container">

        <div class="row" style="padding-top: 40px;">

            <center class="container">

                <span id="mb-cptn" style="font-weight: bold;"><?php foreach($pelatihankompetensidasar as $u){ ?><?php echo $u->txt_header; ?><?php } ?></span>

            </center>

        </div>

    </div>

</section>



<section style="padding-top: 20%;background-color:#cbcac9;padding-bottom: 3%;">

    <center style="margin-bottom: 20px;padding: 0px 20px;">

        <?php foreach($pelatihankompetensidasar as $u){ ?><?php echo $u->txt_header3; ?><?php } ?>

    </center>

    <div class="pelatihan" style="margin: 0px 10px;border-radius: 10px; margin-bottom: 20%; padding: 10px;">

        <div style="padding-top: 0%;background-color:#cbcac9;padding-bottom: 9%;background-color: white;">





  <?php foreach($pelatihankompetensidasar as $u){ ?>

    

        <div class="las">

            <div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size" style="width: ;" id="rg">

            <div class="mbr-figure"><img src="<?php echo base_url("$u->logo"); ?>"></div>

            </div>

    <div class="container">

        

        <div class="securityescort" style="color: black;">

          <div class="col-lg-6 col-xs-12" style="padding-top:10px;">

            <h4><?php echo $u->caption_black ?> <sd> <?php echo $u->caption_red ?> </sd></h4>

            <p><?php echo $u->description ?>

            </p>

            <a class="" onclick="toggle_visibility('doo');" style="color: black; border: 1px solid black; padding:10px 15px; font-weight: bold; cursor: pointer;" id="">PERSYARATAN</a>

            <center style="padding-top:14px;"><button data-toggle="modal" data-target="#myModal" style="color: black; border: 1px solid black; padding:10px 15px; font-weight: bold; cursor: pointer; margin-left: ;" id="">JADWAL</button></center>

                <div id="doo" style="display: none; margin-top: 15px;" class="w3-animate-opacity">

                        <?php echo $u->persyaratan ?>

                    </div>

            </div>

        </div>

    </div>

</div>



        <div class="las">

            <div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size" style="width: ;" id="rg">

            <div class="mbr-figure"><img src="<?php echo base_url("$u->logo2"); ?>"></div>

            </div>

    <div class="container">

        

        <div class="securityescort" style="color: black;">

          <div class="col-lg-6 col-xs-12" style="padding-top:10px;">

            <h4><?php echo $u->caption_black2 ?> <sd> <?php echo $u->caption_red2 ?> </sd></h4>

            <p><?php echo $u->description2 ?>

            </p><center>

            <button class="btn-2" onclick="toggle_visibility('foo');" style="color: black;" id="beda2">Persyaratan</button>

            <center style="padding-top:5px;"><button data-toggle="modal" data-target="#myModal2" style="color: black; border: 1px solid black; padding:10px 15px; font-weight: bold; cursor: pointer; margin-left: ;" id="">JADWAL</button></center>

            </center>

                <div id="foo" style="display: none; margin-top: 5px;" class="w3-animate-opacity">

                       <?php echo $u->persyaratan2 ?>

                    </div>

            </div>

        </div>

    </div>

</div>





<div class="las">

            <div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size" style="width: ;" id="rg">

            <div class="mbr-figure"><img src="<?php echo base_url("$u->logo3"); ?>"></div>

            </div>

    <div class="container">

        

        <div class="securityescort" style="color: black;">

          <div class="col-lg-6 col-xs-12" style="padding-top:10px;">

            <h4><?php echo $u->caption_black3 ?> <sd> <?php echo $u->caption_red3 ?> </sd></h4>

            <p><?php echo $u->description2 ?>

            </p><center>

            <button class="btn-2" onclick="toggle_visibility('koo');" style="color: black;" id="beda2">Persyaratan</button>

            <center style="padding-top:5px;"><button data-toggle="modal" data-target="#myModal" style="color: black; border: 1px solid black; padding:10px 15px; font-weight: bold; cursor: pointer; margin-left: ;" id="">JADWAL</button></center>

            </center>

                <div id="koo" style="display: none; margin-top: 5px;" class="w3-animate-opacity">

                         <?php echo $u->persyaratan3 ?>

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




<div class="modal fade" id="myModal" role="dialog">

    <div class="modal-dialog">

    

      <!-- Modal content-->

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Jadwal Pelatihan</h4>

        </div>

        <div class="modal-body">

                <img src="<?php echo base_url("$u->image_jadwal"); ?>" style="height: 124px;"/>



                <br><br><br>

                <center>keterangan : Tempat Pelatihan dilaksanakan di PUSDIKLAT PT. Heksa Garda Utama</center>

                <center><i>Jadwal Sewaktu waktu dapat berubah</i></center>

                

        </div>

        <div class="modal-footer">

        </div>

      </div>

      

    </div>

  </div>







<div class="modal fade" id="myModal2" role="dialog">

    <div class="modal-dialog">

    

      <!-- Modal content-->

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Jadwal Pelatihan</h4>

        </div>

        <div class="modal-body">

                <img src="<?php echo base_url("$u->image_jadwal2"); ?>" style="height: 27px;"/>

                <br><br><br>

                <center>keterangan : Tempat Pelatihan dilaksanakan di PUSDIKLAT PT. Heksa Garda Utama</center>

                <center><i>Jadwal Sewaktu waktu dapat berubah</i></center>

        </div>

        <div class="modal-footer">

        </div>

      </div>

      

    </div>

  </div>

    <?php } ?>