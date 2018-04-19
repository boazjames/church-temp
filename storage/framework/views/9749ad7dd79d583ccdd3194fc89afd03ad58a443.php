<?php $__env->startSection('content'); ?>
    <div class="panel-heading bg-blue-dark text-bold white-color" id="form-top">Reset Password</div>

    <form class="login-form"  method="POST" action="<?php echo e(route('password.email')); ?>">
        <?php if(session('status')): ?>
            <div class="alert alert-success">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>

        <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <label>Email:</label>
            <input type="email"  name="email" class="form-control" placeholder="example@gmail.com" required autofocus>

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary bg-blue-dark">Send password reset link</button>
        </div>


        <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.resets', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>