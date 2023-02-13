<?php
  include('../includes/config.php');
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

<body>

<?php
  include('../includes/menu2.php');
?>

<br>
<h2>RESULTADO DOS ENVIOS DE WHATSAPP</h2>
<br>

<div class="form-group">
    <textarea class="form-control" cols="20" rows="5" rows="3">

<?php

    $telefones = explode(PHP_EOL, $_POST['numeros']);
    $caption = $_POST['caption'];
    $file = $_POST['file'];
    $intervalo_min = 3; // Intervalo mínimo em segundos
    $intervalo_max = 6; // Intervalo máximo em segundos
    
    foreach($telefones as $telefone){
        $data = array(
            'number' => $telefone,
            'caption' => $caption,
            'file' => $file
        );
        $data = http_build_query($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $urlAPI.'enviar-arquivo');
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
        $response = json_decode($response, true);
        echo 'Parâmetro de resposta para o telefone ' . $telefone . ': ' . "Mensagem e ".$response['message']."\n";
    }

?>

</textarea>
    <br>
    <a href="<?php echo $urlBase."enviar-arquivo.php"; ?>" class="btn btn-success">Fazer Novo Envio</a>
</div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>