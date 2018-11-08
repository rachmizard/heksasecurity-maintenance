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
        <h2 style="margin-top:0px">Mitra List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('PostManager/Mitra/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('PostManager/Mitra'); ?>" class="form-inline" method="get">
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
            <div class="table-responsive">
                <table class="table table-bordered" style="margin-bottom: 10px">
                <tr>
                <th>No</th>
                <th>caption black</th>
                <th>caption red</th>
                <th>caption black 2</th>
                <th>caption red 2</th>
                <th>sambutan</th>
                <th>Slogan One</th>
                <th>Slogan Two</th>
                <th>Slogan Three</th>
                <th>Bahasa</th>
                <th>Action</th>
                    </tr><?php
                    foreach ($mitra_data as $mitra)
                    {
                        ?>
                        <tr>
                    <td width="80px"><?php echo ++$start ?></td>
                    <td><?php echo $mitra->captionb ?></td>
                    <td><?php echo $mitra->captionr ?></td>
                    <td><?php echo $mitra->captionb2 ?></td>
                    <td><?php echo $mitra->captionr2 ?></td>
                    <td><?php echo $mitra->sambutan ?></td>
                    <td><?php echo $mitra->h1 ?></td>
                    <td><?php echo $mitra->h2 ?></td>
                    <td><?php echo $mitra->h3 ?></td>
                    <td><?php echo $mitra->bahasa ?></td>
                    <td style="text-align:center" width="100px">


                    <a  class="btn btn-primary btn-xs" href="<?php echo base_url("PostManager/Mitra/read/$mitra->id"); ?>" style="padding: 4px;">
                        <i class='fa fa-eye' style="color: white"></i>
                    </a>
                    <a class="btn btn-warning btn-xs" href="<?php echo base_url("PostManager/Mitra/update/$mitra->id"); ?>" style="padding: 4px;">
                        <i class='fa fa-pencil' style="color: white"></i>
                    </a>            
                    <a href="<?php echo base_url("PostManager/Mitra/delete/$mitra->id"); ?>"  onclick="javasciprt: return confirm('Are You Sure ?')" class="btn btn-danger btn-xs" style="padding: 4px;"><i class='fa fa-trash' style="color: white"></i></a>

                    </td>
                </tr>
                        <?php
                    }
                    ?>
            </table>
            </div>
        </div>
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
