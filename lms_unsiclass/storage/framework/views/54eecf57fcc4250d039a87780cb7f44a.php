<?php $__env->startSection('main-content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div  class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block ">
                            <img src="<?php echo e(asset('img/unsiclass.jpg')); ?>"  alt="user-image">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><?php echo e(__('Reset Password')); ?></h1>
                                </div>

                                <?php if($errors->any()): ?>
                                    <div class="alert alert-danger border-left-danger" role="alert">
                                        <ul class="pl-4 my-2">
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                                <?php if(session('status')): ?>
                                    <div class="alert alert-success border-left-success" role="alert">
                                        <?php echo e(session('status')); ?>

                                    </div>
                                <?php endif; ?>

                                <form method="POST" action="<?php echo e(route('password.email')); ?>" class="user">
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" name="email" placeholder="<?php echo e(__('E-Mail Address')); ?>" value="<?php echo e(old('email')); ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            <?php echo e(__('Send Password Reset Link')); ?>

                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\lms_unsiclass\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>