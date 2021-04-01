<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


<?php
        
        echo "<table class='responsive-table highlight centered'>";
        echo "<thead>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Numero</th>
                <th>Cache</th>
                <th>Nucleos</th>
                <th>Hyper Threading</th>
                <th>Litografia</th>
                <th>Plataforma</th>
                <th>Clock</th>
                <th>Turbo</th>
                <th>Vídeo integrado</th>
                <th>Segmento</th>
                <th>Logo</th>
            </thead>";

        while($dados = mysqli_fetch_array($query)){
            
            //rows
            echo "<tr>";
            echo "<td>". $dados['id'] ."</td>";
            echo "<td>". strtoupper($dados['marca']) ."</td>";
            echo "<td>". ucfirst($dados['modelo']) ."</td>";
            echo "<td>". strtoupper($dados['numero']) ."</td>";
            echo "<td>". $dados['cache'] ." MB</td>";
            echo "<td>". $dados['nucleos'] ."</td>";
            
            //tem hyperthrading?
            if($dados['hyperT'] == 0){
                echo "<td> Não </td>";
            }
            else if($dados['hyperT'] == 1){
                echo "<td> Sim </td>";
            }
            //rows again
            echo "<td>". $dados['litografia'] ." nm</td>";
            echo "<td>". $dados['plataforma'] ."</td>";
            echo "<td>". $dados['clock'] ." GHz</td>";
            
            //tem turbo boost
            if($dados['turbo'] == 0){
                echo "<td> Não </td>";
            }
            else if($dados['turbo'] == 1){
                echo "<td> Sim </td>";
            }

            //vídeo integrado?
            if($dados['videoIntegrado'] == 0){
                echo "<td> Não </td>";
            }
            else if($dados['videoIntegrado'] == 1){
                echo "<td> Sim </td>";
            }

            echo "<td>". $dados['uso'] ."</td>";
            
            //row images
            if (empty($dados['imagem'])) { 
                $imagem = 'SemImagem.png'; 
            } 
            else { 
                $imagem = $dados['imagem']; 
            } 
            echo "
            <td>
                <a href='imagens/$imagem'>
                <img src='imagens/$imagem' width='70px' heigth='80px'>
                </a>
            </td>
            ";
        }
        echo "</table>";
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>