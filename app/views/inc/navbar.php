<nav class="navbar  navbar-expand-lg navbar-dark bg-dark mb-3  nav">
  <div class="container">
    <a class="navbar-brand text-success" href="<?php echo URLROOT; ?>">
      <img src="<?php echo URLROOT; ?>/public/image/logo.png" alt="" width="70">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownAbout" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            About
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownAbout">
            <a class="dropdown-item" href="<?php echo URLROOT; ?>/pages/show/companyprofile">Company Profile</a>
            <a class="dropdown-item" href="<?php echo URLROOT; ?>/pages/show/vision">Vision</a>
            <a class="dropdown-item" href="<?php echo URLROOT; ?>/pages/show/mission">Mission</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/pages/services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/pages/contact">Contact</a>
        </li>
        <?php if(isset($_SESSION['user_id'])) : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">
            <i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users">
            <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
        </li>
        <?php else : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">
            <i class="fa fa-user-plus" aria-hidden="true"></i> Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">
            <i <i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
