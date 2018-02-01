<?php
	include("../../conf/config.php");
	$con = mysqli_connect($host, $login, $senha, $bd);
	$sql = "DELETE FROM Funcionario WHERE cod_Func =".$_GET["codigo"];
	mysqli_query($con, $sql);
	header("location: ../../Views/Enfermeira/index_enfermeira.php");
?>