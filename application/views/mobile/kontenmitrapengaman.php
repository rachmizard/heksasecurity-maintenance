<style>
    .stylish-input-group .input-group-addon{
    background: white !important; 
}
.stylish-input-group .form-control{
    border-right:0; 
    box-shadow:0 0 0; 
    border-color:#ccc;
    background: ;
}
.stylish-input-group button{
    border:0;
    height: 20px;
    padding: 0px;
    background:transparent;
    color: white;
}

*{box-sizing: border-box;}body{background-color: #cbcac9; margin:0;}#c876{padding:30px 0px;height:700px;background:white;}#c909{background-color:#848484 !important;}#c925{margin-top:10%;margin-bottom:5%;}#c934{margin-bottom:3px;}#c938{text-align:left;}#c943{padding-left:0;}#c947{margin-right:14px;margin-bottom:14px;}#c960{margin-right:14px;margin-bottom:14px;}#c972{margin-right:14px;margin-bottom:14px;}#c984{margin-right:14px;margin-bottom:14px;}#c996{margin-right:14px;margin-bottom:14px;}#c1008{margin-bottom:3px;}#c1012{text-align:left;}#c1016{padding-left:0;}#c1020{margin-right:14px;margin-bottom:14px;}#c1033{margin-right:14px;margin-bottom:14px;}#c1045{margin-right:14px;margin-bottom:14px;}#c1057{margin-right:14px;margin-bottom:14px;}#c1069{margin-right:14px;margin-bottom:14px;}#c1081{margin-bottom:3px;}#c1085{text-align:left;}#c1089{padding-left:0;}#c1093{margin-right:14px;margin-bottom:14px;}#c1106{margin-right:14px;margin-bottom:14px;}#c1118{margin-right:14px;margin-bottom:14px;}#c1130{margin-right:14px;margin-bottom:14px;}#c1142{background:#efefef;}#c1152{text-align:center;}#kolom{text-align:center;}#c1167{width:100%;}#c1194{text-align:center;}#c1200{width:100%;}#c1227{text-align:center;}#c1231{width:100%;}#c1258{text-align:center;}#c1263{width:100%;}#c1282{text-align:center;}#c1287{width:100%;}#kolom{text-align:center;}#c1311{width:100%;}.row{display:table;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;width:100%;}#kolom{height:200px;text-align:center;}
</style>
<section class="engine"><a href="https://mobirise.co/o">bootstrap buttons</a></section><section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-r" data-rv-view="82" style="background-size: 100%;background-image: url(<?php echo base_url(); ?>assets/images/home2sm.JPG);padding-top: 41px; padding-bottom: 120px;height: 200px;">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>

    <div style="margin-top: 10%;position: relative;">
            <center style="margin-top: 30%;">
            <img src="<?php echo base_url(); ?>assets/images/logo_heksa-circle.png" style="width: 20%;display: block;">
            PT HEKSA GARDA UTAMA
            </center>
    </div>
    <div class="container">
        <div class="row" style="padding-top: 40px;">
            <center class="container">

            </center>
        </div>
    </div>
</section>

<section style="padding-top: 20%;background-color:#cbcac9;padding-bottom: 3%;">
    <div class="pelatihan" style="margin: 0px 10px;border-radius: 10px; margin-bottom: 20%; padding-top: 10px;">
        <div class=" col-xs-12">
  

</div>
        <div style="padding-top: 0%;background-color:#cbcac9;padding-bottom: 9%;background-color: white;">
            <div class="container">
            <div class="col-xs-12" style="padding:0px;">
<p><center>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="background-color: grey; width: 90%;">
    <img src="<?php echo base_url(); ?>assets/images/filter.png" style="width: 30px;">FILTER BY<span class="caret"></span></button>
  </button></center>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body" style="border: none;">
    <div class="pow">



          <p id="c934">Years</p>
          <div class="" id="c938">
            <label id="c943">

    <?php foreach($mitrapengamanan as $b){  
      $getfilter= $b->status;
      $vtahun= $b->tahun;
      $hasil= 'hidden';
      ?>

      <div class="radio" <?php  if ($getfilter == "aktif") {$hasil='act';}?> <?php 

      if ($vtahun==NULL) {
      $hasil="hidden";  
      }
       ?> <?php echo $hasil ?>>     
            <label><input class="optTahun" id="setoptn" type="radio" name="optradio"  value="<?php echo  $b->tahun; ?>"> <?php echo  $b->tahun; ?>
            </label>
          </div>

    <?php } ?>
            </label>
          </div>




          <p id="c1008">Objek</p>
          <div class="lowasd" id="c1012">
            <label id="c943">
<form>
    <?php foreach($mitrapengamanan as $b){  
      $getfilter= $b->status;
      $vtahun= $b->objek;
      $hasil= 'hidden';
      ?>

      <div class="radio" <?php  if ($getfilter == "aktif") {$hasil='act';}?> <?php 

      if ($vtahun==NULL) {
      $hasil="hidden";  
      }
       ?> <?php echo $hasil ?>>     
            <label><input class="optTahun" id="setoptn" type="radio" name="optradio" value="<?php echo  $b->objek; ?>"> <?php echo  $b->objek; ?>
            </label>
          </div>

    <?php } ?>
</form>
            </label>
          </div>

          <p id="c1081">Provinsi</p>



          <div class="lowasds" id="c1012">
            <label id="c1085">

    <?php foreach($mitrapengamanan as $b){  
      $getfilter= $b->status;
      $hasilhdn= 'hidden';  ?>
      <?php  
      $getprovinsi = $b->provinsi;?>
      <div class="radio" <?php  if ($getfilter == "aktif") {$hasilhdn='act';}?>
        <?php 
      if ($getprovinsi==NULL) {
      $hasilhdn="hidden"; 
      }
         ?>
       <?php echo $hasilhdn ?>>     
            <label><input class="optProvinsi" id="setoptn" type="radio" name="optradio" value="<?php echo  $b->provinsi; ?>"> <?php echo  $b->provinsi; ?>
            </label>
          </div>

    <?php } ?>
            </label>
          </div>
        </div>
  </div>
</div>





            </div></div>


<div class="container">
    <div class="input-group stylish-input-group">
                        <input type="text" id="myInput" onkeyup="myFunction()" class="form-control"  placeholder="Search" >
                        <span class="input-group-addon" style="background-color: #848484 !important;">
                            <button type="submit">
                                <span class="glyphicon glyphicon-search">search</span>
                            </button>  
                        </span>
                    </div>
</div>




    <div class="col-xs-12" style="background-color: #cbcac9; margin:15px 0px 15px 0px; width: 100%;">
        <div style="margin-top: 10px;">
            
                    <h1 id="c1152">Mitra</h1>


<div id="list_mitraPengamanan">  
  <?php foreach($mitrapengamanan as $u){ ?>
                    <div class="col-xs-6 col-lg-4 filter <?php echo $u->filter ?> " id="list_mitraPengamanan" style="text-align: center;">
                      <img id="c1167" src="<?php echo base_url("$u->logo"); ?>"/>
                        <p>
                             <a href="" style="text-decoration: none;color: black;text-align: center;"><?php echo $u->caption ?></a></p>
                    </div>
    <?php } ?> 

</div>
    
        </div>
    </div>
</section>


<a href="<?php echo base_url(); ?>Contact">
<div class="col-xs-12" id="contactbottom" style="z-index:2;">
    <span class="fa fa-phone" style="margin-right: 2%; font-size: 16px;"></span>
    call us now
</div>
</a>
<script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>



<script>
function myFunction() {
    var input, filter, ul, p, a, i, img;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("list_mitraPengamanan");
    p = ul.getElementsByTagName("p");
    img = ul.getElementsByTagName("img");
    for (i = 0; i < p.length; i++) {
        a = p[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            p[i].style.display = "";
            img[i].style.display = "";
        } else {

            img[i].style.display = "none";
            p[i].style.display = "none";

        }
    }
}
</script>
<script>

  $('input[type="radio"]').on('change', function() {
    $(this).siblings('input[type="radio"]').not(this).prop('checked', false);
    searchBy();
  });
  function searchBy(){
    var tahun = '';
    var objek = '';
    var provinsi = '';
    $('.optTahun:checked').each(function(){
      tahun = $(this).val().toLowerCase();
    });
    $('.optObjek:checked').each(function(){
      objek = $(this).val().toLowerCase();
    });
    $('.optProvinsi:checked').each(function(){
      provinsi = $(this).val().toLowerCase();
    });
    $("#list_mitraPengamanan *").filter(function() {
      if(tahun == '' && objek == '' && provinsi == ''){
        $('.filter').show();
      }else {
        $(".filter").not('.'+tahun+objek+provinsi).hide();
        $('.filter').filter('.'+tahun+objek+provinsi).show();
      }
    });
  }
</script>