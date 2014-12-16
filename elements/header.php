<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>WM Manager</title>
		<link rel="stylesheet" type="text/css" href="css/app.min.css">

		<style type="text/css">
			.btn{
				margin-bottom: 5px;
			}
			.tbl{
				margin-bottom: 10px;
			}
		</style>

		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/html5shiv.js"></script>
		<![endif]-->
	</head>
	<body>

		<header class="stc-header">
			<div class="wrap">
				<a href="index.php" title="WM Manager" class="header-logo">
					<img src="img/logo.png" alt="">
				</a>

				<div class="header-user">
					
					<div class="wrap open-dropdown">
						<div class="avatar">
							<img src="img/avatar.jpg" alt="avatar">
						</div>
						<span class="nickname">Mestre Yoda</span>
						<span class="more-menu">
							<i class="fa fa-sort-desc"></i>
						</span>
					</div>

					<ul class="header-dropmenu box-dropdown">
						<li class="first">
							<a href="#" title="teste">
								<i class="fa fa-cog"></i>
								<span>
									teste
								</span>
							</a>
						</li>
						<li>
							<a href="#" title="teste">
								<i class="fa fa-cog"></i>
								<span>
									teste
								</span>
							</a>
						</li>
						<li class="last">
							<a href="#" title="teste">
								<i class="fa fa-cog"></i>
								<span>
									teste pleno na velociadade da luz
								</span>
							</a>
						</li>
					</ul>
				</div>

				<ul class="header-menu">
					<li>
						<a href="#" title="Logout">
							<i class="fa fa-sign-out fa-2x"></i>
						</a>
					</li>
					<li class="last">
						<span class="header-link toggle-menu">
							<i class="fa fa-bars fa-2x"></i>
						</span>
					</li>
				</ul>

			</div>
		</header>

		<div class="stc-body">

			<?php require_once("elements/menu.php"); ?>

			<div class="stc-main-wrap">
				<div class="stc-main">