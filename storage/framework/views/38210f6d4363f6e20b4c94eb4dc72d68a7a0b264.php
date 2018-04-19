<?php $__env->startSection('content'); ?>

    <div class="admin">
        <div class="panel bg-white">
            <div class="panel-heading white-color text-bold bg-blue-dark">Messages</div>
            <?php if($message): ?>
                <div class="message">
                    <div class="email"><span class="text-bold">Email:</span> <span class="color-light">&lt;<?php echo e($message->email); ?>&gt;</span></div>
                    <div class="message-body"><?php echo e($message->message); ?></div>
                    <button class="btn btn-primary reply"><i class="fa fa-reply"></i> Reply</button>
                    <form method="post" action="send-message" id="reply-form">
                        <?php echo e(csrf_field()); ?>

                        <input type="text" class="hidden" name="email" value="<?php echo e($message->email); ?>">
                        <textarea name="message" id="reply-body" class="form-control" placeholder="write your message here"></textarea>
                        <button class="btn btn-primary">Send</button>
                    </form>
                    <div class="alert alert-success"></div>
                </div>
            <?php endif; ?>
        </div>

    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>