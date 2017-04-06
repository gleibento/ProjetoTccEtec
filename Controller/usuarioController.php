<?php
//aqui recebe todos os dados do formulario usuario 
echo "<meta charset='utf-8'>";
require_once '../crud/UsuarioCrud.php';
if (isset($_POST['acao']) && isset($_POST['acao']) == "cadastrar") {
    $usu_sus = trim(filter_input(INPUT_POST, "usu_sus", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_cpf = trim(filter_input(INPUT_POST, "usu_cpf", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_nome = trim(filter_input(INPUT_POST, "usu_nome", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_dtnasc = trim(filter_input(INPUT_POST, "usu_dtnasc", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_genero = trim(filter_input(INPUT_POST, "usu_genero", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_tp_sangue = trim(filter_input(INPUT_POST, "usu_tp_sangue", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_naturalidade = trim(filter_input(INPUT_POST, "usu_naturalidade", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_nacionalidade = trim(filter_input(INPUT_POST, "usu_nacionalidade", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_mae = trim(filter_input(INPUT_POST, "usu_mae", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_pai = trim(filter_input(INPUT_POST, "usu_pai", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_rg = trim(filter_input(INPUT_POST, "usu_rg", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_rg_dtexped = trim(filter_input(INPUT_POST, "usu_dtexpedicao", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_rg_orgexped = trim(filter_input(INPUT_POST, "usu_orgaoEmissor", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_cep = trim(filter_input(INPUT_POST, "usu_cep", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_tipo_logradouro = trim(filter_input(INPUT_POST, "usu_tipo_logradouro", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_logradouro = trim(filter_input(INPUT_POST, "usu_logradouro", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_num = trim(filter_input(INPUT_POST, "usu_numero", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_complemento = trim(filter_input(INPUT_POST, "usu_complemento", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_bairro = trim(filter_input(INPUT_POST, "usu_bairro", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_cidade = trim(filter_input(INPUT_POST, "usu_cidade", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_uf = trim(filter_input(INPUT_POST, "usu_uf", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_email = trim(filter_input(INPUT_POST, "usu_email", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_tel = trim(filter_input(INPUT_POST, "usu_tel", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_cel1 = trim(filter_input(INPUT_POST, "usu_cel1", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_cel2 = trim(filter_input(INPUT_POST, "usu_cel2", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_recado = trim(filter_input(INPUT_POST, "usu_recado", FILTER_SANITIZE_MAGIC_QUOTES));
    $usu_obs = trim(filter_input(INPUT_POST, "usu_obs", FILTER_SANITIZE_MAGIC_QUOTES));
    if (empty($usu_sus)) {
        echo '<div class="alert alert-danger">Campo numero sus em branco</div>';
    } elseif (empty($usu_cpf)) {
        echo 'Campo cpf em branco';
    } elseif (empty($usu_nome)) {
        echo 'Campo nome em branco';
    } else if (empty($usu_email)) {
        echo 'Campo email em branco';
    } elseif (empty($usu_tel)) {
        echo 'Campo telefone em branco';
    } elseif (empty($usu_cel1)) {
        echo '<div class="alert alert-danger">Campo celular1 em branco</div>';
    } elseif (empty($usu_cel2)) {
        echo 'Campo celular2 em branco';
    } elseif (empty($usu_recado)) {
        echo 'Campo telefone recado em branco';
    } elseif (empty($usu_genero)) {
        echo 'Campo genero em branco';
    } elseif (empty($usu_tp_sangue)) {
        echo 'Campo tipo sangue em branco';
    } elseif (empty($usu_dtnasc)) {
        echo 'Campo data nascimento em branco';
    } elseif (empty($usu_naturalidade)) {
        echo 'Campo naturalidade em branco';
    } elseif (empty($usu_nacionalidade)) {
        echo 'Campo nacionalidade em branco';
    } elseif (empty($usu_rg)) {
        echo 'Campo rg em branco';
    } elseif (empty($usu_rg_dtexped)) {
        echo 'Campo data expedição em branco';
    } elseif (empty($usu_rg_orgexped)) {
        echo 'Campo orgão emissor em branco';
    } elseif (empty($usu_mae)) {
        echo 'Campo mãe em branco';
    } elseif (empty($usu_pai)) {
        echo 'Campo pai em branco';
    } elseif (empty($usu_cep)) {
        echo 'Campo cep em branco';
    } elseif (empty($usu_logradouro)) {
        echo 'Campo logradouro em branco';
    } elseif (empty($usu_num)) {
        echo 'Campo numero em branco';
    } elseif (empty($usu_complemento)) {
        echo 'Campo complemento em branco';
    } elseif (empty($usu_bairro)) {
        echo 'Campo bairro em branco';
    } elseif (empty($usu_cidade)) {
        echo 'Campo cidade em branco';
    } elseif (empty($usu_uf)) {
        echo 'Campo uf em branco';
    } elseif (empty($usu_tipo_logradouro)) {
        echo 'Campo tipo logradouro em branco';
    } elseif (empty($usu_obs)) {
        echo 'Campo observação em branco';
    } else {
        $usuCad = new UsuarioCrud();
        $usuCad->setUsu_sus($usu_sus);
        $usuCad->setUsu_cpf($usu_cpf);
        $usuCad->setUsu_nome($usu_nome);
        $usuCad->setUsu_dtnasc($usu_dtnasc);
        $usuCad->setUsu_genero($usu_genero);
        $usuCad->setUsu_tp_sangue($usu_tp_sangue);
        $usuCad->setUsu_naturalidade($usu_naturalidade);
        $usuCad->setUsu_nacionalidade($usu_nacionalidade);
        $usuCad->setUsu_mae($usu_mae);
        $usuCad->setUsu_pai($usu_pai);
        $usuCad->setUsu_rg($usu_rg);
        $usuCad->setUsu_rg_dtexped($usu_rg_dtexped);
        $usuCad->setUsu_rg_orgexped($usu_rg_orgexped);
        $usuCad->setUsu_cep($usu_cep);
        $usuCad->setUsu_tipo_logradouro($usu_tipo_logradouro);
        $usuCad->setUsu_logradouro($usu_logradouro);
        $usuCad->setUsu_num($usu_num);
        $usuCad->setUsu_complemento($usu_complemento);
        $usuCad->setUsu_bairro($usu_bairro);
        $usuCad->setUsu_cidade($usu_cidade);
        $usuCad->setUsu_uf($usu_uf);
        $usuCad->setUsu_email($usu_email);
        $usuCad->setUsu_tel($usu_tel);
        $usuCad->setUsu_cel1($usu_cel1);
        $usuCad->setUsu_cel2($usu_cel2);
        $usuCad->setUsu_recado($usu_recado);
        $usuCad->setUsu_obs($usu_obs);
        if ($usuCad->cadastrar()) {
            echo 'cadastrado com sucesso';
        } else {
            echo 'Falha ao cadastrar';
        }
    }
}
