<?php
  session_start();
  if(isset($_SESSION["usuario"])){
    $usuario = $_SESSION["usuario"];
  } else{
    header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Quinzena Gastronômica</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Quinzena Gastronômica</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="cad_promo.php">Cadastro de Promoções</a></li>
      <li><a href="lista_promo.php">Listagem de Promoções</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span><?= $usuario ?></a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3><?= $titulo ?></h3>