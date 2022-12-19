<?= $admin['id']; ?>
<div><?php if ($this->session->flashdata('sukses')) : ?>
		<script>
			swal({
				title: 'Tambah Admin !!!',
				text: "<?php echo $this->session->flashdata('sukses'); ?>",
				type: 'success'
			});
		</script>
	<?php endif ?>
</div>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
		<span class="brand-text font-weight-light">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>SUPER-O</strong></span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url('assets4/') ?>image_me/<?= $role; ?>.png " class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?= $nama; ?></a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<li class="nav-item menu-open">
					<a href="#" class="nav-link active">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
							<!-- <i class="right fas fa-angle-left"></i> -->
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-address-book"></i>
						<p>
							Data Master
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="pages/layout/top-nav.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Input Data Penduduk</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/'); ?>list_penduduk" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>List Data Penduduk</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-edit"></i>
						<p>
							Validasi RT
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="pages/forms/general.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Validasi Pengantar</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-copy"></i>
						<p>
							Rekap
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="pages/forms/general.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Cetak</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-header">OPERATION</li>
				<li class="nav-item">
					<a href="<?= base_url('auth'); ?>/logout" class="nav-link" onclick="return confirm('apakah anda yakin!');">
						<i class="nav-icon fas fa-sign-out-alt"></i>
						<p>
							Log Out
							<!-- <span class="badge badge-info right">2</span> -->
						</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Edit Admin</h1>
				</div>

				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Edit Admin</li>
					</ol>

				</div>

			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- Main content -->
	<section class="content">
		<?= $this->session->flashdata('message'); ?>
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-6">

					<!-- Horizontal Form -->
					<div class="card card-info">
						<div class="card-header">
							<h3 class="card-title">Form Admin</h3>

						</div>
						<!-- /.card-header -->
						<!-- form start -->

						<form class="form-horizontal" action="<?= base_url('auth/'); ?>updateAdmin/<?= $admin['id'] ?>" method="post">
							<div class="card-body">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-3 col-form-label">Username</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="inputEmail3" placeholder="username" name="username" value="<?= $admin['username'] ?>">
										<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword3" class="col-sm-3 col-form-label">Nama</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="inputPassword3" placeholder="nama" name="nama" value="<?= $admin['nama']; ?>">
										<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
									<div class="col-sm-9">
										<input type="password" class="form-control" id="inputPassword3" placeholder="Passsword" name="password" value="<?= $admin['password']; ?>">
										<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword3" class="col-sm-3 col-form-label">Konfirmasi Password</label>
									<div class="col-sm-9">
										<input type="password" class="form-control" id="inputPassword3" placeholder="Konfirmasi Passsword" name="passconf" value="<?= set_value('passconf') ?>">
										<?= form_error('passconf', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>

								<div class="form-group row">
									<label for="inputPassword3" class="col-sm-3 col-form-label">Jenis Admin</label>
									<div class="col-sm-9">
										<!-- <input type="password" class="form-control" id="inputPassword3" placeholder="Passsword" name="nama"> -->
										<select class="form-control" name="role" id="role" required="">
											<?php if ($admin['role'] == 1) { ?>
												<option value="<?= $admin['role'] ?>">Admin</option>
											<?php } ?>
											<?php if ($admin['role'] == 2) { ?>
												<option value="<?= $admin['role'] ?>">Ketua RT</option>
											<?php } ?>
											<option value="1">Admin</option>
											<?php if ($jmlAdm == 0) { ?>
												<option value="2">Ketua RT</option>
											<?php }; ?>
										</select>
										<?= form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>

							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<button type="submit" class="btn btn-info">Tambahkan</button>
								<button type="reset" class="btn btn-default float-right">Reset</button>
							</div>
							<!-- /.card-footer -->
						</form>
					</div>
					<!-- /.card -->

					<div class="col-sm-6">

						<a class="btn btn-block btn-primary" style="width: 90px;height:40px; margin-bottom: 40px" href="<?= base_url('admin/'); ?>allAdmin">Kembali</a>
					</div>
				</div>
				<!--/.col (left) -->
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->