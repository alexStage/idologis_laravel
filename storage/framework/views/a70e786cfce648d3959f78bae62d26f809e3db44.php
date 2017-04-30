<!DOCTYPE html>
<html>
	<head>
		<title>IdoLogis</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="<?php echo e(URL::asset('css/style.css')); ?>" rel="stylesheet" type="text/css" />
                <script language="JavaScript" type="text/javascript" src="<?php echo e(URL::asset('js/jQuery.js')); ?>"></script>
                <script language="JavaScript" type="text/javascript" src="<?php echo e(URL::asset('js/recherche.js')); ?>"></script>
	</head>
	<body>	

		<!-- Bandeau avec le logo, les coordonnées et le menu -->
		<div id="bandeau">
			<!-- Logo -->
			<div id="bandeau_logo">
				<a href="index.php"><img src="<?php echo e(URL::asset('img/logo.png')); ?>" alt="IdoLogis" class="menu" height="100" width="223"/></a>
			</div>

			<div id="bandeau_coord">
				<?php if(isset($infos)): ?>
					<p class="coord"><?php echo e($infos->adresse); ?><br />Téléphone : <?php echo e($infos->telephone); ?> - Fax : <?php echo e($infos->fax); ?></p>
				<?php endif; ?>
			</div>
		
			<!-- Menu -->
			<div id="bandeau_menu">
				<p class="bandeau">
					<a href="<?php echo e(URL::to('/')); ?>" id="menu_accueil"></a>
					<a href="<?php echo e(URL::route('ventes')); ?>" id="menu_ventes"></a>
					<a href="<?php echo e(URL::route('locations')); ?>" id="menu_locations"></a>
					<a href="<?php echo e(URL::route('contacts')); ?>" id="menu_contact"></a>
				</p>
			</div>
			<div id="login">
				<?php if(Auth::check() == false): ?><!-- Si la personne est connectée afficher se déco sinon afficher se co -->
		            <a href="<?php echo e(URL::to('login')); ?>">se connecter</a>
		         <?php else: ?>
		            <a href="<?php echo e(url('/logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">se déconnecter</a>

                    <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
                    <p>connecté: <?php echo e(Auth::user()->name); ?></p>
				<?php endif; ?>
			</div>
		</div>
		
		<!-- Contenu de la page -->
		<?php echo $__env->yieldContent('content'); ?>

	</body>
</html>