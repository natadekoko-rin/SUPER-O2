<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>SUPER-O</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Township Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="<?= base_url('assets3/'); ?>css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?= base_url('assets3/'); ?>css/style.css" type="text/css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="<?= base_url('assets3/'); ?>css/flexslider.css" type="text/css" media="screen" property="" />
	<link href="<?= base_url('assets3/'); ?>css/font-awesome.css" rel="stylesheet">
	<!-- font-awesome icons -->
	<!-- //Custom Theme files -->
	<!-- js -->
	<script src="<?= base_url('assets3/'); ?>js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- web-fonts -->
	<link href='//fonts.googleapis.com/css?family=Text+Me+One' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<!-- //web-fonts -->
	<!-- sweet aleart -->
	<script src="<?= base_url('assets2/'); ?>js/sweetalert2.all.min.js"></script>

	<style>
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}

		input[type="number"] {
			-moz-appearance: textfield;
		}
	</style>

</head>

<body>
	<!-- banner -->
	<div class="banner content-wrapper">
		<div><?php if ($this->session->flashdata('sukses')) : ?>
				<script>
					swal({
						title: 'Permohonan Pengantar!!',
						text: "<?php echo $this->session->flashdata('sukses'); ?>",
						type: 'success'
					});
				</script>
			<?php endif ?>
		</div>
		<div><?php if ($this->session->flashdata('error')) : ?>
				<script>
					swal({
						title: 'Permohonan Pengantar!!',
						text: "<?php echo $this->session->flashdata('error'); ?>",
						type: 'error'
					});
				</script>
			<?php endif ?>
		</div>
		<!-- header -->
		<div class="w3header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a href="index.html">SUPER-O</a></h1>
					</div>

				</nav>
			</div>
		</div>
		<!-- //header -->
		<div class="banner-info">
			<div class="container">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="agileits_w3layouts_banner_info">
									<h3>Selamat datang di <br> SUPER-O</h3>
									<div class="agileits_w3layouts_more">
										<!-- <a href="#" data-toggle="modal" data-target="#myModal">Read More</a> -->
									</div>
									<span class="border-modern-item-1"></span>
									<span class="border-modern-item-2"></span>
									<span class="border-modern-item-3"></span>
									<span class="border-modern-item-4"></span>
								</div>
							</li>
							<li>
								<div class="agileits_w3layouts_banner_info">
									<h3>SUPER-O merupakan sistem informasi yang yang dibuat untuk menjawab keluh kesah masyarakat dalam mengurus surat pengantar di RT</h3>
									<div class="agileits_w3layouts_more">
										<!-- <a href="#" data-toggle="modal" data-target="#myModal">Read More</a> -->
									</div>
									<span class="border-modern-item-1"></span>
									<span class="border-modern-item-2"></span>
									<span class="border-modern-item-3"></span>
									<span class="border-modern-item-4"></span>
								</div>
							</li>
							<li>
								<div class="agileits_w3layouts_banner_info">
									<h3>Yang mana terkadang ketua RT susah untuk ditemui, sehingga saat akan mengurus surat pengantar RT terjadi kendala.</h3>
									<div class="agileits_w3layouts_more">
										<!-- <a href="#" data-toggle="modal" data-target="#myModal">Read More</a> -->
									</div>
									<span class="border-modern-item-1"></span>
									<span class="border-modern-item-2"></span>
									<span class="border-modern-item-3"></span>
									<span class="border-modern-item-4"></span>
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!-- flexSlider -->
				<script defer src="<?= base_url('assets3/'); ?>js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function() {
						$('.flexslider').flexslider({
							animation: "slide",
							start: function(slider) {
								$('body').removeClass('loading');
							}
						});
					});
				</script>
				<!-- //flexSlider -->
			</div>
		</div>
	</div>
	<!-- //banner -->

	<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<div class="ab-w3l-spa">
				<label class="wel"></label>
				<!-- <h2 class="w3ls_head">Welcome </h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. ever since the 1500s.Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores hasellusMaecenas ac hendrerit purus. Lorem ipsum dolor sit amet.Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
				<div class="agileits_w3layouts_more">
					<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
				</div> -->
			</div>
			<!-- services -->
			<div class="services">
				<div class="agileits-services">
					<div class="services-right-grids">
						<div class="col-sm-4 services-right-grid">
							<div class="services-icon hvr-radial-in">
								<i class="fa fa-users" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>Asli Warga RT 03 RW 04</h5>
							</div>
							<div class="agileits_w3layouts_more">
								<a href="#" data-toggle="modal" data-target="#modal-tambah-pengantar">Buat Pengantar</a>
							</div>
						</div>
						<div class="col-sm-4 services-right-grid">
							<div class="services-icon hvr-radial-in">
								<i class="fa fa-user-times" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>Pendatang</h5>
							</div>
							<div class="agileits_w3layouts_more">
								<a href="#" data-toggle="modal" data-target="#modal-tambah-pendatang">Buat Pengantar</a>
							</div>
						</div>
						<div class="col-sm-4 services-right-grid">
							<div class="services-icon hvr-radial-in">
								<i class="fa fa-search" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>Cek Status Surat Pengantar</h5>
							</div>
							<div class="agileits_w3layouts_more">
								<a href="#" data-toggle="modal" data-target="#modal-cek-status">Buat Pengantar</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!-- //services -->
		</div>
	</div>
	<!-- //welcome -->

	<div class="footer-copy">
		<div class="container">
			<p>KKN UNDIP <a href="">TIM 1 PEDALANGAN</a> made with &#128151;</p>
		</div>
	</div>
	<!-- //footer -->
	<!-- //modal tambah pengantar -->
	<div class="modal fade" id="modal-tambah-pengantar" tabindex="-1" role="dialog">
		<!-- Modal1 -->
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Warga RT 04 RW 03</h4>
					<form action="<?php echo site_url('user/simpan_pengantar'); ?>" method="post">
						<div class="modal-body">
							<div class="form-group">
								<label class='col-md-3'>No Pengantar</label>
								<div class='col-md-9'><input type="text" name="no_pengantar" value="<?= $nomor; ?>" class="form-control" readonly="">
								</div>

							</div>

							<div class="form-group">
								<label class='col-md-3'>NIK</label>
								<div class='col-md-9'>
									<input type="number" id="nik" name="nik" placeholder="Masukan NIK Anda" class="form-control" required="" minlength="16" maxlength="16" pattern=".{16}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
								</div>
							</div>
							<br>

							<div class="form-group">
								<label class='col-md-3'>Nama Lengkap</label>
								<div class='col-md-9'><input type="text" id="nama" name="nama" autocomplete="off" placeholder="Nama Otomatis" class="form-control" readonly="" required=""></div>
							</div>
							<br>

							<div class="form-group">
								<label class='col-md-3'>Keperluan</label>
								<div class='col-md-9'><input type="text" name="keperluan" autocomplete="off" placeholder="Masukkan keperluan" class="form-control" required=""></div>
							</div>
							<br>

							<div class="form-group">
								<label class='col-md-3'>Lain lain</label>
								<div class='col-md-9'><textarea type="text" name="lain_lain" autocomplete="off" required placeholder="Lain Lain(jika tidak ada isikan '-')" class="form-control" required=""></textarea></div>
							</div>
							</br><br><br>
							</br><br><br>
							<input type="hidden" name="tgl" id="tgl" value="<?= date('Y/m/d'); ?>">


						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
							<button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Buat</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal tambah pengantar -->
	<script type="text/javascript" src="<?= base_url('assets2/'); ?>js/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#nik').on('input', function() {

				var nik = $(this).val();
				$.ajax({
					type: "POST",
					url: "<?= base_url('user/get_nik'); ?>",
					dataType: "JSON",
					data: {
						nik: nik
					},
					cache: false,
					success: function(data) {
						$.each(data, function(NIK, nama) {
							$('[name="nama"]').val(data.nama);

						});
					}
				});
				return false;
			});

		});
	</script>

	<!-- //modal tambah pendatang -->
	<div class="modal fade" id="modal-tambah-pendatang" tabindex="-1" role="dialog">
		<!-- Modal1 -->
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Pendatang</h4>
					<form action="<?php echo site_url('user/simpan_pengantar_pendatang'); ?>" method="post">
						<div class="modal-body">
							<div class="form-group">
								<label class='col-md-3'>No Pengantar</label>
								<div class='col-md-9'><input type="text" name="no_pengantar" value="<?= $nomor; ?>" class="form-control" readonly=""></div>
							</div>

							<div class="form-group">
								<label class='col-md-3'>NIK</label>
								<div class='col-md-9'>
									<input type="text" id="nik" name="nik" placeholder="Masukan NIK" class="form-control" required="" minlength="16" maxlength="16" pattern=".{16}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
								</div>
							</div>
							<br>

							<div class="form-group">
								<label class='col-md-3'>Nama Lengkap</label>
								<div class='col-md-9'><input type="text" id="nama" name="nama" autocomplete="off" placeholder="Nama Anda" class="form-control" required=""></div>
							</div>
							<br>

							<div class="form-group">
								<label class='col-md-3'>Tempat Lahir</label>
								<div class='col-md-9'><input type="text" id="tempat" name="tempat" autocomplete="off" placeholder="Tempat Lahir Anda" class="form-control" required=""></div>
							</div>
							<br>

							<div class="form-group">
								<label class='col-md-3'>Alamat</label>
								<div class='col-md-9'><input type="text" id="alamat" name="alamat" autocomplete="off" placeholder="Alamat Anda" class="form-control" required=""></div>
							</div>
							<br>

							<div class="form-group">
								<label class='col-md-3'>Pekerjaan</label>
								<div class='col-md-9'><input type="text" id="pekerjaan" name="pekerjaan" autocomplete="off" placeholder="Pekerjaan Anda" class="form-control" required=""></div>
							</div>
							<br>

							<div class="form-group">
								<label class='col-md-3'>Tgl.Lahir</label>
								<div class='col-md-9'>
									<input type="date" id="tanggal" name="tanggal" autocomplete="off" placeholder="Tanggal Lahir Anda" class="form-control" required="">
								</div>
							</div>
							<br>

							<div class="form-group">
								<label class='col-md-3'>Jenis Kelamin</label>
								<div class='col-md-9'>
									<select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required="">
										<option value="">~~Jenis Kelamin~~</option>
										<option value="Laki-Laki">Laki-Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
							</div>
							<br>

							<div class="form-group">
								<label class='col-md-3'>Agama Anda</label>
								<div class='col-md-9'>
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
							<br>

							<div class="form-group">
								<label class='col-md-3'>Kewarganegaraan</label>
								<div class='col-md-9'>
									<select id="kewarganegaraan" name="kewarganegaraan" class="form-control" required="">
										<option value="">~~Status Kewarganrgaraan Anda~~</option>
										<option value="WNI">WNI</option>
										<option value="WNA">WNA</option>
									</select>
								</div>
							</div>
							<br>

							<div class="form-group">
								<label class='col-md-3'>Pend.Terakhir</label>
								<div class='col-md-9'>
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
							<br>

							<div class="form-group">
								<label class='col-md-3'>Status</label>
								<div class='col-md-9'>
									<select id="status" name="status" class="form-control" required="">
										<option value="">~~Status Anda~~</option>
										<option value="Belum Kawin">Belum Menikah</option>
										<option value="Kawin">Sudah Menikah</option>
										<option value="Duda">Duda</option>
										<option value="Janda">Janda</option>
									</select>
								</div>
							</div>
							<br>

							<div class="form-group">
								<label class='col-md-3'>Keperluan</label>
								<div class='col-md-9'><input type="text" name="keperluan" autocomplete="off" placeholder="Masukkan keperluan" class="form-control" required=""></div>
							</div>
							<br>

							<div class="form-group">
								<label class='col-md-3'>Lain lain</label>
								<div class='col-md-9'><textarea type="text" name="lain_lain" autocomplete="off" required placeholder="Lain Lain(jika tidak ada isikan '-')" class="form-control" required=""></textarea></div>
							</div>
							</br><br><br>
							</br><br><br>
							<input type="hidden" name="tgl" id="tgl" value="<?= date('Y/m/d'); ?>">

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
							<button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Buat</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal tambah pendatang -->
	<!-- //modal cek status -->
	<div class="modal fade" id="modal-cek-status" tabindex="-1" role="dialog">
		<!-- Modal1 -->
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Status Surat Anda</h4>
					<form action="" method="post">
						<div class="modal-body">
							<div class="form-group">
								<label class='col-md-3'>No Pengantar</label>
								<div class='col-md-9'><input type="text" id="no_pengantar" name="no_pengantar" class="form-control">
								</div>
							</div>

							<div class="form-group">
								<label class='col-md-3'>Status Surat</label>
								<div class='col-md-9'><input type="text" id="status_surat" name="status_surat" autocomplete="off" placeholder="Status" class="form-control" readonly=""></div>
							</div>
							<br>
							</br><br><br>
							</br><br><br>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal cek status -->
	<script type="text/javascript" src="<?= base_url('assets2/'); ?>js/jquery.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#no_pengantar').on('input', function() {

				var no_pengantar = $(this).val();
				$.ajax({
					type: "POST",
					url: "<?= base_url('user/get_status_surat'); ?>",
					dataType: "JSON",
					data: {
						no_pengantar: no_pengantar
					},
					cache: false,
					success: function(data) {
						$.each(data, function(no_pengantar, status_surat) {
							$('[name="status_surat"]').val(data.status_surat);

						});
					}
				});
				return false;
			});

		});
	</script>

	<script src="<?= base_url('assets3/'); ?>js/bootstrap.js"></script>
</body>

</html>