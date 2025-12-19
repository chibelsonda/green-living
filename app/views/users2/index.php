<?php require APPROOT . '/views/inc/adminlte/header.php';  ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1 class="page-header">
        Dashboard
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


</section>
<!-- /.content -->

<?php require APPROOT . '/views/inc/adminlte/mainfooter.php';?>

<?php require APPROOT . '/views/inc/adminlte/script.php';?>
<script>
    $(document).ready(function () {
        $('#dashboard').addClass('active');
    });
</script>

</body>

</html>