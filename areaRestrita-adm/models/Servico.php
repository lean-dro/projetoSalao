<?php 
require_once('Conexao.php');

class Servico{

        private $idServico;
        private $descServico;
        private $textoServico;
        private $fotoServico;
        

        public function getIdServico(){
            return $this->idServico;
        }
        public function getDescServico(){
            return $this->descServico;
        }
        public function getTextoServico(){
            return $this->textoServico;
        }
        public function getFotoServico(){
            return $this->fotoServico;
        }
        
        public function setIdServico($idServico){
            $this->idServico = $idServico;
        }
        public function setDescServico($descServico){
            $this->descServico = $descServico;
        }
        public function setTextoServico($textoServico){
            $this->textoServico = $textoServico;
        }
        public function setFotoServico($fotoServico){
            $this->fotoServico = $fotoServico;
        }

        public function cadastrar($servico){
            $con = Conexao::conectar();
            $stmt = $con->prepare("INSERT INTO tbServico(descServico, textoServico, fotoServico) 
                        VALUES (?, ?, ?)");
            $stmt->bindValue(1, $servico->getDescServico());
            $stmt->bindValue(2, $servico->getTextoServico());
            $stmt->bindValue(3, $servico->getFotoServico());
            $stmt->execute();
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idServico, descServico, textoServico, fotoServico FROM tbservico";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }
    }
?>
