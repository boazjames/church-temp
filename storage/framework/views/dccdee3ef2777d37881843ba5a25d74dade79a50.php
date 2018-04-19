<div class="sermon dynamic">
<div class="panel bg-white">
    <div class="panel-heading white-color text-bold bg-blue-dark">Sermons</div>
    <form method="post" action="filt-sermon">
        <?php echo e(csrf_field()); ?>

        <input type="text" class="form-control inline filt-form" name="title" placeholder="Filter Sermons..." required>
       <button type="submit" class="btn btn-primary inline">Filter</button>
    </form>

    <?php if(count($sermons)>0): ?>
    <table id="sermon-tbl" class="table-striped table-responsive">
        <tr>
            <th>Sermon ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Created</th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $sermons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sermon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="text-center"><?php echo e($sermon->id); ?></td>
            <td><?php echo e($sermon->title); ?></td>
            <td><?php echo e($sermon->user->salutation); ?> <?php echo e($sermon->user->username); ?></td>
            <td><?php echo e(($sermon->created_at)->toFormattedDateString()); ?></td>
            <td><button class="btn btn-warning btn-sm sermon-edit-btn" data-id="<?php echo e($sermon->id); ?>">Edit</button> <button class="btn btn-danger btn-sm sermon-delete-btn" data-id="<?php echo e($sermon->id); ?>">Delete</button> </td>
        </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
        <?php else: ?>
    <div class="jumbotron padding-left-30p"><h3>There is no such sermon</h3></div>
        <?php endif; ?>
</div>

    <div class="links text-center"><?php echo e($sermons->links()); ?></div>

</div>
