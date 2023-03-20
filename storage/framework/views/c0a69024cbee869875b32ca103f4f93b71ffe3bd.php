 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="<?php echo e(asset('Admin/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light"><?php echo e(auth()->user()->name); ?></span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->


         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                     aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item menu-open">
                     <a href="<?php echo e(route('beranda')); ?>" class="nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Starter Pages
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <?php if(@auth()->user()->level == 'admin'): ?>
                             <li class="nav-item">
                                 <a href="<?php echo e(route('dashboard')); ?>" class="nav-link active">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Admin</p>
                                 </a>
                             </li>
                         <?php endif; ?>
                         <?php if(@auth()->user()->level == 'auditor'): ?>
                             <li class="nav-item">
                                 <a href="<?php echo e(route('auditorpage')); ?>" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Auditor</p>
                                 </a>
                             </li>
                         <?php endif; ?>
                         <?php if(@auth()->user()->level == 'usertu'): ?>
                             <li class="nav-item">
                                 <a href="<?php echo e(route('tupage')); ?>" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>TU Page</p>
                                 </a>
                             </li>
                         <?php endif; ?>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a href="<?php echo e(route('logout')); ?>" class="nav-link">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Logout

                         </p>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
<?php /**PATH C:\xamp\htdocs\multi-loginv2\resources\views/Template/sidebar.blade.php ENDPATH**/ ?>