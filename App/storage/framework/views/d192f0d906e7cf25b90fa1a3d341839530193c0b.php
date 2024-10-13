<?php $__env->startSection('content'); ?>

<?php if(count($todo) > 0): ?>
<div class="row">
<?php $__currentLoopData = $todo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-3 mt-2">
        <div class="card bg-light">
            <div class="card-body">
                    <h5 class="card-title"><?php echo e($tod->text); ?></h5>
                    <p class="card-text"><?php echo e($tod->due); ?></p>
            </div>
            <div class="card-footer">
                <a href="todo/<?php echo e($tod->id); ?>" class="text-info">View</a>
            </div>
          </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\todolist\resources\views/index.blade.php */ ?>