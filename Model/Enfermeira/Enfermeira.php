<?php 

    class Enfermeira{

        private $codigo = null;
        private $setorAtuacao = null;
    
        // getters
        public function getCodigo(){
            return $this->codigo;
        }

        public function getSetorAtuacao(){
            return $this->setorAtuacao;
        }

        // setters
        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }

        public function setSetorAtuacao($setor){
            $this->setorAtuacao = $setor;
        }
    }
?>