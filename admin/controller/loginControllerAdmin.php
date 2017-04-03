<?php
include_once("../dao/AdminDao.php");
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_MAGIC_QUOTES);
$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_MAGIC_QUOTES);
if ($email != "" && $senha != ""){
    $logar = new AdminDao();
    $logar->setEmail($email);
    $logar->setSenha($senha);
    if ($logar->loginAdmin()) {
        header("Location:../view/PainelAdm.php");
    }else {
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
