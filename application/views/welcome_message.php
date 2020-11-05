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
	<nav class="navbar sticky-top justify-content-center navbar-light navbar-block bg-light" id="navbar-top-desktop">
		<a class="nav-link active" href="#">
			<i class="fa fa-home nav-link-icon"></i>
			HOMEPAGE
		</a>
		<a class="nav-link" href="#">
			<i class="fa fa-search nav-link-icon"></i>
			PESQUISAR
		</a>
		<a class="nav-link" href="#">
			<i class="fa fa-plus-square nav-link-icon"></i>
			NOVO
		</a>
		<a class="nav-link" href="#">
			<i class="fa fa-heart nav-link-icon"></i>
			NOTIFICAÇÕES
		</a>
		<a class="nav-link" href="/Login/fazerLogin">
			<i class="fa fa-user nav-link-icon"></i>
			PERFIL
		</a>
	</nav>

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
							<button type="button" class="btn btn-outline-success btn-block">Comprar</button>
							<button type="button" class="btn btn-primary btn-block">Ver mais</button>
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
			<h2>Mais procurados</h2>
		</div>
		<div class="card-body">

			<div class="card-group">
				<?php for ($index = 1 ; $index <= 5 ; $index++) : ?>
					<!-- <h5 class="card-title">Special title treatment</h5> -->
					<p class="card-text">
						<div class="card">
							<img src="./content/images/index/carousel/<?=rand(1,8);?>.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Produto <?=$index;?></h5>
								<p class="card-text">
									Breve descrição...
									<div class="alert alert-success">
										<strong class="h3"> $<?=rand(10,100);?>.00 </strong>
									</div>
								</p>
								<a href="#" class="btn btn-block btn-primary">Ver produto</a>
							</div>
						</div>
					</p>
				<?php endfor; ?>
			</div>

			<button class="btn btn-lg btn-block btn-dark" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" id="mais-procurados-ver-mais-button">
				Ver mais
			</button>
			<div class="collapse" id="collapseExample">
				<div class="card-group">
					<?php for ($index = 1 ; $index <= 5 ; $index++) : ?>
						<!-- <h5 class="card-title">Special title treatment</h5> -->
						<p class="card-text">
							<div class="card">
								<img src="./content/images/index/carousel/<?=rand(1,8);?>.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Produto <?=$index;?></h5>
									<p class="card-text">
										Breve descrição...
										<div class="alert alert-success">
											<strong class="h3"> $<?=rand(10,100);?>.00 </strong>
										</div>
									</p>
									<a href="#" class="btn btn-block btn-primary">Ver produto</a>
								</div>
							</div>
						</p>
					<?php endfor; ?>
				</div>
				
				<button class="btn btn-lg btn-block btn-primary" type="button">
					Ver todos mais procurados
				</button>
				
			</div>
		</div>
		<div class="card-footer text-muted">
			In last day
		</div>
	</div>
<!-- End Collapse Mais Procurados -->


	<!-- Responsive menu model navbar -->
	<nav class="navbar fixed-bottom navbar-light bg-light" id="navbar-bottom-mobile">
		<a class="nav-link active" href="#">
			<i class="fa fa-home nav-link-icon"></i>
		</a>
		<a class="nav-link" href="#">
			<i class="fa fa-search nav-link-icon"></i>
		</a>
		<a class="nav-link" href="#">
			<i class="fa fa-plus-square nav-link-icon"></i>
		</a>
		<a class="nav-link" href="#">
			<i class="fa fa-heart nav-link-icon"></i>
		</a>
		<a class="nav-link" href="#">
			<i class="fa fa-user nav-link-icon"></i>
		</a>
	</nav>

	<br><br><br>

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
</body>
</html>