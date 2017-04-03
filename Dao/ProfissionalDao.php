<?php
echo "<meta charset='utf-8'>";
/**
 * Created by PhpStorm.
 * User: glei-
 * Date: 21/03/2017
 * Time: 01:01
 */
include_once("Conexao.php");

class ProfissionalDao
{

    private $pro_cpf;
    private $pro_nome;
    private $pro_genero;
    private $car_cod;
    private $pro_registro;
    private $esp_cod;
    private $pro_login;
    private $pro_senha;
    private $pro_conf_senha;
    private $conv_cod;

    /**
     * @return mixed
     */
    public function getProCpf()
    {
        return $this->pro_cpf;
    }

    /**
     * @param mixed $pro_cpf
     */
    public function setProCpf($pro_cpf)
    {
        $this->pro_cpf = $pro_cpf;
    }

    /**
     * @return mixed
     */
    public function getProNome()
    {
        return $this->pro_nome;
    }

    /**
     * @param mixed $pro_nome
     */
    public function setProNome($pro_nome)
    {
        $this->pro_nome = $pro_nome;
    }

    /**
     * @return mixed
     */
    public function getProGenero()
    {
        return $this->pro_genero;
    }

    /**
     * @param mixed $pro_genero
     */
    public function setProGenero($pro_genero)
    {
        $this->pro_genero = $pro_genero;
    }

    /**
     * @return mixed
     */
    public function getCarCod()
    {
        return $this->car_cod;
    }

    /**
     * @param mixed $car_cod
     */
    public function setCarCod($car_cod)
    {
        $this->car_cod = $car_cod;
    }

    /**
     * @return mixed
     */
    public function getProRegistro()
    {
        return $this->pro_registro;
    }

    /**
     * @param mixed $pro_registro
     */
    public function setProRegistro($pro_registro)
    {
        $this->pro_registro = $pro_registro;
    }

    /**
     * @return mixed
     */
    public function getEspCod()
    {
        return $this->esp_cod;
    }

    /**
     * @param mixed $esp_cod
     */
    public function setEspCod($esp_cod)
    {
        $this->esp_cod = $esp_cod;
    }

    /**
     * @return mixed
     */
    public function getProLogin()
    {
        return $this->pro_login;
    }

    /**
     * @param mixed $pro_login
     */
    public function setProLogin($pro_login)
    {
        $this->pro_login = $pro_login;
    }

    /**
     * @return mixed
     */
    public function getProSenha()
    {
        return $this->pro_senha;
    }

    /**
     * @param mixed $pro_senha
     */
    public function setProSenha($pro_senha)
    {
        $this->pro_senha = $pro_senha;
    }

    /**
     * @return mixed
     */
    public function getConvCod()
    {
        return $this->conv_cod;
    }

    /**
     * @param mixed $conv_cod
     */
    public function setConvCod($conv_cod)
    {
        $this->conv_cod = $conv_cod;
    }

    /**
     * @return mixed
     */
    public function getProConfSenha()
    {
        return $this->pro_conf_senha;
    }

    /**
     * @param mixed $pro_conf_senha
     */
    public function setProConfSenha($pro_conf_senha)
    {
        $this->pro_conf_senha = $pro_conf_senha;
    }


    public function insert()
    {
        try {
            $sql = "INSERT INTO profissional(pro_cpf, pro_nome, pro_genero, pro_login, pro_senha,conf_senha) VALUES (?,?,?,?,?,?)";
            $stm = Conexao::prepare($sql);
            $stm->bindValue(1, $this->getProCpf());
            $stm->bindValue(2, $this->getProNome());
            $stm->bindValue(3, $this->getProGenero());
            $stm->bindValue(4, $this->getProLogin());
            $stm->bindValue(5, $this->getProSenha());
            $stm->bindValue(6, $this->getProConfSenha());
            return $stm->execute();
        } catch (SQLiteException $ex) {
            echo $ex->getMessage();
        }
    }

    /**
     *
     */
    public function logar()
    {
        try {
            session_start();
            $sql = "SELECT * FROM profissional WHERE pro_login = ? AND pro_senha = ? ";
            $stm = Conexao::prepare($sql);
            $stm->bindValue(1, $this->getProLogin(), PDO::PARAM_STR);
            $stm->bindValue(2, $this->getProSenha(), PDO::PARAM_STR);
            $stm->execute();
            if ($stm->rowCount() == 1) {
                $result = $stm->fetch(PDO::FETCH_OBJ);
                $_SESSION['nome'] = $result->pro_nome;
                return true;
            } else {
                return false;
            }
        } catch (SQLiteException $ex) {
            echo $ex->getMessage();
        }
    }

    public function alterar($id)
    {
        try {
            $sql = "UPDATE profissional SET nome=:nome,email=:email,senha=:senha,rua=:rua,cep=:cep,rg=:rg,cpf=:cpf WHERE id = :id ";
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
        } catch (SQLiteException $ex) {
            echo $ex->getMessage();
        }
    }

}

