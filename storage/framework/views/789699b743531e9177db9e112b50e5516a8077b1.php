

<?php $__env->startSection('content'); ?>


    <h2>Ajouter un étudiant</h2>
    <hr/>
    <a class="btn btn-primary" href="/students" style="margin-bottom: 15px;">Revenir à la liste</a>
    
    

    <?php echo Form::open(['id' => 'dataForm', 'url' => '/students']); ?>

    <div class="form-group">
        <?php echo Form::label('prenom', 'Prenom');; ?>

        <?php echo Form::text('prenom', null, ['class' => 'form-control']);; ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('nom', 'Nom');; ?>

        <?php echo Form::text('nom', null, ['class' => 'form-control']);; ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('age', 'Age');; ?>

        <?php echo Form::number('age', null, ['class' => 'form-control']);; ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('mobile', 'Telephone');; ?>

        <?php echo Form::text('mobile', null, [ 'class' => 'form-control']);; ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('email', 'Email'); ?>

        <?php echo Form::email('email', null, ['class' => 'form-control']);; ?>

    </div>
    

   
   <div class="form-group">
        <?php echo Form::label('specialite', 'Specialité');; ?>

       
    <select class="form-control m-bot15" name="specialite">
        
      <option >Stylisme</option> 
      <option >Couture</option>  
      <option >Creation de mode</option> 
      <option >Manager mode</option>  
      
     </select>
    </div>
    <div class="form-group">
        <?php echo Form::label('region', 'Région');; ?>

       
    <select class="form-control m-bot15" name="region">
        
      <option >Dakar</option> 
      <option >Thies</option>  
      <option >Louga</option> 
      <option >Saint-louis</option>  
      <option >Fatick</option>
      <option >Kaolack</option>
      <option >Ziguinchor</option>
     </select>
</div>
<div class="form-group">
        <?php echo Form::label('ville', 'Ville'); ?>

        <?php echo Form::text('ville', null, ['class' => 'form-control']);; ?>

    </div>

   <div class="form-group">
        <?php echo Form::label('diplome', 'Diplôme');; ?>

       
    <select class="form-control m-bot15" name="diplome">
        
      <option>BFEM</option> 
      <option>BAC + 1</option>  
      <option>BAC + 2</option> 
      <option>BAC + 3</option>  
      <option>BAC + 4</option>  
      <option>BAC + 5</option>
         

     </select>
</div>
<div class="form-group">
        <?php echo Form::label('diplomem', 'Diplôme en mode');; ?>

       
    <select class="form-control m-bot15" name="diplomem">
        
      <option>Pas de diplôme</option> 
      <option>CAp</option>  
      <option>BT</option> 
      <option>BTS</option>  
      <option>Licence</option>  
      <option>Master</option>
         

     </select>
</div>
<div class="form-group">
        <?php echo Form::label('file', 'File');; ?>

        <?php echo Form::file('file', null, ['class' => 'form-control']);; ?>

    </div>

    

   
    <?php echo Form::submit('Ajouter', ['class' => 'btn btn-primary pull-right']);; ?>


    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>