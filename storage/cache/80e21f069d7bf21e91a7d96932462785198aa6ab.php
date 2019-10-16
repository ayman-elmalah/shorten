<?php $__env->startSection('content'); ?>
    <section class="result text-center">
        <div class="container">
            <h1  class="pb-2 ">Result</h1>
            <div class="row">
                <div class="col-md-12">
                    <?php if(session('message')): ?>
                        <div class="alert alert-danger"><?php echo e(flash('message')); ?></div>
                    <?php endif; ?>
                    <table class="table">
                        <tr>
                            <th>Full utl</th>
                            <th>Shorten Link</th>
                            <th>Clicks Count</th>
                            <th>Copy</th>
                            <th>Delete</th>
                        </tr>
                        <?php $__currentLoopData = $links['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($link->full_url); ?></td>
                                <td><?php echo e(url('link/'.$link->short_url)); ?></td>
                                <td><?php echo e($link->click); ?></td>
                                <td> <button class="btn text-white" onclick="copy('<?php echo e(url('link/'.$link->short_url)); ?>')">Copy</button> </td>
                                <td>
                                    <a href="#" data-action="<?php echo e(url('link/'. $link->id . '/delete')); ?>" class="btn btn-danger delete_confirmation" data-toggle="modal" data-target="#deleteModal">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>

            <?php echo links($links['current_page'], $links['pages']); ?>

        </div>
    </section>

    <?php echo $__env->make('web.layouts.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        function copy(text) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(text).select();
            document.execCommand("copy");
            $temp.remove();
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\shorten\views/web/links/index.blade.php ENDPATH**/ ?>