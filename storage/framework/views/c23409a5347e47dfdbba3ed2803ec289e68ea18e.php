<?php $__env->startSection('content'); ?>

    <div class="sermon">
        <div class="panel bg-white">
            <div class="panel-heading white-color text-bold bg-blue-dark">Edit Sermon</div>

            <form class="edit" method="post" action="edit-time">

                <?php echo e(csrf_field()); ?>


                <input type="text" class="hidden" name="id" value="<?php echo e($time->id); ?>">

                <div class="form-group">
                    <label>Date example</label> <span>2018-01-30 12:00</span>
                    <input type="datetime-local" class="form-control" placeholder="2018-01-30 12:00" id="time-input" name="time" value="<?php echo e($time->time); ?>" autofocus required>
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