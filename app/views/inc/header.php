<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
<!--   <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/menu/component.css">
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/menu/default.css"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/style.css">
  <script src="<?php echo URLROOT; ?>/public/js/menu/modernizr.custom.js"></script>
  <title>
    <?php echo SITENAME; ?>
  </title>
</head>

<body>
  <div class="container-fluid ">
    <div class="row header">
      <div class="col-lg-10 mx-auto">
        <a class="navbar-brand text-success" href="<?php echo URLROOT; ?>">
          <img src="<?php echo URLROOT; ?>/public/image/logo.png" alt="" width="70">
        </a>
      </div>
    </div>

  <!--   <div class="container">
  <?php  //require APPROOT . '/views/inc/navbar.php'; ?>
  </div>
 -->
 <nav class="navbar  navbar-expand-lg navbar-dark bg-dark mb-3  nav">
    <div class="container demo-1">

      <div class=" clearfix">
        <div class="column">
          <div id="dl-menu" class="dl-menuwrapper">
            <a class="dl-trigger dropdown-toggle">Open Menu</a>
            <ul class="dl-menu">
              <li>
                <a href="#">Fashion</a>
                <ul class="dl-submenu">
                  <li>
                    <a href="#">Men</a>
                    <ul class="dl-submenu">
                      <li>
                        <a href="#">Shirts</a>
                      </li>
                      <li>
                        <a href="#">Jackets</a>
                      </li>
                      <li>
                        <a href="#">Chinos &amp; Trousers</a>
                      </li>
                      <li>
                        <a href="#">Jeans</a>
                      </li>
                      <li>
                        <a href="#">T-Shirts</a>
                      </li>
                      <li>
                        <a href="#">Underwear</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Women</a>
                    <ul class="dl-submenu">
                      <li>
                        <a href="#">Jackets</a>
                      </li>
                      <li>
                        <a href="#">Knits</a>
                      </li>
                      <li>
                        <a href="#">Jeans</a>
                      </li>
                      <li>
                        <a href="#">Dresses</a>
                      </li>
                      <li>
                        <a href="#">Blouses</a>
                      </li>
                      <li>
                        <a href="#">T-Shirts</a>
                      </li>
                      <li>
                        <a href="#">Underwear</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Children</a>
                    <ul class="dl-submenu">
                      <li>
                        <a href="#">Boys</a>
                      </li>
                      <li>
                        <a href="#">Girls</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">Electronics</a>
                <ul class="dl-submenu">
                  <li>
                    <a href="#">Camera &amp; Photo</a>
                  </li>
                  <li>
                    <a href="#">TV &amp; Home Cinema</a>
                  </li>
                  <li>
                    <a href="#">Phones</a>
                  </li>
                  <li>
                    <a href="#">PC &amp; Video Games</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">Furniture</a>
                <ul class="dl-submenu">
                  <li>
                    <a href="#">Living Room</a>
                    <ul class="dl-submenu">
                      <li>
                        <a href="#">Sofas &amp; Loveseats</a>
                      </li>
                      <li>
                        <a href="#">Coffee &amp; Accent Tables</a>
                      </li>
                      <li>
                        <a href="#">Chairs &amp; Recliners</a>
                      </li>
                      <li>
                        <a href="#">Bookshelves</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Bedroom</a>
                    <ul class="dl-submenu">
                      <li>
                        <a href="#">Beds</a>
                        <ul class="dl-submenu">
                          <li>
                            <a href="#">Upholstered Beds</a>
                          </li>
                          <li>
                            <a href="#">Divans</a>
                          </li>
                          <li>
                            <a href="#">Metal Beds</a>
                          </li>
                          <li>
                            <a href="#">Storage Beds</a>
                          </li>
                          <li>
                            <a href="#">Wooden Beds</a>
                          </li>
                          <li>
                            <a href="#">Children's Beds</a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="#">Bedroom Sets</a>
                      </li>
                      <li>
                        <a href="#">Chests &amp; Dressers</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Home Office</a>
                  </li>
                  <li>
                    <a href="#">Dining &amp; Bar</a>
                  </li>
                  <li>
                    <a href="#">Patio</a>
                  </li>
                </ul>
              </li>

            </ul>
          </div>
          <!-- /dl-menuwrapper -->
        </div>
      </div>
    </div>
    <!-- /container -->
</nav>
 
<div>
  <?php 
    //require APPROOT . '/views/inc/navbar.php';
   
    if ($_SERVER['REQUEST_URI'] == '/greenliving/'){
     require APPROOT . '/views/inc/carouselslider.php';
    }
  ?>
</div>


  
<!--   <div class="container"> -->