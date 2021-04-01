<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partida de fut</title>
</head>
<body>
<meta charset="UTF-8">
    <!-- Ler o nome e a quant. de gols marcados por eles caso haja empate exiba EMPATE-->

    <form action="res12.php" method="get">

        Informe o nome do time 1: <br><input type="text" name="name1"/> <br>
        Informe o nome do time 2: <br><input type="text" name="name2"/> <br>
        Informe a quantidade de gols marcados pelo time 1 <br><input type="number" step="any" name="gol1"/> <br>
        Informe a quantidade de gols marcados pelo time 2 <br><input type="number" step="any" name="gol2"/> <br>

        <br> <input type="submit" value="Comparar"/>
        
    </form>

    <li> <a href="index.php"> Voltar para Exercícios em PHP </a></li> <br>
    <li> <a href="../index.html"> Voltar para o Index de atividades </a></li>
</body>
</html>