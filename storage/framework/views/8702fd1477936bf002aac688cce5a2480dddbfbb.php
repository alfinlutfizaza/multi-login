<?php $__env->startSection('container'); ?>
    <h1></h1>
    <h1></h1>
    <h1></h1>
    <h1></h1>
    <div class="card" style="width: 28rem; ">
        <div class="card-body">
            <h5 class="card-title"><?php echo e($user->name); ?></h5>
            <h5 class="card-title"><?php echo e($user->level); ?></h5>
            <h5 class="card-title"><?php echo e($user->email); ?></h5>>
            <h5 class="card-title"><?php echo e($user->password); ?></h5>
            <a href="/dashboard/register" class="btn btn-success"><span data-feather="arrow-left"></span>Back</a>
            <a href="/dashboard/register/<?php echo e($user->id); ?>/edit" class="btn btn-warning"><span
                    data-feather="edit"></span>Edit</a>
            <form action="/dashboard/register/<?php echo e($user->id); ?>" method="post" class="d-inline">
                <?php echo method_field('delete'); ?>
                <?php echo csrf_field(); ?>
                <button class="btn btn-danger " onclick="return confirm('Are you sure?')"><span data-feather="x-circle"
                        class="align-text-bottom"></span>Delete</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamp\htdocs\multi-loginv2\resources\views/dashboard/register/show.blade.php ENDPATH**/ ?>