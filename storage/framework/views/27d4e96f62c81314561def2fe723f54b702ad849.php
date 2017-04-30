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
							<li class="hover-effect"><a href="#">Accueil</a></li>
							<li class="hover-effect"><a href="#">Ventes</a></li>
							<li class="hover-effect"><a href="#">Locations</a></li>
							<li class="hover-effect"><a href="#">Contact</a></li>
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
    <?php if(Auth::check() == false): ?><!-- Si la personne est connectée afficher se déco sinon afficher se co -->
    <div class="conteneur">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <a href="register">S'enregistrer</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
                <div class="clearfix"></div>
                <div class="col-md-4 left-w3l">	
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                </div>
        </div>
		
			
<!--  player js -->
<script src="js/Chart.min.js"></script>
<script src="js/pretty-doughtnut.js"></script>
 <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
 <script src="js/skycons.js"></script>
 <script src="js/underscore-min.js" type="text/javascript"></script>
			<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
			<script src="js/clndr.js" type="text/javascript"></script>
			<script src="js/site.js" type="text/javascript"></script>
</body>
</html>