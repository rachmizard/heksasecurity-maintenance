<style>
	.zoom img {
		transition: all 1s ease;
	}

	.zoom img:hover {
		transform:scale(1.45,1.45);
	}

	.thumb_zoom {
		display:inline-block;
		overflow:hidden;
		padding: 0 !important;
		margin:1% 1.5%;
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
				<h4 class="nav_top_align"><i class="fa fa-file-image-o"></i> Asset Image</h4>
			</div>
			<div class="col-lg-6 col-md-8 col-sm-8">
				<ol class="breadcrumb float-right nav_breadcrumb_top_align">
					<li class="breadcrumb-item">
						<a href="<?php echo site_url('Dashboard'); ?>"><i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard</a>
					</li>
					<li class="breadcrumb-item active">Asset Image</li>
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
					<div class="card-header bg-white">
						<i class="fa fa-table"></i> Asset Gallery
						<button class="btn btn-labeled btn-info" onclick="showFormAdd()">
							<span class="btn-label"><i class="fa fa-plus"></i></span> Add
						</button>
					</div>

					<div class="card-block" id="formAdd">
						<form class="form-horizontal" id="formTambah" method="POST"
								enctype='multipart/form-data' onSubmit="return false;">
							<fieldset>
								<div class="form-group row">
									<div class="col-lg-6">
										<h5><label for="JudulGambar" class="col-form-label form-group-horizontal">Image Upload</label></h5>
										<input id="addImage" name="addImage" type="file" accept="image/*" class="file-loading" required>
									</div>
								</div>
							</fieldset>
							<hr>
							<div class="form-group row">
								<div class="col-lg-12">
									<a href="#" class="btn btn-secondary" onclick="showFormAdd()">Cancel</a>
									<button class="btn btn-info" onclick="saveData()">Save</button>
								</div>
							</div>
						</form>
					</div>

					<div class="card-block m-t-35">
						<div class="row no-gutters" id="listGallery">
							<div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
								<a class="fancybox-thumbs zoom thumb_zoom" data-fancybox-group="thumb" href="<?php echo base_url(); ?>public/img/gallery/full/5.jpg" title="Image Title 1">
								<img src="<?php echo base_url(); ?>public/img/gallery/thumbs/5.jpg" class="img-fluid gallery-style" alt="Image"></a>
							</div>
							<div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
								<a class="fancybox-thumbs zoom thumb_zoom" data-fancybox-group="thumb" href="<?php echo base_url(); ?>public/img/gallery/full/9.jpg" title="Image Title 2">
									<img src="<?php echo base_url(); ?>public/img/gallery/thumbs/9.jpg" class="img-fluid gallery-style" alt="Image"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('#formAdd').hide();
		$("#addImage").fileinput({
			theme: "fa",
			previewFileType: "image",
			browseClass: "btn btn-success",
			browseLabel: "Browse",
			removeLabel: "Delete"
		});
		$('.fancybox-thumbs').fancybox({
			prevEffect: 'none',
			nextEffect: 'none',
			nextClick: true,
			helpers: {
				thumbs: {
					width: 50,
					height: 50
				}
			}
		});
	});
	
	loadData();
	function loadData(){
		$('#listGallery').html('');
		httpsendGet('Settings/getAllAsset').done(r => { fetchingData(r.data); });
	}

	function showFormAdd(){
		$('#formAdd').toggle();
	}

	function fetchingData(data){
		var strappend = '';
		if(data.length > 0){
			for(i=0; i < data.length; i++){
				if(data[i].status == 'A')var checkedStatus = 'checked';
				else var checkedStatus = '';
				if(data[i].showHome == 'A')var checkedShow = 'checked';
				else var checkedShow = '';
				strappend +=
					'<div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">'+
						'<a class="fancybox-thumbs zoom thumb_zoom" data-fancybox-group="thumb" href="<?php echo base_url(); ?>'+data[i].lokasi_gambar+'">'+
						'<img src="<?php echo base_url(); ?>'+data[i].lokasi_gambar+'" class="img-fluid gallery-style" alt="Image"></a>'+
						'<a href="#" class="btn btn-danger" onclick="del(\''+data[i].id_gambar+'\')"><span class="fa fa-trash"></span></a>'+
					'</div>';
			}
			$('#listGallery').html(strappend);
		}else {
			strappend = '<h5>Gallery Tidak Ditemukan</h5>';
			$('#listGallery').html(strappend);
		}
	}

	function saveData(){
		var size = $('#addImage')[0].files[0].size/1024;
		if(size >= 1024){
			swal({
				title: 'Failed!',
				text: 'Ukuran Gambar Terlalu Besar',
				type: 'error',
				timer: 1500,
				onOpen: function () {
					swal.showLoading()
				}
			});
		}else {
			var formAdd = new FormData();
			formAdd.append('_token', $('meta[name=crsf-token]').attr('content') );
			formAdd.append('file', $('#addImage')[0].files[0]);

			httpsendMultiFormPost('Settings/saveAsset', formAdd).done(r => {
				if(r.status == 'success'){
					swal({
						title: 'Success!',
						text: 'Data Berhasil Disimpan',
						type: 'success',
						timer: 1500,
						onOpen: function () {
							swal.showLoading()
						}
					});
					clearData();
					showFormAdd();
					loadData();
				}else {
					swal({
						title: 'Failed!',
						text: 'Data Gagal Disimpan',
						type: 'error',
						timer: 1500,
						onOpen: function () {
							swal.showLoading()
						}
					});
				}
			});
		}
		return false;
	}

	function del(id){
		var _token = $('meta[name=crsf-token]').attr('content');
		swal({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes'
		}).then(function () {
			httpsendPost('Settings/deleteAsset', { '_token': _token,'id':id }).done(r => {
				if(r.status == 'success'){
					swal({
						title: 'Success!',
						text: 'Data Berhasil Dihapus',
						type: 'success',
						timer: 1500,
						onOpen: function () {
							swal.showLoading()
						}
					});
					loadData();
				}else {
					swal({
						title: 'Failed!',
						text: 'Data Gagal Dihapus',
						type: 'error',
						timer: 1500,
						onOpen: function () {
							swal.showLoading()
						}
					});
				}
			});
		})
	}

	function clearData(){
		$('.fileinput-remove').click();
	}
</script>
