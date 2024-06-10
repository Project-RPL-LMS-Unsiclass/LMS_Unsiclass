

<?php $__env->startSection('main-content'); ?>
<div class="container">
    <h1 class="h3 mb-4 font-weight-bold" style="color: rgb(191, 49, 49);"><?php echo e(__('Buat Kelas')); ?></h1>

    <form action="<?php echo e(route('kelas.store')); ?>" method="POST" enctype="multipart/form-data" class="font-weight-bold px-4 py-4 mb-4" style="color: rgb(191, 49, 49); background-color:white;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('POST'); ?>
        <div class="form-group">
            <label for="nama_kelas">Nama Kelas</label>
            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" style="color: rgb(191, 49, 49);" required>
        </div>
        <div class="form-group">
            <label for="tingkat_kelas">Tingkat Kelas</label>
            <select class="form-control" id="tingkat_kelas" name="tingkat_kelas" style="color: rgb(191, 49, 49);" required>
                <option value="">Pilih Tingkatan Kelas</option>
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Advanced">Advanced</option>
                <option value="Expert">Expert</option>
                <option value="Professional">Professional</option>
            </select>
        </div>
        <div class="form-group">
            <label for="deskripsi_kelas">Deskripsi</label>
            <textarea class="form-control" id="deskripsi_kelas" name="deskripsi_kelas" rows="3" style="color: rgb(191, 49, 49);" required></textarea>
        </div>
        <div class="form-group">
            <label for="gambar_kelas">Sampul</label>
            <div class="input-group">
                <input type="file" class="form-control form-control-file" id="gambar_kelas" name="gambar_kelas" style="color: rgb(191, 49, 49);">
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="fas fa-image" style="color: rgb(191, 49, 49);"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="silabus_kelas">Silabus</label>
            <div class="input-group">
                <input type="file" class="form-control form-control-file" id="silabus_kelas" name="silabus_kelas" accept="application/pdf" style="color: rgb(191, 49, 49);">
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="far fa-file-pdf" style="color: rgb(191, 49, 49);"></i>
                    </span>
                </div>
            </div>
        </div>  
        <div class="row justify-content-center">     
            <button type="submit" class="btn btn-light btn-md font-weight-bold mt-3 mb-3" style="color: white ; background-color: rgb(191, 49, 49);">Buat Kelas</button>
        </div>
</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LMS_Unsiclass\resources\views/kelas/create.blade.php ENDPATH**/ ?>