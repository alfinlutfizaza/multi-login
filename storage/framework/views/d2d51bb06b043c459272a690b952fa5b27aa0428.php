<?php if(@auth()->user()->level == 'App1'): ?>
    <?php echo $__env->make('app_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(@auth()->user()->level == 'App2'): ?>
    <?php echo $__env->make('appb_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH C:\xamp\htdocs\multi-loginv2\resources\views/index.blade.php ENDPATH**/ ?>