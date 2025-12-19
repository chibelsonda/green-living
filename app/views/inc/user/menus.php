<nav class="navbar navbar-default fixed-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo URLROOT; ?>">
            <?php echo SITENAME; ?>
        </a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">

        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>
                <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-message">
                <li>
                    <a href="<?php echo URLROOT; ?>/users/profile/<?php echo $_SESSION['user_id']; ?>">
                        <i class="fa fa-user fa-fw"></i>Profile</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="<?php echo URLROOT; ?>/users/logout">
                        <i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="<?php echo URLROOT; ?>/users">
                        <i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="pin-request.php">
                        <i class="fa fa-adjust fa-fw"></i> Pin Request</a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/pins/show/<?php echo $_SESSION['user_email']; ?>">
                        <i class="fa fa-map-pin fa-fw"></i> E-Pin</a>
                </li>
                <li>
                    <a href="join.php">
                        <i class="fa fa-user-plus fa-fw"></i> Join User</a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/users/btree/<?php echo $_SESSION['user_id']; ?>">
                        <i class="fa fa-sitemap fa-fw"></i> Genealogy Tree</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>