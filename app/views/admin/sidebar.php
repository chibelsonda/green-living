<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">

            <li id="dashboard">
                <a href="<?php echo URLROOT; ?>/users">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li id="pages">
                <a href="<?php echo URLROOT; ?>/pages/list">
                    <i class="fa fa-file-text-o"></i>
                    <span>Pages</span>
                </a>
            </li>
            <li id="posts">
                <a href="<?php echo URLROOT; ?>/posts">
                    <i class="fa fa-file-text-o"></i>
                    <span>Posts</span>
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