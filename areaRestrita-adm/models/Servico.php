<?php 
class Servico {
    private $idServico;
    private $descServico;

    public function setServico($servico){
        $this->descServico = $servico;
    }
    public function getServico(){
        return $this->descServico;
    }

    public function getIdServico(){
        return $this->idServico;
    }
}
?>