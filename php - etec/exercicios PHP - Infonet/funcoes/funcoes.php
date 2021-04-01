<meta charset="UTF-8">
<style>
    .recibo{
        font-size: large;
        border: 2px solid gray;
        max-width: 95%;
        margin: 0 auto;
    }
    .recibo p{
        text-align: left;
        
        width: 50%;
        margin: 0 auto;
        margin-bottom: 10px;
    }
    .recibo h2{
        text-align: center;
    }

</style>
<?php

//EXERCÍCIO 01
        function fatorial ($n){
            $n1 = $n;
            $i = 1;
            $res = 1;

            while($i <= $n){
                
                $res = $res * $i;
                $i++;
            /*Exercício com FOR*/
            /*

                $n1 = $n;
                $res = 1;

                    for($i = 1; $i <= $n; $i++){

                        $res = $res * $i;

                }
                return "O fatorial de ".$n1." é: ".$res."<br>";
            */
            }
            
            return "O fatorial de ".$n1." é: ".$res."<br>";
        }

//-------------------------------------------------------------------------------------

// EXERCÍCIO 02
    //EXIBE O NOME E CURSO DO ALUNO
        function aluno ($nome, $curso){

            return "<p>O aluno $nome do curso $curso</p>";

        }

    //FAZ A MÉDIA E VERIFICA SE ESTÁ APROVADO OU NÃO
        function media ($n1, $n2, $n3, $p1, $p2, $p3){

            $media = (($n1 * $p1) + ($n2 * $p2) + ($n3 * $p3)) / ($p1 + $p2 + $p3);

            $passou = $media >= 5 ? true : false;
        
            return $passou == true ? "Foi aprovado" : "Foi reprovado";
        }   

//-------------------------------------------------------------------------------------

// EXERCÍCIO 03
    //RECEBE SEGUNDOS E TRANSFORMA EM H:M:S
        function tempo($segundos){
            date_default_timezone_set("UTC");

            strtotime($segundos);

            return date("H:i:s", $segundos);
        }

//-------------------------------------------------------------------------------------

// EXERCÍCIO 04 
    //BIBLIOTECA;
    // titulo livro, nome user, tipo ("professor", "aluno")
        
        function emprestimo($nome, $tipoUser,$tituloLivro){
            date_default_timezone_set("America/Sao_Paulo");
            
            $tipoUser = strtolower($tipoUser);
            $dataEmprestimo = date("now");
            $dataEmprestimo = date("d-m-Y");

            if ($tipoUser === "professor") {
                $dataDev = date("d-m-Y", strtotime($dataEmprestimo. " + 10 days"));
            }

            else if ($tipoUser === "aluno") {
                $dataDev = date("d-m-Y", strtotime($dataEmprestimo. " + 3 days"));
            }

            else{
                return "Tipo de usuário inválido, as opções são: professor e aluno.";
            }
            
            return
            "<div class='recibo'>".
                "<h2>====== RECIBO ======</h2>".
                    "<p>".

                        "Nome: ".ucfirst($nome)."<br>".
                        "Título do livro: ".$tituloLivro."<br>".
                        "Tipo de usuário: ".ucfirst($tipoUser)."<br>".
                        "Data Empréstimo: ".$dataEmprestimo."<br>".
                        "Data Devolução: " .$dataDev.
                        
                    "</p>".
            "</div>"
            ;
        }

?>