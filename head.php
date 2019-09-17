<?php 
	require "config.php";
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= DOMINIO ?>/estilo.css">
  </head>




  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand col-7 col-xl-9" href="#">JULIO | UI DESIGN</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse m-auto" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?= DOMINIO ?>/index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= DOMINIO ?>/contato.php">Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= DOMINIO ?>/servico.php">Serviços</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="<?= DOMINIO ?>/quemSomos.php">Sobre mim</a>
      </li> 
    </ul>
  </div> 
</nav>