<?php require APPROOT . '/views/admin/header.php'; ?>
<!-- Main content -->
<section class="content container-fluid">
  <div class="row">
    <div class="col col-lg-10">
      <a href="javascript:history.go(-1)" class="btn btn-light">
        <i class="fa fa-backward" aria-hidden="true"></i> Back</a>
      <div class="card card-body bg-light">
        <h2>Add Page</h2>

        <form action="<?php echo URLROOT; ?>/pages/add" method="post">
          <div class="form-group">
            <label>Title:
              <sup>*</sup>
            </label>
            <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>"
              value="<?php echo $data['title']; ?>" placeholder="Add a title...">
            <span class="invalid-feedback">
              <?php echo $data['title_err']; ?>
            </span>
          </div>
          <div class="form-group">
            <label>Body:
              <sup>*</sup>
            </label>
            <textarea name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"
              placeholder="Add some text...">
              <?php echo $data['body']; ?>
            </textarea>
            <span class="invalid-feedback">
              <?php echo $data['body_err']; ?>
            </span>
          </div>
          <input type="submit" class="btn btn-success" value="Submit">
        </form>
      </div>
    </div>
  </div>
</section>

<?php require APPROOT . '/views/inc/adminlte/mainfooter.php';?>
<?php require APPROOT . '/views/inc/adminlte/script.php';?>
<script src="<?php echo URLROOT; ?>/public/js/tinymce/tinymce.min.js"></script>
<script src="<?php echo URLROOT; ?>/public/js/tinymceinit.js"></script>
<script>
  $(document).ready(function () {
    $('#pages').addClass('active');
  });
</script>

</body>

</html>