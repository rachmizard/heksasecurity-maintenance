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

#bn{
    background-color: #d5d5d5;
    height: 39px;
    width: 100%;
    margin: 0px;
    margin-top: 10px;
    color: white;
    padding: 10px;
}
#custom-search-input{
    padding: 3px;
    border: solid 1px #E4E4E4;
    border-radius: 1px;
    background-color: #d5d5d5;
}

#custom-search-input input{
    border: 0;
    box-shadow: none;
}

#custom-search-input button{
    margin: 2px 0 0 0;
    background: none;
    box-shadow: none;
    border: 0;
    color: #666666;
    padding: 0 8px 0 10px;
    border-left: solid 1px #ccc;
}

#custom-search-input button:hover{
    border: 0;
    box-shadow: none;
    border-left: solid 1px #ccc;
}

#custom-search-input .glyphicon-search{
    font-size: 23px;
}
</style>
<section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-r" data-rv-view="82">
<div class="mbr-overlay" id="c884"></div>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-xs-center mbr-section-hero">
			<h1 class="mbr-section-title display-2">MITRA PENGAMANAN</h1>
		</div>
	</div>
</div>
</section>
<style>
*{box-sizing: border-box;}body{margin:0;}#msg-box8-r{background-image:url(public/img/assetImage/1711012001433.jpg);padding-top:120px;padding-bottom:120px;}#c884{opacity:0.5;background-color:rgb(34, 34, 34);}.row{display:table;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;width:100%;}
</style>
<section class="mbr-section article mbr-section__container" id="c876">
<div class="container">
	<div class="col-md-12">
		<div class="row">
			<div class="col-lg-3 col-xs-12">
<form action="<?php echo site_url('Mitrapengamanan'); ?>" class="form-inline" method="get">
                    <div class="input-group stylish-input-group">
  


            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" placeholder="Search" name="q" value="<?php echo $q; ?>" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
</div>
<div class="bow">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <br><br><br>
                                    <a href="<?php echo site_url('Mitrapengamanan'); ?>" id="bn" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>

                        </span>
                 </div>   
                </form>
				<h5 id="c925">Filter by</h5>
				<div class="pow">
					<p id="c934">Tahun</p>
					<div class="radio" id="c938">
						<label id="c943"><input class="optTahun" id="c947" type="checkbox" value="2017"/>2017<br/><input class="optTahun" id="c960" type="checkbox" value="2016"/>2016<br/><input class="optTahun" id="c972" type="checkbox" value="2015"/>2015<br/></label>
					</div>
					<p id="c1008">Objek</p>
					<div class="radio" id="c1012">
						<label id="c1016"><input class="optObjek" id="c1020" type="checkbox" value="hotel"/>Hotel<br/><input class="optObjek" id="c1033" type="checkbox" value="pemerintahan"/>Pemerintahan<br/><input class="optObjek" id="c1045" type="checkbox" value="pendidikan"/>Pendidikan<br/><input class="optObjek" id="c1057" type="checkbox" value="perkantoran"/>Perkantoran<br/><input class="optObjek" id="c1069" type="checkbox" value="rumahsakit"/>Rumah Sakit<br/></label>
					</div>
					<p id="c1081">Provinsi</p>
					<div class="radio" id="c1085">
						<label id="c1089"><input class="optProvinsi" id="c1093" type="checkbox" value="dkijakarta"/>DKI Jakarta<br/><input class="optProvinsi" id="c1106" type="checkbox" value="jawabarat"/>Jawa Barat<br/><input class="optProvinsi" id="c1118" type="checkbox" value="jawatengah"/>Jawa Tengah<br/><input class="optProvinsi" id="c1130" type="checkbox" value="jawatimur"/>Jawa Timur<br/></label>
					</div>
				</div>
			</div>


			<div class="col-lg-9" id="c1142">
				<div class="form-komen" id="list_mitraPengamanan">
					<h1 id="c1152">Mitra</h1>
  <?php foreach($mitrapengamanan_data as $mitrapengamanan){ ?>
                    <div class="col-xs-6 col-lg-4 filter <?php echo $mitrapengamanan->filter ?>" id="kolom">
                        <img id="c1167" src="<?php echo $mitrapengamanan->logo ?>"/>
                        <p>
                              <?php echo $mitrapengamanan->caption ?></p>
                    </div>
    <?php } ?> 



				</div>
			</div>
		</div>
	</div>
</div>
</section>
<script>
	$("#SearchByText").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#list_mitraPengamanan *").filter(function() {
			if(value == '' || value == ' '){
				$('.filter').show();
			}else {
				$(".filter").not('.'+value).hide();
				$('.filter').filter('.'+value).show();
			}
		});
	});
	$('input[type="checkbox"]').on('change', function() {
		$(this).siblings('input[type="checkbox"]').not(this).prop('checked', false);
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
<style>
*{box-sizing: border-box;}body{margin:0;}#c876{padding:30px 0px;height:700px;background:white;}#c909{background-color:#848484 !important;}#c925{margin-top:10%;margin-bottom:5%;}#c934{margin-bottom:3px;}#c938{text-align:left;}#c943{padding-left:0;}#c947{margin-right:14px;margin-bottom:14px;}#c960{margin-right:14px;margin-bottom:14px;}#c972{margin-right:14px;margin-bottom:14px;}#c984{margin-right:14px;margin-bottom:14px;}#c996{margin-right:14px;margin-bottom:14px;}#c1008{margin-bottom:3px;}#c1012{text-align:left;}#c1016{padding-left:0;}#c1020{margin-right:14px;margin-bottom:14px;}#c1033{margin-right:14px;margin-bottom:14px;}#c1045{margin-right:14px;margin-bottom:14px;}#c1057{margin-right:14px;margin-bottom:14px;}#c1069{margin-right:14px;margin-bottom:14px;}#c1081{margin-bottom:3px;}#c1085{text-align:left;}#c1089{padding-left:0;}#c1093{margin-right:14px;margin-bottom:14px;}#c1106{margin-right:14px;margin-bottom:14px;}#c1118{margin-right:14px;margin-bottom:14px;}#c1130{margin-right:14px;margin-bottom:14px;}#c1142{background:#efefef;}#c1152{text-align:center;}#kolom{text-align:center;}#c1167{width:100%;}#c1194{text-align:center;}#c1200{width:100%;}#c1227{text-align:center;}#c1231{width:100%;}#c1258{text-align:center;}#c1263{width:100%;}#c1282{text-align:center;}#c1287{width:100%;}#kolom{text-align:center;}#c1311{width:100%;}.row{display:table;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;width:100%;}#kolom{height:320px;text-align:center;}
</style>