<?php $__env->startSection('content'); ?>
<div class="section-chat">
    <div class="chat-left">
        <ul class="user-list">
            <li>
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                    New message
                </button>
            </li>
            <div class="user-taskbar">
                <?php if(isset($taskbar)): ?>
                <?php $__currentLoopData = $taskbar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a => $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="user-item" data-id="<?php echo e($a); ?>"><img src="<?php echo e(BASE_URL . 'chat/images/1.jpg'); ?>" alt="" srcset="">
                    <div class="chat">
                        <p class="name"><?php echo e($a); ?></p>
                        <p class="chat-last"><?php echo e($b); ?></p>
                    </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </ul>
    </div>
    <div class="chat-right">
        <div class="errorsSide"></div>
        <div class="mainChater">
            <div class="headerDet">
                <div class="chatDety">
                    <div class="nameC">
                        <?php if(isset($_SESSION["toUser"])): ?>
                        <p class="roomTitle" id="titleFirst"><?php echo e($_SESSION["toUser"]); ?></p>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
            <div class="blackout"></div>
            <div class="chatArea changeW">
                <div class="chatMessages">

                </div>
                <div class="messageBox">
                    <div class="textA">
                        <textarea id="message" name="message" rows="1" cols="30" placeholder="Type your message here"></textarea>
                    </div>
                    <button class="button-s1" id="send" tooltip="Send" flow="left">Send</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="text" id="search-input" name="search" placeholder="Enter name" />
                    </form>
                    <div class="result-user">

                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <button type="button" class="btn btn-primary" id="search">Search</button>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.chat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/chat/index.blade.php ENDPATH**/ ?>