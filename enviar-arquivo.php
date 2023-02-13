<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Mensagen WhatsApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<style>
    #link1{
        text-decoration: none;
        color: #FD3737;
    }
</style>
<body>

<?php
  include('includes/menu.php');
?>

<br>
<h2>ENVIO DE MENSAGENS EM MASSA WHATSAPP (TEXTO E ARQUIVO)</h2>
<br>

<div class="form-group">
  <form action="api/resultado-envio-arquivo.php" method="post">
    <label for="exampleFormControlTextarea1">Lista de Números (DDD+9+número)</label>
    <textarea class="form-control" cols="20" rows="5" placeholder="85999999999&#10;88988888888&#10;11999999999" required name="numeros" rows="3"></textarea>
    <br>
    <label for="exampleFormControlTextarea1">Mensagem - Comandos para texto( *Negrito* = <strong>Negrito</strong> ), ( _Itálico_ = <i>Itálico</i> ) e (~Sublinhado~ = <u>Sublinhado )</u></label>
    <textarea class="form-control" cols="20" rows="5" placeholder="Escreva sua mensagem aqui" required name="caption"></textarea>
    <br>
    <label for="exampleFormControlTextarea1">URL Arquivo - <a href="https://filebin.net/" target="_blank" id="link1">Faça o upload do arquivo aqui</a></label>
      
      

    <input type="text" class="form-control" placeholder="https://urldoarquivo.com.br/seuarquivo.png" required name="file" id="">
    <br>
    <input class="btn btn-primary" type="submit" value="Enviar Mensagens">
  </form>
</div>

<?php
  include('includes/rodape.php');
?>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>