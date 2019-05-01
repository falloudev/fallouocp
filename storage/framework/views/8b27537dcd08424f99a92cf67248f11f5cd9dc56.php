

<?php $__env->startSection('content'); ?>

    <h2>Update Data</h2>
    <hr/>
    <a class="btn btn-primary" href="/students" style="margin-bottom: 15px;">Revenir à la liste</a>

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
        <?php echo Form::label('etat', 'Etape');; ?>

        <?php echo Form::number('etat', $student->etat, ['class' => 'form-control']);; ?>

    </div>


    <h1 style="text-align:center;">Progression du dossier</h1>
    <div class="form-group">
        <?php echo Form::label('dossier', 'Nombre de dossier fournis');; ?>

        <?php echo Form::number('dossier', $student->dossier, ['class' => 'form-control']);; ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('rvori', 'Rendez-vous orientation');; ?>

        <?php echo Form::date('rvori', $student->rvori, ['class' => 'form-control']);; ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('choix', 'Choix');; ?>

        <?php echo Form::text('choix', $student->choix, [ 'class' => 'form-control']);; ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('rvsim', 'Rendez-vous simulation');; ?>

        <?php echo Form::date('rvsim', $student->rvsim, ['class' => 'form-control']);; ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('rvcamp', 'Rendez-vous Campus');; ?>

        <?php echo Form::date('rvcamp', $student->rvcamp, ['class' => 'form-control']);; ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('reponse', 'Reponse des universités');; ?>

        <?php echo Form::text('reponse', $student->reponse, [ 'class' => 'form-control']);; ?>

    </div>
    
    
    <hr>
    
    <?php echo Form::submit('Update', ['class' => 'btn btn-primary pull-right']);; ?>


    <?php echo Form::close(); ?>


    <hr>


    <hr>
    
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('editable'); ?>
<!DOCTYPE html>
<html>
   
        
    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
           <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="http://groupetrust.com/" target="_blank" class="logo"><img style="width:170px"  src="assets/images/logo-Groupe-Trust.png" alt="user-img"> </a>
                </div>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container" >
                    <div class="">
                        
                        

                        <ul class="nav navbar-nav navbar-right pull-right">
                            
                            <li class="hidden-xs">
                                <a href="#" id="btn-fullscreen" class="waves-effect"><i class="md md-crop-free"></i></a>
                            </li>
                            <li >
                                
                               
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->




        <div class="content-page" style="margin-left:-18px; margin-top:-100px;">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <!-- Page-Title -->
                   

                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>Dossier</th>
                                                        <th>RV orientation</th>
                                                        <th>Choix</th>
                                                        <th>RV simulation</th>
                                                        <th>RV campus</th>
                                                        <th>Réponses</th>
                                                    </tr>
                                                </thead>
                                            <tbody>
                                                   
            <tr>
                
                <td style="width:150px;"><div class="tiles-progress">
                    <div class="m-t-20">
                    <h5 class="text-uppercase">(<?php echo e($student->dossier); ?>/<?php echo e($student->niv); ?>) <span class="pull-right" style="margin-top:-25px;"><?php echo e(($student->dossier *100)/$student->niv); ?>%</span></h5>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e(($student->dossier *100)/$student->niv); ?>%">
                                <span class="sr-only"></span>
                            </div>
                        </div>
                    </div>
                </div></td>
                <td style="width:150px;font-size:20px; text-align:center;"><?php echo e($student->rvori); ?></td>
                <td style="width:150px;font-size:20px; text-align:center;"><?php echo e($student->choix); ?></td>
                <td style="width:150px;font-size:20px; text-align:center;"><?php echo e($student->rvsim); ?></td>
               <td style="width:150px;font-size:20px; text-align:center;"><?php echo e($student->rvcamp); ?></td>
                <td style="width:150px;font-size:20px; text-align:center;"><?php echo e($student->reponse); ?></td>
               
            
              
            </tr>
        

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div> <!-- End Row -->


                 


                </div> <!-- container -->
                           
            </div> <!-- content -->


        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


        <!-- Right Sidebar -->
        <div class="side-bar right-bar nicescroll">
            <h4 class="text-center">Chat</h4>
            <div class="contact-list nicescroll">
                <ul class="list-group contacts-list">
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-1.jpg" alt="">
                            </div>
                            <span class="name">Chadengle</span>
                            <i class="fa fa-circle online"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-2.jpg" alt="">
                            </div>
                            <span class="name">Tomaslau</span>
                            <i class="fa fa-circle online"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-3.jpg" alt="">
                            </div>
                            <span class="name">Stillnotdavid</span>
                            <i class="fa fa-circle online"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-4.jpg" alt="">
                            </div>
                            <span class="name">Kurafire</span>
                            <i class="fa fa-circle online"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-5.jpg" alt="">
                            </div>
                            <span class="name">Shahedk</span>
                            <i class="fa fa-circle away"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-6.jpg" alt="">
                            </div>
                            <span class="name">Adhamdannaway</span>
                            <i class="fa fa-circle away"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-7.jpg" alt="">
                            </div>
                            <span class="name">Ok</span>
                            <i class="fa fa-circle away"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-8.jpg" alt="">
                            </div>
                            <span class="name">Arashasghari</span>
                            <i class="fa fa-circle offline"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-9.jpg" alt="">
                            </div>
                            <span class="name">Joshaustin</span>
                            <i class="fa fa-circle offline"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-10.jpg" alt="">
                            </div>
                            <span class="name">Sortino</span>
                            <i class="fa fa-circle offline"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                </ul>  
            </div>
        </div>
        <!-- /Right-bar -->


    </div>
    <!-- END wrapper -->

    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <!-- Datatables-->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
    <script src="assets/plugins/datatables/jszip.min.js"></script>
    <script src="assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/pages/datatables.init.js"></script>

    <script src="assets/js/jquery.app.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable( { keys: true } );
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
            var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
        } );
        TableManageButtons.init();
    </script>

	
	</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>