<?php $__env->startSection('content'); ?>


    <div class="recherche">
         <p>rechercher:</p>
         <form method="get">
         <input type="text" name="recherche" class="text" id="recherche"/>
         
         </form>
    </div>

    <button type="button" id="tri">trier</button>
    
    <div class="resultat" id="resultat"></div>
	<table class="table table-striped">
		<tr>
			<th>Référence numero bien</th>
			<th>numero bien</th>
			<th>Secteur</th>
			<th>Surface</th>
			<th>Loyer</th>
			<?php if(Auth::check() == true): ?>
                            <?php if(Auth::User()->isAdmin() == true): ?>
				<th>supprimer<th>
                            <?php endif; ?>
			<?php endif; ?>
		</tr>

		<?php $__currentLoopData = $ventes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vente): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<tr onclick="document.location='<?php echo e(URL::route('details', ['id'=> $vente->id])); ?>'" style="background-color:#60656B">
				<td><?php echo e($vente->id); ?></td>
				<td><?php echo e($vente->types); ?></td>
				<td><?php echo e($vente->secteur); ?></td>
				<td><?php echo e($vente->surface); ?></td>
				<td><?php echo e($vente->prix); ?> €</td>
				<?php if(Auth::check() == true): ?>
                                <?php if(Auth::User()->isAdmin() ==true): ?>
					<td><a href="<?php echo e(URL::route('supprimerBien', ['id'=> $vente->id])); ?>">supprimer</a></td>
                                <?php endif; ?>
				<?php endif; ?>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</table>
	<a href="<?php echo e(URL::to('/ajoutBien')); ?>">ajoutez un bien</a>
<script>
    var token ='<?php echo e(Session::token()); ?>';
    var url ='<?php echo e(URL::route('ajaxVentes')); ?>';
    //$(this).append('<input name="_token" value="<?php echo e(Session::token()); ?>">);
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>