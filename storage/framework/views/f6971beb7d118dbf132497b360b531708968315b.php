

<?php $__env->startSection('content'); ?>

    <h2>Update Data</h2>
    <hr/>
    <a class="btn btn-primary" href="/students" style="margin-bottom: 15px;">Read Data</a>

    <?php echo Form::open(['id' => 'dataForm', 'method' => 'PATCH', 'url' => '/students/' . $student->id ]); ?>

    <div class="form-group">
        <?php echo Form::label('name', 'Name');; ?>

        <?php echo Form::text('name', $student->name , ['placeholder' => 'Enter name', 'class' => 'form-control']);; ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('email', 'Email'); ?>

        <?php echo Form::email('email', $student->email, ['placeholder' => 'Enter email', 'class' => 'form-control']);; ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('campus', 'Campus');; ?>

        <?php echo Form::url('campus', $student->campus, ['placeholder' => 'Enter facebook url', 'class' => 'form-control']);; ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('mobile', 'Mobile');; ?>

        <?php echo Form::text('mobile', $student->mobile, ['placeholder' => 'Enter mobile', 'class' => 'form-control']);; ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('rendezvous', 'Rendez-vous');; ?>

        <?php echo Form::date('rendezvous', $student->rendezvous, ['class' => 'form-control']);; ?>

    </div>
    
    <div class="form-group">
        <?php echo Form::label('etat', 'Nombre de dossier fournis');; ?>

        <?php echo Form::number('etat', $student->etat, ['class' => 'form-control']);; ?>

    </div>
    <?php echo Form::submit('Update', ['class' => 'btn btn-primary pull-right']);; ?>


    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>