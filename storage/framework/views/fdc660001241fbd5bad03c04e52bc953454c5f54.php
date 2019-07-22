<?php $__env->startSection('content'); ?>
  <h2>JAUNS UZDEVUMS</h2>
  <form action="/submit-newblogpost" method="post">
      
      <div class="form-group">
        <label for="exampleInputPassword1"></label>
        <input name="title" type="text" class="form-control" placeholder="Virsraksts">
      </div>
      
      <div class="form-group">
        <label for="exampleFormControlTextarea1"></label>
        <textarea name="body" class="form-control" rows="3" placeholder="Apraksts"></textarea>
      </div>

      
      
      <button type="submit" class="save">SAGLABĀT</button>
        <div class="button-right">
          <a href="/_printful/public/" class="save">ATPAKAĻ</a>
        </div>

  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main-printful', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/_printful/resources/views/pages/add.blade.php ENDPATH**/ ?>