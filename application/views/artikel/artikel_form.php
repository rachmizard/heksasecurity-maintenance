<header class="head">
    <div class="main-bar">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-4">
                <h4 class="nav_top_align"><i class="fa fa-bars"></i>Post Manager</h4>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-8">
                <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url(); ?>"><i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Post Manager</li>
                </ol>
            </div>
        </div>
    </div>
</header>

<div class="outer">
    <div class="inner bg-light lter bg-container">
        <div class="row">
            <div class="col-12 data_tables">
                <div class="card">


        <h2 style="margin-top:0px">Artikel <?php echo $button ?></h2>
        <?php echo form_open_multipart($action); ?>
        <!--<form action="<?php echo $action; ?>" method="post">-->
	    <div class="form-group">
            <label for="varchar">Judul <?php echo form_error('caption') ?></label>
            <input type="text" class="form-control" name="caption" id="caption" placeholder="Judul" value="<?php echo $caption; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">No Konten <?php echo form_error('no_konten') ?></label>
            <input type="text" class="form-control" name="no_konten" id="no_konten" placeholder="No Konten" value="<?php echo $no_konten; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Gambar <?php echo form_error('gambar') ?> </label>
            <input type="file" class="form-control" name="gambar" accept="image/*" />
        </div>
	    <div class="form-group">
            <label for="varchar">Keterangan <?php echo form_error('keterangan') ?></label>
            <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="20" placeholder="Keterangan"><?php echo $keterangan; ?></textarea>
        </div>
        <div class="form-group">
            <label for="varchar">Bahasa <?php echo form_error('bahasa') ?></label>
            <select class="form-control" name="bahasa" id="bahasa" value="<?php echo $bahasa; ?>">
                <option value="IDN"  <?php if($bahasa=="IDN") echo 'selected="selected"'; ?>>INDONESIA</option>
                <option value="ENG"  <?php if($bahasa=="ENG") echo 'selected="selected"'; ?>>ENGLISH</option>
            </select>
        </div>
        <?php 
         $tgl=date('d-m-Y');
          ?>
    <input type="hidden" name="tgl_post" id="tgl_post"  value="<?php echo $tgl; ?>" />
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('PostManager/Artikel') ?>" class="btn btn-default">Cancel</a>
	</form>
   


                   </div>
            </div>
        </div>
    </div>
</div>