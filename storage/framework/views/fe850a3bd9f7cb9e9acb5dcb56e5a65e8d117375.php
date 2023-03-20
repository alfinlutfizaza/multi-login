<?php $__env->startSection('container'); ?>
    <h1>Create</h1>

    <!DOCTYPE html>
    <html lang="en">



    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">

            </div>

            <div class="card">
                <div class="card-body register-card-body">

                    <?php if($errors->any()): ?>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p class="alert alert-danger"><?php echo e($err); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <form action="<?php echo e(route('simpanregister')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Full name">

                            <div class="input-group-text">
                                <span class="fas fa-user"></span>

                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <select class="form-select form-select-sm" name="level" aria-label=".form-select-sm example">
                                <option selected>Select Level :</option>
                                <option value="admin">Admin</option>
                                <option value="usertu">TU</option>
                                <option value="auditor">Auditor</option>
                                <option value="App1">App1</option>
                                <option value="App2">App2</option>
                                <option value="App3">App3</option>
                            </select>


                        </div>

                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email">

                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>

                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password">

                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-8">
                            </div>
                            <!-- /.col -->
                            <div class="col-8">
                                <button type="submit" class="btn btn-primary btn-block">Tambah Akun</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
        <!-- /.register-box -->

        <!-- jQuery -->
        <?php echo $__env->make('Template.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>

    </html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamp\htdocs\multi-loginv2\resources\views/dashboard/register/create.blade.php ENDPATH**/ ?>