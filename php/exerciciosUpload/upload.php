<meta charset="UTF-8">
<?php


    function randString($size) {
        //String com valor possiveis do resultado, os caracteres pode ser adicionado ou retirados conforme sua necessidade
        $basic = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $return = "";
        for ($count = 0; $size > $count; $count++) {
            //Gera um caracter aleatorio
            $return .= $basic[rand(0, strlen($basic) - 1)];
        }
        return $return;
    }
    
    $nome_final = randString(20) . ".png";
    $nome_final = randString(20) . ".jpg";

    if(substr($_FILES['arquivo'] ['name'], -3) == 'png' || substr($_FILES['arquivo'] ['name'], -3) == 'jpg'){

        $dir = "./imagens/";
        $tmpName = $_FILES['arquivo'] ['tmp_name'];
        $name = $_FILES['arquivo'] ['name'];
        $id = $_POST['nome'];

        //move files
        if(move_uploaded_file($tmpName, $dir. $nome_final)){

            header('Location: index.php');


        }
        else{
            header('Location: erro.php');
            //instrução de falha
        }
    }
    else{
        //instrução de falha
        echo "É, deu ruim";
    }
?>
<script>
        function goBack(){
            window.history.back()
        }
</script>