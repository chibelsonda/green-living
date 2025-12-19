<?php require APPROOT . '/views/inc/user/header.php';?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">E-Pin</h1>
            </div>
            <div class="col-lg-10">
                <table id="pinTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Pin</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Pin</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($data['pins'] as $pin): ?>
                        <tr>
                            <td><?php echo $pin->userid; ?></td>
                            <td><?php echo $pin->pin; ?></td>
                            <td><?php echo $pin->status; ?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/user/footer.php';?>