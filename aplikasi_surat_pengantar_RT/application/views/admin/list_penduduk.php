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
							<a href="<?= base_url('admin/'); ?>input_penduduk" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Input Data Penduduk</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/'); ?>list_penduduk" class="nav-link active">
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
					<h1>Daftar Penduduk</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('admin/'); ?>dashboard">Dashboard</a></li>
						<li class="breadcrumb-item active">Data Penduduk ></li>
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
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>NIK</th>
										<th>Nama</th>
										<th>Jenis Kelamin</th>
										<th>Tmp.Lahir</th>
										<th>Tgl.Lahir</th>
										<th>Kewarganegaraan</th>
										<th>Agama</th>
										<th>Status</th>
										<th>Pend.Terakhir</th>
										<th>Alamat</th>
										<th>Pekerjaan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no =  0;
									foreach ($penduduk as $o) : $no++; ?>
										<tr>
											<td><?= $o->NIK; ?></td>
											<td><?= $o->nama; ?></td>
											<td align="center"><?= $o->jenis_kel; ?></td>
											<td><?= $o->tempat_lahir; ?></td>
											<td align="center"><?= $o->tgl_lahir; ?></td>
											<td><?= $o->kewarganegaraan; ?></td>
											<td><?= $o->agama; ?></td>
											<td align="center"><?= $o->status; ?></td>
											<td><?= $o->pendidikan_ter; ?></td>
											<td align="center"><?= $o->alamat; ?></td>
											<td align="center"><?= $o->pekerjaan; ?></td>
											<td align="center">
												<!-- <a href="<?php echo site_url('admin/delete_penduduk/' . $o->NIK); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');" class="btn btn-danger btn-xs tooltips" data-popup="tooltip" data-original-title="Hapus Data" data-placement="top"><i class="glyphicon glyphicon-trash"></i></a>

  												<a data-toggle="modal" data-target="#modal-edit<?= $o->NIK; ?>" class="btn btn-danger btn-xs" data-popup="tooltip" data-original-title="Edit Data" data-placement="top"><i class="fa fa-edit"></i></a> -->

												<div class="btn-group">
													<!-- <a href="<?= site_url('admin/delete_penduduk/' . $o->NIK); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');" data-popup="tooltip" data-original-title="Hapus Data" data-placement="top">
  														<button type="button" class="btn btn-info">Edit</button>
  													</a>
  													<button type="button" class="btn btn-danger">Hapus</button> -->


													<a href="<?php echo site_url('admin/delete_penduduk/' . $o->NIK); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');" class="btn btn-danger btn-xs tooltips" data-popup="tooltip" data-original-title="Hapus Data" data-placement="top"><i class="fa fa-trash-alt"></i></a>

													<a data-toggle="modal" data-target="#modal-edit<?= $o->NIK; ?>" class="btn btn-danger btn-xs" data-popup="tooltip" data-original-title="Edit Data" data-placement="top"><i class="fa fa-edit"></i></a>
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

<?php $no = 0;
foreach ($penduduk as $o) : $no++; ?>
	<div class="modal fade" id="modal-edit<?= $o->NIK; ?>">
		<div class="modal-dialog">
			<form action="<?php echo site_url('admin/edit_penduduk'); ?>" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Penduduk</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group row">
							<label class='col-md-4' font-weight='400'>NIK</label>
							<div class='col-md-8'>
								<input type="text" readonly value="<?= $o->NIK; ?>" name="NIK" class="form-control" required="">
							</div>
						</div>

						<div class="form-group row">
							<label class='col-md-4'>Nama</label>
							<div class='col-md-8'><input type="text" readonly value="<?= $o->nama; ?>" name="nama" autocomplete="off" class="form-control" required=""></div>
						</div>
						<div class="form-group row">
							<label class='col-md-4'>Jenis Kelamin</label>
							<!-- <div class='col-md-9'><input type="text" readonly value="<?= $o->jenis_kel; ?>" name="jenis_kel" autocomplete="off" class="form-control" required=""></div> -->
							<div class="col-md-8">
								<select name="jenis_kelamin" class="form-control" required="">
									<option value="<?= $o->jenis_kel; ?>"><?= $o->jenis_kel; ?></option>
									<option value="Laki-Laki">Laki-Laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class='col-md-4'>Tempat Lahir</label>
							<div class='col-md-8'><input type="text" value="<?= $o->tempat_lahir; ?>" name="tempat_lahir" autocomplete="off" class="form-control" required=""></div>
						</div>
						<div class="form-group row">
							<label class='col-md-4'>Tanggal Lahir</label>
							<div class='col-md-8'> <input type="text" placeholder="DD/MM/YYYY" value="<?= $o->tgl_lahir; ?>" name="tgl_lahir" autocomplete="off" class="form-control" required="">
							</div>
						</div>
						<div class="form-group row">
							<label class="control-label col-md-4">Kewarganegaraan</label>
							<div class="col-md-8">
								<select name="kewarganegaraan" class="form-control" required="">
									<option value="<?= $o->kewarganegaraan; ?>"><?= $o->kewarganegaraan; ?></option>
									<option value="WNI">WNI</option>
									<option value="WNA">WNA</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="control-label col-md-4">Agama</label>
							<div class="col-md-8">
								<select name="agama" class="form-control" required="">
									<option value="<?= $o->agama; ?>"><?= $o->agama; ?></option>
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
							<label class="control-label col-md-4">Status</label>
							<div class="col-md-8">
								<select name="status" class="form-control" required="">
									<option value="<?= $o->status; ?>"><?= $o->status; ?></option>
									<option value="Belum Menikah">Belum Menikah</option>
									<option value="Sudah Menikah">Sudah Menikah</option>
									<option value="Duda">Duda</option>
									<option value="Janda">Janda</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="control-label col-md-4">Pend.Terakhir</label>
							<div class="col-md-8">
								<select name="pendidikan_ter" class="form-control" required="">
									<option value="<?= $o->pendidikan_ter; ?>"><?= $o->pendidikan_ter; ?></option>
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
							<label class='col-md-4'>Alamat</label>
							<div class='col-md-8'><input type="text" value="<?= $o->alamat; ?>" name="alamat" autocomplete="off" class="form-control" required=""></div>
						</div>

						<div class="form-group row">
							<label class="control-label col-md-4">Pekerjaan</label>
							<div class="col-md-8">
								<!-- <select name="pekerjaan" class="form-control">
  									<option value="<?= $o->pekerjaan; ?>"><?= $o->pekerjaan; ?></option>
  									<option value="Pengusaha">Pengusaha</option>
  									<option value="Karyawan">Karyawan</option>
  									<option value="PNS">PNS</option>
  									<option value="IT">IT</option>
  									<option value="Programer">Programer</option>
  								</select> -->
								<input type="text" value="<?= $o->pekerjaan; ?>" name="pekerjaan" autocomplete="off" class="form-control" required="">
							</div>
						</div>
						</br>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Edit</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</form>
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
<?php endforeach; ?>