<?php require APPROOT . '/views/admin/header.php'; ?>

<section class="content-header">
  <h1 class="page-header">
    Posts
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
    <div class="col col-lg-12">
      <?php flash('post_message'); ?>
      <div class="row mb-3 mb-10">
        <div class="col-md-12">
          <a class="btn btn-primary pull-right" href="<?php echo URLROOT; ?>/posts/add">
            <i class="fa fa-pencil" aria-hidden="true"></i> Add Post</a>
        </div>
      </div>
      <div class="col-lg-12">
        <table id="postsTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Title</th>
              <th>Body</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Title</th>
              <th>Body</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach ($data['posts'] as $post): ?>
            <tr>
              <td>
                <?php echo $post->title; ?>
              </td>
              <td>
                <?php echo limitWords($post->body, 20); ?>
              </td>
              <td>
                <a class="btn btn-dark" href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>">More</a>
              </td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<?php require APPROOT . '/views/inc/adminlte/mainfooter.php';?>
<?php require APPROOT . '/views/inc/adminlte/script.php';?>
<script src="<?php echo URLROOT; ?>/public/js/jquery/jquery.dataTables.min.js"></script>
<script src="<?php echo URLROOT; ?>/public/js/bootstrap/js/dataTables.bootstrap.min.js"></script>
<script>
  loadCSS = function (href) {

    var cssLink = $("<link>");
    $("head").append(cssLink); //IE hack: append before setting href

    cssLink.attr({
      rel: "stylesheet",
      type: "text/css",
      href: href
    });
  };

  loadCSS("<?php echo URLROOT; ?>/public/css/bootstrap/css/dataTables.bootstrap.min.css");

  $(document).ready(function () {
    $('#postsTable').DataTable();
  });

  $(document).ready(function () {
    $('#posts').addClass('active');
  });
</script>

</body>

</html>