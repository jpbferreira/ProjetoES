<?php 

    class Medico{

        private $codigo = null;
        private $crm = null;
        private $areaAtuacao = null;
    

        // getters
        public function getCodigo(){
            return $this->codigo;
        }

        public function getCrm(){
            return $this->crm;
        }

        public function getAreaAtuacao(){
            return $this->areaAtuacao;
        }

        // setters
        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }

        public function setCrm($crm){
            $this->crm = $crm;
        }

        public function setAreaAtuacao($areaAtuacao){
            $this->areaAtuacao = $areaAtuacao;
        }
    }
?>