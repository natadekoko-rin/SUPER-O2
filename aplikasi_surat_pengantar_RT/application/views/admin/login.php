<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>SUPER-O</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?= base_url('assets2/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets2/'); ?>bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url('assets2/'); ?>bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets2/'); ?>js/plugins/iCheck/square/blue.css" rel="stylesheet">
    <link href="<?= base_url('assets2/'); ?>dist/css/AdminLTE.min.css" rel="stylesheet">
    <link href="<?= base_url('assets2/'); ?>plugins/iCheck/square/blue.css" rel="stylesheet">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url('assets4/'); ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

</head>

<body class="login-page">
    <div><?php if ($this->session->flashdata('sukses')) : ?>
            <script>
                swal({
                    title: 'Keluar !!!',
                    text: "<?php echo $this->session->flashdata('sukses'); ?>",
                    type: 'success'
                });
            </script>
        <?php endif ?>
    </div>

    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Login</b> Admin</a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Silahkan Masukan Username & Password Anda </p>
            <form action="<?php echo site_url('Auth/login'); ?>" method="post">
                <?php
                if (validation_errors() || $this->session->flashdata('result_login')) {
                ?>
                    <div class="alert alert-error">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Warning!</strong>
                        <?php echo validation_errors(); ?>
                        <?php echo $this->session->flashdata('result_login'); ?>
                    </div>
                <?php } ?>

                <div><?php
                        $data = $this->session->flashdata('sukses');
                        if ($data != "") { ?>
                        <div class="alert alert-success"><strong>Sukses! </strong> <?= $data; ?></div>
                    <?php } ?>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" name="username" class="form-control" placeholder="Username" />
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password" />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-offset-8 col-xs-4">
                        <button type="submit" class="btn btn-danger btn-block btn-flat">Sign In</button>
                    </div><!-- /.col -->
                </div>
            </form>

        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <script src="<?= base_url('assets2/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url('assets2/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?= base_url('assets2/'); ?> plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
</body>

</html>