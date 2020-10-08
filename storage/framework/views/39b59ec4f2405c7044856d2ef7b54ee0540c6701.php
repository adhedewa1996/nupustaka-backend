<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Books Dashboard</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>Edit Books</p>

    <div class="card">
      <div class="card-body">
        <form action="<?php echo e(url('/admin/books-update/'.$books->id)); ?>" method="POST" enctype="multipart/form-data">
          <?php echo e(csrf_field()); ?>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo e($books->title); ?>">
                <?php if($errors->has('title')): ?>
                    <div class="error text-danger"><?php echo e($errors->first('title')); ?></div>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Description</label>
                <textarea class="form-control" rows="5" name="description"><?php echo e($books->description); ?></textarea>
                <?php if($errors->has('deskription')): ?>
                    <div class="error text-danger"><?php echo e($errors->first('deskription')); ?></div>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Harga sewa</label>
                <input type="text" name="harga_sewa" class="form-control" value="<?php echo e($books->harga_sewa); ?>">
                <?php if($errors->has('harga_sewa')): ?>
                    <div class="error text-danger"><?php echo e($errors->first('harga_sewa')); ?></div>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Harga pinjam</label>
                <input type="text" name="harga_pinjam" class="form-control" value="<?php echo e($books->harga_pinjam); ?>">
                <?php if($errors->has('harga_pinjam')): ?>
                    <div class="error text-danger"><?php echo e($errors->first('harga_pinjam')); ?></div>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Harga beli</label>
                <input type="text" name="harga_beli" class="form-control" value="<?php echo e($books->harga_beli); ?>">
                <?php if($errors->has('harga_beli')): ?>
                    <div class="error text-danger"><?php echo e($errors->first('harga_beli')); ?></div>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Qty sewa</label>
                <input type="text" name="qty_sewa" class="form-control" value="<?php echo e($books->qty_sewa); ?>">
                <?php if($errors->has('qty_sewa')): ?>
                    <div class="error text-danger"><?php echo e($errors->first('qty_sewa')); ?></div>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Qty pinjam</label>
                <input type="text" name="qty_pinjam" class="form-control" value="<?php echo e($books->qty_pinjam); ?>">
                <?php if($errors->has('qty_pinjam')): ?>
                    <div class="error text-danger"><?php echo e($errors->first('qty_pinjam')); ?></div>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Qty beli</label>
                <input type="text" name="qty_beli" class="form-control" value="<?php echo e($books->qty_beli); ?>">
                <?php if($errors->has('qty_beli')): ?>
                    <div class="error text-danger"><?php echo e($errors->first('qty_beli')); ?></div>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Halaman</label>
                <input type="text" name="halaman" class="form-control" value="<?php echo e($books->halaman); ?>">
                <?php if($errors->has('halaman')): ?>
                    <div class="error text-danger"><?php echo e($errors->first('halaman')); ?></div>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Publish at</label>
                <input type="text" name="publish_at" class="form-control datepicker" value="<?php echo e($books->publish_at); ?>">
                <?php if($errors->has('publish_at')): ?>
                    <div class="error text-danger"><?php echo e($errors->first('publish_at')); ?></div>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Isbn</label>
                <input type="text" name="isbn" class="form-control" value="<?php echo e($books->isbn); ?>">
                <?php if($errors->has('isbn')): ?>
                    <div class="error text-danger"><?php echo e($errors->first('isbn')); ?></div>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">bahasa</label>
                <select class="form-control" name="bahasa">
                  <option value="Indonesia" <?php if ($books->isbn=="Indonesia"): ?>selected<?php endif; ?>>Indonesia</option>
                  <option value="Inggris" <?php if ($books->isbn=="Inggris"): ?>selected<?php endif; ?>>Inggris</option>
                  <option value="Mandarin" <?php if ($books->isbn=="Mandarin"): ?>selected<?php endif; ?>>Mandaris</option>
                </select>
                <?php if($errors->has('isbn')): ?>
                    <div class="error text-danger"><?php echo e($errors->first('bahasa')); ?></div>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Picture</label>
                <div class="custom-file">
                  <input type="file" name="picture" class="custom-file-input" id="customFile" value="<?php echo e($books->picture); ?>">
                  <?php if($errors->has('picture')): ?>
                      <div class="error text-danger"><?php echo e($errors->first('picture')); ?></div>
                  <?php endif; ?>
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Files</label>
                <div class="custom-file">
                  <input type="file" name="files" class="custom-file-input" id="customFile" value="<?php echo e($books->files); ?>">
                  <?php if($errors->has('files')): ?>
                      <div class="error text-danger"><?php echo e($errors->first('files')); ?></div>
                  <?php endif; ?>
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Kategori Buku</label>
                <select class="form-control" name="id_kategori" required>
                  <option value="">Pilih Kategori</option>
                  <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($value->id); ?>"><?php echo e($value->category_name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('id_kategori')): ?>
                    <div class="error text-danger"><?php echo e($errors->first('id_kategori')); ?></div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer text-muted">
          <div class="form-group">
            <button type="submit" name="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" charset="utf-8"></script>
    <script> console.log('Hi!'); </script>
    <script>
   $(document).ready( function () {
   $('.datepicker').datepicker({
                 format: "yyyy-mm-dd",
                 autoclose:true
             });
    $('#laravel_datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "<?php echo e(url('/admin/JSONbooks')); ?>",
           columns: [
                    { data: 'id', name: 'id' },
                    { data: 'title', name: 'Title' },
                    { data: 'description', name: 'Description' },
                    { data: 'harga_sewa', name: 'Rental price' },
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                 ]
        });
     });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/app.nupustaka.com/resources/views/books/edit.blade.php ENDPATH**/ ?>