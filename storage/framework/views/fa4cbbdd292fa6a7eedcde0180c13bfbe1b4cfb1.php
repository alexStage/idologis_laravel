<?php $__env->startSection('content'); ?>

<div class="conteneur">
	<table class="table table-striped">
		<tr>
			<th>Référence numero bien</th>
			<th>numero bien</th>
			<th>Secteur</th>
			<th>Surface</th>
			<th>Loyer</th>
			<?php if(Auth::check() == true): ?>
                        <?php if(Auth::User()->isAdmin() ==true): ?>
				<th>supprimer<th>
                        <?php endif; ?>
			<?php endif; ?>
		</tr>

		<?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr onclick="document.location='<?php echo e(URL::route('details', ['id'=> $location->id])); ?>'" style="background-color:#60656B">
			<td><?php echo e($location->id); ?></td>
			<td><?php echo e($location->types); ?></td>
			<td><?php echo e($location->secteur); ?></td>
			<td><?php echo e($location->surface); ?></td>
			<td><?php echo e($location->prix); ?> €</td>
			<?php if(Auth::check() == true): ?>
                        <?php if(Auth::User()->isAdmin() ==true): ?>
				<td><a href="<?php echo e(URL::route('supprimerBien', ['id'=> $location->id])); ?>">supprimer</a></td>
			<?php endif; ?>
                        <?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</table>
        
	<a href="<?php echo e(URL::to('/ajoutBien')); ?>">ajoutez un bien</a>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>