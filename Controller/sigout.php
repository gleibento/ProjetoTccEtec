<?php
/**
 * Created by PhpStorm.
 * User: glei-
 * Date: 24/03/2017
 * Time: 19:23
 */
session_start();
unset($_SESSION['nome']);
session_destroy();
?>
<img src="../admin/img/load.gif" style="margin: 150px 0 0 450px; ">
<script>
    document.write = "Carregando .... ";
    window.setTimeout("location.href='../index.php'", 1000);
</script>
<h1 style="margin: 150px 0 0 300px; ">Saindo...</h1>
