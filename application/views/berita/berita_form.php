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

        <h2 style="margin-top:0px">Berita <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Image Slider 1 <?php echo form_error('image_slider_1') ?></label>
            <input type="text" class="form-control" name="image_slider_1" id="image_slider_1" placeholder="Image Slider 1" value="<?php echo $image_slider_1; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Caption Slider 1 <?php echo form_error('caption_slider_1') ?></label>
            <input type="text" class="form-control" name="caption_slider_1" id="caption_slider_1" placeholder="Caption Slider 1" value="<?php echo $caption_slider_1; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Image Slider 2 <?php echo form_error('image_slider_2') ?></label>
            <input type="text" class="form-control" name="image_slider_2" id="image_slider_2" placeholder="Image Slider 2" value="<?php echo $image_slider_2; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Caption Slider 2 <?php echo form_error('caption_slider_2') ?></label>
            <input type="text" class="form-control" name="caption_slider_2" id="caption_slider_2" placeholder="Caption Slider 2" value="<?php echo $caption_slider_2; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Image Slider 3 <?php echo form_error('image_slider_3') ?></label>
            <input type="text" class="form-control" name="image_slider_3" id="image_slider_3" placeholder="Image Slider 3" value="<?php echo $image_slider_3; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Caption Slider 3 <?php echo form_error('caption_slider_3') ?></label>
            <input type="text" class="form-control" name="caption_slider_3" id="caption_slider_3" placeholder="Caption Slider 3" value="<?php echo $caption_slider_3; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Image Artikel 1 <?php echo form_error('image_artikel_1') ?></label>
            <input type="text" class="form-control" name="image_artikel_1" id="image_artikel_1" placeholder="Image Artikel 1" value="<?php echo $image_artikel_1; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Caption Artikel 1 <?php echo form_error('caption_artikel_1') ?></label>
            <input type="text" class="form-control" name="caption_artikel_1" id="caption_artikel_1" placeholder="Caption Artikel 1" value="<?php echo $caption_artikel_1; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Image Artikel 2 <?php echo form_error('image_artikel_2') ?></label>
            <input type="text" class="form-control" name="image_artikel_2" id="image_artikel_2" placeholder="Image Artikel 2" value="<?php echo $image_artikel_2; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Caption Artikel 2 <?php echo form_error('caption_artikel_2') ?></label>
            <input type="text" class="form-control" name="caption_artikel_2" id="caption_artikel_2" placeholder="Caption Artikel 2" value="<?php echo $caption_artikel_2; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Image Artikel 3 <?php echo form_error('image_artikel_3') ?></label>
            <input type="text" class="form-control" name="image_artikel_3" id="image_artikel_3" placeholder="Image Artikel 3" value="<?php echo $image_artikel_3; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Caption Artikel 3 <?php echo form_error('caption_artikel_3') ?></label>
            <input type="text" class="form-control" name="caption_artikel_3" id="caption_artikel_3" placeholder="Caption Artikel 3" value="<?php echo $caption_artikel_3; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Image Berita 1 <?php echo form_error('image_berita_1') ?></label>
            <input type="text" class="form-control" name="image_berita_1" id="image_berita_1" placeholder="Image Berita 1" value="<?php echo $image_berita_1; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Caption Berita 1 <?php echo form_error('caption_berita_1') ?></label>
            <input type="text" class="form-control" name="caption_berita_1" id="caption_berita_1" placeholder="Caption Berita 1" value="<?php echo $caption_berita_1; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Image Berita 2 <?php echo form_error('image_berita_2') ?></label>
            <input type="text" class="form-control" name="image_berita_2" id="image_berita_2" placeholder="Image Berita 2" value="<?php echo $image_berita_2; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Caption Berita 2 <?php echo form_error('caption_berita_2') ?></label>
            <input type="text" class="form-control" name="caption_berita_2" id="caption_berita_2" placeholder="Caption Berita 2" value="<?php echo $caption_berita_2; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Image Berita 3 <?php echo form_error('image_berita_3') ?></label>
            <input type="text" class="form-control" name="image_berita_3" id="image_berita_3" placeholder="Image Berita 3" value="<?php echo $image_berita_3; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Caption Berita 3 <?php echo form_error('caption_berita_3') ?></label>
            <input type="text" class="form-control" name="caption_berita_3" id="caption_berita_3" placeholder="Caption Berita 3" value="<?php echo $caption_berita_3; ?>" />
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
	    <a href="<?php echo site_url('PostManager/Berita') ?>" class="btn btn-default">Cancel</a>
	</form>
                </div>
            </div>
        </div>
    </div>
</div>