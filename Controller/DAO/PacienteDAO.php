<?php 

    require_once('../../conf/config.php');
    require_once('../../Model/Paciente/Paciente.php');

    class PacienteDAO{
        
        public function insertPaciente(Paciente $paciente, $con){
            $sql = "INSERT INTO Paciente VALUES (15,'".$paciente->getCpf()."','".$paciente->getSexo()."','".$paciente->getNome()."','".$paciente->getDataNascimento()."');";
            echo $sql;
            mysqli_query($con, $sql);
            echo mysqli_error($con);
            mysqli_close($con);
            header("location: ./index_paciente.php");
        }
        
        public function updatePaciente(Paciente $paciente, $con)
        {
            $sql = "UPDATE Paciente SET nome='".$paciente->getNome()."',cpf='".$paciente->getCpf()."', data_nascimento='".$paciente->getDataNascimento()."', sexo='".$paciente->getSexo()."'  WHERE cod_paciente=".$paciente->getCodigo();
            echo $sql;     
            mysqli_query($con, $sql);
            echo mysqli_error($con);
            mysqli_close($con);
            header("location: ./index_paciente.php");
        }

        public function deletePaciente(Paciente $paciente, $con){
            $sql = "DELETE FROM Paciente WHERE cod_paciente =".$paciente->getCodigo();
            mysqli_query($con, $sql);
            header("location: ./index_paciente.php");    
        }

        public function readPaciente($paciente, $con)
        {
            $sql = "SELECT cod_Paciente, nome, cpf, data_nascimento, sexo FROM Paciente WHERE nome='".$paciente->getNome()."';";
            $tabela = mysqli_query($con, $sql);
            return $tabela;
        }
        
    }

?>