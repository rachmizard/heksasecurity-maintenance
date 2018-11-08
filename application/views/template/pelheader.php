<style>td{
        padding: 4px;
    }</style>
<section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-r" data-rv-view="82">
<div class="mbr-overlay" id="c884"></div>
<div class="container">


	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-xs-center mbr-section-hero">
			<h1 class="mbr-section-title display-2"><?php foreach($mitrapelatihan as $u){ ?><?php echo $u->txt_header; ?><?php } ?> </h1>
		</div>

	</div>
</div>
</section>
<style>
*{box-sizing: border-box;}body{margin:0;}#msg-box8-r{background-image:url(<?php echo base_url(); ?>public/img/assetImage/1711012001433.jpg);padding-top:120px;padding-bottom:120px;}#c884{opacity:0.5;background-color:rgb(34, 34, 34);}.row{display:table;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;width:100%;}
</style>
<section class="mbr-section article mbr-section__container" id="content1-s" data-rv-view="77">
<div class="index-content">
	<div class="container">
		<center>
		<h3 class="display-2" id="c897"><?php foreach($mitrapelatihan as $u){ ?><?php echo $u->txt_header2; ?><?php } ?> </h3>
		<table class="table">
		<tr id="c912">
			<td>No.</td>
			<td>Company</td>
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
</section>
<style>
 *{box-sizing: border-box;}body{margin:0;}#content1-s{padding-top:20px;padding-bottom:20px;margin-bottom:10px;background:white;}#c897{margin-top:0px;margin-bottom:10px;font-size:40px;}#c912{background:#000;color:#fff;}
</style>