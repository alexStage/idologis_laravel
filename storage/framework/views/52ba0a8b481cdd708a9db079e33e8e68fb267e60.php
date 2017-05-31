<?php $__env->startSection('content'); ?>
    
<div class="container-fluid">
        <button id="btnVentes" class="btn btn-info">afficher les ventes</button> <button id="btnLocations" class="btn btn-info">afficher les locations</button> 
</div> 
</br>
        <script>
            
            window.onload = function() {
                document.getElementById("tableLocations").style.visibility = "hidden";
            }
            
            $( "#btnVentes" ).click(function() {
                if(document.getElementById("tableLocations").style.visibility = "visible"){
                $("#tableLocations").hide();
            }
                $( "#tableVentes" ).show();  
            });
            
            $( "#btnLocations" ).click(function() {
                if(document.getElementById("tableVentes").style.visibility = "visible"){
                $("#tableVentes").hide();
            }
                $( "#tableLocations" ).show();  
            });
        </script>

	<table class="table table-striped" id="tableVentes">
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

        <table class="table table-striped" id="tableLocations">
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
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                
	</table>

<!--	<a href="<?php echo e(URL::to('/ajoutBien')); ?>">ajoutez un bien</a>-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>