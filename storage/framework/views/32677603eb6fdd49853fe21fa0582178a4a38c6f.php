<?php $__env->startSection('content'); ?>

    <h2>LABOT</h2>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main-printful', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/_printful/resources/views/pages/edit.blade.php ENDPATH**/ ?>