<?php $__env->startSection('sidebar'); ?>

<?php $__env->startSection('title', 'show'); ?>
<h1>Tarea ID: <?php echo e($task->id); ?></h1>
<hr>
<h2><?php echo e($task->name); ?></h2>
<p><?php echo e($task->description); ?></p>

<a href="/tasks/<?php echo e($task->id); ?>/edit">Editar</a>
<a href="/tasks/<?php echo e($task->id); ?>/delete">Elimiar</a>
<form action="/tasks/<?php echo e($task->id); ?>/delete" method="POST"> 
    <?php echo csrf_field(); ?> 
    <?php echo method_field('delete'); ?> 
    <button type="submit">eliminar</button>>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\tasks\resources\views/tasks/show.blade.php ENDPATH**/ ?>