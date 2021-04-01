<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <?php
        require "funcoes.php";
        //ler nome, curso e media de 3 notas (sendo a maior peso 4)
        //se média >= 5
        //$media = (n1 * p1 + n2 * p2 + n3 * p3) / (p1 + p2 +  p3)

        
        echo aluno("Nicolas", "DS");
        echo media(7, 6, 4, 2, 1, 4);
    ?>
</body>
</html>