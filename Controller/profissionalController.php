<?php

/**
 * Created by PhpStorm.
 * User: glei-
 * Date: 24/03/2017
 * Time: 23:54
 */
include_once("../crud/ProfissionalCrud.php");
if (isset($_POST['acao']) && isset($_POST['acao']) == "cadastrar") {
    $pro_cpf = filter_input(INPUT_POST, "pro_cpf", FILTER_SANITIZE_MAGIC_QUOTES);
    $pro_nome = filter_input(INPUT_POST, "pro_nome", FILTER_SANITIZE_MAGIC_QUOTES);
    $pro_genero = filter_input(INPUT_POST, "pro_genero", FILTER_SANITIZE_MAGIC_QUOTES);
    $pro_login = filter_input(INPUT_POST, "pro_usuario", FILTER_SANITIZE_MAGIC_QUOTES);
    $pro_senha = filter_input(INPUT_POST, "pro_senha", FILTER_SANITIZE_MAGIC_QUOTES);
    $pro_conf_senha = filter_input(INPUT_POST, "pro_conf_senha", FILTER_SANITIZE_MAGIC_QUOTES);
    if (empty($pro_cpf)) {
        echo '<div class="alert alert-danger">Campo em cpf branco</div>';
    } elseif (empty($pro_nome)) {
        echo '<div class="alert alert-danger">Campo em nome branco</div>';
    } elseif (empty($pro_genero)) {
        echo '<div class="alert alert-danger">Campo em genero branco</div>';
    } elseif (empty($pro_login)) {
        echo '<div class="alert alert-danger">Campo em login branco</div>';
    } elseif (empty($pro_senha)) {
        echo '<div class="alert alert-danger">Campo em senha branco</div>';
    } elseif (empty($pro_conf_senha)) {
        echo '<div class="alert alert-danger">Confirme a senha</div>';
    }elseif ($pro_senha != $pro_conf_senha) {
        echo '<div class="alert alert-danger">As senhas devem ser iguais</div>';
    } else {
        $cad = new ProfissionalCrud();
        $cad->setProCpf($pro_cpf);
        $cad->setProNome($pro_nome);
        $cad->setProGenero($pro_genero);
        $cad->setProLogin($pro_login);
        $cad->setProSenha($pro_senha);
        $cad->setProConfSenha($pro_conf_senha);
        if ($cad->insert()) {
            echo '<div class="alert alert-success">Cadastrado com sucesso</div>';
        } else {
            echo "Erro ao cadastrar";
        }
    }
}