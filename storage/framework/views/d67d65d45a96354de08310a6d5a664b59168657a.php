<?php $__env->startSection('content'); ?>

    <h2>Read Data</h2>
    <hr/>
    <a class="btn btn-primary" href="students/create" style="margin-bottom: 15px;">Create New</a>

    <?php if(Session::has('message')): ?>
    <div class="alert-custom">
        <p><?php echo Session('message'); ?></p>
    </div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th style="padding-left: 15px;">#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Facebook</th>
            <th>Mobile</th>
            <th width="110px;">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td style="padding-left: 15px;"><?php echo $student->id; ?></td>
                <td><?php echo $student->name; ?></td>
                <td><?php echo $student->email; ?></td>
                <td><?php echo $student->fb; ?></td>
                <td><?php echo $student->mobile; ?></td>
                <td>
                    <a class="btn btn-success btn-sm" href="students/<?php echo $student->id; ?>/edit">Edit</a>

                    <?php echo Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/students/' . $student->id]); ?>

                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']); ?>

                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>