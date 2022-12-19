<div><?php if ($this->session->flashdata('sukses')) : ?>
		<script>
			swal({
				title: 'Validasi Pengantar!!',
				text: "<?php echo $this->session->flashdata('sukses'); ?>",
				type: 'success'
			});
		</script>
	<?php endif ?>
</div>
<div><?php if ($this->session->flashdata('sukses2')) : ?>
		<script>
			swal({
				title: 'Hapus Pengantar!!',
				text: "<?php echo $this->session->flashdata('sukses2'); ?>",
				type: 'success'
			});
		</script>
	<?php endif ?>
</div>
<div><?php if ($this->session->flashdata('batal')) : ?>
		<script>
			swal({
				title: 'Validasi Pengantar!!',
				text: "<?php echo $this->session->flashdata('batal'); ?>",
				type: 'error'
			});
		</script>
	<?php endif ?>
</div>

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
				<li class="nav-item menu-open">
					<a href="#" class="nav-link active">
						<i class="nav-icon fas fa-edit"></i>
						<p>
							Validasi RT
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url('admin/'); ?>validasi_rt" class="nav-link active">
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
					<h1>Daftar Surat Pengantar</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>dashboard">Dashboard</a></li>
						<li class="breadcrumb-item active">Daftar Pengantar></li>
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
							<table id="example2" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th style="text-align:center">Nomor</th>
										<th style="text-align:center">NIK</th>
										<th style="text-align:center">Nama</th>
										<th style="text-align:center">Keperluan</th>
										<th style="text-align:center">Lain-lain</th>
										<th style="text-align:center">Status</th>
										<th style="text-align:center">Action</th>
									</tr>
								</thead>

								<tbody>
									<?php $no =  0;
									foreach ($pengantar as $o) : $no++; ?>
										<tr>
											<td><?= $o->no_pengantar; ?></td>
											<td><?= $o->nik; ?></td>
											<td align="center"><?= $o->nama; ?></td>
											<td><?= $o->keperluan; ?></td>
											<td align="center"><?= $o->lain_lain; ?></td>
											<td align="center"><?= $o->status_surat; ?></td>
											<td align="center">
												<div class="btn-group">
													<?php if ($o->status_surat == "Disetujui") { ?>
														<a href="<?php echo site_url('admin/del_acc/' . $o->id); ?>" onclick="return confirm('Apakah Anda Ingin Membatalkan Verifikasi');" class="btn btn-danger btn-xs tooltips" data-popup="tooltip" data-original-title="Hapus Data" data-placement="top"><i class="fa fa-times-circle"></i></a>
													<?php } else { ?>
														<a href="<?php echo site_url('admin/acc/' . $o->id); ?>" onclick="return confirm('Apakah Anda Ingin Menyetujui  Surat Pengantar');" class="btn btn-success btn-xs tooltips" data-popup="tooltip" data-original-title="Hapus Data" data-placement="top"><i class="fa fa-check-circle"></i></a>
													<?php } ?>
													<!-- <a data-toggle="modal" data-target="#modal-edit<?= $o->id; ?>" class="btn btn-danger btn-xs" data-popup="tooltip" data-original-title="Edit Data" data-placement="top"><i class="fa fa-print"></i></a> -->
													<a href="<?= base_url('admin/'); ?>tryPdf/<?= $o->id; ?>" class="btn btn-success btn-xs tooltips" data-popup="tooltip" data-original-title="Print Data" data-placement="top" target="_blank"><i class="fa fa-print"></i></a>

													<a href="<?php echo site_url('admin/delete_pengantar/' . $o->id); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');" class="btn btn-success btn-xs tooltips" data-popup="tooltip" data-original-title="Hapus Data" data-placement="top"><i class="fa fa-trash-alt"></i></a>

												</div>
											</td>
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