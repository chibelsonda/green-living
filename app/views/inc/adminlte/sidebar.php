<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">

            <!-- Optionally, you can add icons to the links -->
            <li id="dashboard">
                <a href="<?php echo URLROOT; ?>/users">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li id="btree">
                <a href="<?php echo URLROOT; ?>/users/btree/<?php echo $_SESSION['user_id']; ?>">
                    <i class="fa fa-sitemap"></i>
                    <span>Genealogy Tree</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-link"></i>
                    <span>Multilevel</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#">Link in level 2</a>
                    </li>
                    <li>
                        <a href="#">Link in level 2</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>