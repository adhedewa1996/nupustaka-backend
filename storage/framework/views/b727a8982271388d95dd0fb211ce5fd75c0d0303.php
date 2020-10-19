<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Dashboard Transaksi</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          
          <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                  <h5 class="mb-6">
                    Sewa <i class="fas fa-shopping-bag"></i>
                  </h5>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                  <h5 class="mb-0">
                      Beli <i class="fas fa-money-bill-wave"></i>
                  </h5>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                  <h5 class="mb-0">
                      Pinjam <i class="fas fa-shopping-basket"></i>
                  </h5>
                </a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-inverse" id="sewa_datatable">
                       <thead>
                          <tr>
                            <th width="10px">No</th>
                            <th>Rental Name</th>
                            <th>Book Title</th>
                            <th width="100px">Date Rental</th>
                            <th width="100px">State</th>
                            <th>Epired Date</th>
                            <th>Status<th>
                          </tr>
                       </thead>
                       <tbody>
                         <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <tr>
                           <td><?php echo e($key+1); ?></td>
                           <td><?php echo e($value->name); ?></td>
                           <td><?php echo e($value->title); ?></td>
                           <td><?php echo e(date('d F Y', strtotime($value->created_at))); ?></td>
                           <td><?php echo e($value->status); ?></td>
                           <?php
                           $tgl=$value->created_at;
                           $expired=date('d F Y',strtotime('+7 day', strtotime($tgl)));
                            ?>
                           <td><?php echo e($expired); ?></td>
                           <?php
                            if($expired == 'not-expired')
                            {
                                $expirede = 'not-expired';
                            }else{
                              $expirede = 'expired';
                            }
                           ?>
                           <td><?php echo e($expirede); ?></td>
                         </tr>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-inverse" id="beli_datatable">
                       <thead>
                          <tr>
                             <th width="10px">Id</th>
                             <th>Buyers Name</th>
                             <th>Book Title</th>
                             <th>Buyers Date</th>
                          </tr>
                       </thead>
                       <tbody>
                         <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <tr>
                           <td><?php echo e($value->id); ?></td>
                           <td><?php echo e($value->name); ?></td>
                           <td><?php echo e($value->title); ?></td>
                           <td><?php echo e(date('d F Y', strtotime($value->created_at))); ?></td>
                         </tr>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-inverse" id="pinjam_datatable">
                       <thead>
                          <tr>
                             <th width="10px">Id</th>
                             <th>Borrowers Name</th>
                             <th>Book Title</th>
                             <th>Borrowers Date</th>
                             <th>State</th>
                             <th>Epired Date</th>
                             <th>Status</th>
                          </tr>
                       </thead>
                       <tbody>
                         <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <tr>
                           <td><?php echo e($value->id); ?></td>
                           <td><?php echo e($value->name); ?></td>
                           <td><?php echo e($value->title); ?></td>
                           <td><?php echo e(date('d F Y', strtotime($value->created_at))); ?></td>
                           <td><?php echo e($value->status); ?></td>
                           <?php
                           $tgl=$value->created_at;
                           $expired=date('d F Y',strtotime('+7 day', strtotime($tgl)));
                            ?>
                           <td><?php echo e($expired); ?></td>
                           <?php
                            if($expired == 'not-expired')
                            {
                                $expirede = 'not-expired';
                            }else{
                              $expirede = 'expired';
                            }
                           ?>
                           <td><?php echo e($expirede); ?></td>
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
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
$(document).ready( function () {
$('#sewa_datatable').DataTable();
$('#beli_datatable').DataTable();
$('#pinjam_datatable').DataTable();
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\HAMURA\NU-PUSTAKA_\Back-End\app.nupustaka.com\resources\views/transactions/home.blade.php ENDPATH**/ ?>