<?php $__env->startSection('container'); ?>
<div class="table-responsive">
  <h1>Halaman TU</h1>

  <?php if(session()->has('success')): ?>
  <div class="alert alert-success col-lg-8" role="alert">
  <?php echo e(session('success')); ?>

  </div>
  <?php endif; ?>

  <a href="/dashboard/tuposts/create" class="btn btn-primary mb-3">Create</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Title</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Link</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $tuposts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tupost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h1></h1>
            <tr>
              <td><?php echo e($loop->iteration); ?></td>
              <td><?php echo e($tupost->title); ?></td>
              <td><?php echo e($tupost->deskripsi); ?></td>
              <td><?php echo e($tupost->link); ?></td>
              <td>
                <a href="/dashboard/tuposts/<?php echo e($tupost->id); ?>" class="badge bg-info mb-2"><span data-feather="eye" class="align-text-bottom"></span></a>
                <a href="/dashboard/tuposts/<?php echo e($tupost->id); ?>/edit" class="badge bg-warning mb-2"><span data-feather="edit" class="align-text-bottom"></span></a>
                <form action="/dashboard/tuposts/<?php echo e($tupost->id); ?>" method="post" class="d-inline">
                  <?php echo method_field('delete'); ?>
                  <?php echo csrf_field(); ?>
                  <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></button>
                </form>
              </td>
              
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamp\htdocs\multi-loginv2\resources\views/dashboard/tupost/index.blade.php ENDPATH**/ ?>