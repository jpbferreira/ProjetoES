<?php 

    require_once('../../conf/config.php');
    require_once('../../Model/Funcionario/Funcionario.php');

    class FuncionarioDAO{
        
        public function insertFuncionario(Funcionario $funcionario, $con){
            $sql = "INSERT INTO Funcionario (cpf, data_nascimento, nome, salario, sexo) VALUES ('".$funcionario->getCpf()."','".$funcionario->getDataNascimento()."','".$funcionario->getNome()."','".$funcionario->getSalario()."','".$funcionario->getSexo()."');";
            echo $sql;
            mysqli_query($con, $sql);
            echo mysqli_error($con);
        }
        
        public function updateFuncionario(Funcionario $funcionario, $con)
        {
            $sql = "UPDATE Funcionario SET nome='".$funcionario->getNome()."',cpf='".$funcionario->getCpf()."',data_nascimento='".$funcionario->getDataNascimento()."', salario=".$funcionario->getSalario().",sexo='".$funcionario->getSexo()."' WHERE cod_Func=".$funcionario->getCodigo().";";
            echo $sql;     
            mysqli_query($con, $sql);
            echo mysqli_error($con);
        }
    }

?>