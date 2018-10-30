<?php
session_start();
$caminhoDefault = "../../uf".$_SESSION['id']."/".$_SESSION['id']."_perfil.jpg";

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
	<title>Energy Saver</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	crossorigin="anonymous">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../assets/css/estiloL.css">


</head>

<body>
	<div class="page-wrapper chiller-theme toggled">
		<a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
			<i class="fas fa-bars"></i>
		</a>
		<nav id="sidebar" class="sidebar-wrapper">
			<div class="sidebar-content">
				<div class="sidebar-brand">
					<a href="index.php">Energy Saver</a>
					<div id="close-sidebar">
						<i class="fas fa-times"></i>
					</div>
				</div>
				<div class="sidebar-header">
					<div class="user-pic">
						<img class="img-responsive img-rounded" src="<?php echo (isset($_SESSION['img_perfil']))?$_SESSION['img_perfil']:$caminhoDefault?>" alt="User picture" id="img">
					</div>
					<div class="user-info">
						<span class="user-name"><?php echo $_SESSION['nome'] ?>

					</span>
					<span class="user-role"><?php echo $_SESSION['email']?></span>
					<span class="user-status">
						<i class="fa fa-circle"></i>
						<span>Online</span>
					</span>
				</div>
			</div>
			<!-- sidebar-header  -->
			
			<!-- sidebar-search  -->
			<div class="sidebar-menu">
				<ul>
					<li class="header-menu">
						<span>Opções</span>
					</li>
					<li class="sidebar-dropdown">
						<a href="#">
							<i class="fa fa-tachometer-alt"></i>
							<span>Gerenciar</span>
							<!-- <span class="badge badge-pill badge-danger">New</span> -->
						</a>
						<div class="sidebar-submenu">
							<ul>
								<li>
									<a href="#">Dispositivos
										<!-- <span class="badge badge-pill badge-success">Pro</span> -->
									</a>
								</li>
								<li>
									<a href="#">Equipamentos</a>
								</li>
								<li>
									<a href="#">Conta</a>
								</li>
							</ul>
						</div>
					</li>

					<li class="sidebar-dropdown">
						<a href="#">
							<i class="far fa-gem"></i>
							<span>Components</span>
						</a>
						<div class="sidebar-submenu">
							<ul>
								<li>
									<a href="#">General</a>
								</li>
								<li>
									<a href="#">Panels</a>
								</li>
								<li>
									<a href="#">Tables</a>
								</li>
								<li>
									<a href="#">Icons</a>
								</li>
								<li>
									<a href="#">Forms</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="sidebar-dropdown">
						<a href="#">
							<i class="fa fa-chart-line"></i>
							<span>Gráficos</span>
						</a>
						<div class="sidebar-submenu">
							<ul>
								<li>
									<a href="#">dia</a>
								</li>
								<li>
									<a href="#">mes</a>
								</li>
								<li>
									<a href="#">ano</a>
								</li>
								<li>
									<a href="#">personalizar</a>
								</li>
							</ul>
						</div>
					</li>
					
					<li class="header-menu">
						<span>Extra</span>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-calendar"></i>
							<span>Calendário</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-folder"></i>
							<span>Arquivos</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-book"></i>
							<span>Relatório</span>
						</a>
					</li>
				</ul>
			</div>
			<!-- sidebar-menu  -->
		</div>
		<!-- sidebar-content  -->
		<div class="sidebar-footer">
			<a href="#">
				<i class="fa fa-bell"></i>
				<span class="badge badge-pill badge-warning notification">3</span>
			</a>
			<a href="#">
				<i class="fa fa-envelope"></i>
				<span class="badge badge-pill badge-success notification">7</span>
			</a>
			<a href="config.php">
				<i class="fa fa-cog"></i>
				<!-- <span class="badge-sonar"></span> -->
			</a>
			<a href="#" id="logoff">
				<i class="fa fa-power-off"></i>
			</a>
		</div>
	</nav>