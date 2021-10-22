<?php 
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
    public function gtCelularCliente(){
        return $this->celularCilente;
    }

    //Sem conexão por enquanto

    




}


?>