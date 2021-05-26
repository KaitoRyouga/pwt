
<?php $__env->startSection('content'); ?>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-9  m-auto  border p-4">
            <?php if(isset($event)): ?>
            <div class="event">
                <div class="d-flex flex-row">
                    <img src="<?php echo e('http://localhost/admin/img/' . $event[0]->imgSrc); ?>" width="200" height="150" alt="" srcset="">
                    <div class="infor ml-5">
                        <?php echo $event[0]->body ?>
                        <div class="float-right btn btn-success">chi tiết</div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/user/event/description.blade.php ENDPATH**/ ?>