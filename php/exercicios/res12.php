<meta charset="UTF-8">

<title>Ordem crescente</title>

<?php
    $name1 = $_GET["name1"];
    $name2 = $_GET["name2"];
    $gol1 = $_GET["gol1"];
    $gol2 = $_GET["gol2"];

    if($gol1==null && $gol2==null){
        header('Location: form11.php');
    }

    if($gol1<$gol2){
        echo "O vencedor foi: ".$name2."<br>";
    }
    else if($gol1>$gol2){
        echo "O vencedor foi: ".$name1."<br>";
    }
    else{
        echo "EMPATE <br>";
    }
?>

<br><li><a href="form12.php"> Calcular novamente </a></li>
<br><li><a href="index.php"> Voltar para a página de exercícios </a></li><br>