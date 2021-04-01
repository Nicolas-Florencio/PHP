<meta charset = "UTF-8">

    <?php
        $meuNomeEmail = '[
            {
                "nome": "Nicolas Florencio Alves",
                "email": "nicolas.alves14@etec.sp.gov.br"
            }        
        ]';
        $informacoes = json_decode($meuNomeEmail);
        echo "<div class = 'container'>";
            foreach ($informacoes as $registro) {
                echo "<p>Nome: " . $registro->nome . '</p>'.'<br />';
                echo "<p>Email: " . $registro->email.'</p>';
            }
        echo "</div><br><br>";
        

    ?>

    <!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles/exibir.css">

        <title>JSON</title>
    </head>

    <body>
    <div class="container">
        <p>Passe o mouse</p>
    </div>
    <!-- Animação 1 -->
    <lottie-player src="https://assets9.lottiefiles.com/datafiles/gUENLc1262ccKIO/data.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  hover></lottie-player>

    <!-- Animação 2 -->
    <lottie-player src="https://assets9.lottiefiles.com/private_files/lf30_k8g6n0xu.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player>

        <?php
            $arquivo = file_get_contents('conteudo.json');
            $json = json_decode($arquivo);

            foreach($json as $container){
                echo "<div class = 'container'>";
                    echo"<p>" .$container->titulo. "</p><br/>";

                    echo "<a target='blank' href = '".$container->imagens."'>";
                        echo"<img src='".$container->imagens."'/>";
                    echo "</a>";
                echo "</div>";
                echo"<br/><br/>";
            }
        ?>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    </body>
</html>