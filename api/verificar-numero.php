<?php
  include('../includes/config.php');

  $telefones = explode(PHP_EOL, $_POST['numeros']);
  $intervalo_min = 3;
  $intervalo_max = 6;

  $e_whatsapp = [];
  $n_e_whatsapp = [];
  
  foreach($telefones as $telefone){
      $data = array(
          'number' => $telefone
      );
      $data = http_build_query($data);
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $urlAPI.'verificar-numero');
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_TIMEOUT, 0);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          'Content-Type: application/x-www-form-urlencoded',
          'Content-Length: ' . strlen($data)
      ));
      $intervalo = rand($intervalo_min, $intervalo_max);
      sleep($intervalo);
      $response = curl_exec($ch);
      curl_close($ch);
      //echo $response."<br/><br/>";
      $response = json_decode($response, true); // Decodifica a resposta da API para um array associativo
      if($response['message'] == 'Existe'){
        array_push($e_whatsapp, $telefone);
      }else if($response['message'] == 'n_Existe'){
        array_push($n_e_whatsapp, $telefone);
      }
      
  }
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Mensagen WhatsApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="../style.css" rel="stylesheet">
</head>

<style>
    #link1{
        text-decoration: none;
        color: #FD3737;
    }
    #link2{
        text-decoration: none;
        color: #FD3737;
    }
</style>
<body>

<?php
  include('../includes/menu2.php');
?>

<br>
<h2>RESULTADO DA VERIFICAÇÃO DOS NÚMEROS</h2>
<br>

<div class="form-group">
    <p>NÚMEROS QUE <strong>SÃO</strong> WHATSAPP</p>
    <textarea class="form-control" cols="20" rows="3">
        <?php 
            $string_e_whats = implode("\n", $e_whatsapp);
            echo trim(rtrim($string_e_whats));
            //var_dump($string_e_whats)
        ?>
    </textarea>
    <br>
    <p>NÚMEROS QUE <strong>NÃO</strong> SÃO WHATSAPP</p>
    <textarea class="form-control" cols="20" rows="3">
        <?php 
            $string_nao_e_whats = implode("\n", $n_e_whatsapp);
            echo trim(rtrim($string_nao_e_whats));
            //var_dump($string_nao_e_whats)
        ?>
    </textarea>
    <br>
    COPIE A LISTA DE NÚMEROS TESTADOS E VÁ ATÉ UMA DAS FERRAMENTAS ABAIXO: <br><br>
    <a href="<?php echo $urlBase; ?>" id="link1">ENVIO DE MENSAGENS WHATSAPP (APENAS TEXTO)</a>
    <br> OU <br>
    <a href="<?php echo $urlBase."enviar-arquivo.php"; ?>" id="link2">ENVIO DE MENSAGENS WHATSAPP (TEXTO E ARQUIVO)</a>
    <br>
    <br>
    <a href="<?php echo $urlBase."verificar-numero.php"; ?>" class="btn btn-success">Fazer Nova Verificação</a>
</div>
    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>