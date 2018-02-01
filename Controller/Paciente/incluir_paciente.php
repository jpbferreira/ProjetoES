<?php
  require_once("../conf/config.php");
  require_once("Paciente.php");
  require_once("../DAO/PacienteDAO.php");

  $paciente = new Paciente();
  $pacienteDAO = new PacienteDAO();

  $paciente->setCodigo($_POST["codigo"]);
  $paciente->setNome($_POST["nome"]);
  $paciente->setCpf($_POST["cpf"]);
  $paciente->setDataNascimento($_POST["data_nascimento"]);
  $paciente->setSexo($_POST["sexo"]);

  // conecta com o banco de dados
  $con = mysqli_connect($host, $login, $senha, $bd);
  
  if($paciente->getCodigo() != null){
    $sql = "SELECT cod_paciente FROM Paciente WHERE cod_paciente=".$paciente->getCodigo();
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result)!=0)
      // chama função update em PacienteDAO
      $pacienteDAO->updatePaciente($paciente, $con);
  }else{

    // chama função inserir Paciente em PacienteDAO
    $pacienteDAO->insertPaciente($paciente, $con);
    
  }
?>
