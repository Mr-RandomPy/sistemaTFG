<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Home</title>


	<!--STYLESHEET-->
	<!--=================================================-->

	<!--Open Sans Font [ OPTIONAL ]-->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href="css\bootstrap.min.css" rel="stylesheet">


	<!--Nifty Stylesheet [ REQUIRED ]-->
	<link href="css\nifty.min.css" rel="stylesheet">


	<!--Nifty Premium Icon [ DEMONSTRATION ]-->
	<link href="css\demo\nifty-demo-icons.min.css" rel="stylesheet">


	<!--=================================================-->



	<!--Pace - Page Load Progress Par [OPTIONAL]-->
	<link href="plugins\pace\pace.min.css" rel="stylesheet">
	<script src="plugins\pace\pace.min.js"></script>


	<!--Demo [ DEMONSTRATION ]-->
	<link href="css\demo\nifty-demo.min.css" rel="stylesheet">



	<!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
	<div id="container" class="effect aside-float aside-bright mainnav-lg">

		<!--NAVBAR-->
		<!--===================================================-->
		<header id="navbar">
			<div id="navbar-container" class="boxed">

				<!--Brand logo & name-->
				<!--================================-->
				<div class="navbar-header">
					<a href="inicio.php" class="navbar-brand">

						<img src="img\logo.png" alt="Nifty Logo" class="brand-icon">
						<div class="brand-title">
							<span class="brand-text">Sistema</span>
						</div>
					</a>
				</div>
				<!--================================-->
				<!--End brand logo & name-->


				<!--Navbar Dropdown-->
				<!--================================-->
				<div class="navbar-content">
					<ul class="nav navbar-top-links">

						<!--Navigation toogle button-->
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<li class="tgl-menu-btn">
							<a class="mainnav-toggle" href="#">
								<i class="demo-pli-list-view"></i>
							</a>
						</li>
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<!--End Navigation toogle button-->

					</ul>
					<ul class="nav navbar-top-links">



						<!--Notification dropdown-->
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">
								<i class="demo-pli-bell"></i>
								<span class="badge badge-header badge-danger"></span>
							</a>


							<!--Notification dropdown menu-->
							<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
								<div class="nano scrollable">
									<div class="nano-content">
										<ul class="head-list">
											<li>
												<a class="media" href="#">
													<div class="media-left">
														<img class="img-circle img-sm" alt="Profile Picture" src="img\profile-photos\9.png">
													</div>
													<div class="media-body">
														<p class="mar-no text-nowrap text-main text-semibold">Lucy envió nuevos mensajes</p>
														<small>Hace 30 minutos</small>
													</div>
												</a>
											</li>
											<li>
												<a class="media" href="#">
													<div class="media-left">
														<img class="img-circle img-sm" alt="Profile Picture" src="img\profile-photos\3.png">
													</div>
													<div class="media-body">
														<p class="mar-no text-nowrap text-main text-semibold">Fer envió nuevos mensajes</p>
														<small>Hace 1 hora</small>
													</div>
												</a>
											</li>
										</ul>
									</div>
								</div>

								<!--Dropdown footer-->
								<div class="pad-all bord-top">
									<a href="#" class="btn-link text-main box-block">
										<i class="pci-chevron chevron-right pull-right"></i>Ver todas las notificaciones
									</a>
								</div>
							</div>
						</li>
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<!--End notifications dropdown-->



						<!--User dropdown-->
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<li id="dropdown-user" class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
								<span class="ic-user pull-right">
									<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
									<!--You can use an image instead of an icon.-->
									<img class="img-circle img-user media-object" src="img/profile-photos/1.png" alt="Profile Picture">
									<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								</span>
								<!--<i class="demo-pli-male"></i>-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<!--You can also display a user name in the navbar.-->
								<!--<div class="username hidden-xs">Aaron Chavez</div>-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							</a>


							<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
								<ul class="head-list">
									<li>
										<a href="#"><i class="demo-pli-male icon-lg icon-fw"></i> Perfil</a>
									</li>
									<li>
										<a href="#"><span class="badge badge-danger pull-right">9</span><i class="demo-pli-mail icon-lg icon-fw"></i> Mensajes</a>
									</li>
									<li>
										<a href="#"><i class="demo-pli-gear icon-lg icon-fw"></i> Ajustes</a>
									</li>
									<li>
										<a href="#"><i class="demo-pli-computer-secure icon-lg icon-fw"></i> Bloquear pantalla</a>
									</li>
									<li>
										<a href="pages-login.html"><i class="demo-pli-unlock icon-lg icon-fw"></i> Logout</a>
									</li>
								</ul>
							</div>
						</li>
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<!--End user dropdown-->
					</ul>
				</div>
				<!--================================-->
				<!--End Navbar Dropdown-->

			</div>
		</header>
		<!--===================================================-->
		<!--END NAVBAR-->

		<div class="boxed">

			<!--CONTENT CONTAINER-->
			<!--===================================================-->
			<div id="content-container">
				<div id="page-head">
					<!--Page Title-->
					<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
					<div id="page-title">
						<h1 class="page-header text-overflow">Inicio</h1>
					</div>
					<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
					<!--End page title-->


					<!--Breadcrumb-->
					<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
					<ol class="breadcrumb">
						<div class="page-head pad-all text-center">
							<p1>Sábado, 31 de Agosto<p>
							</p1>
							<h2>Buenas Noches, Cesar</h3>
								

						</div>
					</ol>
					<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
					<!--End breadcrumb-->


				</div>


				<!--Page content-->
				<!--===================================================
				<div id="page-content">

					<hr class="new-section-sm bord-no">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2">
							<div class="panel panel-body text-center">
								<div class="panel-heading">
									<h3>Your content here...</h3>
								</div>
								<div class="panel-body">
									<p>Start putting content on grids or panels, you can also use different combinations of grids.
										<br>Please check out the dashboard and other pages.
									</p>
								</div>
							</div>
						</div>
					</div>


				</div>-->

				<!--===================================================-->
				<!--End page content-->

			</div>


			<!--===================================================-->
			<!--END CONTENT CONTAINER-->






			<!--MAIN NAVIGATION-->
			<!--===================================================-->
			<nav id="mainnav-container">
				<div id="mainnav">


					<!--OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
					<!--It will only appear on small screen devices.-->
					<!--================================
                    <div class="mainnav-brand">
                        <a href="index.html" class="brand">
                            <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
                            <span class="brand-text">Nifty</span>
                        </a>
                        <a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
                    </div>
                    -->



					<!--Menu-->
					<!--================================-->
					<div id="mainnav-menu-wrap">
						<div class="nano">
							<div class="nano-content">

								<!--Profile Widget-->
								<!--================================-->
								<div id="mainnav-profile" class="mainnav-profile">
									<div class="profile-wrap text-center">
										<div class="pad-btm">
											<img class="img-circle img-md" src="img\profile-photos\1.png" alt="Profile Picture">
										</div>
										<a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
											<span class="pull-right dropdown-toggle">
												<i class="dropdown-caret"></i>
											</span>
											<p class="mnp-name">Cesar Alegre</p>
											<span class="mnp-desc">cesaralegre670@gmail.com</span>
										</a>
									</div>
									<div id="profile-nav" class="collapse list-group bg-trans">
										<a href="#" class="list-group-item">
											<i class="demo-pli-male icon-lg icon-fw"></i> Ver Perfil </a>
										<a href="#" class="list-group-item">
											<i class="demo-pli-gear icon-lg icon-fw"></i> Configuración
										</a>
										<a href="#" class="list-group-item">
											<i class="demo-pli-information icon-lg icon-fw"></i> Ayuda
										</a>
										<a href="index.php" class="list-group-item">
											<i class="demo-pli-unlock icon-lg icon-fw"></i> Cerrar Sesión
										</a>
									</div>
								</div>





								<ul id="mainnav-menu" class="list-group">

									<!--Category name <li class="list-header">Navigation</li>-->


									<!--Menu list item-->
									<li class="active-sub">
										<a href="#">
											<i class="demo-pli-home"></i>
											<span class="menu-title">Inicio</span>
										</a>
									</li>

									
									
								</ul>




							</div>
						</div>
					</div>
					<!--================================-->
					<!--End menu-->

				</div>
			</nav>
			<!--===================================================-->
			<!--END MAIN NAVIGATION-->

		</div>



		<!-- FOOTER -->
		<!--===================================================-->
		<footer id="footer">
			<p class="pad-lft">&#0169; 2024 Cesar Alegre</p>
		</footer>
		<!--===================================================-->
		<!-- END FOOTER -->


		<!-- SCROLL PAGE BUTTON -->
		<!--===================================================-->
		<button class="scroll-top btn">
			<i class="pci-chevron chevron-up"></i>
		</button>
		<!--===================================================-->
	</div>
	<!--===================================================-->
	<!-- END OF CONTAINER -->





	<!--JAVASCRIPT-->
	<!--=================================================-->

	<!--jQuery [ REQUIRED ]-->
	<script src="js\jquery.min.js"></script>


	<!--BootstrapJS [ RECOMMENDED ]-->
	<script src="js\bootstrap.min.js"></script>


	<!--NiftyJS [ RECOMMENDED ]-->
	<script src="js\nifty.min.js"></script>




	<!--=================================================-->



	<!--Flot Chart [ OPTIONAL ]-->
	<script src="plugins\flot-charts\jquery.flot.min.js"></script>
	<script src="plugins\flot-charts\jquery.flot.resize.min.js"></script>
	<script src="plugins\flot-charts\jquery.flot.tooltip.min.js"></script>


	<!--Sparkline [ OPTIONAL ]-->
	<script src="plugins\sparkline\jquery.sparkline.min.js"></script>


	<!--Specify page [ SAMPLE ]-->
	<script src="js\demo\dashboard.js"></script>




</body>

</html>