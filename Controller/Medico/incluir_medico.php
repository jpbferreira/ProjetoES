<?php
  require_once("../../conf/config.php");
  require_once("../../Model/Funcionario/Funcionario.php");
  require_once("../../Model/Medico/Medico.php");
  require_once("../DAO/FuncionarioDAO.php");
  require_once("../DAO/MedicoDAO.php");

  $funcionario = new Funcionario();
  $funcionarioDAO = new FuncionarioDAO();
  $medico = new Medico();
  $medicoDAO = new MedicoDAO();  

  $funcionario->setNome($_POST["nome"]);
  $funcionario->setCpf($_POST["cpf"]);
  $funcionario->setDataNascimento($_POST["data_nascimento"]);
  $funcionario->setSalario($_POST["salario"]);
  $funcionario->setSexo($_POST["sexo"]);

  $medico->setCrm($_POST["crm"]);
  $medico->setAreaAtuacao($_POST["area"]);

  // conecta com o banco de dados
  $con = mysqli_connect($host, $login, $senha, $bd);
  
  // chama função inserir funcionario em FuncionarioDAO
  $funcionarioDAO->insertFuncionario($funcionario, $con);
  $medicoDAO->insertMedico($funcionario, $medico, $con);
?>