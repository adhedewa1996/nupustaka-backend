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
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <ul id="tree1">
                                    <?php $__currentLoopData = $data_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <?php echo e($category->category_name); ?>

                                            <div>
                                                <a href="<?php echo e(url('admin/category/delete/'.$category->id)); ?>" class="btn btn-danger">Delete</a>
                                                <a href="<?php echo e(url('admin/category/edit/'.$category->id)); ?>" class="btn btn-warning">Edit</a>
                                            </div>
                                            <ul>
                                                <li><?php echo e($category->parent_id); ?>

                                                    <ul>
                                                        <li><?php echo e($category->parent_id); ?></li>
                                                        <li><?php echo e($category->parent_id); ?></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li><?php echo e($category->parent_id); ?>

                                                    <ul>
                                                        <li><?php echo e($category->parent_id); ?></li>
                                                        <li><?php echo e($category->parent_id); ?></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <form action="<?php echo e(url('/admin/category/store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Category Name</label>
                                                <input type="text" class="form-control" name="category_name">
                                                <?php if($errors->has('category_name')): ?>
                                                    <div class="error text-danger"><?php echo e($errors->first('category_name')); ?></div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Category Picture</label>
                                                <input type="file" class="form-control" name="category_picture">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Category Slug</label>
                                                <input type="text" class="form-control" name="category_slug">
                                                <?php if($errors->has('category_slug')): ?>
                                                    <div class="error text-danger"><?php echo e($errors->first('category_slug')); ?></div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Parent Id</label>
                                                <select name="parent_id" class="form-control">
                                                    <option value="">Select Category</option>
                                                    <?php $__currentLoopData = $data_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-t-20 text-center">
                                        <button class="btn btn-primary submit-btn" type="submit">Create</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo e(asset('admin/assets/css/treeview.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="<?php echo e(asset('admin/assets/js/treeview.js')); ?>"></script>

<script> console.log('Hi!');
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/app.nupustaka.com/resources/views/admin/category.blade.php ENDPATH**/ ?>