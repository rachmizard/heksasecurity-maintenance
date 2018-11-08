
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Starter Template for Bootstrap</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/karir/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/navbar/css/menu_elastic.css" />
      <script src="<?php echo base_url(); ?>assets/navbar/js/snap.svg-min.js"></script>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/navbar/font-awesome-4.2.0/css/font-awesome.min.css" />
      <script src="<?php echo base_url(); ?>assets/navbar/js/classie.js"></script>
      <script src="<?php echo base_url(); ?>assets/navbar/js/main3.js"></script>
<style>
  .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover{
    background-color: #f5f5f5;
    color: black;
  }

</style>

  </head>

  <body style="margin-top: -10px;">
<div class="col-xs-12" style="padding: 0px;margin-top: -10px;">
  <img src="public/img/assetImage/1711012001433.jpg" alt="" style="height: 195px;width: 100%;">
      <div style="">
            <center style="margin-top: -10%;padding-bottom: 4%;">
            <img src="<?php echo base_url(); ?>assets/images/logo_heksa-circle.png" style="width: 20%;display: block;">
            PT HEKSA GARDA UTAMA
            </center>
    </div>
</div>

<div class="col-xs-12" style="margin:5px;padding: 10px;">
<div class="" style="padding-bottom: 50px;">


<div id="exTab3" class="container"> 
    <ul  class="nav nav-pills default">
      <li class="active">
          <a  href="#1b" data-toggle="tab" style="color: black;">SECURITY</a>
      </li>
      <li>
        <a href="#2b" data-toggle="tab" style="color: black;">NON SECURITY</a>
      </li>

    </ul>

      <div class="tab-content clearfix" style="border: 1px solid #ddd;padding: 10px;">
        <div class="tab-pane active" id="1b">
<?php foreach($karir as $u){ ?>
<center><h4>SECURITY</h4></center>
          <p><center><?php echo $u->pengumuman_security ?></center></p>
          <hr>
      <ul class="nav nav-stacked" id="accordion1">
           <li class="panel"> <a data-toggle="collapse" data-parent="#accordion1" href="#firstLink">Persyaratan</a>
<ul id="firstLink" class="collapse">
<?php echo $u->persyaratan_security ?>
</ul>
            </li>
            <li class="panel"> <a data-toggle="collapse" data-parent="#accordion1" href="#secondLink">Cara Melamar</a>
<ul id="secondLink" class="collapse" style="padding: 10px;">
              <center><h4>KIRIM LAMARAN KERJA MU DISINI</h4></center>
              <center><button type="button" class="btn btn-outline-dark btn-md" onclick="window.open('http://heksasecurity.com/lamarkerja/');" id="lk" >Lamar Sekarang</button></center>
</ul>
            </li>
      </ul>

        </div>

        <!--===================================================end security===================================================-->
        <div class="tab-pane" id="2b">

<center><h4>NON - SECURITY</h4></center>
          <p><center><?php echo $u->pengumuman_nonsecurity ?></center></p>
          <hr>
      <ul class="nav nav-stacked" id="accordion2">
           <li class="panel"> <a data-toggle="collapse" data-parent="#accordion2" href="#firstLink2">Persyaratan</a>
            <ul id="firstLink2" class="collapse">
<?php echo $u->persyaratan_nonsecurity ?>
              </ul>
            </li>
            <li class="panel"> <a data-toggle="collapse" data-parent="#accordion2" href="#secondLink2">Cara Melamar</a>
              <ul id="secondLink2" class="collapse" style="padding: 10px;">
              <center><h4>KIRIM LAMARAN KERJA MU DISINI</h4></center>
              <center><button type="button" class="btn btn-outline-dark btn-md" onclick="window.open('http://heksasecurity.com/lamarnonkerja/');" id="lk" >Lamar Sekarang</button></center>
              </ul>
            </li>
      </ul>


        </div>

        <!--===================================================end non security===================================================-->
      </div>
  </div>
<?php } ?>


    </div></div>
<div class="col-xs-12" id="contactbottom" style="background-color: black;color: white;position: fixed;bottom: 0px;height: 40px;text-align: center;font-size: 18px;padding: 10px;">
    <span class="fa fa-phone" style="margin-right: 2%; font-size: 16px;"></span>
    call us now
</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
