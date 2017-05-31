<?php $__env->startSection('content'); ?>
<div class="container-fluid">
        <button id="btnVentes" class="btn btn-info">afficher les ventes</button> 
        <button id="btnLocations" class="btn btn-info">afficher les locations</button> 
        <?php if(Auth::check()): ?>
        <button class="btn btn-warning"><a href="<?php echo e(URL::to('/ajoutBien')); ?>">ajoutez un bien</a></button>
        <?php endif; ?>
</div> 
</br>
        <script>
            
            window.onload = function() {
                $("#tableLocations").hide();
            }
            
            $( "#btnVentes" ).click(function() {
                if(document.getElementById("tableLocations").style.visibility = "visible"){
                $("#tableLocations").hide();
            }
                $( "#tableVentes" ).show();  
            });
            
            $( "#btnLocations" ).click(function() {
                $("#tableVentes").hide();
                $("#tableLocations").show();
            });
        </script>
        <style>
	
	.case:hover{
		box-shadow: 3px 3px 3px 3px #aaa;
	}
	.case{
		padding:50px;
		border-radius:10px;
                width: 500px;
                height: 200px;
	}
        .prix{
            text-align: center;
        }
        tr{
            width: 100%;
        }
        img{
            padding-bottom: 10px;
        }
        </style>
        
        <div id="tableVentes"> 
            <center><h3>Liste des ventes</h3></center>
            <table>
            <?php $i=0;?>
		<?php $__currentLoopData = $ventes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vente): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                
                <?php if($i%4== 0): ?>
                
                        </tr>
                        <tr>
                            <td class="case" onclick="document.location='<?php echo e(URL::route('details', ['id'=> $vente->id])); ?>'"><p class="prix"><?php echo e($vente->prix); ?>€</p>
                                <img src= "<?php echo e(URL::asset('photos/'.$vente->photo)); ?>"/>
                        <?php if(Auth::check() == true): ?>
                        <?php if(Auth::User()->isAdmin() ==true): ?>
                        <button class="btn btn-info"><a href="<?php echo e(URL::route('supprimerBien', ['id'=> $vente->id])); ?>">supprimer</a></button>
                        <?php endif; ?>
                        <?php endif; ?>
                        </td>
                        
                <?php else: ?>
                <td class="case"onclick="document.location='<?php echo e(URL::route('details', ['id'=> $vente->id])); ?>'"><p class="prix"><?php echo e($vente->prix); ?>€</p>
                        <img src= "<?php echo e(URL::asset('photos/'.$vente->photo)); ?>" /> 
                        <?php if(Auth::check() == true): ?>
                        <?php if(Auth::User()->isAdmin() ==true): ?>
                        <button class="btn btn-info"><a href="<?php echo e(URL::route('supprimerBien', ['id'=> $vente->id])); ?>">supprimer</a></button>
                        <?php endif; ?>
                        <?php endif; ?>
                        </td>
                <?php endif; ?>
                <?php $i++;?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</table>
            <center><div class="pagination"><?php echo $ventes->render(); ?></div></center>
        </div>

        <div id="tableLocations">  
            <center><h3>Liste des locations</h3></center>
        <table>
            <?php $i=0;?>
		<?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                
                <?php if($i%4== 0): ?>
                
                        </tr>
                        <tr>
                            <td class="case" onclick="document.location='<?php echo e(URL::route('details', ['id'=> $location->id])); ?>'"><p class="prix"><?php echo e($location->prix); ?>€</p>
                                <img src= "<?php echo e(URL::asset('photos/'.$location->photo)); ?>"/>
                        <?php if(Auth::check() == true): ?>
                        <?php if(Auth::User()->isAdmin() ==true): ?>
                        <button class="btn btn-info" style="align:center;"><a href="<?php echo e(URL::route('supprimerBien', ['id'=> $location->id])); ?>">supprimer</a></button>
                        <?php endif; ?>
                        <?php endif; ?>
                        </td>
                        
                <?php else: ?>
                <td class="case"onclick="document.location='<?php echo e(URL::route('details', ['id'=> $location->id])); ?>'"><p class="prix"><?php echo e($location->prix); ?>€</p>
                        <img src= "<?php echo e(URL::asset('photos/'.$location->photo)); ?>" /> 
                        <?php if(Auth::check() == true): ?>
                        <?php if(Auth::User()->isAdmin() ==true): ?>
                        <button class="btn btn-info"><a href="<?php echo e(URL::route('supprimerBien', ['id'=> $location->id])); ?>">supprimer</a></button>
                        <?php endif; ?>
                        <?php endif; ?>
                        </td>
                <?php endif; ?>
                <?php $i++;?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</table>
            <center><div class="pagination"><?php echo $locations->render(); ?></div></center>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>