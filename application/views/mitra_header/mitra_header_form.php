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

        <h2 style="margin-top:0px">Mitra_header <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Background <?php echo form_error('background') ?></label>
            <input type="text" class="form-control" name="background" id="background" placeholder="Background" value="<?php echo $background; ?>" />
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
	    <a href="<?php echo site_url('mitra_header') ?>" class="btn btn-default">Cancel</a>
	</form>

                </div>
            </div>
        </div>
    </div>
</div>