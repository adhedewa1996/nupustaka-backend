<?php $__env->startSection('title', 'Category'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Category</h1>
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
                      <form action="<?php echo e(url('/admin/category/store')); ?>" method="POST" enctype="multipart/form-data">
                          <?php echo e(csrf_field()); ?>

                          <div class="card">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Category Name</label>
                                              <input type="text" class="form-control" name="category_name">
                                              <?php if($errors->has('category_name')): ?>
                                                  <div class="error text-danger"><?php echo e($errors->first('category_name')); ?></div>
                                              <?php endif; ?>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Parent Category</label>
                                              <select name="parent_id" class="form-control">
                                                  <option value="">Select Category</option>
                                                  <?php $__currentLoopData = $data_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                      <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option>
                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Category Picture</label>
                                              <input type="file" class="form-control" name="category_picture">
                                          </div>
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
                                         <th>Nama Category</th>
                                         <th width="10%">Action</th>
                                      </tr>
                                   </thead>
                                   <tbody>
                                     <?php $__currentLoopData = $data_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <tr>
                                       <td><?php echo e($key+1); ?></td>
                                       <td><?php echo e($category->category_name); ?></td>
                                       <td><a href="<?php echo e(url('admin/category/delete/'.$category->id)); ?>" class="btn btn-danger btn-xs">Delete</a>
                                       <a href="<?php echo e(url('admin/category/edit/'.$category->id)); ?>" class="btn btn-warning btn-xs">Edit</a></td>
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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\HAMURA\NU-PUSTAKA_\Back-End\app.nupustaka.com\resources\views/admin/category/category.blade.php ENDPATH**/ ?>