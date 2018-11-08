<!-- <div id="sectionMain"></div>
<script>
	loadDataMain();
	function loadDataMain(){
		$('#sectionMain').html('');
		httpGet('getHomeMain').done(r => { fetchingDataMain(r.data); });
	}

	function fetchingDataMain(data){
		var strappend = '';
		if(data.length > 0){
			for(i=0; i < data.length; i++){
				strappend += data[i].content_ind;
			}
			$('#sectionMain').html(strappend);
		}else {
			strappend = '<h3>Data Home Tidak Ditemukan</h4>';
			$('#sectionMain').html(strappend);
		}
	}
</script> -->

<section class="features8 cid-qyuKyugBn6 mbr-parallax-background" id="features8-q" data-rv-view="112" style="background-color:rgba(204, 60, 40, 0.85);
    padding: 0px 40px;
    text-align: center;
    position: relative;
    width: 70%;
    display: block;
    margin: 0 auto;
    /*margin-left: 212px;*/
    margin-top: 90px;
    box-shadow: 0 10px 15px rgba(25, 25, 25, 0.99), 0 5px 5px rgb(10, 10, 10);
    border-radius: 14px;">



    <h4 class="card-title" id="pt" style="padding-top: 2%;text-align: center; color:#fff;">LAYANAN</h4><br>
<div class="container">
    <div class="mbr-cards-row row">
        <div class="mbr-cards-col col-lg-4 col-xs-4" id="sgrid" style="padding-top: 0px; padding-bottom: 0px;">
            <div class="container">
                <a href="pengmanan" style="color: #000;">
                  <div class="card-img"><img src="assets/images/jasa_pengamanan.png" style="width:120px;" ></div>
                  <div class="card-block">
                    <h5 class="title" id="fz" style="font-size: 15px; color: #fff">JASA PENGAMANAN</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="mbr-cards-col col-lg-4 col-xs-4" style="padding-top: 0px; padding-bottom: 0px;">
            <div class="container">
                <a href="pelatihan" style="color: #000;">

                    <div class="card-img"><img src="assets/images/pel_pengamanan.png" style="width:120px;" ></div>
                    <div class="card-block">
                        <h5 class="title" id="fz" style="font-size: 15px; color: #fff">JASA PELATIHAN </h5>
                    </div>
                
                </a>
            </div>
        </div>
        <div class="mbr-cards-col col-lg-4 col-xs-4" style="padding-top: 0px; padding-bottom: 0px;">
            <div class="container">
                <a href="" data-toggle="modal" data-target=".bs-example-modal-lg" style="color: #000;">
                
                    <div class="card-img"><img src="assets/images/jadwal_pelatihan.png" style="width:120px;"></div>
                    <div class="card-block">
                        <h5 class="title" id="fz" style="font-size: 15px; color: #fff">JADWAL PELATIHAN</h5>
                    </div>
               
                </a>
            </div>
        </div>
        
    </div>
</div>


<div class="modal fade bs-example-modal-lg" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Jadwal Pelatan
            </div>
            <div class="modal-body">
                <center>
                <table>
                    <tr>
                        <th>NAMA</th>
                        <th>Jenis</th>
                        <th>Tempat</th>
                        <th>Waktu</th>
                    </tr>
                    <tr>
                        <td>PELATIHAN</td>
                        <td>FISIK</td>
                        <td>PT INTI BANDUNG</td>
                        <td>08:00 - 22:00</td>
                    </tr>
                    <tr>
                        <td>PELATIHAN</td>
                        <td>FISIK</td>
                        <td>PT INTI BANDUNG</td>
                        <td>08:00 - 22:00</td>
                    </tr>
                </table>
</center>
            </div>
        </div>
    </div>
</div>



</section>

</div>
</div>
	<!-- <h4 class="card-title" id="pt" style="padding-top: 2%;text-align: left;">LAYANAN</h4>
	<hr style="border-top: 3px solid black;">
	<div class="container">
		<div class="mbr-cards-row row">
			<div class="mbr-cards-col col-lg-4 col-xs-4" id="sgrid" style="padding-top: 0px; padding-bottom: 0px;">
				<div class="container">
					<a href="pengmanan" style="color: #000;">
						<div class="card cart-block" id="bordermerah">
							<div class="card-img"><img src="assets/images/lock-512x512.svg" class="card-img-top svg"></div>
							<div class="card-block">
								<h5 class="title" id="fz" style="font-size: 14px;font-weight: bold;">Jasa Pengamanan</h5>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="mbr-cards-col col-lg-4 col-xs-4" style="padding-top: 0px; padding-bottom: 0px;">
				<div class="container">
					<a href="pelatihan" style="color: #000;">
						<div class="card cart-block" id="bordermerah">
							<div class="card-img"><img src="assets/images/lock-10.png" class="card-img-top"></div>
							<div class="card-block">
								<h5 class="title" id="fz" style="font-size: 14px;font-weight: bold;">jasa pelatihan </h5>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="mbr-cards-col col-lg-4 col-xs-4" style="padding-top: 0px; padding-bottom: 0px;">
				<div class="container">
					<a href="" data-toggle="modal" data-target=".bs-example-modal-lg" style="color: #000;">
						<div class="card cart-block" id="bordermerah">
							<div class="card-img"><img src="assets/images/lock-10.png" class="card-img-top"></div>
							<div class="card-block">
								<h5 class="title" id="fz" style="font-size: 14px;font-weight: bold;">Jadwal Pelatihan</h5>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>

		<div class="tengah">
			I see a little silhouetto of a man, Scaramouche, Scaramouche, will you do the Fandango? Thunderbolt and lightning, Very, very frightening me. (Galileo) Galileo. (Galileo) Galileo, Galileo Figaro Magnifico-o-o-o-o.
		</div>
	</div>

	<div class="modal fade bs-example-modal-lg" aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button> Jadwal Pelatan
				</div>
				<div class="modal-body">
					<center>
						<table>
							<tr>
								<th>NAMA</th>
								<th>Jenis</th>
								<th>Tempat</th>
								<th>Waktu</th>
							</tr>
							<tr>
								<td>PELATIHAN</td>
								<td>FISIK</td>
								<td>PT INTI BANDUNG</td>
								<td>08:00 - 22:00</td>
							</tr>
							<tr>
								<td>PELATIHAN</td>
								<td>FISIK</td>
								<td>PT INTI BANDUNG</td>
								<td>08:00 - 22:00</td>
							</tr>
						</table>
					</center>
				</div>
			</div>
		</div>
	</div>
</section> -->