<?php 

    require_once("../../Controller/DAO/EnfermeiraDAO.php");
    require_once("../../conf/config.php");
    require_once("../../Model/Funcionario/Funcionario.php");

    $con = mysqli_connect($host, $login, $senha, $bd);

    $funcionario = new Funcionario();
    $enfermeiraDAO = new EnfermeiraDAO();

    $funcionario->setNome($_GET["nome"]);
    $tabela = $enfermeiraDAO->readEnfermeira($funcionario, $con);

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

    <body>

        <!-- Jumbotron -->
		<div class="jumbotron">
			<h1 class="text-center">Hospital Control System</h1>      
		</div>
		
        <!-- Breadcrumb -->
		<nav aria-label="breadcrumb">
				<a href="../login/login.php" class="btn btn-danger pull-right btn-sair"> Sair </a>
				<ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../menu/menu.php">Página Principal</a></li>
                    <li class="breadcrumb-item"><a href="index_enfermeira.php">Gerenciamento de Funcionários</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Busca de Enfermeira</li>
				</ol>
		</nav>

		<div class="panel panel-default panel-table center-block">
			<center><h3>Pesquisa por Enfermeira</h3></center>
			<table class="table table-hover">

            <?php
            if($tabela == false or mysqli_num_rows($tabela)==0){
            ?>

				<tr><td align="center">Não há nenhuma enfermeira com esse nome.</td></tr>
            <?php
            }else{
            ?>

            <thead>
                <tr>
                    <th>Nome</th>
                    <th class="text-center">CPF</th>
                    <th class="text-center">Setor Atuação</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>

            <?php
            while($dados = mysqli_fetch_row($tabela)){
            ?>

            <tbody>
                <tr>
                    <td><?php echo $dados[1]; ?></td>
                    <td class="text-center"><?php echo $dados[2]; ?></td>
                    <td class="text-center"><?php echo $dados[3]; ?></td>
                    <td align="center">
                    
                        <input class="btn btn-danger" type="button" value="Excluir" onclick="location.href='../../Controller/Enfermeira/excluir_enfermeira.php?codigo=<?php echo $dados[0]; ?>'">
                        <input class="btn btn-default" type="button" value="Editar" onclick="location.href='form_incluir_enfermeira.php?codigo=<?php echo $dados[0]; ?>'">
                    </td>
                </tbody>
            </tbo>

            <?php
            }
            mysqli_close($con);
            ?>
				
			<tbody>
	    </div>

        <?php
        }
        ?>
			</table>
</body>
</html>