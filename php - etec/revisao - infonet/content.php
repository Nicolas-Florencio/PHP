<?php 

if(isset($_GET['pagina'])){
$pagina = $_GET['pagina'];
switch ($pagina){

    case 1 : include_once '/pages/login.php';
    break;
    case 2 : include_once '/pages/products.php';
    break;
    case 3 : include_once '/pages/about.php';
    break;
    case 4 : include_once '/pages/cadForm.php';
    break;
    case 5 : header('Location: index.php');
    break;

    default: include_once '/pages/erro.php';
    break;
}

}
else{
    echo '<img src="imagens/tech.jpg" class="img-fluid" alt="computer">';
}


?>