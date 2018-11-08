<section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-r" data-rv-view="82">
<div class="mbr-overlay" id="c884"></div>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-xs-center mbr-section-hero">
			<h1 class="mbr-section-title display-2"><?php foreach($berita as $u){ ?><?php echo $u->txt_header; ?><?php } ?></h1>
		</div>
	</div>
</div>
</section>
<style>
*{box-sizing: border-box;}body{margin:0;}#msg-box8-r{background-image:url(<?php echo base_url(); ?>public/img/assetImage/1711012001433.jpg);padding-top:120px;padding-bottom:120px;}#c884{opacity:0.5;background-color:rgb(34, 34, 34);}.row{display:table;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;width:100%;}
</style>
<section class="mbr-section article mbr-section__container" id="content1-17" data-rv-view="98">
<div class="col-lg-6">
	<h1>HEKSA <sd id="c916">HOT NEWS</sd></h1>


 <?php foreach($berita as $u){ ?>
<!-- SLIDER PRO-->

   <div id="example3" class="slider-pro">
    <div class="sp-slides">
   	<div class="sp-slide">
        <img class="sp-image" src="<?php echo base_url("$u->image_slider_1"); ?>"
          data-src="<?php echo base_url("$u->image_slider_1"); ?>"
          data-retina="<?php echo base_url("$u->image_slider_1"); ?>"/>

        <p class="sp-layer sp-black sp-padding" 
          data-position="bottomLeft"
          data-show-transition="up" data-hide-transition="down" style="transform-origin: left bottom 0px;left: 0px;bottom: 0px;width: 100%;visibility: visible;opacity: 1;transform: scale(1) translate3d(0px, 0px, 0px);">
         <?php echo $u->caption_slider_1 ?>
        </p>
      </div>
      <div class="sp-slide">
        <img class="sp-image" src="<?php echo base_url("$u->image_slider_2"); ?>"
          data-src="<?php echo base_url("$u->image_slider_2"); ?>"
          data-retina="<?php echo base_url("$u->image_slider_2"); ?>"/>

        <p class="sp-layer sp-black sp-padding" 
          data-position="bottomLeft"
          data-show-transition="up" data-hide-transition="down" style="transform-origin: left bottom 0px;left: 0px;bottom: 0px;width: 100%;visibility: visible;opacity: 1;transform: scale(1) translate3d(0px, 0px, 0px);">
          <?php echo $u->caption_slider_2 ?>
        </p>
      </div>
      <div class="sp-slide">
        <img class="sp-image" src="<?php echo base_url("$u->image_slider_3"); ?>"
          data-src="<?php echo base_url("$u->image_slider_3"); ?>"
          data-retina="<?php echo base_url("$u->image_slider_3"); ?>"/>

        <p class="sp-layer sp-black sp-padding" 
          data-position="bottomLeft"
          data-show-transition="up" data-hide-transition="down" style="transform-origin: left bottom 0px;left: 0px;bottom: 0px;width: 100%;visibility: visible;opacity: 1;transform: scale(1) translate3d(0px, 0px, 0px);">
          <?php echo $u->caption_slider_3 ?>
        </p>
      </div>
    	</div>
    </div>
<!-- END SLIDER PRO-->

</div>
<div class="col-lg-6">
	<h1>ARTIKEL</h1>
	<div class="upon">
		<a id="c1261" href="iniberita">
		<div class="col-lg-12" id="c988">
			<div class="col-lg-5" id="c993">
				<img id="c998" src="<?php echo base_url("$u->image_artikel_1") ?>"/>
			</div>
			<div class="col-lg-7" id="c1001">
				<h4><?php echo $u->caption_artikel_1 ?></h4>
				<p>
					 tokoh Kepolisian Republik Indonesia (Polri). merupakan orang pertama di indonesia yang pernah bekerja sebagai satpam ...
				</p>
			</div>
		</div>
		</a><a id="c1336" href="/iniberita">
		<div class="col-lg-12" id="c1014">
			<div class="col-lg-5" id="c1018">
				<img id="c1022" src="<?php echo $u->image_artikel_2 ?>"/>
			</div>
			<div class="col-lg-7" id="c1025">
				<h4><?php echo $u->caption_artikel_2 ?></h4>
				<p>
					 Prosedur evakuasi kebakaran yang ditangani oleh Heksa Security dan Dinas pemadam kebakaran
				</p>
			</div>
		</div>
		</a><a id="c1408" href="/iniberita">
		<div class="col-lg-12" id="c1037">
			<div class="col-lg-5" id="c1041">
				<img id="c1045" src="<?php echo base_url("$u->image_artikel_3"); ?>"/>
			</div>
			<div class="col-lg-7" id="c1048">
				<h4><?php echo $u->caption_artikel_3 ?></h4>
				<p>
					 penjinakan BOM yang terjadi di Jakarta yang terjadi pekan lalu merugikan masyarakat sekitar dan pedagang
				</p>
			</div>
		</div>
		</a>
	</div>
</div>
<div class="col-lg-12" id="c1060">
	<div class="col-lg-4" id="c1064">
		<div class="col-lg-5">
			<img id="c1073" src="<?php echo base_url("$u->image_berita_1") ?>"/>
		</div>
		<div class="col-lg-7" id="c1076">
			<h4 id="c1532"><?php echo $u->caption_berita_1 ?></h4>
		</div>
	</div>
	<div class="col-lg-4" id="c1084">
		<div class="col-lg-5">
			<img id="c1092" src="<?php echo base_url("$u->image_berita_2") ?>"/>
		</div>
		<div class="col-lg-7" id="c1095">
			<h4 id="c1583"><?php echo $u->caption_berita_2 ?></h4>
		</div>
	</div>
	<div class="col-lg-4" id="c1103">
		<div class="col-lg-5">
			<img id="c1111" src="<?php echo base_url("$u->image_berita_3") ?>"/>
		</div>
		<div class="col-lg-7" id="c1114">
			<h4 id="c1634"><?php echo $u->caption_berita_3 ?></h4>
		</div>
	</div>
</div>

<?php } ?>



</section>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/margin.css"/>
<style>
*{box-sizing: border-box;}body{margin:0;}#c998{width:213px;}#c1022{width:213px;}#c1045{width:213px;}*{box-sizing:border-box;}body{margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#c1261{color:black;}#c1336{color:black;}#c1022{height:150px;}#c1408{color:black;}#c1045{height:150px;}#c1073{width:150px;height:130px;margin-left:-14px;margin-bottom:0px;}#c1532{font-size:18px;}#c1092{width:150px;height:130px;margin-left:-14px;margin-bottom:0px;}#c1583{font-size:18px;}#c1111{width:150px;height:130px;margin-left:-14px;margin-bottom:0px;}#c1634{font-size:18px;}#content1-17{background-color:rgb(255, 255, 255);padding-top:20px;padding-bottom:20px;padding-right:100px;padding-left:100px;}#c916{color:red;}#c931{width:100%;height:461px;}#c934{opacity:0.5;width:100%;}#c947{width:100%;height:461px;}#c950{opacity:0.5;width:100%;}#c958{width:100%;height:461px;}#c961{opacity:0.5;width:100%;}#c988{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-color:rgb(204, 204, 204);border-right-color:rgb(204, 204, 204);border-bottom-color:rgb(204, 204, 204);border-left-color:rgb(204, 204, 204);border-image-source:initial;border-image-slice:initial;border-image-width:initial;border-image-outset:initial;border-image-repeat:initial;}#c993{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;}#c998{height:150px;}#c1001{padding-top:10px;padding-right:10px;padding-left:10px;font-size:14px;padding-bottom:0px;}#c1014{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-color:rgb(204, 204, 204);border-right-color:rgb(204, 204, 204);border-bottom-color:rgb(204, 204, 204);border-left-color:rgb(204, 204, 204);border-image-source:initial;border-image-slice:initial;border-image-width:initial;border-image-outset:initial;border-image-repeat:initial;}#c1018{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;}#c1025{padding-top:10px;padding-right:10px;padding-left:10px;font-size:14px;padding-bottom:0px;}#c1037{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-color:rgb(204, 204, 204);border-right-color:rgb(204, 204, 204);border-bottom-color:rgb(204, 204, 204);border-left-color:rgb(204, 204, 204);border-image-source:initial;border-image-slice:initial;border-image-width:initial;border-image-outset:initial;border-image-repeat:initial;}#c1041{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;}#c1048{padding-top:10px;padding-right:10px;padding-left:10px;font-size:14px;padding-bottom:0px;}#c1060{padding-top:50px;padding-right:0px;padding-bottom:50px;padding-left:0px;}#c1064{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-color:rgb(204, 204, 204);border-right-color:rgb(204, 204, 204);border-bottom-color:rgb(204, 204, 204);border-left-color:rgb(204, 204, 204);border-image-source:initial;border-image-slice:initial;border-image-width:initial;border-image-outset:initial;border-image-repeat:initial;}#c1076{padding-top:23px;}#c1084{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-color:rgb(204, 204, 204);border-right-color:rgb(204, 204, 204);border-bottom-color:rgb(204, 204, 204);border-left-color:rgb(204, 204, 204);border-image-source:initial;border-image-slice:initial;border-image-width:initial;border-image-outset:initial;border-image-repeat:initial;}#c1095{padding-top:23px;}#c1103{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-color:rgb(204, 204, 204);border-right-color:rgb(204, 204, 204);border-bottom-color:rgb(204, 204, 204);border-left-color:rgb(204, 204, 204);border-image-source:initial;border-image-slice:initial;border-image-width:initial;border-image-outset:initial;border-image-repeat:initial;}#c1114{padding-top:23px;}#marg{z-index:2;}.upon{margin-top:10px;}.mbr-section.article.mbr-section__container{background-color:rgba(6, 0, 0, 0.8);transition-duration:2s;transition-timing-function:ease-in;transition-delay:initial;transition-property:all;color:rgb(4, 4, 4);}
</style>


