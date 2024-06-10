

<?php $__env->startSection('main-content'); ?>
<div class="container">
    <h1 class="h3 mb-4 font-weight-bold" style="color: rgb(191, 49, 49);"><?php echo e(__('Mengisi Absensi Mahasiswa')); ?></h1>
    
    <form action="<?php echo e(route('mahasiswa.storeAbsensi')); ?>" method="POST" class="font-weight-bold px-4 py-4 mb-4" style="color: rgb(191, 49, 49); background-color:white;">
      <?php echo csrf_field(); ?>
      <?php echo method_field('POST'); ?>
      <div class="form-group">
        <label for="user_id">Nama Mahasiswa</label>
        <select class="form-control" id="user_id" name="user_id" style="color: rgb(191, 49, 49);" required>
            <option value="">Nama Mahasiswa</option>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="form-group">
        <label for="kelas_id">Pilih Kelas</label>
        <select class="form-control" id="kelas_id" name="kelas_id" style="color: rgb(191, 49, 49);" required>
            <option value="">Pilih Kelas</option>
            <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($kls->id); ?>"><?php echo e($kls->nama_kelas); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="form-group">
      <label for="absensi_id">Pilih Absen Pertemuan Keberapa</label>
      <select class="form-control" id="absensi_id" name="absensi_id" style="color: rgb(191, 49, 49);" required>
          <option value="">Pilih Pertemuan Keberapa</option>
      </select>
      <span style="font-size: 12px; color: red;">*Pilih Kelas Terlebih Dahulu</span>
  </div>
  <div class="form-group">
    <label for="status_kehadiran">Status Kehadiran</label>
    <select class="form-control" id="status_kehadiran" name="status_kehadiran" style="color: rgb(191, 49, 49);" required>
        <option value="">Pilih Status Kehadiran</option>
        <option value="Hadir">Hadir</option>
        <option value="Tidak Hadir">Tidak Hadir</option>
    </select>
</div>
<div class="form-group">
  <label for="feedback">Feedback</label>
  <textarea type="text" class="form-control" id="feedback" name="feedback" style="color: rgb(191, 49, 49);"  required></textarea>
</div>
      <div class="row justify-content-center">     
          <button type="submit" class="btn btn-light btn-md font-weight-bold mt-3 mb-3" style="color: white ; background-color: rgb(191, 49, 49);">Buat Absensi</button>
      </div>
</form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-content'); ?>
<!-- Simpan data absensi di JavaScript -->
<script type="text/javascript">
  var absensi = <?php echo json_encode($absensi, 15, 512) ?>;
</script>

<script type="text/javascript">
  $(document).ready(function() {
      $('#kelas_id').on('change', function() {
          var kelasId = $(this).val();
          var filteredAbsensi = absensi.filter(function(item) {
              return item.kelas_id == kelasId;
          });

          $('#absensi_id').empty();
          $('#absensi_id').append('<option value="">Pilih Pertemuan Keberapa</option>');
          filteredAbsensi.forEach(function(item) {
              $('#absensi_id').append('<option value="'+ item.id +'">'+ item.pertemuan +'</option>');
          });
      });
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mahasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LMS_Unsiclass\resources\views/mahasiswa/indexAbsensi.blade.php ENDPATH**/ ?>