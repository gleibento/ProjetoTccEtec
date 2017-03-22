<?php
/**
 * Created by PhpStorm.
 * User: glei-
 * Date: 18/03/2017
 * Time: 21:59
 */
$pagina = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_STRING);

$arrayPaginas = array(
    "home" => "../View/home.php",
    "usuario" => "../View/cadUsuario.php"
);

if ($pagina) {
    $encontrou = false;

    foreach ($arrayPaginas as $page => $key) {
        if ($pagina == $page) {
            $encontrou = true;
            require_once($key);
        }
    }

    if (!$encontrou) {
        require_once("../View/home.php");
    }
} else {
    require_once("../View/home.php");
}