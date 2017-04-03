<form method="post" action="../Controller/profissionalController.php">
    <div class="row">
        <div class="form-group col-md-3">
            <label for="usu_sus">CPF</label>
            <input type="text" name="pro_cpf" class="form-control" id="pro_cpf">
        </div>
        <div class="form-group col-md-6">
            <label for="pro_nome">Nome</label>
            <input type="text" name="pro_nome" class="form-control" id="pro_nome">
        </div>
        <div class="form-group col-md-3">
            <label for="pro_genero">Genero</label>
            <select class="form-control" name="pro_genero" id="pro_genero">
                <option value="Masculino">Masculino</option>
                <option value="feminino">feminino</option>
                <option value="Outros">Outros</option>
            </select>
        </div>
        <!--              -->
        <div class="row col-md-8">
            <div class="form-group col-md-9">
                <label for="pro_usuario">Usuario</label>
                <input type="text" name="pro_usuario" class="form-control" id="pro_usuario">
            </div>
            <div class="form-group col-md-4">
                <label for="pro_senha">Senha</label>
                <input type="password" name="pro_senha" class="form-control" id="pro_senha">
            </div>
            <div class="form-group col-md-4">
                <label for="pro_conf_senha">Confirma Senha</label>
                <input type="password" name="pro_conf_senha" class="form-control" id="password">
            </div>
        </div>
        <div class="form-group col-md-12">
            <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
        </div>
    </div>
</form>