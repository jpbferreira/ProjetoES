<?php
header("Content-Type: text/html; charset=UTF-8",true);
?>
<html>
	<head>
			<title>Funcionários</title>
			<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<link rel="stylesheet" href="../styles/estilo.css">
	</head>
<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> !-->
<body>

		<div class="jumbotron">
			<h1 class="text-center">Hospital Control System</h1>      
		</div>
		
		<nav aria-label="breadcrumb">
				<a href="../login/login.php" class="btn btn-danger pull-right btn-sair"> Sair </a>
				<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="../menu/menu.php">Página Principal</a></li>
						<li class="breadcrumb-item active" aria-current="page">Gerenciamento de Funcionário</li>
				</ol>
		</nav>

        <!-- Menu -->
        <div class="container">
            <div class="btn-group btn-group-justified">
                <a href="#" class="btn btn-primary active">Médico</a>
                <a href="../Enfermeira/index_enfermeira.php" class="btn btn-primary">Enfermeira</a>
                <a href="../Secretaria/index_secretaria.php" class="btn btn-primary">Secretária</a>
            </div>
        </div><br>

		<form form="GET" action="buscar_medico.php">
				<div class="row">
					<input type="submit" class="btn btn-default pull-right search" value="Buscar">
					<input id="search" type="text" class="form-control" size="2" name="nome" placeholder="Pesquisar">
					
				</div>
		</form>


		<form name="form1" method="POST" action="form_incluir_medico.php">


			<div class="panel panel-default panel-table center-block">
			<center><h3>Médicos</h3></center>
			<table class="table table-hover">
<?php
include("../../conf/config.php");
$con = mysqli_connect($host, $login, $senha, $bd);
$sql = "SELECT F.cod_Func, nome, cpf, registro, area_atuacao FROM Funcionario AS F join Medico AS M ON F.cod_Func = M.cod_Func ORDER BY nome";
$tabela = mysqli_query($con, $sql);
if(mysqli_num_rows($tabela)==0){
?>
				<tr><td align="center">Não há nenhum médico cadastrado.</td></tr>
				<tr><td align="center"><input type="submit" class="btn btn-primary" value="Incluir Funcionário"></td></tr>
<?php
}else{
?>
			<thead>
				<tr>
					<th>Nome</th>
					<th class="text-center">CPF</th>
					<th>CRM</th>
					<th>Area</th>
					<th class="text-center">Ações</th>
				</tr>
			 </thead>
<?php
  while($dados = mysqli_fetch_row($tabela)){
?>
			<tbody>
				<tr>
					<td><?php echo $dados[1]; ?></td>
					<td><?php echo $dados[2]; ?></td>
					<td><?php echo $dados[3]; ?></td>
					<td><?php echo $dados[4]; ?></td>
					<td align="center">
					
						<input class="btn btn-danger" type="button" value="Excluir" onclick="location.href='../../Controller/Medico/excluir_medico.php?codigo=<?php echo $dados[0]; ?>'">
						<input class="btn btn-default" type="button" value="Editar" onclick="location.href='form_editar_medico.php?codigo=<?php echo $dados[0]; ?>'">
					</td>
				</tr>
<?php
  }
?>
<?php
mysqli_close($con);
?>
				<tr><td colspan="6" align="center"><input class="btn btn-primary" type="submit" value="Incluir Novo Funcionário"></td></tr>
				<tbody>
				</div>
<?php
}
?>
			</table>
		</form>
</body>
</html>
