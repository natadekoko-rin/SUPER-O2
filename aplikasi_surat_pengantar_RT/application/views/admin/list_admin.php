<div><?php if ($this->session->flashdata('sukses')) : ?>
		<script>
			swal({
				title: 'Admin berhasil dihapus !!!',
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
					<a href="<?= base_url('admin/'); ?>" class="nav-link active">
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
							<a href="<?= base_url('admin/'); ?>input_penduduk" class="nav-link">
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
							<a href="<?= base_url('admin/'); ?>validasi_rt" class="nav-link">
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
							<a href="<?= base_url('admin/'); ?>rekap" class="nav-link">
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
					<h1>Daftar Admin</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>dashboard">Dashboard</a></li>
						<li class="breadcrumb-item active">Daftar Admin</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">

					<div class="card">
						<?php if ($role == 'Admin') { ?>
							<div class="card-header">
								<!-- <a href="<?php echo site_url('auth/registration') ?>"><i class="fas fa-plus"></i> Tambah Admin</a> -->
								<a href="<?= base_url('admin/tambah_admin'); ?>"><i class="fas fa-plus"></i> Tambah Admin</a>

							</div>
						<?php } ?>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>No</th>
											<th>Username</th>
											<th>Password</th>
											<th>Nama</th>
											<th>Sebagai</th>
											<?php if ($role == 'Admin') { ?>
												<th>Aksi</th>
											<?php } ?>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1 ?>
										<?php foreach ($list_admin as $o) : ?>
											<tr>
												<td><?= $i; ?></td>
												<td><?= $o->username; ?></td>
												<?php if ($role == 'Admin') { ?>
													<td>***********</td>
												<?php } else { ?>
													<td>##########</td>
												<?php } ?>
												<td><?= $o->nama; ?></td>
												<td>
													<?php if ($o->role == 1) {
														echo 'Admin';
													} else {
														echo 'Ketua RT';
													} ?>
												</td>
												<?php if ($role == 'Admin') { ?>
													<td width="250">
														<?php if ($username == $o->username) { ?>
														<?php } else { ?>
															<!-- <a data-toggle="modal" data-target="#modal-edit-admin<?= $o->id; ?>" class="btn btn-small" aria-disabled=""><i class="fas fa-edit" data-popup="tooltip" data-original-title="Edit Data" data-placement="top"></i> Edit</a> -->

															<!-- <a href="<?= base_url('auth/'); ?>detailAdmin/<?= $o->id; ?>" class="btn btn-small "><i class="fas fa-edit"></i> Edit</a> -->

															<a href="<?= base_url('auth/'); ?>deleteAdmin/<?= $o->id; ?>" onclick="return confirm('Apakah anda yakin akan menghapus <?= $o->username ?>');" class="btn btn-small swalDefaultSuccess"><i class="fas fa-trash"></i> Hapus</a>

														<?php } ?>

														<!-- <button type="button" class="btn btn-success swalDefaultSuccess">
                                                            Toast
                                                        </button> -->
													</td>
												<?php } ?>
											</tr>
											<?php $i++ ?>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.col (RIGHT) -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->