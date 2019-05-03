<?php $__env->startSection('content'); ?>

    <h2>Create Data</h2>
    <hr/>
    <a class="btn btn-primary" href="/students" style="margin-bottom: 15px;">Read Data</a>

    <?php echo Form::open(['id' => 'dataForm', 'url' => '/students']); ?>

    <div class="form-group">
        <?php echo Form::label('name', 'Name');; ?>

        <?php echo Form::text('name', null, ['placeholder' => 'Enter name', 'class' => 'form-control']);; ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('email', 'Email'); ?>

        <?php echo Form::email('email', null, ['placeholder' => 'Enter email', 'class' => 'form-control']);; ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('fb', 'Facebook');; ?>

        <?php echo Form::url('fb', null, ['placeholder' => 'Enter facebook url', 'class' => 'form-control']);; ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('mobile', 'Mobile');; ?>

        <?php echo Form::text('mobile', null, ['placeholder' => 'Enter mobile', 'class' => 'form-control']);; ?>

    </div>

    <?php echo Form::submit('Create', ['class' => 'btn btn-primary pull-right']);; ?>


    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>