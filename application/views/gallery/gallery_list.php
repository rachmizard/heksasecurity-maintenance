<style>
    .zoom img {
        transition: all 1s ease;
    }

    .zoom img:hover {
        transform:scale(1.45,1.45);
    }


    .kv-upload-progress>.progress, .fileinput-cancel-button{
        display: none;
    }

    .kv-upload-progress>.progress, .fileinput-upload-button{
        display: none;
    }
</style>
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

        <h2 style="margin-top:0px">Gallery List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('PostManager/Gallery/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('PostManager/Gallery'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('PostManager/Gallery'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>

<div class="row" style="padding: 20px 0px;">

<?php
            foreach ($gallery_data as $gallery)
            {
                ?>

    <div class="col-lg-2 gallery-border"  data-fancybox-group="thumb" style="overflow: hidden;height: 150px;margin: 10px;padding: 0px;"> 
        <a class="fancybox-thumbs zoom thumb_zoom" href="#">
            <img src="http://m.heksasecurity.com/public/img/gallery/<?php echo $gallery->image; ?>" class="img-fluid gallery-style" alt="Image" style="height: 100%;">
        
        </a>
    </div>

<?php } ?>
</div>


        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Image</th>
		<th>Tahun</th>
		<th>Action</th>
            </tr><?php
            foreach ($gallery_data as $gallery)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td style="height: 150px">
            <img src="http://m.heksasecurity.com/public/img/gallery/<?php echo $gallery->image; ?>" class="img-fluid gallery-style" alt="Image" style="height: 100%;"></td>
			<td><?php echo $gallery->tahun ?></td>
			<td style="text-align:center" width="200px">
				<?php 

				echo anchor(site_url('PostManager/Gallery/delete/'.$gallery->id),'<button class="btn btn-danger btn-xs" style="padding: 4px;" ><i class="fa fa-trash" style="color: white"></i></button>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>

                </div>
            </div>
        </div>
    </div>
</div>