<!DOCTYPE HTML>
<!--
	Overflow by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Overflow by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/main.css" />
    <noscript>
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/noscript.css" />
    </noscript>
    <script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.js'); ?>"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>

</head>

<body class="is-preload">

    <!-- Header -->
    <section id="header">
        <header>
            <h1>SISTEM INFORMASI</h1>
            <p>PENGAJUAN SURAT PENGANTAR RT 04 RW 03</p>
        </header>
        <footer>
            <a href="#first" class="button style2 scrolly-middle">Asli warga Pedalangan RT 04 RW 03 ?</a>
        </footer>
    </section>

    <!-- Banner -->
    <section id="banner">
        <header>
            <h2>UNTUK WARGA PENDATANG</h2>
        </header>
        <!-- <p>A brand new site template designed by <a href="http://twitter.com/ajlkn">AJ</a> for <a href="http://html5up.net">HTML5 UP</a>.<br />
			It’s responsive, built on HTML5/CSS3, and entirely free<br />
			under the <a href="http://html5up.net/license">Creative Commons license</a>.</p>
		<footer> -->
        <a href="#second" class="button style2 scrolly">Warga pendatang ?</a>
        </footer>
    </section>

    <!-- Feature 1 -->
    <article id="first" class="container box style1 right">
        <a href="#" class="image fit"><img src="<?= base_url('assets/'); ?>images/pic01.jpg" alt="" /></a>
        <div class="inner">
            <header>
                <h2>Buat surat pengantar
                    Disini</h2>
            </header>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-tambah">
                Buat Pengantar
            </button>
            <p>Tortor faucibus ullamcorper nec tempus purus sed penatibus. Lacinia pellentesque eleifend vitae est elit tristique velit tempus etiam.</p>
        </div>
    </article>
    <div class="modal fade" id="modal-tambah">aaa</div>


    <!-- Feature 2 -->
    <article id="second" class="container box style1 left">
        <a href="#" class="image fit"><img src="<?= base_url('assets/'); ?>images/pic02.jpg" alt="" /></a>
        <div class="inner">
            <header>
                <h2>Mollis posuere<br />
                    lectus lacus</h2>
            </header>
            <p>Rhoncus mattis egestas sed fusce sodales rutrum et etiam ullamcorper. Etiam egestas scelerisque ac duis magna lorem ipsum dolor.</p>
        </div>
    </article>

    <!-- modal -->
    <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog">
            <form action="<?php echo site_url('pengantar_c/simpan'); ?>" method="post">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Isikan Keperluan Anda</h4>
                    </div>

                    <div class="modal-body">


                        <div class="form-group">
                            <label class='col-md-3'>No Pengantar</label>
                            <div class='col-md-9'><input type="text" name="no_pengantar" value="<?= $nomer; ?>" class="form-control" readonly=""></div>
                        </div>

                        <div class="form-group">
                            <label class='col-md-3'>NIK</label>
                            <div class='col-md-9'>
                                <input type="text" id="NIK" name="NIK" placeholder="Masukan NIK Anda" class="form-control" required="">
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label class='col-md-3'>Nama Lengkap</label>
                            <div class='col-md-9'><input type="text" name="nama" autocomplete="off" placeholder="Nama Otomatis" class="form-control" readonly="" required=""></div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label class='col-md-3'>Keperluan</label>
                            <div class='col-md-9'><input type="text" name="keperluan" autocomplete="off" placeholder="Masukkan keperluan" class="form-control" required=""></div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label class='col-md-3'>Lain lain</label>
                            <div class='col-md-9'><textarea type="text" name="lain_lain" autocomplete="off" required placeholder="Lain Lain" class="form-control" required=""></textarea></div>
                        </div>
                        </br><br><br>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Buat</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </form>
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Portfolio -->
    <article class="container box style2">
        <header>
            <h2>Magnis parturient</h2>
            <p>Justo phasellus et aenean dignissim<br />
                placerat cubilia purus lectus.</p>
        </header>
        <div class="inner gallery">
            <div class="row gtr-0">
                <div class="col-3 col-12-mobile"><a href="<?= base_url('assets/'); ?>images/fulls/01.jpg" class="image fit"><img src="<?= base_url('assets/'); ?>images/thumbs/01.jpg" alt="" title="Ad infinitum" /></a></div>
                <div class="col-3 col-12-mobile"><a href="<?= base_url('assets/'); ?>images/fulls/02.jpg" class="image fit"><img src="<?= base_url('assets/'); ?>images/thumbs/02.jpg" alt="" title="Dressed in Clarity" /></a></div>
                <div class="col-3 col-12-mobile"><a href="<?= base_url('assets/'); ?>images/fulls/03.jpg" class="image fit"><img src="<?= base_url('assets/'); ?>images/thumbs/03.jpg" alt="" title="Raven" /></a></div>
                <div class="col-3 col-12-mobile"><a href="<?= base_url('assets/'); ?>images/fulls/04.jpg" class="image fit"><img src="<?= base_url('assets/'); ?>images/thumbs/04.jpg" alt="" title="I'll have a cup of Disneyland, please" /></a></div>
            </div>
            <div class="row gtr-0">
                <div class="col-3 col-12-mobile"><a href="images/fulls/05.jpg" class="image fit"><img src="images/thumbs/05.jpg" alt="" title="Cherish" /></a></div>
                <div class="col-3 col-12-mobile"><a href="images/fulls/06.jpg" class="image fit"><img src="images/thumbs/06.jpg" alt="" title="Different." /></a></div>
                <div class="col-3 col-12-mobile"><a href="images/fulls/07.jpg" class="image fit"><img src="images/thumbs/07.jpg" alt="" title="History was made here" /></a></div>
                <div class="col-3 col-12-mobile"><a href="images/fulls/08.jpg" class="image fit"><img src="images/thumbs/08.jpg" alt="" title="People come and go and walk away" /></a></div>
            </div>
        </div>
    </article>

    <!-- Contact -->
    <article class="container box style3">
        <header>
            <h2>Nisl sed ultricies</h2>
            <p>Diam dignissim lectus eu ornare volutpat orci.</p>
        </header>
        <form method="post" action="#">
            <div class="row gtr-50">
                <div class="col-6 col-12-mobile"><input type="text" class="text" name="name" placeholder="Name" /></div>
                <div class="col-6 col-12-mobile"><input type="text" class="text" name="email" placeholder="Email" /></div>
                <div class="col-12">
                    <textarea name="message" placeholder="Message"></textarea>
                </div>
                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Send Message" /></li>
                    </ul>
                </div>
            </div>
        </form>
    </article>

    <!-- Generic -->
    <!--
			<article class="container box style3">
				<header>
					<h2>Generic Box</h2>
					<p>Just a generic box. Nothing to see here.</p>
				</header>
				<section>
					<header>
						<h3>Paragraph</h3>
						<p>This is a subtitle</p>
					</header>
					<p>Phasellus nisl nisl, varius id <sup>porttitor sed pellentesque</sup> ac orci. Pellentesque
					habitant <strong>strong</strong> tristique <b>bold</b> et netus <i>italic</i> malesuada <em>emphasized</em> ac turpis egestas. Morbi
					leo suscipit ut. Praesent <sub>id turpis vitae</sub> turpis pretium ultricies. Vestibulum sit
					amet risus elit.</p>
				</section>
				<section>
					<header>
						<h3>Blockquote</h3>
					</header>
					<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget.
					tempus euismod. Vestibulum ante ipsum primis in faucibus.</blockquote>
				</section>
				<section>
					<header>
						<h3>Divider</h3>
					</header>
					<p>Donec consectetur <a href="#">vestibulum dolor et pulvinar</a>. Etiam vel felis enim, at viverra
					ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
					facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
					tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
					posuere cubilia.</p>
					<hr />
					<p>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra
					ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
					facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
					tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
					posuere cubilia.</p>
				</section>
				<section>
					<header>
						<h3>Unordered List</h3>
					</header>
					<ul>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
					</ul>
				</section>
				<section>
					<header>
						<h3>Ordered List</h3>
					</header>
					<ol>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
					</ol>
				</section>
				<section>
					<header>
						<h3>Table</h3>
					</header>
					<div class="table-wrapper">
						<table>
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Description</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>45815</td>
									<td>Something</td>
									<td>Ut porttitor sagittis lorem quis nisi ornare.</td>
									<td>29.99</td>
								</tr>
								<tr>
									<td>24524</td>
									<td>Nothing</td>
									<td>Ut porttitor sagittis lorem quis nisi ornare.</td>
									<td>19.99</td>
								</tr>
								<tr>
									<td>45815</td>
									<td>Something</td>
									<td>Ut porttitor sagittis lorem quis nisi ornare.</td>
									<td>29.99</td>
								</tr>
								<tr>
									<td>24524</td>
									<td>Nothing</td>
									<td>Ut porttitor sagittis lorem quis nisi ornare.</td>
									<td>19.99</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td colspan="3"></td>
									<td>100.00</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</section>
				<section>
					<header>
						<h3>Form</h3>
					</header>
					<form method="post" action="#">
						<div class="row">
							<div class="col-6 col-12-mobile">
								<input class="text" type="text" name="name" id="name" value="" placeholder="John Doe" />
							</div>
							<div class="col-6 col-12-mobile">
								<input class="text" type="text" name="email" id="email" value="" placeholder="johndoe@domain.tld" />
							</div>
							<div class="col-12">
								<select name="department" id="department">
									<option value="">Choose a department</option>
									<option value="1">Manufacturing</option>
									<option value="2">Administration</option>
									<option value="3">Support</option>
								</select>
							</div>
							<div class="col-12">
								<input class="text" type="text" name="subject" id="subject" value="" placeholder="Enter your subject" />
							</div>
							<div class="col-12">
								<textarea name="message" id="message" placeholder="Enter your message"></textarea>
							</div>
							<div class="col-12">
								<ul class="actions">
									<li><input type="submit" value="Submit" /></li>
									<li><input type="reset" class="style3" value="Clear Form" /></li>
								</ul>
							</div>
						</div>
					</form>
				</section>
			</article>
		 -->


    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.min.js' ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#NIK').on('input', function() {

                var NIK = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('index.php/welcome/get_nik') ?>",
                    dataType: "JSON",
                    data: {
                        NIK: NIK
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

    <section id="footer">
        <ul class="icons">
            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands fa-google-plus-g"><span class="label">Google+</span></a></li>
            <li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
            <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
            <li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
        </ul>
        <div class="copyright">
            <ul class="menu">
                <li>&copy; Untitled. All rights reserved.</li>
                <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>
    </section>


    <!-- Scripts -->
    <script src="<?= base_url('assets/'); ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/jquery.scrolly.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/jquery.poptrox.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/browser.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/breakpoints.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/util.js"></script>
    <script src="<?= base_url('assets/'); ?>js/main.js"></script>

</body>

</html>