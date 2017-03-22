<?php

/**
 * Created by PhpStorm.
 * User: glei-
 * Date: 21/03/2017
 * Time: 01:01
 */
include_once("Conexao.php");

class Cadastrar
{
    private $nome;
    private $email;
    private $senha;
    private $rua;
    private $cep;
    private $rg;
    private $cpf;

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * @param mixed $rua
     */
    public function setRua($rua)
    {
        $this->rua = $rua;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return mixed
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * @param mixed $rg
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function insert()
    {
        $sql = "INSERT INTO pessoa(nome,email,senha,rua,cep,rg,cpf)VALUES (:nome,:email,:senha,:rua,:cep,:rg,:cpf)";
        $stm = Conexao::prepare($sql);
        $stm->bindParam(':nome', $this->nome, PDO::PARAM_STR);
        $stm->bindParam(':email', $this->email, PDO::PARAM_STR);
        $stm->bindParam(':senha', $this->senha, PDO::PARAM_STR);
        $stm->bindParam(':rua', $this->rua, PDO::PARAM_STR);
        $stm->bindParam(':cep', $this->cep, PDO::PARAM_STR);
        $stm->bindParam(':rg', $this->rg, PDO::PARAM_STR);
        $stm->bindParam(':cpf', $this->cpf, PDO::PARAM_STR);
        return $stm->execute();
    }

    /**
     *
     */
    public function logar()
    {
        $sql = "SELECT * FROM pessoa WHERE email = :email AND senha = :senha ";
        $stm = Conexao::prepare($sql);
        $stm->bindParam(':email', $this->email);
        $stm->bindParam(':senha', $this->senha);
        $stm->execute();
        if ($stm->rowCount() == 1) {
            $result = $stm->fetch(PDO::FETCH_ASSOC);
                $_SESSION['email'] = $result['email'];
            return true;
        } else {
            return false;
        }
    }

    public function alterar($id)
    {
        $sql = "UPDATE pessoa SET nome=:nome,email=:email,senha=:senha,rua=:rua,cep=:cep,rg=:rg,cpf=:cpf WHERE id = :id ";
        $stm = Conexao::prepare($sql);
        $stm->bindParam(':nome', $this->nome, PDO::PARAM_STR);
        $stm->bindParam(':email', $this->email, PDO::PARAM_STR);
        $stm->bindParam(':senha', $this->senha, PDO::PARAM_STR);
        $stm->bindParam(':rua', $this->rua, PDO::PARAM_STR);
        $stm->bindParam(':cep', $this->cep, PDO::PARAM_STR);
        $stm->bindParam(':rg', $this->rg, PDO::PARAM_STR);
        $stm->bindParam(':cpf', $this->cpf, PDO::PARAM_STR);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        return $stm->execute();
    }
}