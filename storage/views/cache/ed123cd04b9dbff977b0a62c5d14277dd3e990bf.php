
<?php $__env->startSection('content'); ?>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-9  m-auto  border p-4">
            <?php if(isset($events)): ?>
            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="event">
                <div class="d-flex flex-row">
                    <img src="<?php echo e('http://localhost/admin/img/' . $event->imgSrc); ?>" width="200" height="150" alt="" srcset="">
                    <div class="infor ml-5">
                        <?php echo $event->body ?>
                        <a href="/event/<?php echo e($event->eventId); ?>" class="float-right btn btn-success description">chi tiết</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/user/event/index.blade.php ENDPATH**/ ?>