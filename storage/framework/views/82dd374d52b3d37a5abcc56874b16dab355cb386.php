<!DOCTYPE html>
<html>
  <head>
    <?php echo $__env->make('includes._headcontentstandard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </head>
  <body>
    <?php echo $__env->make('includes._header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('includes._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- This will let us create a background independent of other elements. -->
    <?php echo $__env->yieldContent('background'); ?>
  </body>
</html>
