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
        <h2 style="margin-top:0px">Mitra Read</h2>
            <table class="table">
                <tr><td>caption black</td><td><?php echo $captionb; ?></td></tr>
                <tr><td>caption red</td><td><?php echo $captionr; ?></td></tr>
                <tr><td>caption black 2</td><td><?php echo $captionb2; ?></td></tr>
                <tr><td>caption red 2</td><td><?php echo $captionr2; ?></td></tr>
                <tr><td>sambutan</td><td><?php echo $sambutan; ?></td></tr>
                <tr><td>Slogan One</td><td><?php echo $h1; ?></td></tr>
                <tr><td>Slogan Two</td><td><?php echo $h2; ?></td></tr>
                <tr><td>Slogan Three</td><td><?php echo $h3; ?></td></tr>
                <tr><td>bahasa</td><td><?php echo $bahasa; ?></td></tr>
        	    <tr><td></td><td><a href="<?php echo site_url('PostManager/Mitra') ?>" class="btn btn-warning">Back</a></td></tr>
        	</table>
                </div>
            </div>
        </div>
    </div>
</div>
