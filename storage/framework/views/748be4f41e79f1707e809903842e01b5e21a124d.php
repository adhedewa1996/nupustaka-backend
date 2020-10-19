<?php $__env->startSection('title', 'Tentang'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Tentang</h1>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="page-wrapper">
    <div class="content">
        <?php if(session('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="<?php echo e(url('/admin/tentang/store')); ?>" method="POST" enctype="multipart/form-data">
                          <?php echo e(csrf_field()); ?>

                            <div class="card">
                                <div class="card-body">
                                  <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Organisasi</label>
                                        <input type="text" name="nama_organisasi" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <textarea type="text" name="deskripsi" class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>No Telpon</label>
                                        <input type="text" name="no_telp" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control">
                                    </div>
                                </div>
                                  <div class="m-t-20">
                                      <button class="btn btn-primary submit-btn btn-sm" type="submit">Submit</button>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                              <div class="table-responsive">
                                <table class="table table-bordered" id="laravel_datatable">
                                   <thead>
                                      <tr>
                                         <th width="10px">No</th>
                                         <th>Nama Organisasi</th>
                                         <th>Deskripsi</th>
                                         <th>Email</th>
                                         <th>Alamat</th>
                                         <th>No Telp</th>
                                         <th width="10%">Action</th>
                                      </tr>
                                   </thead>
                                   <tbody>
                                     <?php $__currentLoopData = $data_tentang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tentang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <tr>
                                       <td><?php echo e($key+1); ?></td>
                                       <td><?php echo e($tentang->nama_organisasi); ?></td>
                                       <td><?php echo e($tentang->deskripsi); ?></td>
                                       <td><?php echo e($tentang->email); ?></td>
                                       <td><?php echo e($tentang->alamat); ?></td>
                                       <td><?php echo e($tentang->no_telp); ?></td>
                                       <td><a href="<?php echo e(url('admin/tentang/delete/'.$tentang->id)); ?>" class="btn btn-danger btn-xs">Delete</a>
                                       <a href="<?php echo e(url('admin/tentang/edit/'.$tentang->id)); ?>" class="btn btn-warning btn-xs">Edit</a></td>
                                     </tr>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </tbody>
                                </table>
                              </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
  <script>
  $(document).ready( function () {
    $('#laravel_datatable').DataTable();
  });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\HAMURA\NU-PUSTAKA_\Back-End\app.nupustaka.com\resources\views/admin/tentang/tentang.blade.php ENDPATH**/ ?>