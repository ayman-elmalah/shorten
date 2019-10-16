<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(asset('admin/dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="<?php echo e(auth('admins')->user_name); ?>">
            </div>
            <div class="pull-left info">
                <p><?php echo e(auth('admins')->first_name); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="<?php echo e(url('admin-panel/dashboard')); ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(url('admin-panel/admins')); ?>">
                    <i class="fa fa-cogs"></i> <span>Admins</span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(url('admin-panel/users')); ?>">
                    <i class="fa fa-users"></i> <span>Users</span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(url('admin-panel/links')); ?>">
                    <i class="fa fa-th"></i> <span>Links</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"><?php /**PATH E:\xampp\htdocs\shorten\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>