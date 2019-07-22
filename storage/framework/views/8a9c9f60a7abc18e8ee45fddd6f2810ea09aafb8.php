<?php $__env->startSection('content'); ?>

    <h2>TO DO LIST</h2>
    <a href="add"><i class="fa fa-plus-circle"></i> Pievienot jaunu uzdevumu</a>
          
    <hr>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-1 check">
                <input class="checkbx" type="checkbox" >
            </div>

            <div class="col-md-10 stils">
                <div class="card-body">
                  <h5 class="card-title"><?php echo e($postItem->Virsraksts); ?></h5>
                  <p class="card-text"><?php echo e($postItem->Apraksts); ?></p>
                <p class="card-text"><small class="text-muted">Publicēts: <?php echo e($postItem->updated_at); ?></small></p>
                </div>
            </div>

            <div class="col-md-1 ">
                

                <a href="edit/<?php echo e($postItem->id); ?>"><small>labot</small></a>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main-printful', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/_printful/resources/views/index.blade.php ENDPATH**/ ?>