<?php 
require_once('Conexao.php');
class Cliente {
    private $idCliente;
    private $nomeCliente;
    private $cpfCliente;
    private $celularCilente;

    public function getId(){
        return $this->idCliente;
    }

    public function setNomeCliente($nome){
        $this->nomeCliente = $nome;
    }
    public function getNomeCliente(){
        return $this->nomeCliente;
    }


    public function setCpfCliente($cpf){
        $this->cpfCliente = $cpf;
    }
    public function getCpfCliente(){
        return $this->cpfCliente;
    }



    public function setCelularCliente($celular){
        $this->celularCilente = $celular;
    }
    public function getCelularCliente(){
        return $this->celularCilente;
    }
   
   
    public function cadastro($cliente){
       $conexao = Conexao :: conectar();
       $stmt = $conexao->prepare("INSERT INTO tbCliente (nomeCliente, cpfCliente, celularCliente)
                                VALUES(?,?,?)");
        
        $stmt->bindValue(1, $cliente->getNomeCliente());
        $stmt->bindValue(2, $cliente->getCpfCliente());
        $stmt->bindValue(3, $cliente->getCelularCliente());
        $stmt->execute();
    }

    public function listar(){
        $conexao = Conexao::conectar();
        $querySelect = "SELECT nomeCliente, cpfCliente, celularCliente FROM tbcliente";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
    }

}



?>