
<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">Event</div>
    <div class="card-body ">
        <form class="col-md-12" action="/admin/update-event/<?php echo e($event[0]->eventId); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group ">
                <img style="height: 10em; width: 10em" src="<?php echo e('http://localhost/admin/img/' . $event[0]->imgSrc); ?>" />
                <br />
                <br />
                <label class="formLabel" for="productAvatar">Chosse
                </label>
                <input type="file" id="productAvatar" name="imgupload">
            </div>
            <textarea name="content" id="editor">
            <?php echo $event[0]->body ?>
            </textarea>
            <button type="submit" class="btn btn-success">Edit</button>
        </form>
    </div>
    <div class="card-footer">

    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/events/edit.blade.php ENDPATH**/ ?>