
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <?php if(isset($user)): ?>
        <div class="col-md-4">
            <div class="card text-center p-2">
                <img class="m-auto" width="100" height="100" src="<?php echo e(BASE_URL . $user[0]->imgSrc); ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title" style="font-size: 20px;"><?php echo e($user[0]->username); ?></h4>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">
                    Contract information
                </div>
                <div class="card-body">
                    <p class="card-text"><?php echo e($user[0]->email); ?></p>
                </div>

            </div>
            <div class="card mt-3">
                <div class="card-header">
                    Experience
                </div>
                <div class="card-body">
                    <p class="card-text"><?php echo e($user[0]->experience); ?></p>
                </div>

            </div>
        </div>
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">
                    summary
                    <button class="float-right btn btn-primary" data-toggle="modal" data-target="#summary">
                        Edit
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <?php echo e($user[0]->summary); ?>

                    </p>
                </div>

            </div>
            <div class="card mt-3 ">
                <div class="card-header">
                    trình độ giáo dục
                    <button class="float-right btn btn-primary ml-3" data-toggle="modal" data-target="#educationAdd">Add Education</button>
                    <button class="float-right btn btn-primary mr-3" data-toggle="modal" data-target="#education">
                        Edit
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <?php echo e($user[0]->education); ?>

                    </p>
                </div>

            </div>
            <div class="card mt-3 ">
                <div class="card-header">
                    Kinh nghiệm làm việc
                    <button class="float-right btn btn-primary ml-3" data-toggle="modal" data-target="#workAdd">Add work</button>
                    <button class="float-right btn btn-primary mr-3" data-toggle="modal" data-target="#work">
                        Edit
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <?php echo e($user[0]->work); ?>

                    </p>
                </div>

            </div>

            <!-- modal summary -->
            <div class="modal fade" id="summary" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="col-md-6" action="/edit-summary" method="post">
                                <div class="form-group">
                                    <label for="">Summary</label>
                                    <input type="text" name="summary" value="<?php echo e($user[0]->summary); ?>" class="form-control" placeholder="">
                                </div>

                                <button type="submit" class="btn btn-success">Edit</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                            <button type="button" class="btn btn-primary" id="edit">Edit</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal education -->
            <div class="modal fade" id="education" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="col-md-6" action="/edit-education" method="post" id="formEdu">
                                <div class="form-group">
                                    <label for="">Education</label>
                                    <input type="hidden" name="userId" value="<?php echo e($user[0]->userId); ?>">
                                    <input type="text" name="education" value="<?php echo e($user[0]->education); ?>" class="form-control" placeholder="">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="edit" form="formEdu">Edit</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="educationAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="col-md-6" action="/add-education" method="post" id="formEduAdd">
                                <div class="form-group">
                                    <label for="">Education</label>
                                    <input type="hidden" name="userId" value="<?php echo e($user[0]->userId); ?>">
                                    <input type="text" name="education" class="form-control" placeholder="">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="add" form="formEduAdd">Add</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal work -->
            <div class="modal fade" id="work" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="col-md-6" action="/edit-work" method="post" id="formWork">
                                <div class="form-group">
                                    <label for="">Work</label>
                                    <input type="hidden" name="userId" value="<?php echo e($user[0]->userId); ?>">
                                    <input type="text" name="work" value="<?php echo e($user[0]->work); ?>" class="form-control" placeholder="">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="edit" form="formWork">Edit</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="workAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="col-md-6" action="/add-work" method="post" id="formWorkAdd">
                                <div class="form-group">
                                    <label for="">Work</label>
                                    <input type="hidden" name="userId" value="<?php echo e($user[0]->userId); ?>">
                                    <input type="text" name="work" class="form-control" placeholder="">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="add" form="formWorkAdd">Add</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/user/info/index.blade.php ENDPATH**/ ?>