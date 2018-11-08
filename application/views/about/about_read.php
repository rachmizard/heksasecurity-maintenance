<header class="head">
    <div class="main-bar">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-4">
                <h4 class="nav_top_align"><i class="fa fa-bars"></i> Post Manager</h4>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-8">
                <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="<?php echo site_url('Dashboard'); ?>"><i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard</a>
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

        <h2 style="margin-top:0px">About Read</h2>
        <table class="table">
	    <tr><td>Caption</td><td><?php echo $caption; ?></td></tr>
	    <tr><td>Logo</td><td><img src="<?php echo base_url() . $logo; ?>" width="100" height="100" alt=""></td></tr>
	    <tr><td>Detail</td><td><?php echo $detail; ?></td></tr>
	    <tr><td>Detail Description</td><td><?php echo $detail_description; ?></td></tr>
        <tr><td>Bahasa </td><td><?php echo $bahasa; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('PostManager/About') ?>" class="btn btn-warning">Back</a></td></tr>
	</table>
      
                </div>
            </div>
        </div>
    </div>
</div>
