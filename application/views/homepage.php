<?php
	define("CURSOS_QUANT_MIN", 8);
	define("CURSOS_QUANT_MAX", 12);
	define("DEFAULT_COURSE_BG", "/content/images/layout/cursos_background/default.jpg");
	define("DEFAULT_COURSES_TEXT_COLOR", "#000");
	define("DEFAULT_COURSE_DESCRIPTION", "Materiais para o curso de ");
?>

<!-- Customized CSS to this page -->
<link rel="stylesheet" href="./content/css/index/index-style.css">

<!-- Specific CSS to this page -->
<!-- CSS to Bootstrap Carousel with multiple items -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> -->
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> -->
<link rel="stylesheet" href="./content/css/index/carousel/animate.css">
<!-- <link rel="stylesheet" href="/content/css/index/carousel/style.css"> -->
<link rel="stylesheet" href="./content/css/index/carousel/media-queries.css">
<link rel="stylesheet" href="./content/css/index/carousel/carousel.css">


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
						<a href="/home/cursos/<?=$index;?>" target="_self">
							<img src="./content/images/index/carousel/<?=$index;?>.jpg" class="img-fluid mx-auto d-block" alt="img<?=$index;?>">
						</a>
						<p class="h5 carousel-item-title">Título do elemento <?=$index;?></p>
						<p class="product-description text-justify">
							Esta é uma pequena descrição do produto <b><?=$index;?></b> apresentado neste item de carousel. Aqui serão apresentadas breves informações do produto.
						</p>
						<div class="alert alert-success text-center">
							<strong class="h3"> $<?=rand(10,100);?>.<?=rand(0,9);?>0 </strong>
						</div>
						<button type="button" class="btn btn-primary btn-block btn-ver-produto">Ver produto</button>
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
			<div class="card-columns card-columns-lg">
						<?php $loop = 0; ?>
						<?php foreach ($cursos as $c) : ?>

							<div class="card card-curso" 
								style="
								background:url('<?=$c['bg_path']??DEFAULT_COURSE_BG;?>');
								color:<?=$c['title_color']??DEFAULT_COURSES_TEXT_COLOR;?>;">
								<div class="card-body">
									<h1 class="h2 curso-name">
										<?=$c['name'];?>
									</h1>
									<p class="card-text text-left curso-description" 
										style="color:<?=$c['description_color']??DEFAULT_COURSES_TEXT_COLOR;?>">
										<?=$c['description']??DEFAULT_COURSE_DESCRIPTION." {$c['name']}.";?>
									</p>
								</div>
							</div>

							<?php $loop++; ?>
							<?php if ($loop >= CURSOS_QUANT_MIN) { break; } ?>
						<?php endforeach; ?>

					</div>
			</div>
		</div>

		<button class="btn btn-lg btn-block btn-dark" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" id="mais-procurados-ver-mais-button">
			Ver mais cursos
		</button>
		<div class="collapse" id="collapseExample">
			<div class="card-group">
				<div class="container-fluid">
				
					<div class="card-columns">
						<?php for($index = CURSOS_QUANT_MIN ; $index < CURSOS_QUANT_MAX ; $index++) : ?>

							<?php $curso_e = $cursos[$index]; ?>

							<div class="card card-curso" 
							style="
								background:url('<?=$c['bg_path']??DEFAULT_COURSE_BG;?>');
								color:<?=$c['title_color']??DEFAULT_COURSES_TEXT_COLOR;?>;">
								<div class="card-body">
									<h1 class="h2 curso-name">
										<?=$curso_e['name'];?>
									</h1>
									<p class="card-text text-left curso-description" style="color:<?=$c['description_color']??DEFAULT_COURSES_TEXT_COLOR;?>">
										<?=$curso_e['description']??DEFAULT_COURSE_DESCRIPTION." {$c['name']}.";?>
									</p>
								</div>
							</div>
							
						<?php endfor; ?>

					</div>

				</div>
			</div>
			
			<button class="btn btn-lg btn-block btn-primary" id="btn-show-all-courses" type="button">
				Ver todos os cursos
			</button>
			
		</div>
	</div>
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

<!-- Customized JavaScript files -->
<script src="./content/js/index/index-script.js"></script>
<!-- Cria os elementos de menus (navs) nas div's referenciadas -->
<!-- <script src="./content/js/index/make-menu-navbar.js"></script> -->