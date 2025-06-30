

<?php $__env->startSection('content'); ?>
<h1>Tambah Mahasiswa</h1>

<div class="card">
    <form action="<?php echo e(route('mahasiswa.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" name="nama" id="nama" class="form-input" required>
        </div>
        <div class="form-group">
            <label for="nim" class="form-label">NIM:</label>
            <input type="text" name="nim" id="nim" class="form-input" required>
        </div>
        <div class="form-group">
            <label for="jurusan" class="form-label">Jurusan:</label>
            <input type="text" name="jurusan" id="jurusan" class="form-input" required>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" id="email" class="form-input" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<a href="<?php echo e(route('mahasiswa.index')); ?>" class="btn btn-secondary mt-3">Kembali</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\zakis\OneDrive\Documents\Praktikum Pemrograman web\larevel\crud-mahasiswa\resources\views/mahasiswa/create.blade.php ENDPATH**/ ?>