<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="pt-BR">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Icon to navigator tab -->
	<!-- <link rel="shortcut icon" href="./content/images/icon/favicon.png" type="image/x-icon"> -->
	<link rel="shortcut icon" href="./content/images/icon/favicon.png" type="image/x-icon">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- CSS to Bootstrap Carousel with multiple items -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> -->
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="./content/css/index/carousel/animate.css">
	<!-- <link rel="stylesheet" href="/content/css/index/carousel/style.css"> -->
	<link rel="stylesheet" href="./content/css/index/carousel/media-queries.css">
	<link rel="stylesheet" href="./content/css/index/carousel/carousel.css">

	<!-- Customized CSS to this page -->
	<!-- <link rel="stylesheet" href="./content/css/index/index-style.css"> -->
	<link rel="stylesheet" href="./content/css/index/index-style.css">

	<!-- Script to Font Awesome 5 PRO -->
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<title>:: University Market</title>
</head>
<body class="bg-light">

	<!-- Image and text -->
	<nav class="navbar navbar-dark bg-primary">
		<a class="navbar-brand" href="#">
			<!-- <img src="./content/images/logo-project.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy"> -->
			<img src="./content/images/logo-project.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
			<strong>University Market</strong>
		</a>
		<div class="float-right">
			<div class="dropdown">
				<a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-user"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="#">
						<i class="far fa-user"></i>
						Perfil
					</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item bg-danger text-light" href="#">
						<i class="fas fa-power-off"></i>
						Sair
					</a>
				</div>
			</div>
		</div>
	</nav>
	
	<!-- Desktop menu model navbar -->
	<nav id="navbar-top-desktop"></nav>

	<div class="novidades-title">
		<span class="h1"> Novidades </span>
		<span class="badge badge-pill badge-primary novidades-title-notification-icon">+8</span>
	</div>
	
	<div class="top-content">
		<div class="container-fluid">
			<div id="carousel-example" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner row w-100 mx-auto" role="listbox">
					
					<?php for ($index = 1 ; $index <= 8 ; $index++) : ?>

						<?php $active = ($index === 1) ? "active" : ""; ?>

						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 <?=$active;?>">
							<a href="#" target="_self">
								<img src="./content/images/index/carousel/<?=$index;?>.jpg" class="img-fluid mx-auto d-block" alt="img<?=$index;?>">
							</a>
							<p class="h5 carousel-item-title">Título do elemento <?=$index;?></p>
							<p class="product-description text-justify">
								Esta é uma pequena descrição do produto <b><?=$index;?></b> apresentado neste item de carousel. Aqui serão apresentadas breves informações do produto.
							</p>
							<div class="alert alert-success text-center">
								<strong class="h3"> $<?=rand(10,100);?>.<?=rand(0,9);?>0 </strong>
							</div>
							<button type="button" class="btn btn-primary btn-block">Ver produto</button>
						</div>

					<?php endfor; ?>
				</div>
				<a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div> <!-- End carousel item -->

	<hr class="my-4">

	<!-- Collapse Mais Procurados -->
	<div class="card text-center">
		<div class="card-header">
			<h2>Busca por curso</h2>
		</div>
		<div class="card-body">

			

			<div class="card-group">
				<div class="container-fluid">
					<?php require_once "list_primary_courses.php"; ?>
				</div>
			</div>

			<button class="btn btn-lg btn-block btn-dark" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" id="mais-procurados-ver-mais-button">
				Ver mais cursos
			</button>
			<div class="collapse" id="collapseExample">
				<div class="card-group">
					<div class="container-fluid">
					
						<div class="card-columns">
							<?php for ($index = 0 ; $index < count($cursos) ; $index++) : ?>

								<?php $col = $index%2 ? "" : "p-3"; ?>
								<?php $curso = $cursos[rand(0,count($cursos)-1)]; ?>
								<div class="card card-curso <?=$col;?>">
									<!-- <img src="..." class="card-img-top" alt="..."> -->
									<div class="card-body">
										<h1 class="h2 curso-name">
											<?=$curso;?>
										</h1>
										<p class="card-text text-left curso-description">
											Breve descrição de alguns materiais referentes ao curso de <?=$curso;?>.
										</p>
									</div>
								</div>
							<?php endfor; ?>

						</div>

					</div>
				</div>
				
				<button class="btn btn-lg btn-block btn-primary" type="button">
					Ver todos os cursos
				</button>
				
			</div>
		</div>
		<!-- <div class="card-footer text-muted"> In last day </div> -->
	</div>
	<!-- End Collapse Mais Procurados -->

	<!-- Footer -->
	<footer class="page-footer font-small bg-primary pt-4">
		<div class="container-fluid text-center text-md-left">
			<div class="row">
				<div class="col-md-6 mt-md-0 mt-3">
					<h5 class="text-uppercase">University Market</h5>
					<p>
						Este é um trabalho semestral multidisciplinar.
					</p>
				</div>
				<hr class="clearfix w-100 d-md-none pb-3">
				<div class="col-md-3 mb-md-0 mb-3">
					<h5 class="text-uppercase">Esta plataforma</h5>
					<ul class="list-unstyled">
						<li> <a href="#!">Sobre o University Market</a> </li>
						<li> <a href="/Login/fazerLogin">Seu Perfil</a> </li>
						<li> <a href="#!">Política de privacidade</a> </li>
						<li> <a href="#!">Tratamento de dados</a> </li>
						<li> <a href="#!">Dados do aplicativo</a> </li>
					</ul>
				</div>
				<div class="col-md-3 mb-md-0 mb-3">
					<h5 class="text-uppercase">Projeto</h5>
					<ul class="list-unstyled">
						<li> <a href="#!">GitHub</a> </li>
						<li> <a href="#!">Enviar e-mail</a> </li>
						<li> <a href="#!">Universidade</a> </li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright text-center py-3">
			<a href="https://github.com/felipewesley/university-market" target="_blank" class="h5">
				University Market Group
			</a>
			<hr class="my-4">
			<p> 2020 &copy; All rights reserved. </p>
		</div>
	</footer>
	<!-- End Footer -->

	<!-- Responsive menu model navbar -->
	<nav id="navbar-bottom-mobile"></nav>

	<!-- Optional JavaScript; choose one of the two! -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	-->

	<!-- JavaScript to Bootstrap Carousel with multiple items -->
	<script src="./content/js/index/carousel/jquery-3.3.1.min.js"></script>
	<!-- <script src="/content/js/index/carousel/jquery-migrate-3.0.0.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="./content/js/index/carousel/jquery.backstretch.min.js"></script>
	<script src="./content/js/index/carousel/wow.min.js"></script>
	<script src="./content/js/index/carousel/scripts.js"></script>

	<!-- Customized JavaScript files -->
	<!-- <script src="./content/js/index/index-script.js"></script> -->
	<script src="./content/js/index/index-script.js"></script>
	<!-- Cria os elementos de menus (navs) nas div's referenciadas -->
	<script src="./content/js/index/make-menu-navbar.js"></script>
</body>
</html>