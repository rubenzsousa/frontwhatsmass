<?php
  include("includes/config.php");
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo $urlBase; ?>">WhatsMass</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="<?php echo $urlBase."enviar-texto.php"; ?>">Enviar WhatsApp (Apenas Texto)</span></a>
      <a class="nav-item nav-link" href="<?php echo $urlBase."enviar-arquivo.php"; ?>">Enviar WhatsApp (Texto e Arquivo)</a>
      <a class="nav-item nav-link" href="<?php echo $urlBase."verificar-numero.php"; ?>">Testador de Números</a>
      <a class="nav-item nav-link" href="<?php echo $urlBase."ajuda.php"; ?>">Como usar</a>
    </div>
  </div>
</nav>