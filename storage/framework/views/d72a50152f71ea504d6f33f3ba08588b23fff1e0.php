<?php $__env->startSection('content'); ?>

<table class="table table-striped">
        <tr>
                <th>nom</th>
                <th>prenom</th>
                <th>email</th>
                <th>voir</th>
        </tr>

        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr id="vendeur" style="background-color:#60656B">
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->prenom); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><button <?php echo e(Session::token()); ?> onclick="function(){ $('#<?php echo e($user->id); ?>' ).hide();}">voir</button></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        
</table>

<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
<table  id="<?php echo e($user->id); ?>" class="table table-striped">
    <th>Référence numero bien</th>
        <th>type</th>
        <th>Secteur</th>
        <th>Surface</th>
    <th>Loyer</th>
<?php $__currentLoopData = $user->biens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bien): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
<tr style="background-color:#60656B">
    <td><?php echo e($bien->id); ?></td>
    <td><?php echo e($bien->types); ?></td>
    <td><?php echo e($bien->secteur); ?></td>
    <td><?php echo e($bien->surface); ?></td>
    <td><?php echo e($bien->prix); ?> €</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</table>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>




<?php $__env->stopSection(); ?>


<?php echo $__env->make('template2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>