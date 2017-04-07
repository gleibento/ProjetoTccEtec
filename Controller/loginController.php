<?php

/**
 * Created by PhpStorm.
 * User: glei-
 * Date: 23/03/2017
 * Time: 12:40
 */
include_once("../Dao/ProfissionalDao.php");
$usuario = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_MAGIC_QUOTES);
$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_MAGIC_QUOTES);
if ($usuario != "" && $senha != ""){
    $logar = new ProfissionalDao();
    $logar->setProLogin($usuario);
    $logar->setProSenha($senha);
    if ($logar->logar()) {
        header("Location:../View/painel.php");
    }  else {
?>
<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css"/>
<script>
 window.setTimeout("location.href='../index.php'", 1000);
</script>
<div class="alert alert-danger" style="width: 50%;height: 80px;text-align: center;margin-left: 250px">
    Nenhum usuario encontrado com esses dados
</div>
<?php     
    }
}else{
 echo '<di class="alert alert-danger">preencha todos os campos</div>';
}   

