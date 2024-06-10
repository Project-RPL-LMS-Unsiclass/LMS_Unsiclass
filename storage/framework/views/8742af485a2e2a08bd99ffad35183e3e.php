

<?php $__env->startSection('main-content'); ?>
<div class="container">
    <h1 class="h3 mb-4 font-weight-bold" style="color: rgb(191, 49, 49);"><?php echo e(__('Buat Absensi')); ?></h1>

    <form action="<?php echo e(route('kelas.storeAbsensi', ['id' => $kelas->id])); ?>" method="POST" class="font-weight-bold px-4 py-4 mb-4" style="color: rgb(191, 49, 49); background-color:white;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('POST'); ?>
        <div class="form-group">
            <label for="kelas_id">ID Kelas</label>
            <input type="text" class="form-control" id="kelas_id" name="kelas_id" style="color: rgb(191, 49, 49);" value="<?php echo e($kelas->id); ?>" readonly required>
        </div>
        <div class="form-group">
            <label for="pertemuan">Pertemuan</label>
            <select class="form-control" id="pertemuan" name="pertemuan" style="color: rgb(191, 49, 49);" required>
                <option value="">Pilih Pertemuan Keberapa</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
            </select>
        </div>
        <div class="row justify-content-center">     
            <button type="submit" class="btn btn-light btn-md font-weight-bold mt-3 mb-3" style="color: white ; background-color: rgb(191, 49, 49);">Buat Absensi</button>
        </div>
</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LMS_Unsiclass\resources\views/kelas/createAbsensi.blade.php ENDPATH**/ ?>