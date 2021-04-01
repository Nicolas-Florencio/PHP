<meta charset = "UTF-8">

    <?php
        $meuNomeEmail = "<?xml version = '1.0'?>
            <dados>
                <nome>Nicolas Florencio Alves</nome>
                <email>nicolas.alves14@etec.sp.gov.br</email>
            </dados>      
        ";
        $informacoes = simplexml_load_string($meuNomeEmail);
        echo "<div class = 'container'>";
            echo "<p>".$informacoes ->nome."</p>";
            echo "<p>".$informacoes ->email."</p>";
        echo "</div><br><br>";

        $arquivo = "conteudo.xml";

        $xml = simplexml_load_file($arquivo) -> conteudo;

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

        <title>XML</title>
    </head>

    <body>
        <?php
            foreach($xml-> container as $container){
                echo "<div class = 'container'>";
                    echo"<p>" .$container->titulo. "</p><br/>";

                    echo "<a target='blank' href = '".$container->imagem."'>";
                        echo"<img src='".$container->imagem."'/>";
                    echo "</a>";
                echo "</div>";
                echo"<br/><br/>";
            }
        ?>
    </body>
</html>