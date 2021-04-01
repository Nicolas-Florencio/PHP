<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <?php
      session_start();

      
    
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Login</title>
    <link rel="stylesheet" href="../estilos/login.css" />
    
  </head>
  <body>
    <button><a href="../index.html">Voltar</a></button>
    <section class="form-section">
      <h1>Login</h1>

      <div class="form-wrapper">

        <form action="valida.php" method="POST">
          
          <div class="msgError">
            <?php
                if(isset($_SESSION['validaLogin'])){

                  echo $_SESSION['validaLogin'];
                  unset($_SESSION['validaLogin']);
                  
                }

            ?>
          </div>

          <div class="input-block">
            <label for="login-email">Email</label>
            <input type="email" id="login-email" name="login" required />
          </div>

          <div class="input-block">
            <label for="login-password">Senha</label>
            <input type="password" id="login-password" name="senha" required />
          </div>

      
          <button type="submit" class="btn-login">Login</button>
        </form>
      </div>
    </section>

  </body>
</html>
