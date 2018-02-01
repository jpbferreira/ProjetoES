<?php 

    class Secretaria{

        private $codigo = null;
        private $setorResponsavel = null;
    
        // getters
        public function getCodigo(){
            return $this->codigo;
        }

        public function getSetorResponsavel(){
            return $this->setorResponsavel;
        }

        // setters
        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }

        public function setSetorResponsavel($setor){
            $this->setorResponsavel = $setor;
        }
    }
?>