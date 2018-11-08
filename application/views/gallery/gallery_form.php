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





    
<?php echo form_open_multipart('PostManager/Gallery/create_action');?>

<div class="form-group">    
<label for="varchar">Gambar</label>
<?php echo "<input class='form-control' type='file' name='image' value='$image' size='20' />"; ?>
</div>
<div class="form-group">
<label for="varchar">Tahun</label>
<?php echo "<input class='form-control' type='number' name='tahun' value='$tahun' size='20' />"; ?>
</div>

<?php echo "<input  class='btn btn-primary' type='submit' name='submit' value='upload' /> ";?>
<a href="http://m.heksasecurity.com/PostManager/Gallery" class="btn btn-danger">Cancel</a>
<?php echo "</form>"?>



                </div>
            </div>
        </div>
    </div>
</div>