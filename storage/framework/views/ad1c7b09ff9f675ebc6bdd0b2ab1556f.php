

<?php $__env->startSection('main-content'); ?>
<div class="container">
    <h1 class="h3 mb-4 font-weight-bold" style="color: rgb(191, 49, 49);"><?php echo e(__('Kelas Saya')); ?></h1>

    <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelasku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <article class="mb-3">
        <div class="card p-0 position-relative">
            <?php if($kelasku->gambar_kelas): ?>
            <img src="<?php echo e(asset('images/' . $kelasku->gambar_kelas)); ?>" class="card-img img-fluid" style="max-height:300px" alt="<?php echo e($kelasku->nama_kelas); ?>">
            <?php endif; ?>
            <div class="position-absolute" class="btn btn-light btn-md font-weight-bold" style="z-index: 1;  top: 20px; right: 20px;">
            <form action="<?php echo e(route('kelas.archive', ['id' => $kelasku->id])); ?>" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kelas ini?')">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-light btn-md font-weight-bold" style="background-color: white ; color: rgb(191, 49, 49);"> <i class="fas fa-trash"></i> Hapus Kelas</button>
            </form>
            </div>
            <div class="card-img-overlay ml-4 d-flex flex-column justify-content-center">
                <a href="<?php echo e(route('kelas.show', ['id' => $kelasku->id])); ?>" class="text-decoration-none">
                    <h1 class="card-title font-weight-bold text-white mb-0"><?php echo e($kelasku->nama_kelas); ?></h1>
                </a>
                <div class="card-text text-white font-weight-bold mb-3" style="font-size:12px;">
                    <span class="mr-2"> Dibuat oleh <?php echo e($kelasku->user->name ?? 'Tidak diketahui'); ?> </span> | 
                    <span class="mr-2"> <i class="far fa-calendar ml-2 mr-2"> </i><?php echo e($kelasku->created_at->format('j F Y')); ?></span> |  
                    <span class="mr-2"> <i class="fas fa-shapes ml-2 mr-2"> </i> <?php echo e($kelasku->tingkat_kelas); ?>

                </div>
                <p class="card-text mt-3 text-white text-justify" style="font-size:12px; margin-right: 420px;"><?php echo e(Str::limit($kelasku->deskripsi_kelas, 350)); ?></p>
            </div>
        </div>
    </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- Tombol Tambah Kelas -->
    <div class="row justify-content-center mb-5">
        <a href="<?php echo e(route('kelas.create')); ?>" class="btn btn-light font-weight-bold" style="background-color: rgb(191, 49, 49) ; color: white;"><i class="fas fa-plus mr-2"></i>Buat Kelas</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LMS_Unsiclass\resources\views/kelas/index.blade.php ENDPATH**/ ?>