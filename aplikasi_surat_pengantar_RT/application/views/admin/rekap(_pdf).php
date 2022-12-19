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
				<li class="nav-item ">
					<a href="<?= base_url('admin'); ?>" class="nav-link ">
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
							<a href="<?= base_url('admin'); ?>input_penduduk" class="nav-link ">
								<i class="far fa-circle nav-icon"></i>
								<p>Input Data Penduduk</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/'); ?>list_penduduk" class="nav-link ">
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
				<li class="nav-item menu-open">
					<a href="#" class="nav-link active">
						<i class="nav-icon fas fa-copy"></i>
						<p>
							Rekap
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url('admin/'); ?>rekap" target="_blank" class="nav-link active">
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
			<h2 class="text-center display-4">Rekap Bulanan</h2>
		</div>
		<!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- <form action="<?= base_url('admin/'); ?>rekap"> -->
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<form action="<?= base_url('admin/'); ?>rekap" method="post">
						<div class="row">

							<div class="col-3 right">
								<div class="form-group">
									<label>Periode:</label>
									<select class="select2" style="width: 100%;" name="periode">
										<?php foreach ($no as $a) : ?>
											<option value="<?= $a->no_pengantar; ?>"><?= $a->no_pengantar; ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>

							<div class="col-6">
								<div class="form-group">
									<br>
									<button type="submit">Cari</button>
								</div>
							</div>

						</div>
					</form>
				</div>
			</div>
			<!-- </form> -->
			<div class="row mt-3">
				<div class="col-md-10 offset-md-1">
					<!-- /.row -->
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Daftra Surat Pengantar</h3>

									<div class="card-tools">
										<div class="input-group input-group-sm" style="width: 150px;">
											<form action="<?= base_url('admin/'); ?>cetak_rekap" method="post">
												<input type="hidden" name="cetak" id="cetak" value="<?= $cetak; ?>">

												<button type="submit" class="btn btn-default">Cetak
												</button>

											</form>
										</div>
									</div>
								</div>
								<!-- /.card-header -->
								<div class="card-body table-responsive p-0" style="height: 300px;">
									<table class="table table-head-fixed text-nowrap">
										<thead>
											<tr>
												<th>Nomor</th>
												<th>NIK</th>
												<th>Keperluan</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<?php $no =  0;
											foreach ($pengantar as $o) : $no++; ?>
												<tr>
													<td><?= $o->no_pengantar; ?></td>
													<td><?= $o->nik; ?></td>
													<td><?= $o->keperluan; ?></td>
													<td><?= $o->status_surat; ?></td>

												</tr>
											<?php endforeach; ?>

										</tbody>
									</table>
								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>