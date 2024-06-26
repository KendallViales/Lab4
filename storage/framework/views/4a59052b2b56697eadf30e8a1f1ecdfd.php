<?php $__env->startSection('sidebar'); ?>

<?php $__env->startSection('title', 'tasks'); ?>

<h1>Lista de tareas</h1>
<a href="/tasks/create">Crear</a>
<ul>
    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
         <a href="/tasks/<?php echo e($task->id); ?>"><?php echo e($task->name); ?></a> <form method="post" action="/tasks/<?php echo e($task->id); ?>/complete">
            <?php echo csrf_field(); ?>
            <?php echo method_field("PUT"); ?>
            <button type="submit">Completar</button>
         </form> 
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\tasks\resources\views/tasks/index.blade.php ENDPATH**/ ?>