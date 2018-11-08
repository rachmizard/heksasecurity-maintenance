<header class="head">
    <div class="main-bar">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-4">
                <h4 class="nav_top_align"><i class="fa fa-bars"></i>  Post Manager</h4>
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

        <h2 style="margin-top:0px">About List</h2>

        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('PostManager/About/Create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('PostManager/About'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
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
		<th>Caption</th>
		<th>Logo</th>
		<th>Detail</th>
		<th>Desc</th>
        <th>Lang</th>
		<th>Action</th>
            </tr><?php
            foreach ($about_data as $about)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $about->caption ?></td>
			<td><img src="<?php echo base_url(). $about->logo ?>" width="100" height="100" alt=""></td>
			<td><?php echo $about->detail ?></td>
			<td><?php echo $about->detail_description ?></td>
            <td><?php echo $about->bahasa ?></td>
			<td style="text-align:center" width="100px">


            <a  class="btn btn-primary btn-xs" href="<?php echo base_url("PostManager/About/Read/$about->id"); ?>" style="padding: 4px;">
                <i class='fa fa-eye' style="color: white"></i>
            </a>
            <a class="btn btn-warning btn-xs" href="<?php echo base_url("PostManager/About/Update/$about->id"); ?>" style="padding: 4px;">
                <i class='fa fa-pencil' style="color: white"></i>
            </a>            
            <a href="<?php echo base_url("PostManager/About/Delete/$about->id"); ?>"  onclick="javasciprt: return confirm('Are You Sure ?')" class="btn btn-danger btn-xs" style="padding: 4px;"><i class='fa fa-trash' style="color: white"></i></a>

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
        font-size: 12px;
    }
</style>
