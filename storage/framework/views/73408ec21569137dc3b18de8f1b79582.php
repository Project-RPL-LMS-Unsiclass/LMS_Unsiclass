

<?php $__env->startSection('main-content'); ?>
<div class="container">
    <article class="card mb-3">
        <?php if($kelas->gambar_kelas): ?>
        <img src="<?php echo e(asset('images/' . $kelas->gambar_kelas)); ?>" class="card-img" style="max-height:300px" alt="<?php echo e($kelas->nama_kelas); ?>">
        <?php endif; ?>
        <div class="card-img-overlay ml-3 mr-3 d-flex flex-column justify-content-start mt-2">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="card-title font-weight-bold text-white mb-0"><?php echo e($kelas->nama_kelas); ?></h2>
                <a href="<?php echo e(route('kelas.edit', ['id' => $kelas->id])); ?>" class="btn btn-light btn-md font-weight-bold" style="z-index: 1; background-color: white ; color: rgb(191, 49, 49);">
                    <i class="fas fa-edit"></i> Edit Kelas
                </a>
            </div>
            <div class="card-text text-white font-weight-bold">
                <span class="mr-2"> Dibuat oleh <?php echo e($kelas->user->name ?? 'Tidak diketahui'); ?> </span> | 
                <span class="mr-2"> <i class="far fa-calendar ml-2 mr-2"> </i><?php echo e($kelas->created_at->format('j F Y')); ?></span> |  
                <span class="mr-2"> <i class="fas fa-shapes ml-2 mr-2"> </i> <?php echo e($kelas->tingkat_kelas); ?>

            </div>
        </div>
        
       
        <div class="card-body ml-3 mr-3" style="z-index:1;">
            <h4 class="font-weight-bold mt-2 mb-2" style="color: rgb(191, 49, 49);">Tentang Kelas</h4>
            <p class="card-text text-justify mb-2" style="color: rgb(191, 49, 49);"><?php echo e($kelas->deskripsi_kelas); ?></p>
            <hr style="border-top: 1px solid rgba(191, 49, 49, 0.5);">
            <h4 class="font-weight-bold mt-2 mb-2" style="color: rgb(191, 49, 49);">Silabus Kelas</h4>
            <?php if($kelas->silabus_kelas): ?>
            <a href="<?php echo e(asset('pdfs/' . $kelas->silabus_kelas)); ?>" class="btn btn-light btn-md font-weight-bold mb-4" style="background-color: rgb(191, 49, 49); color: white;" target="_blank">
                <i class="fas fa-file-pdf mr-2"></i> Lihat Silabus
            </a>
            <?php else: ?>
            <p class="text-muted">Silabus belum tersedia.</p>
            <?php endif; ?>

        </div>
    </article>

    <!-- Tabs -->
    <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active font-weight-bold" style="color: rgb(191, 49, 49);" id="absensi-tab"  href="<?php echo e(route('kelas.showAbsensi', ['id' => $kelas->id])); ?>" aria-selected="false">Absensi</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link font-weight-bold" style="color: rgb(191, 49, 49);" id="materi-tab" data-toggle="tab" href="#materi" role="tab" aria-controls="materi" aria-selected="false">Materi</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link font-weight-bold" style="color: rgb(191, 49, 49);" id="tugas-tab" data-toggle="tab" href="#tugas" role="tab" aria-controls="tugas" aria-selected="false">Tugas</a>
        </li>
    </ul>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LMS_Unsiclass\resources\views/kelas/show.blade.php ENDPATH**/ ?>