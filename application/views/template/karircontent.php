<section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-r" data-rv-view="82">
<div class="mbr-overlay" id="c884"></div>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-xs-center mbr-section-hero">
			<h1 class="mbr-section-title display-2"><?php foreach($karir as $u){ ?><?php echo $u->txt_header; ?><?php } ?></h1>
		</div>
	</div>
</div>
</section>
<style>
*{box-sizing: border-box;}body{margin:0;}#msg-box8-r{background-image:url(<?php echo base_url(); ?>public/img/assetImage/1711012001433.jpg);padding-top:120px;padding-bottom:120px;}#c884{opacity:0.5;background-color:rgb(34, 34, 34);}.row{display:table;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;width:100%;}
</style>
<section class="mbr-section article mbr-section__container" id="c876">
<div class="container">
	<ul class="nav nav-tabs" role="tablist">
		<li class="active" role="presentation">
			<a href="#home" aria-controls="home" role="tab" data-toggle="tab">Security</a>
		</li>
		<li role="presentation">
			<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">NonSecurity</a>
		</li>
	</ul>

	<div class="tab-content">
		<div class="tab-pane active" role="tabpanel" id="home">
			<div class="container">
				<div class="col-lg-12">
					<h2><?php foreach($karir as $u){ ?><?php echo $u->txt_header2; ?><?php } ?> - SECURITY</h2>
					<hr id="c936"/>
					<p id="c940">
						<?php foreach($karir as $u){ echo $u->pengumuman_security; }?>
					</p>
					<div class="col-sm-12 col-md-12" id="c944">
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<a id="c966" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><h4 class="panel-title"><span class="glyphicon glyphicon-file"></span><?php foreach($karir as $u){ ?><?php echo $u->txt_header3; ?><?php } ?></h4></a>
								</div>
								<div class="panel-collapse collapse in" id="collapseOne">
									<ul class="list-group">
										<li class="list-group-item">
											<div class="container">
												<?php foreach($karir as $u){ echo $u->persyaratan_security; }?>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<a id="c1059" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><h4 class="panel-title"><span class="glyphicon glyphicon-share"></span><?php foreach($karir as $u){ ?><?php foreach($karir as $u){ echo $u->txt_header4;} ?><?php } ?></h4></a>
								</div>
								<div class="panel-collapse collapse" id="collapseFour">
									<div class="list-group">
										<span class="container"><center>
										<h3>kirim persyaratanmu di sini<br/><br/><a id="c1109" href="lamarkerja">Lamar Sekarang</a></h3>
										</center></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane" role="tabpanel" id="profile">
			<div class="container">
				<div class="col-lg-12">
					<h2><?php foreach($karir as $u){ ?><?php echo $u->txt_header2; ?><?php } ?> - NON SECURITY</h2>
					<hr id="c1130"/>
					<p id="c1134">
						<?php echo $u->pengumuman_nonsecurity ?>
					</p>
					<div class="col-sm-12 col-md-12" id="c1138">
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<a id="c1154" data-toggle="collapse" data-parent="#accordion" href="#colone"><h4 class="panel-title"><span class="glyphicon glyphicon-file"></span><?php foreach($karir as $u){ ?><?php echo $u->txt_header3; ?><?php } ?></h4></a>
								</div>
								<div class="panel-collapse collapse in" id="colone">
									<ul class="list-group">
										<li class="list-group-item">
											<div class="container">
												 <?php foreach($karir as $u){ echo $u->persyaratan_nonsecurity; }?>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<a id="c1239" data-toggle="collapse" data-parent="#accordion" href="#coltwo"><h4 class="panel-title"><span class="glyphicon glyphicon-share"></span><?php foreach($karir as $u){ ?><?php echo $u->txt_header4; ?><?php } ?></h4></a>
								</div>
								<div class="panel-collapse collapse" id="coltwo">
									<div class="list-group">
										<span class="container"><center>
										<h3>kirim persyaratanmu di sini<br/><br/><a id="c1288" href="lamarnonkerja">Lamar Sekarang</a></h3>
										</center></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<script>
	$('#myTabs a').click(function (e) {
		e.preventDefault()
		$(this).tab('show')
	})
</script>
<style>
*{box-sizing: border-box;}body{margin:0;}*{box-sizing:border-box;}body{margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#c876{padding-top:30px;padding-right:0px;padding-bottom:30px;padding-left:0px;height:100%;color:black;}#home{padding-top:20px;}#c936{border-top-width:1.2px;border-top-style:solid;border-top-color:rgb(0, 0, 0);}#c940{margin-bottom:2%;}#c944{margin-left:-17px;}#c966{color:black;}#c1059{color:black;}#c1109{color:black;border-top-width:3px;border-right-width:3px;border-bottom-width:3px;border-left-width:3px;border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-color:black;border-right-color:black;border-bottom-color:black;border-left-color:black;border-image-source:initial;border-image-slice:initial;border-image-width:initial;border-image-outset:initial;border-image-repeat:initial;padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px;font-size:18px;}#profile{padding-right:10px;padding-bottom:10px;padding-left:10px;padding-top:20px;}#c1130{border-top-width:1.2px;border-top-style:solid;border-top-color:rgb(0, 0, 0);}#c1134{margin-bottom:2%;}#c1138{margin-left:-17px;}#c1154{color:black;}#c1239{color:black;}#c1288{color:black;border-top-width:3px;border-right-width:3px;border-bottom-width:3px;border-left-width:3px;border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-color:black;border-right-color:black;border-bottom-color:black;border-left-color:black;border-image-source:initial;border-image-slice:initial;border-image-width:initial;border-image-outset:initial;border-image-repeat:initial;padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px;font-size:18px;}
</style>