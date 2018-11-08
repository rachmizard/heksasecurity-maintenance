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

        <h2 style="margin-top:0px">Berita terkini detail</h2>
        <table class="table">
	    <tr><td>Judul</td><td><?php echo $judul; ?></td></tr>
	    <tr><td>Gambar</td>
	        <!--<td><?php echo $gambar; ?></td>-->
	        <td>
                <img src="http://heksasecurity.com/<?php echo $gambar; ?>" 
                class="img-fluid gallery-style" alt="Image" style="height: 300px;width: 300px"></td>
	    </tr>
	    <tr><td>Konten</td><td><?php echo $konten; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('PostManager/Hotnews') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>


                </div>
            </div>
        </div>
    </div>
</div>