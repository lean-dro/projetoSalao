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

        public function qtd(){
            $conexao = Conexao::conectar();
            $queryQtd = "SELECT COUNT(idServico) as Qtd FROM tbservico";
            $resultado = $conexao->query($queryQtd);
            $lista = $resultado->fetchAll();
            return $lista;
        }
        public function update($update){
            $conexao = Conexao::conectar();
            
            $stmt = $conexao->prepare("UPDATE tbservico SET descServico = ?, textoServico = ?, fotoServico = ? WHERE idServico = ?");
            $stmt->bindValue(1, $update->getDescServico());
            $stmt->bindValue(2, $update->getTextoServico());
            $stmt->bindValue(3, $update->getFotoServico());
            $stmt->bindValue(4 , $update->getIdServico());

            $stmt->execute();
        }
    
        public function delete($delete){
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("SET FOREIGN_KEY_CHECKS=0;DELETE FROM tbservico WHERE idServico = ?; DELETE FROM tbagenda WHERE idServico = ?;SET FOREIGN_KEY_CHECKS=0;");
            $stmt->bindValue(1, $delete->getIdServico());
            $stmt->bindValue(2, $delete->getIdServico());

            
            $resultado = $conexao->query("SELECT fotoServico FROM tbservico WHERE idServico =".$delete->getIdServico());
            $lista = $resultado->fetchAll();

            foreach ($lista as $linha) {
                unlink($linha['fotoServico']);
            }

            $stmt->execute();
        }
    }
?>
