<?php

/**
 * Created by PhpStorm.
 * User: glei-
 * Date: 21/03/2017
 * Time: 00:31
 */
include_once ("Config.php");
class Conexao
{
    public static $instacia;
    public static function getConection()
    {
        if (!isset(self::$instacia)) {
            try {
               self::$instacia = new PDO('mysql:host='.DB_ROST.';dbname='.DB_NAME,DB_USUARIO,DB_PASSWORD);
                self::$instacia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instacia->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
           } catch (Exception $exc) {
                echo "ERRO 01{$exc->getMessage()}";
            }
       }
        return self::$instacia;
    }

    public static function desconectar() {
        self::$instacia->close();
    }
    public static  function prepare($sql) {
        return self::getConection()->prepare($sql);
    }

}