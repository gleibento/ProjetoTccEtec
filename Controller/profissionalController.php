<?php

/**
 * Created by PhpStorm.
 * User: glei-
 * Date: 24/03/2017
 * Time: 23:54
 */
include_once("../Dao/ProfissionalDao.php");
$pro_cpf = filter_input(INPUT_POST, "pro_cpf", FILTER_SANITIZE_MAGIC_QUOTES);
$pro_nome = filter_input(INPUT_POST, "pro_nome", FILTER_SANITIZE_MAGIC_QUOTES);
$pro_genero = filter_input(INPUT_POST, "pro_genero", FILTER_SANITIZE_MAGIC_QUOTES);
$pro_login = filter_input(INPUT_POST, "pro_usuario", FILTER_SANITIZE_MAGIC_QUOTES);
$pro_senha = filter_input(INPUT_POST, "pro_senha", FILTER_SANITIZE_MAGIC_QUOTES);
$pro_conf_senha = filter_input(INPUT_POST, "pro_conf_senha", FILTER_SANITIZE_MAGIC_QUOTES);
$cad = new ProfissionalDao();
$cad->setProCpf($pro_cpf);
$cad->setProNome($pro_nome);
$cad->setProGenero($pro_genero);
$cad->setProLogin($pro_login);
$cad->setProSenha($pro_senha);
$cad->setProConfSenha($pro_conf_senha);
if ($cad->insert()) {
    ?>
    <img src="../admin/img/load.gif" style="margin: 150px 0 0 450px; ">
    <script>
        document.write = "Carregando .... ";
        window.setTimeout("location.href='../View/painel.php?pagina=profissional'", 500);
    </script>
    <h1 style="margin: 150px 0 0 300px; ">Cadastrado</h1>
    <?php

} else {
    echo "Erro ao cadastrar";
}
