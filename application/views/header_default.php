<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="pt-BR">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Icon to navigator tab -->
	<!-- <link rel="shortcut icon" href="/content/images/icon/favicon.png" type="image/x-icon"> -->
	<link rel="shortcut icon" href="/content/images/icon/favicon.png" type="image/x-icon">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- Default CSS of University Market page -->
	<link rel="stylesheet" href="/content/css/master/default-style.css">

	<!-- Script to Font Awesome 5 PRO -->
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<title>:: University Market</title>
</head>
<body class="bg-light">

	<!-- Image and text -->
	<nav class="navbar navbar-dark bg-primary">
		<a class="navbar-brand" href="#">
			<!-- <img src="/content/images/logo-project.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy"> -->
			<img src="/content/images/logo-project.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
			<strong>University Market</strong>
		</a>
		<div class="float-right">
			<a class="nav-link text-light" href="#" title="Logout" id="logout_btn">
				Logout <i class="fas fa-sign-out-alt"></i>
			</a>
		</div>
	</nav>
	
	<!-- Desktop menu model navbar (only for JS) -->
	<!-- <nav id="navbar-top-desktop"></nav> -->

	<nav class="navbar sticky-top justify-content-center navbar-light navbar-block bg-light" id="navbar-top-desktop">

		<?php foreach($menu_data as $menu_item) : ?>
			<a class="nav-link" href="<?=$menu_item['href'];?>" 
				<?php echo isset($menu_item['help']) ? "title=\"{$menu_item['help']}\"":"";?> >
				<i class="<?=$menu_item['icon'];?>"></i>
				<span><?=$menu_item['title'];?></span>
			</a>

		<?php endforeach; ?>

	</nav>

	<br>
	<!-- <div class="divisor"></div> -->