<?php
  require_once("../../conf/config.php");
  require_once("../../Model/Funcionario/Funcionario.php");
  require_once("../../Model/Enfermeira/Enfermeira.php");
  require_once("../DAO/FuncionarioDAO.php");
  require_once("../DAO/EnfermeiraDAO.php");

  $funcionario = new Funcionario();
  $funcionarioDAO = new FuncionarioDAO();
  $enfermeira = new Enfermeira();
  $enfermeiraDAO = new EnfermeiraDAO();  

  $funcionario->setCodigo($_POST["codigo"]);
  $funcionario->setNome($_POST["nome"]);
  $funcionario->setCpf($_POST["cpf"]);
  $funcionario->setDataNascimento($_POST["data_nascimento"]);
  $funcionario->setSalario($_POST["salario"]);
  $funcionario->setSexo($_POST["sexo"]);

  $enfermeira->setCodigo($_POST["codigo"]);
  $enfermeira->setSetorAtuacao($_POST["setor"]);

  // conecta com o banco de dados
  $con = mysqli_connect($host, $login, $senha, $bd);
   
  // chama função update
  $funcionarioDAO->updateFuncionario($funcionario, $con);
  $enfermeiraDAO->updateEnfermeira($enfermeira, $con);
?>