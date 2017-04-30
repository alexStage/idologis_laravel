<?php $__env->startSection('content'); ?>

<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">Ajouter un bien</div>
        <div class="panel-body">
            <?php echo e(Form::open(array('route'=>'ajouteBienForm','files'=> true))); ?>


            <?php echo e(Form::label('secteur', 'secteur: ')); ?>

            <?php echo e(Form::text('secteur')); ?>

        </br>
            <label>photo: </label>
            <input type="file" name="photo">
        </br>
            <?php echo e(Form::label('surface', 'surface: ')); ?>

            <?php echo e(Form::text('surface')); ?>

        </br>
            <?php echo e(Form::label('surfaceTerrain', 'surface du terrain (vide si pas de terrain):')); ?>

            <?php echo e(Form::text('surfaceTerrain')); ?>

        </br>
            <?php echo e(Form::label('chambres', 'nombre de chambres: ')); ?>

            <?php echo e(Form::number('chambres')); ?>

        </br>
            <?php echo e(Form::label('pieces', 'nombre de pieces: ')); ?>

            <?php echo e(Form::number('pieces')); ?>

        </br>
            <?php echo e(Form::label('types', 'type de bien: ')); ?>

            <?php echo e(Form::text('types')); ?>

        </br>
            <?php echo e(Form::label('prix', 'prix: ')); ?>

            <?php echo e(Form::number('prix')); ?>

        </br>
            <?php echo e(Form::label('categorie_id', 'categorie du bien: ')); ?>

            <?php echo e(Form::select('categorie_id', $categories)); ?>

        </br>
            <?php echo e(Form::label('classe_id', 'categorie du bien: ')); ?>

            <?php echo e(Form::select('classe_id', $classes )); ?>

        </br>
            <?php echo e(Form::label('user_id', 'personnel en charge: ')); ?>

            <?php echo e(Form::select('user_id', $users )); ?>

        </br>
            <?php echo e(Form::submit('enregistrer')); ?>

            <?php echo e(Form::close()); ?>

        
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>