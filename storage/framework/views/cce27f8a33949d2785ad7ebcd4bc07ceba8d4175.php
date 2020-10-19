<?php $__env->startSection('title', 'Edit'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Edit Tentang</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="page-wrapper">
    <div class="content">
    <div class="card">
        <div class="card-body">
            <form action="<?php echo e(url('admin/tentang/update/'.$tentang->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nama Organisasi</label>
                            <input type="text" name="nama_organisasi" class="form-control" value="<?php echo e($tentang->nama_organisasi); ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="<?php echo e($tentang->email); ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>No Telpon</label>
                            <input type="text" name="no_telp" class="form-control" value="<?php echo e($tentang->no_telp); ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" name="deskripsi" class="form-control"> <?php echo e($tentang->deskripsi); ?> </textarea>
                        </div>
                    </div>
                    
                </div>
                <div class="m-t-20 text-center">
                    <button class="btn btn-primary submit-btn" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\HAMURA\NU-PUSTAKA_\Back-End\app.nupustaka.com\resources\views/admin/tentang/editTentang.blade.php ENDPATH**/ ?>