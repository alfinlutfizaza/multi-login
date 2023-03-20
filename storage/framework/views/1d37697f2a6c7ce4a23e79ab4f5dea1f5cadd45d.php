<?php $__env->startSection('container'); ?>

    <?php $__currentLoopData = $app_page; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apppost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mb-2" style="width: 28rem; ">
            <div class="card-body">
            <h5 class="card-title"><?php echo e($apppost->title); ?></h5>
            <p class="card-text"><?php echo e($apppost->deskripsi); ?></p>
            <a href=<?php echo e($apppost->link); ?> class="btn btn-primary">Go</a>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamp\htdocs\multi-loginv2\resources\views/app_page.blade.php ENDPATH**/ ?>