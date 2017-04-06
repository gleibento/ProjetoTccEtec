<?php

$usu_sus = filter_input(INPUT_POST, "usu_sus", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_cpf = filter_input(INPUT_POST, "usu_cpf", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_nome = filter_input(INPUT_POST, "usu_nome", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_dtnasc = filter_input(INPUT_POST, "usu_dtnasc", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_genero = filter_input(INPUT_POST, "usu_genero", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_tp_sangue = filter_input(INPUT_POST, "usu_tp_sangue", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_naturalidade = filter_input(INPUT_POST, "usu_naturalidade", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_nacionalidade = filter_input(INPUT_POST, "usu_nacionalidade", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_mae = filter_input(INPUT_POST, "usu_mae", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_pai = filter_input(INPUT_POST, "usu_pai", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_rg = filter_input(INPUT_POST, "usu_rg", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_rg_dtexped = filter_input(INPUT_POST, "usu_rg_dtexped ", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_rg_orgexped = filter_input(INPUT_POST, "usu_rg_orgexped", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_cep = filter_input(INPUT_POST, "usu_cep", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_tipo_logradouro = filter_input(INPUT_POST, "usu_tipo_logradouro", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_logradouro = filter_input(INPUT_POST, "usu_logradouro", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_num = filter_input(INPUT_POST, "usu_num", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_complemento = filter_input(INPUT_POST, "usu_complemento", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_bairro = filter_input(INPUT_POST, "usu_bairro", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_cidade = filter_input(INPUT_POST, "usu_cidade", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_uf = filter_input(INPUT_POST, "usu_uf", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_email = filter_input(INPUT_POST, "usu_email", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_tel = filter_input(INPUT_POST, "usu_tel", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_cel1 = filter_input(INPUT_POST, "usu_cel1", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_cel2 = filter_input(INPUT_POST, "usu_cel2", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_recado = filter_input(INPUT_POST, "usu_recado", FILTER_SANITIZE_MAGIC_QUOTES);
$usu_obs = filter_input(INPUT_POST, "usu_obs", FILTER_SANITIZE_MAGIC_QUOTES);
if(isset(filter_input(INPUT_POST,"cadastrar", FILTER_SANITIZE_MAGIC_QUOTES))){
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
        
    }
}
