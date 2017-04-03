<?php

include_once '../Dao/Conexao.php';
class UsuarioCrud extends Conexao{
    public function find($param) {
        $sql = "select * from usuario where usu_sus= ? or usu_mae  like  ?";
        $stm = Conexao::prepare($sql);
        $stm->bindValue(1,$param);
        $stm->bindValue(2,"%".$param."%");
        $stm->execute();
        return $stm->fetch();
    }
}
