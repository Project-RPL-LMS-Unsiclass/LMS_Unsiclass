<?php $__env->startSection('main-content'); ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo e(__('Dashboard')); ?></h1>

    <?php if(session('success')): ?>
    <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif; ?>

    <?php if(session('status')): ?>
        <div class="alert alert-success border-left-success" role="alert">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>

    <div class="row">

        <div class="card-body">
            <h1>Hai Welcome! <?php echo e(Auth::user()->fullName); ?></h1>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid repellendus itaque dolores consequuntur est velit?</h4>
        </div>

        <!-- Users -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><?php echo e(__('Users Count')); ?></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($widget['users']); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Color System -->
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                            RPL 
                            <div class="text-white-50 small">Rekayasa Perangkat Lunak</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-success text-white shadow">
                        <div class="card-body">
                            PBW
                            <div class="text-white-50 small">Pemograman Berbasis Web</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-info text-white shadow">
                        <div class="card-body">
                            AI
                            <div class="text-white-50 small">Artificial Intellegent</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-warning text-white shadow">
                        <div class="card-body">
                            OS
                            <div class="text-white-50 small">Operation System</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-danger text-white shadow">
                        <div class="card-body">
                            S&P
                            <div class="text-white-50 small">Statistika dan Probabilitas</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-secondary text-white shadow">
                        <div class="card-body">
                            ADA
                            <div class="text-white-50 small">Analisis Design Berorientasi Object</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-warning text-white shadow">
                        <div class="card-body">
                            EIS
                            <div class="text-white-50 small">Embedded Intellegent Systems</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">4B-Informatika </h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?php echo e(asset('img/unsiclass.jpg')); ?>" alt="">
                    </div>
                    <h5>Lorem, ipsum dolor.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, corrupti!</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione, neque?</p>
                </div>
            </div>

  

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\lms_unsiclass\resources\views/home.blade.php ENDPATH**/ ?>