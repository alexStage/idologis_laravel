<?php $__env->startSection('content'); ?>
    <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">Nous contacter</div>
        <div class="panel-body">
            <?php echo e(Form::open(array('route'=>'envoie'))); ?>


            <?php echo e(Form::label('email', 'email: ')); ?>

            <?php echo e(Form::text('email')); ?>

        </br>

        </br>
            <?php echo e(Form::label('message', 'votre message: ')); ?>

            <?php echo e(Form::textarea('message')); ?>

        </br>
            <?php echo e(Form::submit('envoyer')); ?>

            <?php echo e(Form::close()); ?>    
        </div>
        
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>