<?php 
require_once('Conexao.php');
    class Agenda{
        private $id;
        private $data;
        private $hora;
        private $idCliente;
        private $idServico;
        private $idUsuario;
    
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
            $this->hora;
        }
        public function getHora(){
            return $this->hora;
        }

        public function setIdCliente($idCliente){
            $this->idCliente = $idCliente;
        }
        public function getIdCliente(){
            return $this->idCliente;   
        }

        public function setIdServico($idServico){
            $this->idServico = $idServico;
        }
        public function getIdServico(){
            return $this->idServico;
        }

        public function setIdUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }

        public function getIdUsuario(){
            return $this->idUsuario;
        }
    }
?>