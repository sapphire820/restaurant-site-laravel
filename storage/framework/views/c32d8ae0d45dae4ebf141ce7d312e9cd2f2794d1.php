<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $__env->make("admin.partials.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    <div class="container-scroller">
      <?php echo $__env->make("admin.partials.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="container-fluid page-body-wrapper">
        <?php echo $__env->make("admin.partials.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main-panel">
            <?php echo e($slot); ?>

        </div>
      </div>
    </div>
    
    <?php echo $__env->make("admin.partials.script", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>        
  </body>
</html><?php /**PATH E:\My Work\web\Resturent-Site\resources\views/components/home/index.blade.php ENDPATH**/ ?>