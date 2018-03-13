<?php
/**
 * Created by PhpStorm.
 * User: 52971457249
 * Date: 12/03/2018
 * Time: 20:38
 */

namespace App\Model;


class MudarSenha
{
    private $email;
    private $senha;
    private $nsenha;

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
    public function getNsenha()
    {
        return $this->nsenha;
    }

    /**
     * @param mixed $nsenha
     */
    public function setNsenha($nsenha)
    {
        $this->nsenha = $nsenha;
    }


}