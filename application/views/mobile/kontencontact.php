<!--link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"-->
<section class="engine"><a href="https://mobirise.co/o">bootstrap buttons</a></section><section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-r" data-rv-view="82" style="background-image: url(<?php echo base_url(); ?>assets/images/home2.JPG);padding-top: 41px; padding-bottom: 120px;height: 200px;">
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
                <span id="mb-cptn" style="font-weight: bold;"> <?php foreach($kontak as $u){ echo $u->txt_header; }?></span>
            </center>
        </div>
    </div>
</section>

<section style="padding-top: 20%;background-color:#cbcac9;padding-bottom: 3%;">
    <div class="pelatihan" style="margin: 0px 10px;border-radius: 10px; margin-bottom: 20%; padding: 10px;">
        <div style="padding-top: 0%;background-color:#cbcac9;padding-bottom: 9%;background-color: white;">
            <div class="" style="margin-top: 30px;">
      <div class="col-xs-12" style="padding-top: 20px;">
        <h4 style="font-family: 'Raleway'; font-weight: bold;text-align: center;"> <?php foreach($kontak as $u){ echo $u->txt_header2; }?></h4>
        
        <p style="margin-top: 15px;font-size: 14px;text-align: center;">
            PT Heksa Garda Utama
        </p>
        <div class="col-xs-6">
            <p>
  <?php foreach($kontak as $u){ ?>
               <?php echo $u->alamat ?>
            </p>
        </div>
        <div class="col-xs-6">
        <p>
            <?php echo $u->telepon ?> <br>
            <?php echo $u->fax ?><br>
            <?php echo $u->no_hp ?><br>
    <?php } ?>
        </p>
        </div>
      </div>
      <div class="col-lg-8" style="padding: 0px;padding-top: 20px;">
                <h4  style="font-family: 'Raleway'; font-weight: bold;text-align: center;">   <?php foreach($kontak as $u){ echo $u->txt_header3; }?> </h4>
                <div class="form-komen center">
                            <div class="col-xs-6" col="">
                                <input type="nama"  id="nama" placeholder="Your Name" style="width: 100%; padding: 10px; ">
                            </div>
                            <div class="col-xs-6">
                                <input type="email"  id="email" placeholder="Your Email" style="width: 100%; padding: 10px;  margin-bottom: 15px;">
                            </div>
                            <div class="col-xs-12">
                                <input type="subject"  id="subject" placeholder="Subject *" style="width: 100%; padding: 10px;  margin-bottom: 15px;">
                            </div>
                        
                </div>
                          <div class="col-xs-12">
                              <textarea name="coment" rows="10" placeholder="Message" style="width: 100%; padding: 10px; "></textarea>
                          </div>
                          <center>
                            <button  class="btn-2" id="beda" style="margin-left: 15px;">KIRIM</button>
                           </center>
                        </form>
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
