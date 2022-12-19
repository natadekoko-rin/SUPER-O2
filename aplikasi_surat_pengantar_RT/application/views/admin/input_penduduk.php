<div><?php if ($this->session->flashdata('sukses')) : ?>
		<script>
			swal({
				title: 'Tambah Penduduk!!',
				text: "<?php echo $this->session->flashdata('sukses'); ?>",
				type: 'success'
			});
		</script>
	<?php endif ?>
</div>
<div><?php if ($this->session->flashdata('gagal')) : ?>
		<script>
			swal({
				title: 'Tambah Penduduk!!',
				text: "<?php echo $this->session->flashdata('gagal'); ?>",
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

				<li class="nav-item menu-open">
					<a href="#" class="nav-link active">
						<i class="nav-icon fas fa-address-book"></i>
						<p>
							Data Master
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url('admin'); ?>input_penduduk" class="nav-link active">
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
					<h1>Input Penduduk</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>dashboard">Dashboard</a></li>
						<li class="breadcrumb-item active">Input Penduduk</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Pilih Metode</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<div class="row">
								<button type="button" class="inline-block btn btn-block bg-gradient-primary btn-sm col-3" data-toggle="modal" data-target="#modal-input-penduduk">Input Dengan Form</button>
							</div>
							<br>

							<div class="row">
								<form method="get">
									<a href="<?= base_url('admin/') ?>download">
										<!-- <button type="">Download format</button> -->
										Download format
									</a>
								</form>
							</div>
							<form action="<?= base_url('admin/') ?>importPenduduk" enctype="multipart/form-data" method="post">
								<div class="row">
									<input type="file" name="im-penduduk" id="im-penduduk" required accept=".csv, .xlsx, xls">
								</div>
								<div class="row">
									<button type="submit" name="excel" id="excel" class="inline-block btn btn-block bg-gradient-primary btn-sm col-3">Import Excel</button>
								</div>
							</form>

							<!-- <button type="button" class="btn btn-block bg-gradient-primary btn-sm col-3" data-toggle="modal" data-target="#modal-default">
  								Launch Default Modal
  							</button> -->

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

<!-- modal tambah penduduk -->
<div class="modal fade" id="modal-input-penduduk">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Penduduk</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo site_url('admin/addPenduduk'); ?>" method="post">
				<div class="modal-body">

					<div class="form-group row">
						<label class='col-md-4'>NIK</label>
						<div class='col-md-8'>
							<input type="text" id="nik" name="nik" placeholder="Masukan NIK" class="form-control" required="" minlength="16" maxlength="16" pattern=".{16}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
						</div>
					</div>

					<div class="form-group row">
						<label class='col-md-4'>Nama Lengkap</label>
						<div class='col-md-8'><input type="text" id="nama" name="nama" autocomplete="off" placeholder="Nama Anda" class="form-control" required=""></div>
					</div>

					<div class="form-group row">
						<label class='col-md-4'>Jenis Kelamin</label>
						<div class='col-md-8'>
							<select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required="">
								<option value="">~~Jenis Kelamin~~</option>
								<option value="Laki-Laki">Laki-Laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class='col-md-4'>Tempat Lahir</label>
						<div class='col-md-8'><input type="text" id="tempat" name="tempat" autocomplete="off" placeholder="Tempat Lahir Anda" class="form-control" required=""></div>
					</div>

					<div class="form-group row">
						<label class='col-md-4'>Tgl.Lahir</label>
						<div class='col-md-8'>
							<input type="date" id="tanggal" name="tanggal" autocomplete="off" placeholder="Tanggal Lahir Anda" class="form-control" required="">
						</div>
					</div>

					<div class="form-group row">
						<label class='col-md-4'>Kewarganegaraan</label>
						<div class='col-md-8'>
							<select id="kewarganegaraan" name="kewarganegaraan" class="form-control" required="">
								<option value="">~~Status Kewarganrgaraan Anda~~</option>
								<option value="WNI">WNI</option>
								<option value="WNA">WNA</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class='col-md-4'>Agama Anda</label>
						<div class='col-md-8'>
							<select id="agama" name="agama" class="form-control" required="">
								<option value="">~~Agama Anda~~</option>
								<option value="Islam">Islam</option>
								<option value="Protestan">Protestan</option>
								<option value="Katolik">Katolik</option>
								<option value="Hindu">Hindu</option>
								<option value="Buddha">Buddha</option>
								<option value="Khonghucu">Khonghucu</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class='col-md-4'>Status</label>
						<div class='col-md-8'>
							<select id="status" name="status" class="form-control" required="">
								<option value="">~~Status Anda~~</option>
								<option value="Belum Kawin">Belum Menikah</option>
								<option value="Kawin">Sudah Menikah</option>
								<option value="Duda">Duda</option>
								<option value="Janda">Janda</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class='col-md-4'>Pend.Terakhir</label>
						<div class='col-md-8'>
							<select id="pendidikan" name="pendidikan" class="form-control" required="">
								<option value="">~~Pendidikan Terakhir Anda~~</option>
								<option value="Tidak Tamat SD">Tidak Tamat SD</option>
								<option value="SD/MI/Sederajat">SD/MI/Sederajat</option>
								<option value="SMP/MTS/Sederajat">SMP/MTS/Sederajat</option>
								<option value="SMA/SMK/Sederajat">SMA/SMK/Sederajat</option>
								<option value="Diploma">Diploma</option>
								<option value="Sarjana">Sarjana</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class='col-md-4'>Pekerjaan</label>
						<div class='col-md-8'><input type="text" id="pekerjaan" name="pekerjaan" autocomplete="off" placeholder="Pekerjaan Anda" class="form-control" required=""></div>
					</div>

					<div class="form-group row">
						<label class='col-md-4'>Alamat</label>
						<div class='col-md-8'><input type="text" id="alamat" name="alamat" autocomplete="off" placeholder="Alamat Anda" class="form-control" required=""></div>
					</div>
					</br><br><br>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Tambahkan</button>
				</div>
			</form>
		</div>
	</div>
	<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->