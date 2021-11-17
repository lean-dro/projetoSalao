<?php
require_once('Conexao.php');
class Usuario{
    private $idUsuario;
    private $loginUsuario;
    private $nomeUsuario;
    private $senhaUsuario;

    public function setIdUsuario($idUsuario){
        $this->idUsuario= $idUsuario;
    } 

    public function getIdUsuario(){
        return $this->idUsuario;
    } 

    public function setLoginUsuario($loginUsuario){
        $this->loginUsuario = $loginUsuario;
    } 

    public function getLoginUsuario(){
        return $this->loginUsuario;
    } 

    public function setNomeUsuario($nomeUsuario){
        $this->nomeUsuario = $nomeUsuario;
    } 

    public function getNomeUsuario(){
        return $this->nomeUsuario;
    } 

    public function setSenhaUsuario($senhaUsuario){
        $this->senhaUsuario = $senhaUsuario;
    } 

    public function getSenhaUsuario(){
        return $this->senhaUsuario;
    } 

    public function cadastrar($usuario){
        $con = Conexao :: conectar();
        $stmt = $con->prepare("INSERT INTO tbusuario(nomeUsuario, loginUsuario, senhaUsuario)
                                VALUES(?,?,?)");
        $stmt->bindValue(1, $usuario->getNomeUsuario());
        $stmt->bindValue(2, $usuario->getLoginUsuario());
        $stmt->bindValue(3, $usuario->getSenhaUsuario());
        $stmt->execute();        
    }

    public function listar(){
        $con = Conexao :: conectar();
        $query = "SELECT idUsuario,nomeUsuario, loginUsuario, senhaUsuario FROM tbusuario";
        $resultado = $con->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

}
?>