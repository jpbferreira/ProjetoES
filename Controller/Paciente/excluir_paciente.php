<?php
    require_once("../conf/config.php");
    require_once("../DAO/PacienteDAO.php");
    require_once("Paciente.php");
    
    $con = mysqli_connect($host, $login, $senha, $bd);
    
    $paciente = new Paciente();
    $pacienteDAO = new PacienteDAO();

    $paciente->setCodigo($_GET["codigo"]);

    $pacienteDAO->deletePaciente($paciente, $con);
?>
