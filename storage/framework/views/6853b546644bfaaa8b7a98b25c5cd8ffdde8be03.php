<div class="admin dynamic">
    <div class="panel bg-white">
        <div class="panel-heading white-color text-bold bg-blue-dark">Admin</div>
        <form method="post" action="filt-admin">
            <?php echo e(csrf_field()); ?>

            <input type="text" class="form-control inline filt-form" name="username" placeholder="Filter Admin...">
            <button type="submit" class="btn btn-primary inline">Filter</button>
        </form>

        <?php if(count($admins)>0): ?>
        <table id="admin-tbl" class="table-striped table-responsive">
            <tr>
                <th>Admin ID</th>
                <th>Salutation</th>
                <th>Username</th>
                <th>Level</th>
                <th>Last Login</th>
                <th></th>
            </tr>

            <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center"><?php echo e($admin->id); ?></td>
                <td><?php echo e($admin->salutation); ?></td>
                <td><?php echo e($admin->username); ?></td>
                <td><?php echo e($admin->level); ?></td>
                <td><?php echo e(($admin->created_at)->toDayDateTimeString()); ?></td>

                <?php if(Auth::user()->level==1 && $admin->level==2): ?>
                <td><button class="btn btn-danger btn-sm admin-delete-btn" data-id="<?php echo e($admin->id); ?>" data-level="<?php echo e($admin->level); ?>" auth-level="<?php echo e(Auth::user()->level); ?>">Delete</button> </td>
            <?php else: ?>
                    <td><button class="btn btn-danger btn-sm admin-delete-btn" data-id="<?php echo e($admin->id); ?>" data-level="<?php echo e($admin->level); ?>" auth-level="<?php echo e(Auth::user()->level); ?>" disabled>Delete</button> </td>
                <?php endif; ?>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>

            <?php else: ?>
            <div class="jumbotron padding-left-30p"><h3>There is no such admin</h3></div>
        <?php endif; ?>
    </div>

    <div class="links text-center"><?php echo e($admins->links()); ?></div>

</div>
