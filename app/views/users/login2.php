<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/adminlte/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/adminlte/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/adminlte/plugins/iCheck/square/blue.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?php echo URLROOT; ?>">
                <img src="<?php echo URLROOT; ?>/public/image/logo2.png" alt="logo" style="width:250px">
            </a>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg">Please fill in your credentials to login</p>

            <form action="<?php echo URLROOT; ?>/users/login" method="post">
                <div class="form-group has-feedback <?php echo (!empty($data['email_err'])) ? 'has-error' : ''; ?>">
                    <input name="email" type="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <span class="help-block"><?php echo $data['email_err']; ?></span>
                </div>
                <div class="form-group has-feedback <?php echo (!empty($data['password_err'])) ? 'has-error' : ''; ?>"> 
                    <input name="password" type="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <span class="help-block"><?php echo $data['password_err']; ?></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
            </form>
            <a href="#">I forgot my password</a>
            <br>
            <a href="<?php echo URLROOT; ?>/users/register" class="text-center">No account? Register</a>

        </div>
    </div>

    <script src="<?php echo URLROOT; ?>/public/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo URLROOT; ?>/public/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo URLROOT; ?>/public/adminlte/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

</html>