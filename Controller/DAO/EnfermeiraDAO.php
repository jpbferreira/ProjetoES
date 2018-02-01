<?php 

    require_once('../../conf/config.php');
    require_once('../../Model/Enfermeira/Enfermeira.php');

    class EnfermeiraDAO{
        
        public function insertEnfermeira(Funcionario $funcionario, Enfermeira $enfermeira, $con){
            $sqlCod = "SELECT cod_Func FROM Funcionario WHERE nome='".$funcionario->getNome()."';";
            $tabela = mysqli_query($con, $sqlCod);
            $dados = mysqli_fetch_row($tabela);

            $sql = "INSERT INTO Enfermeira (cod_Func, setor_atuacao) VALUES (".$dados[0].", '".$enfermeira->getSetorAtuacao()."');";
            echo $sql;
            mysqli_query($con, $sql);
            echo mysqli_error($con);
            mysqli_close($con);
            header("location: ../../Views/Enfermeira/index_enfermeira.php");
        }
        
        public function updateEnfermeira(Enfermeira $enfermeira, $con)
        {
            $sql = "UPDATE Enfermeira SET setor_atuacao = '".$enfermeira->getSetorAtuacao()."' WHERE cod_Func = ".$enfermeira->getCodigo();
            echo $sql;     
            mysqli_query($con, $sql);
            echo mysqli_error($con);
            mysqli_close($con);
            header("location: ../../Views/Enfermeira/index_enfermeira.php");
        }

        public function readEnfermeira(Funcionario $funcionario, $con){
            $sqlCod = "SELECT cod_Func FROM Funcionario WHERE nome like '%".$funcionario->getNome()."%';";
            $codigo = mysqli_query($con, $sqlCod);
            if($codigo == false){
                return $codigo;
            } else {
                $cod = mysqli_fetch_row($codigo);
                $sql = "SELECT F.cod_Func, nome, cpf, setor_atuacao FROM Funcionario AS F, Enfermeira AS E WHERE F.cod_Func=" .$cod[0]." AND E.cod_Func=".$cod[0]." ;";
                $tabela = mysqli_query($con, $sql);
                return $tabela;
            }
            
        }
        
    }

?>