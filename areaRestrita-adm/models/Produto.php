<?php
require_once('Conexao.php');
class Produto{
    private $idUsuario;
    private $textoProduto;
    private $fotoProduto;
    private $descProduto; 

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }
    public function setTexto($textoProduto){
        $this->textoProduto = $textoProduto;
    }
    public function setFoto($fotoProduto){
        $this->fotoProduto = $fotoProduto;
    }
    public function setDesc($descProduto){
        $this->descProduto = $descProduto;
    }

    
    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function getTexto(){
        return $this->textoProduto;
    }

    public function getFoto(){
        return $this->fotoProduto;
    }

    public function getDesc(){
        return $this->descProduto;
    }

    public function cadastrar($produto){
       $con = Conexao :: conectar();
       $stmt = $con->prepare("INSERT INTO tbproduto(descProduto, fotoProduto, idUsuario, textoProduto) 
                            VALUES (?, ?, ?, ?)");
       $stmt->bindValue(1, $produto->getDesc());
       $stmt->bindValue(2, $produto->getFoto());
       $stmt->bindValue(3, $produto->getIdUsuario());
       $stmt->bindValue(4, $produto->getTexto());
       $stmt->execute();
    }
    public function listar(){
        $con = Conexao::conectar();
        $query = "SELECT idProduto,descProduto, fotoProduto, idUsuario, textoProduto FROM tbproduto";
        $resultado = $con->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}
?>