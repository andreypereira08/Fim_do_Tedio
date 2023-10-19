<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="lamp.png" type="image/x-icon">
    <?php
    // chamando links externos
    include "linksexternos.php";

    // Chamando os dados a api
    $url = "https://www.boredapi.com/api/activity/";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $resultado = json_decode(curl_exec($ch));

    ?>
    <link rel="stylesheet" href="style.css">
    <title>Fim do Tédio</title>
</head>

<body>

    <div class="d-flex justify-content-center"><h1 class="h1">Acabe com seu Tédio</h1></div>
    <div class="card">
        <div class="textBox">
            <div class="textContent">
                <p class="h1">Atividade Aleatória</p>
            </div>
            <p class="p">Sugestão: <span id="activity"><?php echo $resultado->activity; ?></span></p>
            <div>
            </div>
        </div>
    </div>
    <button id="suggestActivity"><span style="font-family: 'Urbanist', sans-serif;">Sugerir Outra</span></button>
    
    <script src="acaosugestao.js"></script>
</body>

</html>