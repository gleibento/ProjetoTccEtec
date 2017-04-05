<form method="post" action="../controller/usuarioController.php">
        <div class="row">
            <fieldset>
                <legend>Dados Pessoais</legend>
            <div class="form-group col-md-3">
                <label for="usu_sus">SUS</label>
                <input type="text" name="usu_sus" class="form-control" id="usu-sus">
            </div>
            <div class="form-group col-md-4">
                <label for="usu_cpf">CPF</label>
                <input type="text" name="usu_cpf" class="form-control" id="usu_cpf">
            </div>
            <div class="form-group col-md-5">
                <label for="usu_nome">Nome</label>
                <input type="text" name="usu_nome" class="form-control" id="usu_nome">
            </div>
            <!--              -->
            <div class="form-group col-md-3">
                <label for="usu_email">E-mail</label>
                <input type="email" name="usu_email" class="form-control" id="usu_email">
            </div>
            <div class="form-group col-md-3">
                <label for="telefone">Telefone</label>
                <input type="tel" name="usu_tel" class="form-control" id="usu_tel">
            </div>
            <div class="form-group col-md-3">
                <label for="Celular">Celular</label>
                <input type="tel" name="usu_cel1" class="form-control" id="usu_cel1">
            </div>
            <div class="form-group col-md-3">
                <label for="usu_cel2">Celular2</label>
                <input type="tel" name="usu_cel2" class="form-control" id="usu_cel2">
            </div>
            <!--              -->
            <div class="form-group col-md-3">
                <label for="usu_recado">Cel / Recado</label>
                <input type="text" name="usu_recado" class="form-control" id="usu_recado">
            </div>

            <div class="form-group col-md-3">
                <label for="usu_genero">Genero</label>
                <select class="form-control" name="usu_genero" id="usu_genero">
                    <option value="Masculino">Masculino</option>
                    <option value="feminino">feminino</option>
                    <option value="Outros">Outros</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="usu_tp_sangue">Sangue</label>
                <select class="form-control" name="usu_tp_sangue" id="usu_tp_sangue">
                    <option value="A+">A+</option>
                    <option value="A">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="usu_dtnasc">Nascido</label>
                <input type="date" name="usu_dtnasc" class="form-control" id="usu_dtnasc">
            </div>
            <!--              -->
            <div class="form-group col-md-3">
                <label for="Naturalidade">Naturalidade</label>
                <input type="text" name="usu_naturalidade" class="form-control" id="usu_naturalidade">
            </div>
            <div class="form-group col-md-3">
                <label for="Nacionalidade">Nacionalidade</label>
                <input type="text" name="usu_nacionalidade" class="form-control" id="usu_nacionalidade">
            </div>
            <div class="form-group col-md-3">
                <label for="Rg">Rg</label>
                <input type="text" name="usu_rg" class="form-control" id="usu_rg">
            </div>
            <div class="form-group col-md-3">
                <label for="telefone">Data Expedição</label>
                <input type="text" name="usu_dtexpedicao" class="form-control" id="usu_dtexpedicao">
            </div>
            <!--              -->
            <div class="form-group col-md-3">
                <label for="Orgão Emissor">Orgão Emissor</label>
                <input type="text" name="usu_orgaoEmissor" class="form-control" id="usu_orgaoEmissor">
            </div>
            <div class="form-group col-md-4">
                <label for="usu_mae">Mãe</label>
                <input type="text" name="usu_mae" class="form-control" id="usu_mae">
            </div>
            <div class="form-group col-md-5">
                <label for="usu_pai">Pai</label>
                <input type="text" name="usu_pai" class="form-control" id="usu_pai">
            </div>
            <!--              -->
            </fieldset>
            <fieldset>
                <legend>Dados complementares</legend>
            <div class="form-group col-md-2">
                <label for="cep">Cep</label>
                <input type="text" name="usu_cep" class="form-control" id="usu_cep">
            </div>
            <div class="form-group col-md-5">
                <label for="usu_logradouro">Logradouro</label>
                <input type="text" name="usu_logradouro" class="form-control" id="usu_logradouro">
            </div>
            <div class="form-group col-md-3">
                <label for="usu_numero">Numero</label>
                <input type="text" name="usu_numero" class="form-control" id="usu_numero">
            </div>
            <div class="form-group col-md-2">
                <label for="nome">Complemento</label>
                <input type="text" name="usu_complemento" class="form-control" id="usu_complemento">
            </div>
            <div class="form-group col-md-6">
                <label for="usu_bairro">Bairro</label>
                <input type="text" name="usu_bairro" class="form-control" id="usu_bairro">
            </div>
            <!--              -->
            <div class="form-group col-md-3">
                <label for="usu_cidade">Cidade</label>
                <input type="text" name="usu_cidade" class="form-control" id="usu_cidade">
            </div>
            <div class="form-group col-md-3">
                <label for="nome">Uf</label>
                <input type="text" name="usu_uf" class="form-control" id="usu_uf">
            </div>
            <!--              -->
            <div class="form-group col-md-5">
                <label for="usu_tipo_logradouro">Tipo Logradouro</label>
                <input type="text" name="usu_tipo_logradouro" class="form-control" id="usu_logradouro">
            </div>
            <div class="form-group col-md-7">
                <label for="usu_obs">Observação</label>
                <textarea name="usu_obs" id="usu_obs" class="form-control" style="resize: none;" ></textarea>
            </div>
            </fieldset>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
        </div>
    </form>