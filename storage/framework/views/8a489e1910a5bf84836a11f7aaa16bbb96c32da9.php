<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>

<html lang="en">
<head>
<title>idologis</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Simple UI Kit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="<?php echo e(URL::asset('css/bootstrap.css')); ?>" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>" type="text/css" media="all" />
<link rel="stylesheet" 	href="<?php echo e(URL::asset('css/font-awesome.min.css')); ?>" type="text/css" media="all">
<!--// css -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="<?php echo e(URL::asset('js/jquery-1.11.1.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('js/bootstrap.js')); ?>"></script>

</head>
<body>
	<div class="main-w3">
		<h1>Idologis</h1>
		<div class="col-md-12 top-menu">
			<div class="top-nav">
				<nav class="navbar navbar-default cl-effect-13"  id="cl-effect-13">

					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
					</div>

					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="hover-effect"><a href="<?php echo e(URL::to('/')); ?>">Accueil</a></li>
							<li class="hover-effect"><a href="<?php echo e(URL::route('ventes')); ?>">Ventes</a></li>
							<li class="hover-effect"><a href="<?php echo e(URL::route('locations')); ?>">Locations</a></li>
							<li class="hover-effect"><a href="<?php echo e(URL::route('contacts')); ?>">Contact</a></li>
						</ul>
					</div>

				</nav>		
			</div>	
			<div class="search">
				<form action="#" method="post">
					<input type="text" name="search" placeholder="Search here" required="">
					<input type="submit" value="">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>       
        
            <?php if(Session::has('success')): ?>
            <div class="alert alert-success">
                <?php echo e(Session::get('success')); ?>

            </div>
            <?php endif; ?>
            
            <?php if(Session::has('warning')): ?>
            <div class="alert alert-warning">
                <?php echo e(Session::get('warning')); ?>

            </div>
            <?php endif; ?>
        <div class="conteneur">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        </div>
		
			
<!--  player js -->
<script src="<?php echo e(URL::asset("js/Chart.min.js")); ?>"></script>
<script src="<?php echo e(URL::asset("js/pretty-doughtnut.js")); ?>"></script>
 <script src="<?php echo e(URL::asset("js/easyResponsiveTabs.js")); ?>" type="text/javascript"></script>
 <script src="<?php echo e(URL::asset("js/skycons.js")); ?>"></script>
 <script src="<?php echo e(URL::asset("js/underscore-min.js")); ?>" type="text/javascript"></script>
<script src= "<?php echo e(URL::asset("js/moment-2.2.1.js")); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset("js/clndr.js")); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset("js/site.js")); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset("js/recherche.js")); ?>" type="text/javascript"></script>
</body>
</html>