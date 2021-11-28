<?php 
require_once('Conexao.php');
require_once('Servico.php');
require_once('Usuario.php');
require_once('Cliente.php');
    class Agenda{
        private $id;
        private $data;
        private $hora;
        private $cliente;
        private $servico;
        private $usuario;
    
        public function setId($id){
            $this->id=$id;
        }
        public function getId(){
            return $this->id;
        }
        
        public function setData($data){
            $this->data = $data;
        }
        public function getData(){
            return $this->data;
        }

        public function setHora($hora){
            $this->hora = $hora;
        }
        public function getHora(){
            return $this->hora;
        }

        public function setCliente($cliente){
            $this->cliente = $cliente;
        }
        public function getCliente(){
            return $this->cliente;   
        }

        public function setServico($servico){
            $this->servico = $servico;
        }
        public function getServico(){
            return $this->servico;
        }

        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }

        public function getUsuario(){
            return $this->usuario;
        }

        public function cadastrar($agenda){
            $con = Conexao::conectar();
            $stmt = $con->prepare('INSERT INTO tbagenda(dataAgenda, horaAgenda, idCliente, idUsuario, idServico)
                                    VALUES(?, ?, ?, ?, ?)');
            $stmt->bindValue(1 , $agenda->getData());
            $stmt->bindValue(2, $agenda->getHora());
            $stmt->bindValue(3 , $agenda->getCliente()->getId());
            $stmt->bindValue(4 , $agenda->getUsuario()->getIdUsuario());
            $stmt->bindValue(5 , $agenda->getServico()->getIdServico());

            $stmt->execute();
        }

        public function listar(){
            $con = Conexao::conectar();
            $query = 
            "SELECT idAgenda, date_format(dataAgenda, '%d/%m') as dataAgenda, date_format(horaAgenda, '%H:%i') as horaAgenda, tbcliente.nomeCliente as cliente, tbusuario.nomeUsuario as usuario, tbservico.descServico as servico FROM tbagenda
                INNER JOIN tbcliente ON tbcliente.idCliente = tbagenda.idCliente
                INNER JOIN tbservico ON tbservico.idServico = tbagenda.idServico
                INNER JOIN tbusuario ON tbusuario.idUsuario = tbagenda.idUsuario";
            
            $resultado = $con->query($query);
            $lista = $resultado->fetchAll();

            return $lista;
        }
        public function semana(){
            $con = Conexao::conectar();
            $query = "SELECT date_format(MIN(dataAgenda), '%d/%m') as dataAg, date_format(horaAgenda, '%H:%i') as horaAg FROM tbagenda WHERE dataAgenda >= CURDATE()"; 
            $resultado = $con->query($query);
            $lista = $resultado->fetchAll();

            return $lista;
        }
        public function update($update){
            $con = Conexao::conectar();
            $stmt = $con->prepare("UPDATE tbagenda 
                      SET dataAgenda = ?, horaAgenda = ?, idCliente = ?,  idServico = ?
                      WHERE idAgenda = ".$update->getId());
            $stmt->bindValue(1, $update->getData());
            $stmt->bindValue(2, $update->getHora());
            $stmt->bindValue(3, $update->getCliente()->getId());
            $stmt->bindValue(4, $update->getServico()->getIdServico());
            $stmt ->execute();
        }

        public function delete($delete){
            $con = Conexao::conectar();
            $stmt = $con->prepare("DELETE FROM tbagenda
                      WHERE idAgenda = ?");
            $stmt->bindValue(1, $delete->getId());
            $stmt ->execute();
        }
    }
?>