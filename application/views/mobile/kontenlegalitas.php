<section>
  <div class="col-xs-12" style="background-image: url(<?php echo base_url(); ?>assets/images/bg_about.jpg); width: 100%; background-repeat: no-repeat;"> 
        
      <div class="owl-carousel sleding">



  <?php foreach($about as $u){ ?>
        <div class="col-xs-12 col-md-0 col-lg-12">
          <center>
                  <h2 class=" " style="color: white; margin-top: 20%; font-weight: bold;"><?php echo $u->caption ?></h2>
                  <img src="<?php echo base_url("$u->logo"); ?>"  style="width: 150px; height: 200px; margin-top: 15%;">
                  <div class="container" style="margin-top:150px;">
                    <h4><?php echo $u->detail ?></h4>
                    <p style="color: white; margin-top: 40px;">
                      <?php echo $u->detail_description ?>
                    </p>
                  </div>
              </center>
          </div>
    <?php } ?>

       
          

        </div>

        </div>
        
</section>

<script type="text/javascript">
   $(document).ready(function(){
  $(".owl-carousel").owlCarousel({
     autoPlay : 5000,
      slideSpeed : 500,
      mouseDrag : false,
  });
});

   $(document).ready(function(){
  $(".owl-carousel1").owlCarousel({
     autoPlay : 5000,
      slideSpeed : 500,
      mouseDrag : false,
  });
});
</script>