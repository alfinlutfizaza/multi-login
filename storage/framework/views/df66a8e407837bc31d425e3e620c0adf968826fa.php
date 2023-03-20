<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->


<html lang="en">


<head>
    <?php echo $__env->make('Template.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>



<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <?php echo $__env->make('Template.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php echo $__env->make('Template.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Starter Page</h1>
                        </div><!-- /.col -->

                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        <?php if(@auth()->user()->level == 'usertu'): ?>
                            <div class="col-lg-6">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h5 class="m-0">TU</h5>
                                    </div>
                                    <div class="card-body">
                                        <?php echo $__env->make('Halaman.Halaman-dua', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <a href="tupage" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div><!-- /.card -->
                            </div>
                        <?php endif; ?>
                        <!-- /.col-md-6 -->
                        <?php if(@auth()->user()->level == 'auditor'): ?>
                            <div class="col-lg-6">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h5 class="m-0">Auditor</h5>
                                    </div>
                                    <div class="card-body">
                                        <?php echo $__env->make('Halaman.Halaman-dua', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <a href="auditorpage" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div><!-- /.card -->
                            </div>
                        <?php endif; ?>
                        <?php if(@auth()->user()->level == 'App1'): ?>
                            <div class="col-lg-6">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h5 class="m-0">APP1</h5>
                                    </div>
                                    <div class="card-body">
                                        <?php echo $__env->make('Halaman.Halaman-dua', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <a href="apppage" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div><!-- /.card -->
                            </div>
                        <?php endif; ?>
                        <?php if(@auth()->user()->level == 'App2'): ?>
                            <div class="col-lg-6">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h5 class="m-0">APP2</h5>
                                    </div>
                                    <div class="card-body">
                                        <?php echo $__env->make('Halaman.Halaman-dua', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <a href="appbpage" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div><!-- /.card -->
                            </div>
                        <?php endif; ?>
                        <?php if(@auth()->user()->level == 'App3'): ?>
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="m-0">APP3</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">Special title treatment</h6>

                                    <p class="card-text">With supporting text below as a natural lead-in to
                                        additional
                                        content.</p>
                                    <a href="appcpage" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php echo $__env->make('Template.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>


</html>
<?php /**PATH C:\xamp\htdocs\multi-loginv2\resources\views/Halaman/Halaman-satu.blade.php ENDPATH**/ ?>