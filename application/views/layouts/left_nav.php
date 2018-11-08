	<div id="left">
		<div class="media user-media bg-dark dker">
			<div class="user-media-toggleHover">
				<span class="fa fa-user"></span>
			</div>

			<div class="user-wrapper bg-dark">
				<a class="user-link" href="#">
					<img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
						src="<?php echo base_url('public/img/admin.jpg'); ?>">
					<p class="text-white user-info">Welcome, <?php echo $this->session->userdata("nama"); ?></p>
				</a>
			</div>
		</div>

		<ul id="menu" class="bg-blue dker">
			<li>
				<a href="<?php echo base_url('Dashboard'); ?>">
					<i class="fa fa-home"></i>
					<span class="link-title">&nbsp;Dashboard</span>
				</a>
			</li>
			<li style="display: none;">
				<a href="<?php echo base_url('User'); ?>">
					<i class="fa fa-user"></i>
					<span class="link-title">&nbsp;User Manager</span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url('Settings/AssetImage'); ?>">
					<i class="fa fa-file-image-o"></i>
					<span class="link-title">&nbsp;Asset Image</span>
				</a>
			</li>

			<li>
				<a href="#">
					<i class="fa fa-bars"></i>
					<span class="link-title">&nbsp; Post Manager</span>
					<span class="fa arrow"></span>
				</a>
				<ul class="collapse" aria-expanded="true" style="">
					<li>
						<a href="<?php echo base_url('PostManager/Home'); ?>">
							<i class="fa fa-home"></i> &nbsp; Home
						</a>
					</li>
					<li>
						<a href="<?php echo base_url('PostManager/About'); ?>">
							<i class="fa fa-bookmark-o"></i> &nbsp; About Us
						</a>
					</li>
					<li>
						<a href="javascript:;">
							<i class="fa fa-handshake-o"></i> &nbsp; Mitra
								<span class="fa arrow"></span>
						</a>
						<ul class="sub-menu sub-submenu">
							<li>
								<a href="<?php echo base_url('PostManager/Mitra') ?>">
									<i class="fa fa-angle-right"></i> &nbsp; MITRA
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('PostManager/Mitrapengamanan') ?>">
									<i class="fa fa-angle-right"></i> &nbsp; Mitra Pengamanan
								</a>
							</li>

							<li>
								<a href="<?php echo base_url('PostManager/Mitrapelatihan') ?>">
									<i class="fa fa-angle-right"></i> &nbsp; Mitra Pelatihan
								</a>
							</li>

							<li>
								<a href="<?php echo base_url('PostManager/Filtermitra') ?>">
									<i class="fa fa-angle-right"></i> &nbsp; Filter Mitra Pelatihan
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:;">
							<i class="fa fa-bullhorn"></i> &nbsp; Pelatihan
								<span class="fa arrow"></span>
						</a>
						<ul class="sub-menu sub-submenu">
							<li>
								<a href="<?php echo base_url('PostManager/Pelatihan') ?>">
									<i class="fa fa-angle-right"></i> &nbsp; PELATIHAN
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('PostManager/Pelatihandasar') ?>">
									<i class="fa fa-angle-right"></i> &nbsp; Pelatihan Kompetensi Dasar
								</a>
							</li>

							<li>
								<a href="<?php echo base_url('PostManager/Pelatihankompetensikhusus_content') ?>">
									<i class="fa fa-angle-right"></i> &nbsp; Pelatihan Khusus
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php echo base_url('PostManager/Pengamanan'); ?>">
							<i class="fa fa-shield"></i> &nbsp; Pengamanan
						</a>
					</li>					
					<li>
						<a href="javascript:;">
							<i class="fa fa-book"></i> &nbsp; Berita
								<span class="fa arrow"></span>
						</a>
						<ul class="sub-menu sub-submenu">
							<!--<li>-->
							<!--	<a href="<?php echo base_url('PostManager/Berita'); ?>">-->
							<!--		<i class="fa fa-angle-right"></i> &nbsp; Artikel dan Berita-->
							<!--	</a>-->
							<!--</li>-->
							<li>
								<a href="<?php echo base_url('PostManager/Hotnews'); ?>">
									<i class="fa fa-angle-right"></i> &nbsp; Berita Terkini
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('PostManager/Artikel'); ?>">
									<i class="fa fa-angle-right"></i> &nbsp; Artikel
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('PostManager/Beritahariini') ?>">
									<i class="fa fa-angle-right"></i> &nbsp; Berita
								</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="<?php echo base_url('PostManager/Gallery'); ?>">
							<i class="fa fa-file-image-o"></i> &nbsp; Gallery
						</a>
					</li>
					<li>
						<a href="<?php echo base_url('PostManager/Karir'); ?>">
							<i class="fa fa-users"></i> &nbsp; Karir
						</a>
					</li>
					<li>
						<a href="<?php echo base_url('PostManager/Kontak'); ?>">
							<i class="fa fa-phone"></i> &nbsp; Kontak
						</a>
					</li>
					<li>
						<a href="<?php echo base_url('PostManager/Testimoni'); ?>">
							<i class="fa fa-star"></i> &nbsp; Testimoni Client
						</a>
					</li>
					<li>
						<a href="<?php echo base_url('PostManager/Lamarkerja'); ?>">
							<i class="fa fa-briefcase"></i> &nbsp; Lamar kerja
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
