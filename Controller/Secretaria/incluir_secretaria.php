<?php
  require_once("../../conf/config.php");
  require_once("../../Model/Funcionario/Funcionario.php");
  require_once("../../Model/Secretaria/Secretaria.php");
  require_once("../DAO/FuncionarioDAO.php");
  require_once("../DAO/SecretariaDAO.php");

  $funcionario = new Funcionario();
  $funcionarioDAO = new FuncionarioDAO();
  $secretaria = new Secretaria();
  $secretariaDAO = new SecretariaDAO();  

  $funcionario->setNome($_POST["nome"]);
  $funcionario->setCpf($_POST["cpf"]);
  $funcionario->setDataNascimento($_POST["data_nascimento"]);
  $funcionario->setSalario($_POST["salario"]);
  $funcionario->setSexo($_POST["sexo"]);

  $secretaria->setSetorResponsavel($_POST["setor"]);

  // conecta com o banco de dados
  $con = mysqli_connect($host, $login, $senha, $bd);

  // chama função inserir funcionario em FuncionarioDAO
  $funcionarioDAO->insertFuncionario($funcionario, $con);
  $secretariaDAO->insertSecretaria($funcionario, $secretaria, $con);
  
?>