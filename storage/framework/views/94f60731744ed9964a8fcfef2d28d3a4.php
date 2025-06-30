

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Data Mahasiswa</h1>
    <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-primary">Tambah Mahasiswa</a>
</div>

<?php if(session('success')): ?>
    <div class="alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<table class="table-custom">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($mhs->id); ?></td>
            <td><?php echo e($mhs->nama); ?></td>
            <td><?php echo e($mhs->nim); ?></td>
            <td><?php echo e($mhs->jurusan); ?></td>
            <td><?php echo e($mhs->email); ?></td>
            <td>
                <a href="<?php echo e(route('mahasiswa.edit', $mhs->id)); ?>" class="btn btn-warning">Edit</a>
                <form action="<?php echo e(route('mahasiswa.destroy', $mhs->id)); ?>" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\zakis\OneDrive\Documents\Praktikum Pemrograman web\larevel\crud-mahasiswa\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>