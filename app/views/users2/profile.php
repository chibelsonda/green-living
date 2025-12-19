<?php require APPROOT . '/views/inc/adminlte/header.php';  ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1 class="page-header">
        Profile
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i> Level</a>
        </li>
        <li class="active">Here</li>
    </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
    <div class="row">
        <div class="col-lg-5 mb-10">
            <form action="<?php echo URLROOT; ?>/users/update/<?php echo $data['id']; ?>" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control form-control-md <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $data['name']; ?>">
                    <span class="invalid-feedback">
                        <?php echo $data['name_err']; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" name="email" class="form-control form-control-md <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $data['email']; ?>">
                    <span class="invalid-feedback">
                        <?php echo $data['email_err']; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control form-control-md <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"
                        value="<?php //echo $data['password']; ?>">
                    <span class="invalid-feedback">
                        <?php echo $data['password_err']; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control form-control-md <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>"
                        value="<?php //echo $data['confirm_password']; ?>">
                    <span class="invalid-feedback">
                        <?php echo $data['confirm_password_err']; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label>Contact</label>
                    <input type="text" name="contact" class="form-control form-control-md <?php echo (!empty($data['contact'])) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $data['contact']; ?>">
                    <span class="invalid-feedback">
                        <?php echo $data['contact_err']; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" class="form-control form-control-md <?php echo (!empty($data['address'])) ? 'is-invalid' : ''; ?>">
                        <?php echo $data['address']; ?>
                    </textarea>
                    <span class="invalid-feedback">
                        <?php echo $data['address_err']; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label>Reference Email</label>
                    <input type="text" name="refEmail" class="form-control form-control-md <?php echo (!empty($data['refEmail'])) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $data['refEmail']; ?>">
                    <span class="invalid-feedback">
                        <?php echo $data['refEmailErr']; ?>
                    </span>
                </div>

                <div class="form-row mb-5">
                    <div class="col">
                        <input type="submit" class="btn btn-info" value="Update">
                    </div>
                </div>
            </form>
        </div>
        <!-- /.col-lg-12 -->
    </div>
</section>
<!-- /.content -->

<?php require APPROOT . '/views/inc/adminlte/footer.php';?>

</body>

</html>