
<section class="mbr-section article mbr-section__container" style="padding: 30px 0px;height:600px;margin-bottom:25%;">
<div class="container">
		<div class="col-md-12">
			
				<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li class="active">
							<a href="#tab_default_1" data-toggle="tab">
							Security </a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_default_1">
						<div class="form-komen">
        <?php $attributes = array("class" => "form-horizontal", "name" => "lamarkerja");echo form_open("lamarkerja/index", $attributes);?>
                            <div class="col-lg-6 col-xs-12" col="">
                            	<label>Nama</label>
                                <input type="text"  name="nama" placeholder="Nama" style="width: 100%; padding: 10px;" value="<?php echo set_value('name'); ?>" >
                            </div>
                            <div class="col-lg-6 col-xs-12">
                            	<label>Alamat</label>
                                <input type="text"  name="alamat" placeholder="Alamat" style="width: 100%; padding: 10px;  margin-bottom: 15px;" value="<?php echo set_value('alamat'); ?>">
                            </div>
                             <div class="col-lg-6 col-xs-12">
                            	<label>E-mail</label>
                                <input type="email"  name="email" placeholder="E-mail" style="width: 100%; padding: 10px;  margin-bottom: 15px;" value="<?php echo set_value('email'); ?>">
                            </div>
                            <div class="col-lg-6 col-xs-12">
                            	<label>No Telepon</label>
                                <input type="text"  name="telepon" placeholder="No Telepon" style="width: 100%; padding: 10px;  margin-bottom: 15px;" value="<?php echo set_value('telepon'); ?>">
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <label>Nomor Identitas</label>
                                <input type="text"  name="noktp" placeholder="Nomor Identitas" style="width: 100%; padding: 10px;  margin-bottom: 15px;" value="<?php echo set_value('noktp'); ?>">
                            </div>
                            <div class="col-xs-6">
                            	<label>tanggal lahir</label>
                                <input type="date"  name="ttl" placeholder="ttl" style="width: 100%; padding: 10px;  margin-bottom: 15px;" value="<?php echo set_value('ttl'); ?>">
                            </div>
                            <div class="col-xs-3">
                            	<label>jenis kelamin</label>
                                <input type="text" name="jk"  placeholder="Jenis Kelamin" style="width: 100%; padding: 10px;  margin-bottom: 15px;" value="<?php echo set_value('jk'); ?>">
                            </div>
                            <div class="col-xs-3">
                            	<label>pendidikan terahir</label>
                                <input type="number"  name="pendidikan_terakhir" placeholder="pendidikan terahir" style="width: 100%; padding: 10px;  margin-bottom: 15px;" value="<?php echo set_value('pendidikan_terakhir'); ?>">
                            </div>
                            <div class="col-xs-3">
                            	<label>Tinggi Badan</label>
                                <input type="number" name="tinggi"  placeholder="tinggi(cm)" style="width: 100%; padding: 10px;  margin-bottom: 15px;" 
                                value="<?php echo set_value('tinggi'); ?>">
                            </div>
                            <div class="col-xs-3">
                                <label>Berat Badan</label>
                                <input type="number"  name="berat" placeholder="berat(kg)" style="width: 100%; padding: 10px;  margin-bottom: 15px;"
                                value="<?php echo set_value('berat'); ?>">
                            </div>

                            <div class="col-xs-12">
                                <label>Kompetensi Satpam</label><br>
                                <div style="padding: 10px 20px" name="pilihan" <?php echo set_value('pilihan'); ?>>
                                    <label><input type="radio" name="pilihan" value="Gada_Pratama"> Gada Pratama</label><br>
                                    <label><input type="radio" name="pilihan" value="Gada_Madya"> Gada Madya</label><br>
                                    <label><input type="radio" name="pilihan" value="Gada_Utama"> Gada Utama</label><br>
                                </div>
                            </div>
                  <div id="field">
                <div id="field0">

<div class="form-group">
   <div class="col-xs-1">
                                <label>No</label>
                                <input type="text"  id="text"  placeholder="No" style="width: 100%; padding: 10px;  margin-bottom: 15px;">
                            </div>

                            <div class="col-xs-3">
                                <label>Nama Perusahaan</label>
                                <input type="text"  id="text" name="perusahaan" placeholder="Nama Perusahaan" style="width: 100%; padding: 10px;  margin-bottom: 15px;" <?php echo set_value('perusahaan'); ?>>
                            </div>

                            <div class="col-xs-3">
                                <label>Masa Kerja</label>
                                <input type="text"  id="text" name="masa_kerja" placeholder="Masa Kerja" style="width: 100%; padding: 10px;  margin-bottom: 15px;" <?php echo set_value('masa_kerja'); ?>>
                            </div>

                            <div class="col-xs-2">
                                <label>Tahun</label>
                                <input type="text"  id="text" name="tahun" placeholder="Tahun" style="width: 100%; padding: 10px;  margin-bottom: 15px;"
                                <?php echo set_value('tahun'); ?>>
                            </div>

                            <div class="col-xs-3">
                                <label>Jabatan</label>
                                <input type="text"  id="text" name="jabatan" placeholder="Jabatan" style="width: 100%; padding: 10px;  margin-bottom: 15px;" <?php echo set_value('jabatan'); ?>>
                            </div>
</div>
</div>
</div>

                      <div class="col-md-4">
                        <button id="add-more" name="add-more" class="btn btn-primary btn-sm" style="padding: 8px;background-color: black;"><span class="fa fa-plus"></span></button>
                      </div>


              
    
    


                             <div class="col-lg-12 col-xs-12">
                              <button class="btn btn-primary col-xs-12" id="btnsmb" value="Send">submit</button>
                            </div>

            <?php echo form_close(); ?>
            <?php echo $this->session->flashdata('msg'); ?>

                		</div>
						</div>
						
					</div>
				</div>
		</div>

</div>

</section>

<script>
$(document).ready(function () {
    //@naresh action dynamic childs
    var next = 0;
    $("#add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        next = next + 1;
        var newIn = ' <div id="field'+ next +'" name="field'+ next +'"><div class="col-xs-1"> <label>No</label> <input type="text" id="text" placeholder="No" style="width: 100%; padding: 10px; margin-bottom: 15px;"> </div> <div class="col-xs-3"> <label>Nama Perusahaan</label> <input type="text" id="text" name="perusahaan" placeholder="Nama Perusahaan" style="width: 100%; padding: 10px; margin-bottom: 15px;" <?php echo set_value('perusahaan'); ?>> </div> <div class="col-xs-3"> <label>Masa Kerja</label> <input type="text" id="text" name="masa_kerja" placeholder="Masa Kerja" style="width: 100%; padding: 10px; margin-bottom: 15px;" <?php echo set_value('masa_kerja'); ?>> </div> <div class="col-xs-2"> <label>Tahun</label> <input type="text" id="text" name="tahun" placeholder="Tahun" style="width: 100%; padding: 10px; margin-bottom: 15px;" <?php echo set_value('tahun'); ?>> </div> <div class="col-xs-3"> <label>Jabatan</label> <input type="text" id="text" name="jabatan" placeholder="Jabatan" style="width: 100%; padding: 10px; margin-bottom: 15px;" <?php echo set_value('jabatan'); ?>> </div>';
        var newInput = $(newIn);
     
        $(addto).after(newInput);
     
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
         
    });

});
</script>
