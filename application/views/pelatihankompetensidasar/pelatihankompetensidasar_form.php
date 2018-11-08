<header class="head">
    <div class="main-bar">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-4">

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
        <h2 style="margin-top:0px">Pelatihankompetensidasar <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Logo <?php echo form_error('logo') ?></label>
            <input type="text" class="form-control" name="logo" id="logo" placeholder="Logo" value="<?php echo $logo; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Caption Black <?php echo form_error('caption_black') ?></label>
            <input type="text" class="form-control" name="caption_black" id="caption_black" placeholder="Caption Black" value="<?php echo $caption_black; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Caption Red <?php echo form_error('caption_red') ?></label>
            <input type="text" class="form-control" name="caption_red" id="caption_red" placeholder="Caption Red" value="<?php echo $caption_red; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Description <?php echo form_error('description') ?></label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Description" value="<?php echo $description; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Persyaratan <?php echo form_error('persyaratan') ?></label>
            <input type="text" class="form-control" name="persyaratan" id="persyaratan" placeholder="Persyaratan" value="<?php echo $persyaratan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Image Jadwal <?php echo form_error('image_jadwal') ?></label>
            <input type="text" class="form-control" name="image_jadwal" id="image_jadwal" placeholder="Image Jadwal" value="<?php echo $image_jadwal; ?>" />
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
	    <a href="<?php echo site_url('PostManager/Pelatihankompetensidasar') ?>" class="btn btn-default">Cancel</a>
	</form>

                </div>
            </div>
        </div>
    </div>
</div>