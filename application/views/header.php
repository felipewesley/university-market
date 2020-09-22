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
                <a class="dropdown-item" href="/Anuncio/registra_anuncio">Anunciar</a>
                <a class="dropdown-item" href="/Anuncio/meus_anuncios">Meus anúncios</a>
                <a class="dropdown-item disabled" href="#">Chat</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-primary float-right" type="button" id="user-menu-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <i class="fa fa-user"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="user-menu-icon">
                <a class="dropdown-item" data-toggle="modal" data-target="#loginModal" >Login</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item active bg-danger" href="/Login/sair">
                    <i class="fas fa-power-off"></i> Sair
                </a>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!-- Modal content-->
            <div class="modal-content" >
                <div class="modal-header">
                    <div class="container-fluid d-flex justify-content-center">
                        <a href="/Welcome/index"><img src="/user_guide/_images/logo.png"></a> 
                    </div>
                    <div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fas fa-angle-down text-primary"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body ">
                    <form action="/Login/logado" method="post">
                        <div class="form-group">
                            <label for="email"><h4>Email</h4></label>
                            <input  type="email" name ="email" class="form-control" placeholder="Digite seu email">
                        </div>
                        <div class="form-group">
                            <label for="senha"><h4>Senha</h4></label>
                            <input type="password" name ="senha" class="form-control"  placeholder="Senha">
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="/Login/index">Não tem uma conta? Cadastre-se</a>
                        </div>
                        <hr>
                        <div class="form-group d-flex justify-content-center" >
            		    	<input type="submit" name="Login" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>