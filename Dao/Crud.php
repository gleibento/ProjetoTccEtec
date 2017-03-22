<?php

/**
 * Created by PhpStorm.
 * User: glei-
 * Date: 21/03/2017
 * Time: 00:49
 */
include_once ("Conexao.php");
class Crud extends Conexao
{
    /**
     * @return mixed
     */
    public static function find($id)
    {
        $sql = "select * from pessoa WHERE id= :id ";
        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function findAll()
    {
        $sql = "select * from pessoa";
        $stmt = Conexao::prepare($sql);;
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function delete($id)
    {
        $sql = "delete from pessoa WHERE id = :id";
        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}