<div><?php if ($this->session->flashdata('sukses')) : ?>
		<script>
			swal({
				title: 'Hapus Penduduk!!',
				text: "<?php echo $this->session->flashdata('sukses'); ?>",
				type: 'success'
			});
		</script>
	<?php endif ?>
</div>
<div><?php if ($this->session->flashdata('sukses2')) : ?>
		<script>
			swal({
				title: 'Edit Penduduk!!',
				text: "<?php echo $this->session->flashdata('sukses2'); ?>",
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
				<li class="nav-item ">
					<a href="<?= base_url('admin/'); ?>" class="nav-link ">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
							<!-- <i class="right fas fa-angle-left"></i> -->
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="#" class="nav-link ">
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
				<li class="nav-item menu-open">
					<a href="#" class="nav-link active">
						<i class="nav-icon fas fa-copy"></i>
						<p>
							Rekap
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item ">
							<a href="<?= base_url('admin/'); ?>rekap" class="nav-link active">
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
					<h1>Daftar Rekap</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>dashboard">Dashboard</a></li>
						<li class="breadcrumb-item active">Data Rekap ></li>
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
						<!-- <div class="card-header">
  							<h3 class="card-title">DataTable with default features</h3>
  						</div> -->
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped" border="1">
								<thead>
									<tr>
										<th>No</th>
										<th>Nomor Surat</th>
										<th>Tanggal Pengantar</th>
										<th>Nama</th>
										<th>Alamat</th>
										<th>Keperluan</th>
										<th>Keterangan</th>
									</tr>
								</thead>

								<tbody>
									<?php $no =  0;
									foreach ($pengantar as $o) : $no++; ?>
										<tr>
											<td align="center"><?= $no; ?></td>
											<td><?= $o->no_pengantar; ?></td>
											<td><?= date("d/m/Y", strtotime($o->tgl_pengantar)); ?></td>
											<td><?= $o->nama; ?></td>
											<td><?= $o->alamat ?></td>
											<td><?= $o->keperluan; ?></td>
											<td><?= $o->lain_lain; ?></td>
										</tr>
									<?php endforeach; ?>

									<!-- <tr>
  										<td>Trident</td>
  										<td>Internet</td>
  										<td>Win 95+</td>
  										<td> 4</td>
  										<td>X</td>
  										<td>Internet</td>
  										<td>Win 95+</td>
  										<td> 4</td>
  										<td> 4</td>
  									</tr> -->
								</tbody>
								<!-- <tfoot>
  									<tr>
  										<th>NIK</th>
  										<th>Nama</th>
  										<th>Jenis Kelamin</th>
  										<th>Tempat Lahir</th>
  										<th>Kewarganegaraan</th>
  										<th>Agama</th>
  										<th>Status</th>
  										<th>Pendidikan Terakhir</th>
  										<th>Alamat</th>
  									</tr>
  								</tfoot> -->
							</table>

						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>