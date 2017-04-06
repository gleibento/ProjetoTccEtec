<?php
require_once '../crud/UsuarioCrud.php';
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
$usu_rg_dtexped = trim(filter_input(INPUT_POST, "usu_dtexpedicao ", FILTER_SANITIZE_MAGIC_QUOTES));
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
    echo 'Campo sus em branco';
}elseif ($usu_cpf) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_nome) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_dtnasc) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_genero) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_tp_sangue) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_naturalidade) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_nacionalidade) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_mae) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_pai) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_rg) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_rg_dtexped) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_rg_orgexped) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_cep) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_tipo_logradouro) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_logradouro) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_num) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_complemento) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_bairro) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_cidade) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_uf) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_email) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_tel) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_cel1) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_cel2) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_recado) {
   echo 'Campo cpf em branco'; 
}elseif ($usu_obs) {
   echo 'Campo cpf em branco'; 
}
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

