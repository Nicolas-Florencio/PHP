<?php

    require_once "/conexao/conexao.php";

?>



<form action="pages/CRUD/cad.php" method="GET">
      <div class="container col-4">
        <div class="mb-2 row">
          <div>
            <label for="nome" class="col-form-label">Nome</label>
            <input type="name" class="form-control" id="nome" name="nome" />
          </div>
        </div>
        <div class="mb-2 row">

            <label for="Sexo" class="col-form-label">Sexo</label><br>
            <div class="form-check">
              <input class="form-check-input " type="radio" name="sexo" id="masculino" value="masculino"/>
  
              <label class="form-check-label" for="masculino">
                  Masculino
              </label>
            <br>
            <input class="form-check-input" type="radio" name="sexo" id="feminino" value="feminino" />

            <label class="form-check-label" for="feminino">
                Feminino
            </label>
          </div>
        </div>

        <div class="mb-2 row">
            <div>
                <label for="staticEmail" class="col-form-label">Email</label>
                <input type="email" class="form-control" id="staticEmail" name="email">
            </div>
        </div>

        <div class="mb-2 row">
          <div>
            <label for="inputPassword" class="col-form-label">Senha</label>
            <input type="password" class="form-control" id="inputPassword" name="senha" />
          </div>
        </div>

        <div class="mb-2 row">
            <div>
              <label for="inputPassword" class="col-form-label">Confirme a senha</label>
              <input type="password" class="form-control" id="inputPassword" name="senhaConf"/>
            </div>
        </div>

        <div class="mb-2 row">
            <div>
              <label for="endereco" class="col-form-label">Endereço</label>
              <input type="text" class="form-control" id="endereco" name="endereco" />
            </div>
        </div>

        <div class="mb-2 row">
            <div>
              <label for="numero" class="col-form-label">Número</label>
              <input type="number" class="form-control" id="numero" name="numero" />
            </div>
        </div>

        <div class="mb-2 row">
            <div>
              <label for="cep" class="col-form-label">CEP</label>
              <input type="number" class="form-control" id="cep" name="cep" maxlength="9"  />
            </div>
        </div>

        <div class="mb-2 row">
            <div>
              <label for="bairro" class="col-form-label">Bairro</label>
              <input type="text" class="form-control" id="bairro" name="bairro" />
            </div>
        </div>

        <div class="mb-2 row">
            <div>
              <label for="cidade" class="col-form-label">Cidade</label>
              <input type="text" class="form-control" id="cidade" name="cidade" />
            </div>
        </div>

        <div class="mb-2 row">
            <div>
              <label for="uf" class="col-form-label">UF</label>
              <input type="text" class="form-control" id="uf" name="uf" placeholder="Por exemplo: SP" maxlength="2" />
            </div>
        </div>

        <div class="mb-2 row">
            <div>
              <label for="telCel" class="col-form-label">Telefone Celular</label>
              <input type="tel" class="form-control" id="telCel" name="telCel" maxlength="12" />
            </div>
        </div>

        <div class="mb-2 row">
            <div>
              <label for="telCom" class="col-form-label">Telefone Comercial</label>
              <input type="tel" class="form-control" id="telCom" name="telCom" maxlength="12" />
            </div>
        </div>

        <div class="mb-1 row">

            <label for="gpRisco" class="col-form-label">Grupo de Risco?</label><br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gpRisco" id="sim" value="s"/>
  
              <label class="form-check-label" for="sim">
                  Sim
              </label>
            <br>
            <input class="form-check-input" type="radio" name="gpRisco" id="nao" value="n" />

            <label class="form-check-label" for="nao">
                Não
            </label>
          </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-primary" type="reset">Limpar</button>
          <button class="btn btn-primary" type="submit">Cadastrar</button>
        </div>

        <br /><br /><br />
      </div>
    </form>