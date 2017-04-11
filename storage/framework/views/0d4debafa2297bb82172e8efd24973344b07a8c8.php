<?php $__env->startSection('content'); ?>
    <div>
        <div class="panel panel-default">
            <div class="panel-heading">
                Registro De Empresas
                <button class="btn btn-primary btn-xs pull-right">Guardar Cambios</button>
            </div>
            <div class="panel-body">
                <?php echo Form::open(['url' => '', 'method' => 'put']); ?>

                <div class="col-md-7">

                    <fieldset>
                        <legend>Datos personales</legend>

                        <div class="form-group col-md-6">
                            <?php echo Form::label('nm', 'Nombre Comercial De La Empresa', ['class' => 'form-label']); ?>

                            <br>
                            <?php echo Form::text('nm', null, ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group col-md-6">
                            <?php echo Form::label('nmm', 'Tipologia de la empresa', ['class' => 'form-label']); ?>

                            <br>
                            <?php echo Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['class' => 'form-control']);; ?>

                        </div>
                        <div class="form-group col-md-4">
                            <?php echo Form::label('pais', 'Pais', ['class' => 'form-label']); ?>

                            <br>
                            <?php echo Form::text('pais', null, ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group col-md-4">
                            <?php echo Form::label('estado', 'estado', ['class' => 'form-label']); ?>

                            <br>
                            <?php echo Form::text('estado', null, ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group col-md-4">
                            <?php echo Form::label('ciu', 'Ciudad', ['class' => 'awesome']); ?>

                            <br>
                            <?php echo Form::text('ciu', null, ['class' => 'form-control']); ?>

                        </div>

                    </fieldset>
                    <fieldset>
                        <legend>Informacion De Registro</legend>

                        <div class="form-group col-md-4">
                            <?php echo Form::label('email', 'Email Usuario', ['class' => 'form-label']); ?>

                            <br>
                            <?php echo Form::email('email', 'example@.com', ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group col-md-4">
                            <?php echo Form::label('pass', 'Password', ['class' => 'form-label']); ?>

                            <br>
                            <?php echo Form::password('password', ['class' => 'form-control']); ?>

                        </div>
                        <div class="form-group col-md-4">
                            <?php echo Form::label('passw', 'Repetir Password', ['class' => 'awesome']); ?>

                            <br>
                            <?php echo Form::password('password', ['class' => 'form-control']); ?>

                        </div>

                    </fieldset>

                </div>
                <fieldset>
                    <legend>Descripción del problema</legend>
                   <?php echo Form::textarea('notes', null, ['class' => 'form-control', 'style' => 'resize: none' , 'size' => '50x12'] ); ?>

                </fieldset>
                <div class="clearfix"></div>

                <?php echo Form::close(); ?>

            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>