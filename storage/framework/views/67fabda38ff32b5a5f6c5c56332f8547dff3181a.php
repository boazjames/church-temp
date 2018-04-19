<div class="time dynamic">
    <div class="panel bg-white text-center">
        <div class="panel-heading white-color text-bold bg-blue-dark">Time</div>
        <h2 class="sub-heading">Next service starts in: </h2>
        <div class="set-time hidden">
        <?php $__currentLoopData = $times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div><?php echo e($time->time); ?></div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

        <div class="bg-blue inline clock-item"><div id="days" class="bg-white">0</div><div>Days</div> </div>
        <div class="bg-blue inline clock-item"><div id="hours" class="bg-white">00</div><div>Hours</div> </div>
        <div class="bg-blue inline clock-item"><div id="minutes" class="bg-white">00</div><div>Minutes</div> </div>
        <div class="bg-blue inline clock-item"><div id="seconds" class="bg-white">00</div><div>Seconds</div> </div>

        <table id="time-tbl" class="table-striped table-responsive">
            <tr>
                <th>Time ID</th>
                <th>Time</th>
                <th>Set by</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-center"><?php echo e($time->id); ?></td>
                    <td class="text-left"><?php echo e($time->time); ?></td>
                    <td class="text-left"><?php echo e($time->user->salutation); ?> <?php echo e($time->user->username); ?></td>
                    <td class="text-left"><button class="btn btn-warning btn-sm time-edit-btn" data-id="<?php echo e($time->id); ?>">Edit</button> <button class="btn btn-danger btn-sm time-delete-btn" data-id="<?php echo e($time->id); ?>">Delete</button> </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>

    </div>
</div>
