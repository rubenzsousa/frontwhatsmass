<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsMass - Painel de Mensagen WhatsApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>

<body>

<?php
  include('includes/menu.php');
?>

<br>
<h2>TESTADOR DE NÚMEROS PARA WHATSAPP</h2>
<br>

<div class="form-group">
  <form action="api/verificar-numero.php" method="post">
    <label for="exampleFormControlTextarea1">Lista de Números</label>
    <textarea class="form-control" cols="20" rows="5" placeholder="85999999999&#10;88988888888&#10;11999999999" required name="numeros" rows="3"></textarea>
    <br>
    <input class="btn btn-primary" type="submit" value="Verificar Números">
  </form>
</div>

<?php
  include('includes/rodape.php');
?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>