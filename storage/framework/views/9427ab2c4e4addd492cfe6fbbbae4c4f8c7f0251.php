<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>User Configuration Dashboard</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <div class="card">
      <div class="card-header">
        Featured
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="laravel_datatable">
             <thead>
                <tr>
                   <th width="10px">No</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Token</th>
                   <th>Action</th>
                </tr>
             </thead>
          </table>
        </div>
      </div>
      <div class="card-footer text-muted">
        2 days ago
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js" charset="utf-8"></script>
    <script>
   $(document).ready( function () {
    $('#laravel_datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "<?php echo e(url('/admin/JSON-user-config')); ?>",
           columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'Nama' },
                    { data: 'email', name: 'Email' },
                    { data: 'token', name: 'Token' },
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                 ]
        });
     $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\HAMURA\NU-PUSTAKA_\Back-End\app.nupustaka.com\resources\views/user-config/home.blade.php ENDPATH**/ ?>