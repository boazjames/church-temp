<?php $__env->startSection('content'); ?>

    <div class="sermon">
        <div class="panel bg-white">
            <div class="panel-heading white-color text-bold bg-blue-dark">Edit Sermon</div>

            <form method="post" action="edit-sermon" id="edit-sermon-form">
                <?php echo e(csrf_field()); ?>


                <input type="text" class="hidden" name="id" value="<?php echo e($sermon_edit->id); ?>">

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Title" id="sermon-title" name="title" value="<?php echo e($sermon_edit->title); ?>" required autofocus>
                </div>
                <div class="form-group">
                    <label>Sermon Body</label>
                    <textarea class="form-control" placeholder="Sermon Body" rows="10" name="body" required><?php echo e($sermon_edit->body); ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-warning btn-lg">Edit</button>
                </div>

            </form>
            <br>
            <div class="alert alert-danger"></div>

        </div>

    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>