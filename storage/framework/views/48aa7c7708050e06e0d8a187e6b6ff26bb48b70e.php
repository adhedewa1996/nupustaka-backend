<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Dashboard</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
              <p>Welcome to this beautiful admin panel.</p>
          </div>
          <div class="card-body">
              <p>Welcome to this beautiful admin panel.</p>
          </div>
        </div>
      </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
                <p>Welcome to this beautiful admin panel.</p>
            </div>
            <div class="card-body">
                <p>Welcome to this beautiful admin panel.</p>
            </div>
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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\HAMURA\NU-PUSTAKA_\Back-End\app.nupustaka.com\resources\views/home.blade.php ENDPATH**/ ?>