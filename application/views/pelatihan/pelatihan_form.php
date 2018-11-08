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
        <h2 style="margin-top:0px">Pelatihan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
<div class="form-group">
            <label for="varchar">Caption Black <?php echo form_error('captionb') ?></label>
            <input type="text" class="form-control" name="captionb" id="captionb" placeholder="captionb" value="<?php echo $captionb; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Caption Red <?php echo form_error('captionr') ?></label>
            <input type="text" class="form-control" name="captionr" id="captionr" placeholder="captionr" value="<?php echo $captionr; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Caption Black 2 <?php echo form_error('captionb2') ?></label>
            <input type="text" class="form-control" name="captionb2" id="captionb2" placeholder="captionb2" value="<?php echo $captionb2; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Caption Red 2 <?php echo form_error('captionr2') ?></label>
            <input type="text" class="form-control" name="captionr2" id="captionr2" placeholder="captionr2" value="<?php echo $captionr2; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Sambutan <?php echo form_error('sambutan') ?></label>
            <input type="text" class="form-control" name="sambutan" id="sambutan" placeholder="sambutan" value="<?php echo $sambutan; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Slogan One <?php echo form_error('h1') ?></label>
            <input type="text" class="form-control" name="h1" id="h1" placeholder="Slogan One" value="<?php echo $h1; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Slogan Two <?php echo form_error('h2') ?></label>
            <input type="text" class="form-control" name="h2" id="h2" placeholder="Slogan Two" value="<?php echo $h2; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Slogan Three <?php echo form_error('h3') ?></label>
            <input type="text" class="form-control" name="h3" id="h3" placeholder="Slogan Three" value="<?php echo $h3; ?>" />
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
	    <a href="<?php echo site_url('PostManager/Pelatihan') ?>" class="btn btn-default">Cancel</a>
	</form>

                </div>
            </div>
        </div>
    </div>
</div>