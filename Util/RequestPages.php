<?php
/**
 * Created by PhpStorm.
 * User: glei-
 * Date: 18/03/2017
 * Time: 21:59
 */
$pagina = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_STRING);
if (!isset($pagina)){
    include_once ("../View/home.php");
}else{
    switch ($pagina){
        default:
            include_once ("../View/home.php");
            break;
        case "usuario":
            include_once ("../View/usuarioView.php");
            break;
        case "profissional":
            include_once ("../View/profissionalView.php");
            break;
        case "pesquisa":
            include_once ("../View/pesquisasView.php");
            break;
        case "listar":
            include_once ("../View/profissionalList.php");
            break;
    }
}


