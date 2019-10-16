<?php $__env->startSection('css'); ?>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <!-- DataTables -->
    <script src="<?php echo e(asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
    <script>
        $('#datatable').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : true
        })
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><?php echo e($title); ?></h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(url('admin-panel/dashboard')); ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active"><?php echo e($title); ?></li>
        </ol>
    </section>

    <section class="content">
        <?php if(session('message')): ?>
            <div class="alert alert-info"><?php echo e(flash('message')); ?></div>
        <?php endif; ?>
        <div class="box">
            <div class="box-header">
                <?php echo e($title); ?>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="datatable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full url</th>
                        <th>Short url</th>
                        <th>User</th>
                        <th>Click</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($link->id); ?></td>
                            <td><a href="<?php echo e($link->full_url); ?>" target="_blank"><?php echo e($link->full_url); ?></a></td>
                            <td><a href="<?php echo e(url('link/' . $link->short_url)); ?>" target="_blank"><?php echo e($link->short_url); ?></a></td>
                            <td><?php echo e(isset($link->user) ? $link->user->first_name : '-'); ?></td>
                            <td><?php echo e($link->click); ?></td>
                            <td>
                                <a href="#" data-action="<?php echo e(url('admin-panel/links/'. $link->id . '/delete')); ?>" class="btn btn-danger delete_confirmation" data-toggle="modal" data-target="#deleteModal">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Full url</th>
                        <th>Short url</th>
                        <th>User</th>
                        <th>Click</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </section>

    <?php echo $__env->make('admin.layouts.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\shorten\views/admin/links/index.blade.php ENDPATH**/ ?>