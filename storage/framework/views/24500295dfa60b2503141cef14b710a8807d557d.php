<?php echo $__env->make('templates.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- container -->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <?php echo $__env->yieldContent('content'); ?>

        </div>
    </div>
</div><!-- container -->

<?php echo $__env->make('templates.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>