<?php 

    require_once('../../conf/config.php');
    require_once('../../Model/Medico/Medico.php');

    class MedicoDAO{
        
        public function insertMedico(Funcionario $funcionario, Medico $medico, $con){
            $sqlCod = "SELECT cod_Func FROM Funcionario WHERE nome='".$funcionario->getNome()."';";
            $tabela = mysqli_query($con, $sqlCod);
            $dados = mysqli_fetch_row($tabela);

            $sql = "INSERT INTO Medico (cod_Func,registro, area_atuacao) VALUES (".$dados[0].", ".$medico->getCrm().", '".$medico->getAreaAtuacao()."');";
            echo $sql;
            mysqli_query($con, $sql);
            echo mysqli_error($con);
            mysqli_close($con);
            header("location: ../../Views/Medico/index_medico.php");
        }
        
        public function updateMedico(Medico $medico, $con)
        {
            $sql = "UPDATE Medico SET registro = ".$medico->getCrm().", area_atuacao = '".$medico->getAreaAtuacao()."' WHERE cod_Func = ".$medico->getCodigo();
            echo $sql;     
            mysqli_query($con, $sql);
            echo mysqli_error($con);
            mysqli_close($con);
            header("location: ../../Views/Medico/index_medico.php");
        }

        public function readMedico(Funcionario $funcionario, $con){
            $sqlCod = "SELECT cod_Func FROM Funcionario WHERE nome like '%".$funcionario->getNome()."%';";
            $codigo = mysqli_query($con, $sqlCod);
            if($codigo == false){
                return $codigo;
            } else{
                $cod = mysqli_fetch_row($codigo);
                $sql = "SELECT F.cod_Func, nome, cpf, registro, area_atuacao FROM Funcionario AS F, Medico AS M WHERE F.cod_Func=" .$cod[0]." AND M.cod_Func=".$cod[0]." ;";
                $tabela = mysqli_query($con, $sql);
                return $tabela;
            }
            
        }
        
    }

?>