<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioDao
 *
 * @author glei-
 */
 include_once("Conexao.php");
class UsuarioDao {
    private $usu_sus;
    private $usu_cpf;
    private $usu_nome;
    private $usu_dtnasc;
    private $usu_genero;
    private $usu_tp_sangue;
    private $usu_naturalidade;
    private $usu_nacionalidade;
    private $usu_mae;
    private $usu_pai;
    private $usu_rg;
    private $usu_rg_dtexped;
    private $usu_rg_orgexped;
    private $usu_cep;
    private $usu_tipo_logradouro;
    private $usu_logradouro;
    private $usu_num;
    private $usu_complemento;
    private $usu_bairro;
    private $usu_cidade;
    private $usu_uf;
    private $usu_email;
    private $usu_tel;
    private $usu_cel1;
    private $usu_cel2;
    private $usu_recado;
    private $usu_obs;

    function getUsu_sus() {
        return $this->usu_sus;
    }

    function getUsu_cpf() {
        return $this->usu_cpf;
    }

    function getUsu_nome() {
        return $this->usu_nome;
    }

    function getUsu_dtnasc() {
        return $this->usu_dtnasc;
    }

    function getUsu_genero() {
        return $this->usu_genero;
    }

    function getUsu_tp_sangue() {
        return $this->usu_tp_sangue;
    }

    function getUsu_naturalidade() {
        return $this->usu_naturalidade;
    }

    function getUsu_nacionalidade() {
        return $this->usu_nacionalidade;
    }

    function getUsu_mae() {
        return $this->usu_mae;
    }

    function getUsu_pai() {
        return $this->usu_pai;
    }

    function getUsu_rg() {
        return $this->usu_rg;
    }

    function getUsu_rg_dtexped() {
        return $this->usu_rg_dtexped;
    }

    function getUsu_rg_orgexped() {
        return $this->usu_rg_orgexped;
    }

    function getUsu_cep() {
        return $this->usu_cep;
    }

    function getUsu_tipo_logradouro() {
        return $this->usu_tipo_logradouro;
    }

    function getUsu_logradouro() {
        return $this->usu_logradouro;
    }

    function getUsu_num() {
        return $this->usu_num;
    }

    function getUsu_complemento() {
        return $this->usu_complemento;
    }

    function getUsu_bairro() {
        return $this->usu_bairro;
    }

    function getUsu_cidade() {
        return $this->usu_cidade;
    }

    function getUsu_uf() {
        return $this->usu_uf;
    }

    function getUsu_email() {
        return $this->usu_email;
    }

    function getUsu_tel() {
        return $this->usu_tel;
    }

    function getUsu_cel1() {
        return $this->usu_cel1;
    }

    function getUsu_cel2() {
        return $this->usu_cel2;
    }

    function getUsu_recado() {
        return $this->usu_recado;
    }

    function getUsu_obs() {
        return $this->usu_obs;
    }

    function setUsu_sus($usu_sus) {
        $this->usu_sus = $usu_sus;
    }

    function setUsu_cpf($usu_cpf) {
        $this->usu_cpf = $usu_cpf;
    }

    function setUsu_nome($usu_nome) {
        $this->usu_nome = $usu_nome;
    }

    function setUsu_dtnasc($usu_dtnasc) {
        $this->usu_dtnasc = $usu_dtnasc;
    }

    function setUsu_genero($usu_genero) {
        $this->usu_genero = $usu_genero;
    }

    function setUsu_tp_sangue($usu_tp_sangue) {
        $this->usu_tp_sangue = $usu_tp_sangue;
    }

    function setUsu_naturalidade($usu_naturalidade) {
        $this->usu_naturalidade = $usu_naturalidade;
    }

    function setUsu_nacionalidade($usu_nacionalidade) {
        $this->usu_nacionalidade = $usu_nacionalidade;
    }

    function setUsu_mae($usu_mae) {
        $this->usu_mae = $usu_mae;
    }

    function setUsu_pai($usu_pai) {
        $this->usu_pai = $usu_pai;
    }

    function setUsu_rg($usu_rg) {
        $this->usu_rg = $usu_rg;
    }

    function setUsu_rg_dtexped($usu_rg_dtexped) {
        $this->usu_rg_dtexped = $usu_rg_dtexped;
    }

    function setUsu_rg_orgexped($usu_rg_orgexped) {
        $this->usu_rg_orgexped = $usu_rg_orgexped;
    }

    function setUsu_cep($usu_cep) {
        $this->usu_cep = $usu_cep;
    }

    function setUsu_tipo_logradouro($usu_tipo_logradouro) {
        $this->usu_tipo_logradouro = $usu_tipo_logradouro;
    }

    function setUsu_logradouro($usu_logradouro) {
        $this->usu_logradouro = $usu_logradouro;
    }

    function setUsu_num($usu_num) {
        $this->usu_num = $usu_num;
    }

    function setUsu_complemento($usu_complemento) {
        $this->usu_complemento = $usu_complemento;
    }

    function setUsu_bairro($usu_bairro) {
        $this->usu_bairro = $usu_bairro;
    }

    function setUsu_cidade($usu_cidade) {
        $this->usu_cidade = $usu_cidade;
    }

    function setUsu_uf($usu_uf) {
        $this->usu_uf = $usu_uf;
    }

    function setUsu_email($usu_email) {
        $this->usu_email = $usu_email;
    }

    function setUsu_tel($usu_tel) {
        $this->usu_tel = $usu_tel;
    }

    function setUsu_cel1($usu_cel1) {
        $this->usu_cel1 = $usu_cel1;
    }

    function setUsu_cel2($usu_cel2) {
        $this->usu_cel2 = $usu_cel2;
    }

    function setUsu_recado($usu_recado) {
        $this->usu_recado = $usu_recado;
    }

    function setUsu_obs($usu_obs) {
        $this->usu_obs = $usu_obs;
    }
    public function cadastrar(){
        $sql = "INSERT INTO usuario(usu_sus,usu_cpf,usu_nome,usu_dtnasc,usu_genero,usu_tp_sangue,usu_naturalidade,"
                . "usu_nacionalidade,usu_mae,usu_pai,usu_rg,usu_rg_dtexped,usu_rg_orgexped, usu_cep,usu_tipo_logradouro,"
                . "usu_logradouro,usu_num,usu_complemento,usu_bairro,usu_cidade,usu_uf,usu_email,usu_tel,usu_cel1,usu_cel2,"
                . "usu_recado,usu_obs)VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stm = Conexao::prepare($sql);
        $stm->bindValue(1,$this->getUsu_sus());
        $stm->bindValue(2,$this->getUsu_cpf());
        $stm->bindValue(3,$this->getUsu_nome());
        $stm->bindValue(4,$this->getUsu_dtnasc());
        $stm->bindValue(5,$this->getUsu_genero());
        $stm->bindValue(6,$this->getUsu_tp_sangue());
        $stm->bindValue(7,$this->getUsu_naturalidade());
        $stm->bindValue(8,$this->getUsu_nacionalidade());
        $stm->bindValue(9,$this->getUsu_mae());
        $stm->bindValue(10,$this->getUsu_pai());
        $stm->bindValue(11,$this->getUsu_rg());
        $stm->bindValue(12,$this->getUsu_rg_dtexped());
        $stm->bindValue(13,$this->getUsu_rg_orgexped());
        $stm->bindValue(14,$this->getUsu_cep());
        $stm->bindValue(15,$this->getUsu_tipo_logradouro());
        $stm->bindValue(16,$this->getUsu_logradouro());
        $stm->bindValue(17,$this->getUsu_num());
        $stm->bindValue(18,$this->getUsu_complemento());
        $stm->bindValue(19,$this->getUsu_bairro());
        $stm->bindValue(20,$this->getUsu_cidade());
        $stm->bindValue(21,$this->getUsu_uf());
        $stm->bindValue(22,$this->getUsu_email());
        $stm->bindValue(23,$this->getUsu_tel());
        $stm->bindValue(24,$this->getUsu_cel1());
        $stm->bindValue(25,$this->getUsu_cel2());
        $stm->bindValue(26,$this->getUsu_recado());
        $stm->bindValue(27,$this->getUsu_obs());
        return $stm->execute();
    }
}
