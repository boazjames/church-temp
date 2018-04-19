<?php $__env->startSection('content'); ?>

    <div class="sermon">
        <div class="panel bg-white">
            <div class="panel-heading white-color text-bold bg-blue-dark">Edit Sermon</div>

            <form class="edit" id="edit-video-form" method="post" action="edit-video">

                <?php echo e(csrf_field()); ?>


                <input type="text" class="hidden" name="id" value="<?php echo e($video->id); ?>">

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Title" id="video-title" name="title" value="<?php echo e($video->title); ?>" autofocus required>
                </div>
                <div class="form-group">
                    <label>Code</label>
                    <input class="form-control" type="text" placeholder="Code" id="video-code" name="code" value="<?php echo e($video->code); ?>" required>
                </div>
                <div class="form-group">
                    <button id="add-video" type="submit" class="btn btn-warning btn-lg">Edit</button>
                </div>
            </form>
            <br>
            <div class="alert alert-danger"></div>

        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>