<?php require APPROOT . '/views/inc/header.php';?>
<div class="row page">
  <div class="col col-lg-10 mx-auto mt-20">
    <?php if (is_object($data['page'])) {
        echo '<h3>' . $data['page']->title . '</h3><hr>';
        echo '<p>' . $data['page']->body . '</p>';
          } else {
              echo '<h2> Page not found.</h2>';
          }
    ?>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php';?>