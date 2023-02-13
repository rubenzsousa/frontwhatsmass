<?php
  include('includes/config.php');
?>
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

<body>

<?php
  include('includes/menu.php');
?>

<br>
<h2>COMO USAR O SISTEMA - AJUDA</h2>
<br>
<div class="form-group">
    
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <strong>Passo 1</strong>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>A primeira coisa</strong>  antes de fazer o envio das mensagens, é validar os números de WhatsApp na ferramenta <strong>"Testador de Números"</strong>. Insira todos os números, um a cada linha, assim a API irá verificar se o número TEM ou NÃO uma conta no WhatsApp.
        <br><br>
        No final da verificação será mostrada duas listas com os números que SÃO e NÃO são WhatsApp. Após isso, copie a lista dos números que SÃO WhatsApp.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      <strong>Passo 2</strong>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Depois de testar todos os números e copiar a lista gerada, vá a uma das ferramentas de envio: <br>
        <a href="<?php echo $urlBase; ?>">Envio de mensagens WhatsApp (Apenas Texto)</a> ou <a href="<?php echo $urlBase."enviar-arquivo.php"; ?>">Envio de mensagens WhatsApp (Texto e Arquivo)</a>
        <br><br>
        No envio de WhatsApp apenas texto, basta que seja inserida a lista de números testados anteriormente e seja colocada a mensagem padrão do envio. Depois disso está pronto e basta apertar em "Enviar Mensagens".
        <br><br>
        No envio de WhatsApp com arquivo é preciso que seja informado um link direto para o arquivo a ser enviado, seja ele imagem, PDF ou áudio. Você pode estar fazendo o upload do arquivo para o site <a href="https://filebin.net/" target="_blank">Filebin</a>. Assim que você fizer o upload irá aparecer uma página com opções de download, basta ir em "Filename" e em cima do nome do arquivo que estará na cor azul, clicar com o botão direito e "Copiar endereço do link". Pronto, basta colocar no campo "Url arquivo" na ferramenta de envio, inserir a mensagem e apertar em "Enviar Mensagens".
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      <strong>Passo 3</strong>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Após o envio com as ferramentas, será mostrado se a mensagem foi ou não enviada. No geral as mensagens são enviadas, apenas em oscilações do WhatsApp que há algum problema no envio, caso acontece algo desse tipo apenas tente novamente que irá funcionar.
      </div>
    </div>
  </div>
</div>

</div>

<?php
  include('includes/rodape.php');
?>
    
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>