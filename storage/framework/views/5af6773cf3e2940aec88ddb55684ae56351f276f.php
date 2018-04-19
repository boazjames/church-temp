<?php $__env->startSection('content'); ?>

<div class="admin">
    <div class="panel bg-white">
        <div class="panel-heading white-color text-bold bg-blue-dark">Edit Profile</div>

        <form method="post" enctype="multipart/form-data" id="add-profile-photo-form" action="edit-profile-photo">
            <?php echo e(csrf_field()); ?>



            <div class="form-group">
                <input type="file" class="hidden" name="image" id="image" required>
                <br>
                <label for="image" class="label-for-image"><i class="fa fa-upload"></i> <span>Choose an image file...</span> </label>
                <img src="#" alt="" class="preview">
                <button type="submit" class="btn bg-blue text-bold white-color" id="upload">Upload</button>
            </div>

        </form>
        <br>
        <div class="alert alert-danger"></div>

    </div>

</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>