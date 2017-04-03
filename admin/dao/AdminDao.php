<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminDao
 *
 * @author glei-
 */
include_once 'Conexao.php';
class AdminDao {

    private $id;
    private $nome;
    private $email;
    private $senha;
    private $confSenha;

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getConfSenha() {
        return $this->confSenha;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setConfSenha($confSenha) {
        $this->confSenha = $confSenha;
    }
    public function loginAdmin() {
        $sql = "SELECT email,senha FROM admin WHERE email = ? AND senha = ?";
        $stm = Conexao::prepare($sql);
        $stm->bindValue(1, $this->getEmail(), PDO::PARAM_STR);
        $stm->bindValue(2, $this->getSenha(), PDO::PARAM_STR);
        $stm->execute();
        if ($stm->rowCount() == 1) {
            $result = $stm->fetch(PDO::FETCH_OBJ);
            $_SESSION['nome'] = $result->nome;
            return true;
        } else {
            return false;
        }
    }

}
