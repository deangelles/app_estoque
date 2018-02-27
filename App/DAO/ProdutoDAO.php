<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 26/02/2018
 * Time: 13:43
 */

namespace App\DAO;


class ProdutoDAO extends Conexao
{
    public function inserir($produto)
    {
        $sql = "insert into protudos (descricao, quantidade, valor, validade) values (:descricao, :quantidade,:valor,:validade)";
        try{
            $i = $this->conexao->prepare($sql);
            $i->bindValue(":descricao", $produto->getDescricao ());
            $i->bindValue(":quantidade", $produto->getquantidade ());
            $i->bindValue(":valor", $produto->getvalor ());
            $i->bindValue(":validade", $produto->getvalidade ());

        } catch (\PDOException $e){
            echo "<div class='alert-danger'>{$e->getMessage()}</div>";
    }
    }

}