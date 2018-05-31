<div class="video dynamic">
    <div class="panel bg-white">
        <div class="panel-heading white-color text-bold bg-blue-dark">Videos</div>
        <?php echo $__env->make('admin.includes.flash-messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <table id="video-tbl" class="table-striped table-responsive">
            <tr>
                <th>Video ID</th>
                <th>Title</th>
                <th>Code</th>
                <th>Created</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center"><?php echo e($video->id); ?></td>
                <td><?php echo e($video->title); ?></td>
                <td><?php echo e($video->code); ?></td>
                <td><?php echo e(($video->created_at)->toFormattedDateString()); ?></td>
                <td><button class="btn btn-warning btn-sm video-edit-btn" data-id="<?php echo e($video->id); ?>">Edit</button> <button class="btn btn-danger btn-sm video-delete-btn" data-id="<?php echo e($video->id); ?>">Delete</button> </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>
    </div>

    <div class="links text-center"><?php echo e($videos->links()); ?></div>

</div>
