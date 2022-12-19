<!DOCTYPE html>
<html>

<head>
	<title>Surat Pengantar</title>
	<!-- Custom fonts for this template-->
	<!-- <link href="<?= base_url() ?>assets/font-awesome/css/all.min.css" rel="stylesheet" type="text/css"> -->
	<!-- Page level plugin CSS-->
	<!-- <link href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet"> -->
	<!-- Custom styles for this template-->
	<link href="<?= base_url() ?>assets/css/sb-admin.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets4/logo.jpg" type="image/jpg" rel="shortcut icon">


</head>
<?php
function tanggal_indo($tanggal)
{
	$bulan = array(
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$split = explode('/', $tanggal);
	return $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];
}
?>
<?php $no = 0;
foreach ($pengantar as $o) : $no++ ?>

	<body style="margin: 3em 3em 3em 3em;">
		<!-- ================= -->
		<?php if ($o->status_surat == "Disetujui") {
			$validasi_ttd = '/assets4/image_me/tanda_tangan-remov.png';
			$validasi_stempel = '/assets4/image_me/stempel-remov.png';
		} else {
			$validasi_ttd = '/assets4/image_me/xstempel_luar.png';
			$validasi_stempel = '/assets4/image_me/xttd_luar.png';
		}

		if ($o->jenis_kelamin == "Perempuan") {
			$L = 'text-decoration:line-through;';
			$P = '';
		} else {
			$L = '';
			$P = 'text-decoration:line-through;';
		}
		if ($o->status == 'Belum Kawin') {
			$BK = '';
			$K = 'text-decoration:line-through;';
			$J = 'text-decoration:line-through;';
			$D = 'text-decoration:line-through;';
		}
		if ($o->status == 'Kawin') {
			$BK = 'text-decoration:line-through;';
			$K = '';
			$J = 'text-decoration:line-through;';
			$D = 'text-decoration:line-through;';
		}
		if ($o->status == 'Janda') {
			$BK = 'text-decoration:line-through;';
			$K = 'text-decoration:line-through;';
			$J = '';
			$D = 'text-decoration:line-through;';
		}
		if ($o->status == 'Duda') {
			$BK = 'text-decoration:line-through;';
			$K = 'text-decoration:line-through;';
			$J = 'text-decoration:line-through;';
			$D = '';
		}
		?>
		<!-- ================= -->
		<table cellpadding="0" cellspacing="0" style="width:466.1pt; border-collapse:collapse;">
			<tbody>
				<tr>
					<td style="width:92.2pt; border-bottom-style:double; border-bottom-width:4.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><img src="https://myfiles.space/user_files/76521_c8479575d378859d/1612247134_sampel-surat-pengantar/1612247134_sampel-surat-pengantar.001.jpg" alt="" width="98" height="100"></p>
					</td>
					<td style="width:352.3pt; border-bottom-style:double; border-bottom-width:4.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:28pt;"><strong><span style="font-family:'Arial Black';">KOTA SEMARANG</span></strong></p>
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Arial Black';">KECAMATAN : BANYUMANIK</span></p>
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Arial Black';">KELURAHAN : PEDALANGAN</span></p>
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Arial Black';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-family:'Arial Black';">RT.04 / RW.03</span></p>
					</td>
				</tr>
			</tbody>
		</table>
		<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
		<table cellpadding="0" cellspacing="0" style="width:465.3pt; border-collapse:collapse;">
			<tbody>
				<tr style="height:111.75pt;">
					<td style="width:51.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Nomor&nbsp;</span></p>
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Lampiran&nbsp;</span></p>
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Hal&nbsp;</span></p>
					</td>
					<td style="width:223.1pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">: <?= $o->no_pengantar; ?></span></p>
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">: -</span></p>
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">: <?= $o->keperluan; ?></span></p>
					</td>
					<td style="width:158.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Semarang, <?= $tanggal ?></span></p>
						<p style="margin-top:0pt; margin-left:36pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Kepadan Yth.</span></p>
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Kepala Kelurahan Pedalangan</span></p>
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Kecamatan Banyumanik</span></p>
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">di</span></p>
						<p style="margin-top:0pt; margin-left:36pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><u><span style="font-family:'Times New Roman';">SEMARANG</span></u></p>
					</td>
				</tr>
			</tbody>
		</table>
		<p style="margin-top:0pt; margin-left:72pt; margin-bottom:10pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Bersama ini menerangkan bahwa :</span></p>
		<table cellpadding="0" cellspacing="0" style="width:466.1pt; border-collapse:collapse;">
			<tbody>
				<tr>
					<td style="width:171.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<ol style="margin:0pt; padding-left:0pt;" type="1">
							<li style="margin-left:32pt; line-height:115%; padding-left:4pt; font-family:'Times New Roman'; font-size:12pt;">Nama</li>
						</ol>
					</td>
					<td style="width:230.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">: <?= $o->nama; ?></span></p>
					</td>
					<td style="width:31.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;">
							<!-- <span style="font-family:'Times New Roman';">(</span> -->
							(<span style="font-family:'Times New Roman'; <?= $L; ?>">L</span>/
							<span style="font-family:'Times New Roman'; <?= $P; ?>">P</span>)
							<!-- <span style="font-family:'Times New Roman';">)</span> -->
						</p>
					</td>
				</tr>
				<tr>

					<td style="width:171.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<ol start="2" style="margin:0pt; padding-left:0pt;" type="1">
							<li style="margin-left:32pt; line-height:115%; padding-left:4pt; font-family:'Times New Roman'; font-size:12pt;">Tempat / Tgl.Lahir</li>
						</ol>
					</td>
					<td colspan="2" style="width:272.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">: <?= $o->tmp_lahir; ?> / <?= tanggal_indo($o->tgl_lahir); ?></span></p>
					</td>
				</tr>
				<tr>
					<td style="width:171.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<ol start="3" style="margin:0pt; padding-left:0pt;" type="1">
							<li style="margin-left:32pt; line-height:115%; padding-left:4pt; font-family:'Times New Roman'; font-size:12pt;">Kewarganegaraan / Agama</li>
						</ol>
					</td>
					<td colspan="2" style="width:272.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">: <?= $o->kewarganegaraan; ?> / <?= $o->agama; ?></span></p>
					</td>
				</tr>
				<tr>
					<td style="width:171.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<ol start="4" style="margin:0pt; padding-left:0pt;" type="1">
							<li style="margin-left:32pt; line-height:115%; padding-left:4pt; font-family:'Times New Roman'; font-size:12pt;">Status</li>
						</ol>
					</td>
					<td colspan="2" style="width:272.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">

						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"> :
							<span style="font-family:'Times New Roman';<?= $BK; ?>">Belum Kawin</span>
							<span style="font-family:'Times New Roman';">/</span>
							<span style="font-family:'Times New Roman';<?= $K; ?>">Kawin</span>
							<span style="font-family:'Times New Roman';">/</span>
							<span style="font-family:'Times New Roman';<?= $J; ?>">Janda</span>
							<span style="font-family:'Times New Roman';">/</span>
							<span style="font-family:'Times New Roman';<?= $D; ?>">Duda</span>
						</p>
					</td>
				</tr>
				<tr>
					<td style="width:171.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<ol start="5" style="margin:0pt; padding-left:0pt;" type="1">
							<li style="margin-left:32pt; line-height:115%; padding-left:4pt; font-family:'Times New Roman'; font-size:12pt;">Pendidika Terakhir</li>
						</ol>
					</td>
					<td colspan="2" style="width:272.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">: <?= $o->pend_terakhir; ?></span></p>
					</td>
				</tr>
				<tr>
					<td style="width:171.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<ol start="6" style="margin:0pt; padding-left:0pt;" type="1">
							<li style="margin-left:32pt; line-height:115%; padding-left:4pt; font-family:'Times New Roman'; font-size:12pt;">Pekerjaan</li>
						</ol>
					</td>
					<td colspan="2" style="width:272.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">: <?= $o->pekerjaan; ?></span></p>
					</td>
				</tr>
				<tr>
					<td style="width:171.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<ol start="7" style="margin:0pt; padding-left:0pt;" type="1">
							<li style="margin-left:32pt; line-height:115%; padding-left:4pt; font-family:'Times New Roman'; font-size:12pt;">Alamat</li>
						</ol>
					</td>
					<td colspan="2" style="width:272.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">: <?= $o->alamat; ?></span></p>
					</td>
				</tr>
				<tr>
					<td style="width:171.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<ol start="8" style="margin:0pt; padding-left:0pt;" type="1">
							<li style="margin-left:32pt; line-height:115%; padding-left:4pt; font-family:'Times New Roman'; font-size:12pt;">No. NIK</li>
						</ol>
					</td>
					<td colspan="2" style="width:272.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">: <?= $o->nik; ?></span></p>
					</td>
				</tr>
				<tr>
					<td style="width:171.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<ol start="9" style="margin:0pt; padding-left:0pt;" type="1">
							<li style="margin-left:32pt; line-height:115%; padding-left:4pt; font-family:'Times New Roman'; font-size:12pt;">Keperluan</li>
						</ol>
					</td>
					<td colspan="2" style="width:272.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">: <?= $o->keperluan; ?></span></p>
					</td>
				</tr>
				<tr>
					<td style="width:171.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<ol start="10" style="margin:0pt; padding-left:0pt;" type="1">
							<li style="margin-left:36pt; line-height:115%; font-family:'Times New Roman'; font-size:12pt;">Keterangan lain-lain</li>
						</ol>
					</td>
					<td colspan="2" style="width:272.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">: <?= $o->lain_lain; ?></span></p>
					</td>
				</tr>
			</tbody>
		</table>
		<p style="margin-top:12pt; margin-left:72pt; margin-bottom:10pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Demikian untuk menjadikan periksa dan guna seperlunya.</span></p>
		<table cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
			<tbody>
				<tr>
					<td style="width:228.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Mengetahui</span></p>
						<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Ketua RW.04</span></p>
						<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
						<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
						<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
						<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
						<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
						<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:12pt;"><u><span style="font-family:'Times New Roman';">(....................)</span></u></p>
					</td>
					<td style="width:228.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
						<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
						<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Ketua RT.09 / RW.04</span></p>
						<div style="position: absolute; width: 50%; left: 340px;">
							<div style="position: absolute; width: 100px; height: 100px;left: 40px;top:0px;z-index:1;">
								<img src="<?= base_url(); ?><?= $validasi_ttd; ?>" alt="ttd" width="150%" height="150%">
							</div>
							<div style="position: absolute; width: 100px; height: 100px;left: 30px;top:0px;z-index:2;">
								<img src="<?= base_url(); ?><?= $validasi_stempel; ?>" alt="stempel" width="230%" height="100%">
							</div>
						</div>
						<br><br><br><br><br>
						<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:12pt;"><u><span style="font-family:'Times New Roman';">( <?= $nama_rt['nama'] ?> )</span></u></p>
					</td>
				</tr>
			</tbody>
		</table>
		<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
		<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:11pt;"><span style="font-family:Calibri;">&nbsp;</span></p>

	</body>
<?php endforeach; ?>

</html>