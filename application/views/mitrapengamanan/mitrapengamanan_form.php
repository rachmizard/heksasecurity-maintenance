<header class="head">
    <div class="main-bar">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-4">

            </div>
            <div class="col-lg-6 col-md-8 col-sm-8">
                <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="<?php echo site_url('Dashboard'); ?>"><i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Mitra Pengamanan</li>
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
        <h2 style="margin-top:0px">Mitra Pengamanan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post" enctype='multipart/form-data'>
	    <div class="form-group">
            <label for="varchar">Logo <?php echo form_error('logo') ?></label>
            <input type="file" class="form-control" name="logo" id="logo" accept="image/gif, image/jpeg, image/png" />
            <input type="hidden" name="logo_old" value="<?php echo $logo; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Caption <?php echo form_error('caption') ?></label>
            <input type="text" class="form-control" name="caption" id="caption" placeholder="Caption" value="<?php echo $caption; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Filter <?php echo form_error('filter') ?></label>
            <input type="text" class="form-control" name="filter" id="filter" placeholder="Caption" value="<?php echo $filter; ?>" />
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
	    <a href="<?php echo site_url('PostManager/Mitrapengamanan') ?>" class="btn btn-warning">Back</a>
	</form>

                </div>
            </div>
        </div>
    </div>
</div>
