<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProntuarioCrud
 *
 * @author glei-
 */
include_once '../Dao/Conexao.php';
class ProntuarioCrud {

    public function find($param) {
        $sql = "SELECT usuario.usu_sus, usuario.usu_nome,usuario.usu_mae, profissional.pro_nome,
atendimento.ate_tp_consulta, atendimento.ate_data, solicita_exame.exa_pedido, exame.exa_nome,usuario.usu_obs 
from usuario 
inner join prontuario 
on usuario.usu_sus = prontuario.usu_sus 
inner join profissional 
on profissional.pro_cpf = prontuario.pro_cpf 
inner join atendimento 
on atendimento.ate_numero = prontuario.ate_numero 
inner join solicita_exame 
on solicita_exame.exa_pedido = prontuario.exa_pedido 
inner join exame 
on exame.exa_cod = prontuario.exa_cod
ORDER BY atendimento.ate_data ASC ";
        $stm = Conexao::prepare($sql);
        $stm->bindValue(1, $param,  PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }

}
