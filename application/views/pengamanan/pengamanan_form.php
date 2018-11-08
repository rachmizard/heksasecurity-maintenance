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

        <h2 style="margin-top:0px">Pengamanan <?php echo $button ?></h2>
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
            <textarea class="form-control" name="description" id="description" placeholder="Description"  cols="30" rows="10"><?php echo $description; ?></textarea>
        </div>
        <div class="form-group">
            <label for="varchar">Logo2 <?php echo form_error('logo2') ?></label>
            <input type="text" class="form-control" name="logo2" id="logo2" placeholder="Logo2" value="<?php echo $logo2; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Caption Black <?php echo form_error('caption_black2') ?></label>
            <input type="text" class="form-control" name="caption_black2" id="caption_black2" placeholder="Caption Black" value="<?php echo $caption_black2; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Caption Red <?php echo form_error('caption_red2') ?></label>
            <input type="text" class="form-control" name="caption_red2" id="caption_red2" placeholder="Caption Red" value="<?php echo $caption_red2; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Description2 <?php echo form_error('description2') ?></label>
            <textarea class="form-control" name="description2" id="description2" placeholder="Description 2"  cols="30" rows="10"><?php echo $description2; ?></textarea>
        </div>
                <div class="form-group">
            <label for="varchar">Logo3 <?php echo form_error('logo3') ?></label>
            <input type="text" class="form-control" name="logo3" id="logo3" placeholder="Logo3" value="<?php echo $logo3; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Caption Black <?php echo form_error('caption_black3') ?></label>
            <input type="text" class="form-control" name="caption_black3" id="caption_black3" placeholder="Caption Black" value="<?php echo $caption_black3; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Caption Red <?php echo form_error('caption_red3') ?></label>
            <input type="text" class="form-control" name="caption_red3" id="caption_red3" placeholder="Caption Red" value="<?php echo $caption_red3; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Description3 <?php echo form_error('description3') ?></label>
            <textarea class="form-control" name="description3" id="description3" placeholder="Description 3"  cols="30" rows="10"><?php echo $description3; ?></textarea>
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
	    <a href="<?php echo site_url('PostManager/Pengamanan') ?>" class="btn btn-default">Cancel</a>
	</form>
                </div>
            </div>
        </div>
    </div>
</div>