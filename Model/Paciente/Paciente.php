<?php 

    class Paciente{

        private $codigo = null;
        private $nome = null;
        private $cpf = null;
        private $dataNascimento = null;
        private $sexo = null;
    

        // getters
        public function getCodigo(){
            return $this->codigo;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function getDataNascimento(){
            return $this->dataNascimento;
        }

        public function getSexo(){
            return $this->sexo;
        }

        // setters
        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function setDataNascimento($dataNascimento){
            $this->dataNascimento = $dataNascimento;
        }

        public function setSexo($sexo){
            $this->sexo = $sexo;
        }

    }
?>