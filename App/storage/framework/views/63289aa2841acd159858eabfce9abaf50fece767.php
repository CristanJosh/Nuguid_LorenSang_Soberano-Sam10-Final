<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo e($todo->text); ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo e($todo->due); ?></h6>
            <p class="card-text"><?php echo e($todo->body); ?></p>

            <form class="float-right" action="<?php echo e(action('TodoController@destroy', $todo->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="_method" value="Delete" />
                    <button type="submit" class="btn btn-danger">Delete</button>
            </form> 

            <a href="/todo/<?php echo e($todo->id); ?>/edit" class="btn btn-info float-right mr-4">Edit</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\todolist\resources\views/show.blade.php */ ?>