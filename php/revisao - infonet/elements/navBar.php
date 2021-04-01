<?php

    require_once "/conexao/conexao.php";

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fs-4 text">
    <div class="container-fluid">
        

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=5">MUAMA</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?pagina=2">Produtos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?pagina=3">Sobre nós</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?pagina=1">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?pagina=4">Registrar-se</a>
                    </li>
                </ul>
            </div>
    </div>
</nav>