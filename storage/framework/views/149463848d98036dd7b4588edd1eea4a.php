
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>DATA USERS</h3>
        <?php if(session()->has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session ('success')); ?>

        </div>
        <?php endif; ?>
        <a class="btn btn-outline-secondary" href="<?php echo e(url('users/create')); ?>">Tambah Data</a>
        <table class="table table-bordered">
            <tr>
                <td>NO</td>
                <td>EMAIL</td>
                <td>PASSWORD</td>
                <td>NAMA</td>
                <td>ALAMAT</td>
                <td>NOMOR HP</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($row->user_id); ?></td>
                <td><?php echo e($row->user_email); ?></td>
                <td><?php echo e($row->user_password); ?></td>
                <td><?php echo e($row->user_nama); ?></td>
                <td><?php echo e($row->user_alamat); ?></td>
                <td><?php echo e($row->user_hp); ?></td>
                <td><a class="btn btn-outline-secondary" href="<?php echo e(url('users/' .$row->user_id. '/edit')); ?>">Edit</a></td>
                <td>
                    <form action="<?php echo e(url('users/' .$row->user_id)); ?>" method="post">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-outline-secondary" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quis-pbwl-alsia\resources\views/users/index.blade.php ENDPATH**/ ?>