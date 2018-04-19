<?php $__env->startSection('content'); ?>

    <div class="admin">
        <div class="panel bg-white">
            <div class="panel-heading white-color text-bold bg-blue-dark">Messages</div>
            <div class="filter-message">
                <a href="messages"><button class="btn btn-default text-bold" id="all"><i class="fa fa-envelope blue-color"></i> All</button></a>
                <a href="messages-unread"><button class="btn btn-default text-bold" id="unread"><i class="fa fa-envelope-square blue-color"></i> Unread</button></a>
                    <a href="messages-read"><button class="btn btn-default text-bold" id="read"><i class="fa fa-envelope-open blue-color"></i> Read</button></a>
            </div>
            <?php if($messages): ?>
            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($message->is_read==0): ?>
                        <a href="http://localhost/church/public/admin_church/<?php echo e($message->id); ?>message"><div class="message-jumbotron text-bold"><div class="message-email inline"><?php echo e($message->email); ?></div> <p class="inline"><?php echo e(str_limit($message->message, $limit = 100, $end = '...')); ?></p></div></a>
                    <?php else: ?>
                        <a href="http://localhost/church/public/admin_church/<?php echo e($message->id); ?>message"><div class="message-jumbotron-read text-bold"><div class="message-email inline"><?php echo e($message->email); ?></div> <p class="inline"><?php echo e(str_limit($message->message, $limit = 100, $end = '...')); ?></p></div></a>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="message-links text-center"><?php echo e($messages->links()); ?></div>

                <?php endif; ?>
        </div>

    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>