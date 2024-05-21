<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Unsiclass">
    <meta name="author" content="Magrozan">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>LMS UNSICLASS</title>

    <!-- Fonts -->
    <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/sb-admin-2.min.css')); ?>" rel="stylesheet">

    <!-- Favicon -->
    <link href="<?php echo e(asset('img/unsiclass.jpg')); ?>" rel="icon" type="image/png">
</head>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion " style="background-color: #7D0A0A " id="accordionSidebar">

        <!-- Sidebar - Unsiclass Log -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center rounded-pill" style="background-color: #7D0A0A " href="<?php echo e(url('/home')); ?>">
            <div class="sidebar-brand-text mx-3">Unsiclass</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php echo e(Nav::isRoute('home')); ?>">
            <a class="nav-link" href="<?php echo e(route('home')); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span><?php echo e(__('Dashboard')); ?></span></a>
        </li>
        <!-- Nav Item - Kelas saya -->
        <li class="nav-item <?php echo e(Nav::isRoute('home')); ?>">
            <a class="nav-link" href="<?php echo e(route('home')); ?>">
                <i class="fas fa-fw fa-graduation-cap"></i>
                <span><?php echo e(__('Kelas Saya')); ?></span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            <?php echo e(__('Settings')); ?>

        </div>

        <!-- Nav Item - Profile -->
        <li class="nav-item <?php echo e(Nav::isRoute('profile')); ?>">
            <a class="nav-link" href="<?php echo e(route('profile')); ?>">
                <i class="fas fa-fw fa-user"></i>
                <span><?php echo e(__('Profile')); ?></span>
            </a>
        </li>

        <!-- Nav Item - Pengaturan dan bantuan -->
        <li class="nav-item <?php echo e(Nav::isRoute('about')); ?>">
            <a class="nav-link" href="<?php echo e(route('about')); ?>">
                <i class="fas fa-fw fa-circle-exclamation"></i>
                <span><?php echo e(__('About')); ?></span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

   

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo e(Auth::user()->name); ?></span>
                            <figure class="img-profile rounded-circle avatar font-weight-bold" data-initial="<?php echo e(Auth::user()->name[0]); ?>"></figure>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('profile')); ?>">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                <?php echo e(__('Profile')); ?>

                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                <?php echo e(__('Logout')); ?>

                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <?php echo $__env->yieldContent('main-content'); ?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; <a href="https://github.com/mgrzn" target="_blank">Mgrzn</a> <?php echo e(now()->year); ?></span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Ready to Leave?')); ?></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" to end your session.</div>
            <div class="modal-footer">
                <button class="btn btn-link" type="button" data-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
                <a class="btn btn-danger" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><?php echo e(__('Logout')); ?></a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/sb-admin-2.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\lms_unsiclass\resources\views/layouts/admin.blade.php ENDPATH**/ ?>