
<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">Edit Category</div>
    <div class="card-body ">
        <form class="col-md-6" action="/admin/update-category/<?php echo e($category[0]->catId); ?>" method="post">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="<?php echo e($category[0]->name); ?>" class="form-control" placeholder="">
            </div>
            <button type="submit" class="btn btn-success">Edit</button>
        </form>
    </div>
    <div class="card-footer">

    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/categories/edit.blade.php ENDPATH**/ ?>