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



        <h2 style="margin-top:0px">Pelatihankompetensidasar List</h2>
        
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('PostManager/Pelatihankompetensidasar/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('PostManager/Pelatihankompetensidasar'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('PostManager/Pelatihankompetensidasar'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="scrolldiv">
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Logo</th>
		<th>Caption Black</th>
		<th>Caption Red</th>
		<th>Description</th>
		<th>Persyaratan</th>
		<th>Image Jadwal</th>
        <th>Bahasa</th>
		<th>Action</th>
            </tr><?php
            foreach ($pelatihankompetensidasar_data as $pelatihankompetensidasar)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $pelatihankompetensidasar->logo ?></td>
			<td><?php echo $pelatihankompetensidasar->caption_black ?></td>
			<td><?php echo $pelatihankompetensidasar->caption_red ?></td>
			<td><?php echo $pelatihankompetensidasar->description ?></td>
			<td><?php echo $pelatihankompetensidasar->persyaratan ?></td>
			<td><?php echo $pelatihankompetensidasar->image_jadwal ?></td>
            <td><?php echo $pelatihankompetensidasar->bahasa ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('PostManager/Pelatihankompetensidasar/read/'.$pelatihankompetensidasar->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('PostManager/Pelatihankompetensidasar/update/'.$pelatihankompetensidasar->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('PostManager/Pelatihankompetensidasar/delete/'.$pelatihankompetensidasar->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
</div>



<style>
    .scrolldiv{
        overflow: scroll;
        font-size: 12px;
    }
</style>