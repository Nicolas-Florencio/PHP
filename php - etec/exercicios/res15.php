<meta charset="UTF-8">
<!-- Ler o salário fixo e o valor das vendas efetuadas pelo vendedor de uma
empresa. Sabendo-se que ele recebe uma comissão de 3% sobre o total das
vendas até R$ 1.500,00 mais 5% sobre o que ultrapassar este valor, calcular e
escrever o seu salário total -->

<title>Salario em vendas</title>

<?php
    $salario = $_GET["salario"];
    $venda = $_GET["vendas"];
    if($venda<= 1500){
        $aumento = (3 * $venda)/100;
        $salario = $salario + $aumento;
        echo "O valor do salário mais a comissão das vendas é de: ".number_format($salario,2)."<br>";
    }
    if($venda > 1500){
        $diference = $venda - 1500;
        $up = (3 * 1500)/100;
        $diference = (5 * $diference)/100;
        $newsalario = $up + $diference;
        $newsalario = $salario + $newsalario;
        echo "O valor do salário mais a comissão das vendas é de: ".number_format($newsalario,2)."<br>";
    }

?>

<br><li><a href="form15.php"> Calcular novamente </a></li>
<br><li><a href="index.php"> Voltar para a página de exercícios </a></li><br>