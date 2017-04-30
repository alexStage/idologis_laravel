<?php $__env->startSection('content'); ?>

<div class="conteneur">
	
	<h1>Bien n°<?php echo e($details->id); ?> : <?php echo e($details->prix); ?>  € / mois</h1>
	
	<h2>Photo</h2>
	<p class="centre"><img src= "<?php echo e(URL::asset('photos/'.$details->photo)); ?>" class="bien"/></p>
	
	<h2>Caractéristiques</h2>
	<ul>
		<li>Type: <?php echo e($details->types); ?></li>
		<li>Secteur: <?php echo e($details->secteur); ?></li>
		<li>Surface: <?php echo e($details->surface); ?></li>
		<li>Pièces: <?php echo e($details->pieces); ?> </li>
		<li>Classe énergetique: <?php echo e($details->classe->lettre); ?></li>
		<li>Description de la classe: <?php echo e($details->classe->description); ?></li>			
	</ul>
		
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>