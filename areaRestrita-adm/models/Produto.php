<?php
require_once('Conexao.php');
require_once('Usuario.php');
class Produto{
    private $idProduto;
    private $textoProduto;
    private $fotoProduto;
    private $descProduto;
    private $usuario; 

    public function setIdProduto($idProduto){
        $this->idProduto = $idProduto;
    }
    public function getIdProduto(){
        return $this->idProduto;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
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

    
    public function getUsuario(){
        return $this->usuario;
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
       $stmt->bindValue(3, $produto->getUsuario()->getIdUsuario());
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
    public function qtd(){
        $con = Conexao::conectar();
        $queryQtd = "SELECT COUNT(idProduto) as Qtd FROM tbproduto";
        $resultado = $con->query($queryQtd);
        $lista = $resultado->fetchAll();
        return $lista;
    }
    public function update($update){
        $con = Conexao::conectar();
        $stmt = $con->prepare("UPDATE tbproduto SET descProduto = ?, textoProduto = ?, fotoProduto = ? WHERE idProduto = ?");
        $stmt->bindValue(1 , $update->getDesc());
        $stmt->bindValue(2 , $update->getTexto());
        $stmt->bindValue(3 , $update->getFoto());
        $stmt->bindValue(4 , $update->getIdProduto());
        $stmt->execute();  
    }
    public function delete($delete){
        $con = Conexao::conectar();
        $stmt = $con->prepare("DELETE FROM tbProduto WHERE idProduto = ?");
        $stmt->bindValue(1 , $delete->getIdProduto());
        
        $query = "SELECT fotoProduto FROM tbproduto WHERE idProduto = ".$delete->getIdProduto();
        $resultado = $con->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
           unlink($linha['fotoProduto']);
        }

        $stmt->execute();       
    }
}
?>