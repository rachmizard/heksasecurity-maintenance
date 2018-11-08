<!-- <div id="sectionHeader"></div>
<script>
	loadDataHeader();
	function loadDataHeader(){
		httpGet('getHomeHeader').done(r => { fetchingDataHeader(r.data); });
	}

	function fetchingDataHeader(data){
		var strappend = '';
		if(data.length > 0){
			for(i=0; i < data.length; i++){
				strappend += data[i].content_ind;
			}
			$('#sectionHeader').html(strappend);
		}else {
				strappend = '<h3>Data Home Tidak Ditemukan</h4>';
				$('#sectionHeader').html(strappend);
		}
    }
</script> -->
<!-- <section class="mbr-slider mbr-section mbr-section__container carousel slide mbr-section-nopadding mbr-after-navbar" data-ride="carousel"
    data-keyboard="false" data-wrap="true" data-pause="false" data-interval="5000" id="slider-e" data-rv-view="2"
    style="position: relative;height: 400px;">
    <div>
        <div>
            <div>
                <div class="carousel-inner" role="listbox">
                    <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full active" data-bg-video-slide="false" style="background-image: url(assets/images/home1.JPG);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-xs-left" style="padding-bottom: 20%;">
                                        <h2 class="mbr-section-title display-1 " style="margin-bottom: 0px;font-size:57px;padding-top: 20%; " id="hsize">PERUSAHAAN SECURITY</h2>
                                        <h2 class="mbr-section-title display-1" style="color: rgb(204, 48, 40); margin-bottom: 0px;font-size:57px;">JASA KEAMANAN</h2>
                                        <h2 class="mbr-section-title display-1" style="margin-bottom: 0px;font-size:57px;">JASA SECURITY</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" data-bg-video-slide="false" style="background-image: url(assets/images/home2.JPG);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-1 text-xs-center" style="margin-left: 17%;padding-bottom: 20%;">
                                         <h2 class="mbr-section-title display-1 " style="margin-bottom: 0px; font-size:;padding-top: 20%; " id="hsize">AMAN</h2>
                                        <h2 class="mbr-section-title display-1" style="color: rgb(204, 48, 40); margin-bottom: 0px;">JASA KEAMANAN</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" data-bg-video-slide="false" style="background-image: url(assets/images/home3.JPG);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3 text-xs-right" style="padding-bottom: 20%;">
                                        <h2 class="mbr-section-title display-1 " style="margin-bottom: 0px; font-size:;padding-top: 20%; " id="hsize">AMAN</h2>
                                        <h2 class="mbr-section-title display-1" style="color: rgb(204, 48, 40); margin-bottom: 0px;">JASA KEAMANAN</h2>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-e">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-e">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section> -->