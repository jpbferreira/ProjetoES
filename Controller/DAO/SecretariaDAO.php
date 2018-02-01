<?php 

    require_once('../../conf/config.php');
    require_once('../../Model/Secretaria/Secretaria.php');

    class SecretariaDAO{
        
        public function insertSecretaria(Funcionario $funcionario, Secretaria $secretaria, $con){
            $sqlCod = "SELECT cod_Func FROM Funcionario WHERE nome='".$funcionario->getNome()."';";
            $tabela = mysqli_query($con, $sqlCod);
            $dados = mysqli_fetch_row($tabela);

            $sql = "INSERT INTO Secretaria (cod_Func, setor_responsavel) VALUES (".$dados[0].", '".$secretaria->getSetorResponsavel()."');";
            echo $sql;
            mysqli_query($con, $sql);
            echo mysqli_error($con);
            mysqli_close($con);
            header("location: ../../Views/Secretaria/index_secretaria.php");
        }
        
        public function updateSecretaria(Secretaria $secretaria, $con)
        {
            $sql = "UPDATE Secretaria SET setor_responsavel = '".$secretaria->getSetorResponsavel()."' WHERE cod_Func = ".$secretaria->getCodigo();
            echo $sql;     
            mysqli_query($con, $sql);
            echo mysqli_error($con);
            mysqli_close($con);
            header("location: ../../Views/Secretaria/index_secretaria.php");
        }

        public function readSecretaria(Funcionario $funcionario, $con){
            $sqlCod = "SELECT cod_Func FROM Funcionario WHERE nome like '%".$funcionario->getNome()."%';";
            $codigo = mysqli_query($con, $sqlCod);
            if($codigo == false){
                return $codigo;
            }else{
                $cod = mysqli_fetch_row($codigo);
                $sql = "SELECT F.cod_Func, nome, cpf, setor_responsavel FROM Funcionario AS F, Secretaria AS M WHERE F.cod_Func=" .$cod[0]." AND M.cod_Func=".$cod[0]." ;";
                $tabela = mysqli_query($con, $sql);
                return $tabela;

            }
        }
        
    }

?>