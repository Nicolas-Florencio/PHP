<meta charset="UTF-8">

<!-- Escreva um algoritmo que leia o número de litros vendidos e o tipo de
combustível, calcule e imprima o valor a ser pago pelo cliente sabendo-se que
o preço do litro da gasolina é R$ 2,80 e o preço do litro do álcool é R$ 1,90. -->

<title>Combustível</title>

<?php
    //Já registrei as variáveis com desconto já que de qualqier forma há desconto

    const alcool = 1.84; // sem desconto 1,90
    const gasosa = 2.71; // sem desconto 2,80
    const alcoolMaior20 = 1.82; // sem desconto 1,90
    const gasosaMaior20 = 2.63; // sem desconto 2,80

    $lit = $_GET["lit"];
    $option = $_GET["option"];
    
    // caso haja submit dos campos vazios ele volta para a page anterior
    if($lit==null && $option==null){
        header('Location: form13.php');
    }
    // se nem a opção 1/2 forem selecionados
    if($option<1 || $option>2){
        echo "Opção inválida";
        header('Location: form13.php');
    }
    // se forem informados "litros negativos"
    if($lit<0){
        header('Location: form13.php');
    }
//se a opção 1 for informada
    if($option == 1){

        //caso abasteça menos de 20 litros o desconto pra gasolina é 3%
        if($lit<=20){
            $tot = gasosa * $lit;
            echo "O combustível custará com desconto: ".number_format($tot,2)."<br>";
        }

        //caso abasteça mais de 20 litros o desconto pra gasolina é 6%
        else if($lit>20){
            $tot = gasosaMaior20 * $lit;
            echo "O combustível custará com desconto: ".number_format($tot,2)."<br>"; 
        } 
    }
// se a opção 2 for informada
    if($option == 2){

        //caso abasteça menos de 20 litros o desconto pra alcool é 3%
        if($lit<=20){
            $tot = alcool * $lit;
            echo "O combustível custará com desconto: ".number_format($tot,2)."<br>";
        }

        //caso abasteça mais de 20 litros o desconto pra alcool é 6%
        else{
            $tot = alcoolMaior20 * $lit;
            echo "O combustível custará com desconto: ".number_format($tot,2)."<br>";
        }
    }
?>

<br><li><a href="form13.php"> Calcular novamente </a></li>
<br><li><a href="index.php"> Voltar para a página de exercícios </a></li><br>