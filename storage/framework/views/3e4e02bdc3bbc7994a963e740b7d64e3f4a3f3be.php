<?php $__env->startSection('title'); ?>
Todo Item: <?php echo e($todo->name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

        <h1 class="text-center my-5"><?php echo e($todo->name); ?></h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                         Todo Description  
                    </div>
                        <div class="card-body">
                            <?php echo e($todo->description); ?>

                         </div>
                </div> 
                    <a href="/todos/<?php echo e($todo->id); ?>/edit" class="btn btn-info btn-block">Edit</a>
            </div>
        </div>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\todos-app\resources\views/todos/show.blade.php ENDPATH**/ ?>