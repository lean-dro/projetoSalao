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
            $query = "SELECT idAgenda, dataAgenda, horaAgenda, idCliente, idUsuario, idServico FROM tbagenda";
            $resultado = $con->query($query);
            $lista = $resultado->fetchAll();

            return $lista;
        }
        public function semana(){
            $con = Conexao::conectar();
            $query = "SELECT date_format(MIN(dataAgenda), '%d/%m') as Prox FROM tbagenda WHERE dataAgenda > CURDATE()"; 
            $resultado = $con->query($query);
            $lista = $resultado->fetchAll();

            return $lista;
        }
    }
?>