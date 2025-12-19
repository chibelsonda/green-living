<?php require APPROOT . '/views/admin/header.php'; ?>
<!-- Main content -->
<section class="content container-fluid">
  <div class="row">
    <div class="col col-lg-10">
      <a href="javascript:history.go(-1)" class="btn btn-light mb-3">
        <i class="fa fa-backward" aria-hidden="true"></i> Back</a>
      <br>
      <h1>
        <?php echo $data['post']->title; ?>
      </h1>
      <div class="bg-secondary text-white p-2 mb-3">
        Written by
        <?php echo $data['user']->name; ?> on
        <?php echo $data['post']->created_at; ?>
      </div>
      <p>
        <?php echo $data['post']->body; ?>
      </p>
      <?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
      <hr>
      <a class="btn btn-dark" href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>">Edit</a>

      <form class="pull-right" action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="post">
        <input type="submit" class="btn btn-danger" value="Delete">
      </form>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php require APPROOT . '/views/inc/adminlte/mainfooter.php';?>
<?php require APPROOT . '/views/inc/adminlte/script.php';?>
<script>
  $(document).ready(function () {
    $('#posts').addClass('active');
  });
</script>

</body>

</html>