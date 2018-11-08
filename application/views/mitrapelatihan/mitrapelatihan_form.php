<header class="head">
    <div class="main-bar">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-4">
                <h4 class="nav_top_align"><i class="fa fa-bars"></i>Post Manager</h4>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-8">
                <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="<?php echo site_url('Dashboard'); ?>"><i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Mitra Pelatihan</li>
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

        <h2 style="margin-top:0px">Mitra Pelatihan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tempat <?php echo form_error('tempat') ?></label>
            <input type="text" class="form-control" name="tempat" id="tempat" placeholder="Tempat" value="<?php echo $tempat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tahun <?php echo form_error('tahun') ?></label>
            <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun" value="<?php echo $tahun; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Bahasa <?php echo form_error('bahasa') ?></label>
            <select class="form-control" name="bahasa" id="bahasa" value="<?php echo $bahasa; ?>">
                <option value="IDN"  <?php if($bahasa=="IDN") echo 'selected="selected"'; ?>>INDONESIA</option>
                <option value="ENG"  <?php if($bahasa=="ENG") echo 'selected="selected"'; ?>>ENGLISH</option>
            </select>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('PostManager/Mitrapelatihan') ?>" class="btn btn-warning">Back</a>
	</form>

                </div>
            </div>
        </div>
    </div>
</div>
