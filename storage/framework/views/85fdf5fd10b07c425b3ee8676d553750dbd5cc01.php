<?php $__env->startSection('container'); ?>

    <?php $__currentLoopData = $auditor_page; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auditorpost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mb-2" style="width: 28rem; ">
            <div class="card-body">
            <h5 class="card-title"><?php echo e($auditorpost->title); ?></h5>
            <p class="card-text"><?php echo e($auditorpost->deskripsi); ?></p>
            <a href=<?php echo e($auditorpost->link); ?> class="btn btn-primary">Go</a>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamp\htdocs\multi-loginv2\resources\views/auditor_page.blade.php ENDPATH**/ ?>