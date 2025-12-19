<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration Page</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/adminlte/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/adminlte/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/adminlte/plugins/iCheck/square/blue.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="<?php echo URLROOT; ?>">
                <img src="<?php echo URLROOT; ?>/public/image/logo2.png" alt="logo" style="width:250px">
            </a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Please fill this form to register with us</p>

            <form action="<?php echo URLROOT; ?>/users/register" method="post">
                <div class="form-group has-feedback <?php echo (!empty($data['name_err'])) ? 'has-error' : ''; ?>">
                    <input type="text" name="name" class="form-control" placeholder="Full name">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    <span class="help-block"><?php echo $data['name_err']; ?></span>
                </div>
                <div class="form-group has-feedback <?php echo (!empty($data['email_err'])) ? 'has-error' : ''; ?>">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <span class="help-block"><?php echo $data['email_err']; ?></span>
                </div>
                <div class="form-group has-feedback <?php echo (!empty($data['password_err'])) ? 'has-error' : ''; ?>">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <span class="help-block"><?php echo $data['password_err']; ?></span>
                </div>
                <div class="form-group has-feedback <?php echo (!empty($data['confirm_password_err'])) ? 'has-error' : ''; ?>">
                    <input type="password" name="confirm_password" class="form-control" placeholder="Retype password">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    <span class="help-block"><?php echo $data['confirm_password_err']; ?></span>
                </div>
                <div class="row">

                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                    <div class="col-xs-6 pull-right ">
                        <a href="<?php echo URLROOT; ?>/users/login" class="text-center">Have an account? Login</a>
                    </div>
                </div>
            </form>


        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

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