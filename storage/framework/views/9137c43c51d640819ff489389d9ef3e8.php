<!-- resources/views/layouts/app.blade.php -->
 
<html>
    <head>
        <title>Tasks - <?php echo $__env->yieldContent('title'); ?></title>
    </head>
    <body>
        <?php $__env->startSection('sidebar'); ?>
            This is the master sidebar.
        <?php echo $__env->yieldSection(); ?>
 
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html><?php /**PATH C:\xampp\htdocs\laravel\tasks\resources\views/layouts/app.blade.php ENDPATH**/ ?>