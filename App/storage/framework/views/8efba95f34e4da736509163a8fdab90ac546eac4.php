<?php $__env->startSection('content'); ?>
<form action="<?php echo e(action('TodoController@update', $todo->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
          <input type="text" value="<?php echo e($todo->text); ?>" name="title" class="form-control" placeholder="Enter a Title">  
        </div>
        <div class="form-group">
            <input type="date" value="<?php echo e($todo->due); ?>" name="date" class="form-control">
        </div>
        <div class="form-group">
            <textarea rows="5" name="desc" type="text" class="form-control" placeholder="Add a Description"><?php echo e($todo->body); ?></textarea>
        </div>
        <input type="hidden" name="_method" value="put" />
        <button type="submit" class="btn btn-primary">Submit</button>
</form>   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\todolist\resources\views/edit.blade.php */ ?>