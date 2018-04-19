<?php $__env->startSection('content'); ?>

<div class="admin">
    <div class="panel bg-white">
        <div class="panel-heading white-color text-bold bg-blue-dark">Edit Profile</div>

        <form method="post" action="edit-profile" enctype="multipart/form-data" id="edit-profile-form" class="filt-form">
            <?php echo e(csrf_field()); ?>


            <div class="form-group">
                <label>Salutation</label>
                <select class="form-control" name="salutation">
                    <?php if($user->salutation=='Pastor'): ?>
                    <option selected>Pastor</option>
                    <option>Bishop</option>
                    <option>Reverent</option>
                    <option>Evangelist</option>
                        <?php elseif($user->salutation=='Bishop'): ?>
                        <option>Pastor</option>
                        <option selected>Bishop</option>
                        <option>Reverent</option>
                        <option>Evangelist</option>
                    <?php elseif($user->salutation=='Reverent'): ?>
                        <option>Pastor</option>
                        <option>Bishop</option>
                        <option selected>Reverent</option>
                        <option>Evangelist</option>
                    <?php elseif($user->salutation=='Evangelist'): ?>
                        <option>Pastor</option>
                        <option>Bishop</option>
                        <option>Reverent</option>
                        <option selected>Evangelist</option>
                        <?php endif; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" placeholder="Short description" name="description" id="user-description" required><?php echo e($user->description); ?></textarea>
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