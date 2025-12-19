<?php require APPROOT . '/views/admin/header.php';?>
<section class="content-header">
  <h1 class="page-header">
    Pages
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
  <div class="col-md-12 mb-10">
    <a class="btn btn-primary pull-right" href="<?php echo URLROOT; ?>/pages/add">
      <i class="fa fa-pencil" aria-hidden="true"></i> Add Page</a>
  </div>
  <div class="col-lg-12">
    <table id="pagesTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
        <?php foreach ($data['pages'] as $page): ?>
        <tr>
          <td>
            <?php echo $page->title; ?>
          </td>
          <td>
            <?php echo limitWords($page->body, 20); ?>
          </td>
          <td>
            <a class="btn btn-dark" href="<?php echo URLROOT; ?>/pages/edit/<?php echo $page->id; ?>">Edit</a>
          </td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
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
    $('#pagesTable').DataTable();
  });

  $(document).ready(function () {
    $('#pages').addClass('active');
  });
</script>

</body>

</html>