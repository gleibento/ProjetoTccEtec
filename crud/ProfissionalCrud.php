<?php

/**
 * Created by PhpStorm.
 * User: glei-
 * Date: 21/03/2017
 * Time: 00:49
 */
include_once ("../dao/Conexao.php");
class ProfissionalCrud extends Conexao
{
    /**
     * @return mixed
     */
    public function find($param)
    {
        $sql = "select * from profissional WHERE pro_cpf= ? OR pro_nome like ?";
        $stmt = Conexao::prepare($sql);
        $stmt->bindValue(1, $param, PDO::PARAM_STR);
        $stmt->bindValue(2, "%".$param."%", PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function findAll()
    {
        $sql = "select * from profissional";
        $stmt = Conexao::prepare($sql);;
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function delete($id)
    {
        $sql = "delete from profissional WHERE id = :id";
        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}