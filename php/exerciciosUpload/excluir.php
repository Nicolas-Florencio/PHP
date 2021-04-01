<meta charset='UTF-8'>
<?php

    $imagem = $_GET['imagem'];
    unlink('imagens/' . $imagem);
    header('Location: index.php');


?>