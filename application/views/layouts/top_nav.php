	<div id="top">
		<nav class="navbar navbar-static-top">
			<div class="container-fluid m-0">
				<a class="navbar-brand float-left text-center" href="<?php echo site_url('Dashboard'); ?>">
					<h4 class="text-white">
						<img src="<?php echo base_url('public/img/logo.png'); ?>" class="admin_img" alt="logo" style="height: 40px;width: 30px">
						PT Heksa Garda Utama
					</h4>
				</a>

				<div class="menu">
					<span class="toggle-left" id="menu-toggle">
						<i class="fa fa-bars text-white"></i>
					</span>
				</div>

				<div class="topnav dropdown-menu-right float-right">
					<div class="btn-group">
						<div class="user-settings no-bg">
							<button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
								<img src="<?php echo base_url('public/img/admin.jpg'); ?>"
									class="admin_img2 rounded-circle avatar-img" alt="avatar">
								<strong>Admin</strong>
								<span class="fa fa-sort-down white_bg"></span>
							</button>
							<div class="dropdown-menu admire_admin">
								<a class="dropdown-item title" href="#"><?php echo $this->session->userdata("nama"); ?></a>
								<a class="dropdown-item" href="#"><i class="fa fa-cogs"></i>Account Settings</a>
								<a class="dropdown-item" href="#"><i class="fa fa-user"></i>User Status</a>
								<a class="dropdown-item" href="#"><i class="fa fa-envelope"></i>Inbox</a>
								<a class="dropdown-item" href="#"><i class="fa fa-lock"></i>Lock Screen</a>
								<a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-sign-out"></i>Log Out</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>
