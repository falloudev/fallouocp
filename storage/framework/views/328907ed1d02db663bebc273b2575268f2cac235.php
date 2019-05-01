

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
        <?php echo Form::label('campus', 'Campus');; ?>

        <?php echo Form::url('campus', null, ['placeholder' => 'Enter campus url', 'class' => 'form-control']);; ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('mobile', 'Mobile');; ?>

        <?php echo Form::text('mobile', null, [ 'class' => 'form-control']);; ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('rendezvous', 'Rendez-vous');; ?>

        <?php echo Form::date('rendezvous', null, ['class' => 'form-control']);; ?>

    </div>
   
   <div class="form-group">
        <?php echo Form::label('niveau', 'Niveau');; ?>

       
    <select class="form-control m-bot15" name="niveau">
        
      <option >Terminal</option> 
      <option >Licence 1</option>  
      <option >Licence 2</option> 
      <option >Licence 3</option>  
      <option >Master 1</option>  
      <option >Master 1</option>
      <option >Doctorat</option>   

     </select>
</div>

   <div class="form-group">
        <?php echo Form::label('niv', 'Dossier a fournir selon le niveau');; ?>

       
    <select class="form-control m-bot15" name="niv">
        
      <option value="5">Terminal</option> 
      <option value="6">Licence 1</option>  
      <option value="7">Licence 2</option> 
      <option value="8">Licence 3</option>  
      <option value="9">Master 1</option>  
      <option value="10">Master 1</option>
      <option value="11">Doctorat</option>   

     </select>
</div>
<div class="form-group">
        <?php echo Form::label('etat', 'Nombre de dossier fournis');; ?>

        <?php echo Form::number('etat', null, [ 'class' => 'form-control']);; ?>

    </div>
   

    

   
    <?php echo Form::submit('Create', ['class' => 'btn btn-primary pull-right']);; ?>


    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>