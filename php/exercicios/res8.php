<meta charset="UTF-8">
<title>Calcular maçãs</title>
<?php
    $apple = $_GET["apple"];
    
    if($apple==null){
        header('Location: form8.php');
    }

    if($apple<12 && $apple>0){

        $preco = $apple * 1.30;     
        echo "O valor total das maçãs é de: ".number_format($preco,2)." reais<br>";
    
    }
    else if($apple>=12){
        
        $preco = $apple * 1.00;
        echo "O valor total das maçãs é de: ".number_format($preco,2)." reais<br>";
    }
    if($apple<=0){
        echo "Número inválido <br>";
    }
?>


<br><li><a href="form8.php"> Calcular novamente </a></li>
<br><li><a href="index.php"> Voltar para a página de exercícios </a></li><br>