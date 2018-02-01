<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<title>Incluir/Editar um paciente.</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../styles/estilo.css">
</head>

<body>

	<div class="jumbotron">
		<h1 class="text-center">Hospital Control System</h1>      
	</div>
	
	<nav aria-label="breadcrumb">
		<a href="../login/login.php" class="btn btn-danger pull-right btn-sair"> Sair </a>
		<ol class="breadcrumb" id="item-breadcrumb">
			<li class="breadcrumb-item"><a href="../menu/menu.php">Página Principal</a></li>
			<li class="breadcrumb-item"><a href="index_paciente.php">Gerenciamento de Paciente</a></li>
			<li class="breadcrumb-item active" aria-current="page">Cadastro/Edição</li>
		</ol>
	</nav>

			

	<form id="form_paciente" method="post" action="../../Controller/Paciente/incluir_paciente.php">
	<?php
	if(isset($_GET["codigo"])){
  		include("../../conf/config.php");
  		$con = mysqli_connect($host, $login, $senha, $bd);
		
		$codigo = $_GET['codigo'];
		$texto = "Edição";

  		$sql = "select * from Paciente where cod_paciente = ".$_GET['codigo'];
  		$result = mysqli_query($con, $sql);
  		$vetor = mysqli_fetch_array($result, MYSQLI_ASSOC);
  		mysqli_close($con);
	}else{
		$texto = "Cadastro de novo paciente";
	}
	if(!isset($vetor)){
		$vetor['nome'] = '';
		$vetor['cpf'] = '';
		$vetor['data_nascimento'] = '';
		$vetor['sexo'] = '';
		$codigo = null;
	}
	?>
	<div class="panel panel-default panel-table center-block">
		<input type="hidden" name="codigo" value="<?php echo $codigo; ?>" />
		<h2 class="text-center"><?php echo $texto ?></h2>
		<table class="table table-hover">
			<tr><td>Nome:</td>
				<td>
					<input type="text" name="nome" class="form-control" value="<?php echo $vetor['nome']; ?>" maxlength="30" size="31" />
				</td>
			</tr>
			<tr><td class="celula">CPF:</td>
				<td>
					<input type="text" name="cpf" class="form-control" value="<?php echo $vetor['cpf']; ?>" maxlength="11" size="12" />
				</td>
			</tr>
			<tr><td class="celula">Data nascimento:</td>
				<td>
					<input type="date" name="data_nascimento" class="form-control" value="<?php echo $vetor['data_nascimento']; ?>" size="31" />
				</td>
			</tr>
			<tr><td class="celula">Sexo:</td>
				<td>
					<select class="form-control" id="sel1" name="sexo">
						<option><?php echo $vetor['sexo']; ?></option>
						<option value="M">Masculino</option>
						<option value="F">Feminino</option>
					</select>
				</td>
			</tr>
		</table>
		<div class="panel-body">
		<input type="submit" class="btn btn-success pull-right" value="Gravar" />
		<input type="button" class="btn btn-danger pull-right" value="Cancelar" onclick="location.href='index_paciente.php'" />
		</div>
	</div>
	</form>
</body>
</html>
