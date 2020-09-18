<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Font Awesome 5 PRO -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <title>University Market</title>
    <style>
        .container-main {
            text-align: center;
        }
        .container-header {
            background: #FFF;
        }
        .container-header img {
            max-width: 100%;
        }
        nav.nav-main {
            padding: 5px;
        }
    </style>
</head>
<body class="bg-white text-dark">

    <nav class="bg-primary text-white nav-main clearfix">
        <div class="dropdown">
            <button class="btn btn-primary float-left" type="button" id="toggle-menu-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <i class="fa fa-bars"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="toggle-menu-icon">
                <a class="dropdown-item" href="#">Anunciar</a>
                <a class="dropdown-item" href="#">Meus anúncios</a>
                <a class="dropdown-item disabled" href="#">Chat</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-primary float-right" type="button" id="user-menu-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <i class="fa fa-user"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="user-menu-icon">
                <a class="dropdown-item" href="/Login/index">Login</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item active bg-danger" href="/Login/sair">
                    <i class="fas fa-power-off"></i> Sair
                </a>
            </div>
        </div>
    </nav>

    <div class="container-fluid d-flex justify-content-center ">
        <a href="/Welcome/index"><img src="/user_guide/_images/logo.jpg"></a> 
	</div>
	
	<div>
    <h3 class="text-center">Registra Anuncio</h3>
	<div class=" mw-30 form-group d-flex justify-content-center " >
		<form action="/Anuncio/meus_anuncios" method="POST" style="text-align:center"> 
            <input type="text" name="titulo" placeholder="Título" readonly class="form-control m-2" >
			<input type="text" name="descricao" placeholder="Descrição" readonly class="form-control m-2">
			<input type="text" name="valor" placeholder="Valor" readonly class="form-control m-2">
			<input type="text" name="curso" placeholder="Curso" readonly  class="form-control m-2">
			<input type="submit" name="Alterar" value="Alterar" class="btn btn-primary btn-block  m-2">
		</form>
	</div>
</div>

   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        console.log($('title').text())
    </script>
</body>
</html>