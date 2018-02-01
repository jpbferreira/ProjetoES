<?php
header("Content-Type: text/html; charset=UTF-8",true);
?>
<html>
	<head>
			<title>Página Principal</title>
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
                <li class="breadcrumb-item active" aria-current="page">Página Principal</li>
            </ol>
        </nav>

        <h2 class="text-center">Seja bem-vindo ao Hospital Control System - HCS</h2>
        <div class="container menu">
            <div class="row">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="panel panel-default panel-menu">
                        <div class="panel-heading text-center">Gerencimento de Funcionários</div>
                        <div class="panel-body">Esta opção permite ao administrador do 
                            sistema cadastrar ou remover um funcionário do sistema, além de poder
                            consultar por um funcionário.
                            <br><br>
                            <a href="../Medico/index_medico.php" class="btn btn-success pull-right">Ir</a>
                        </div>
                    </div>    
                </div>
                
                <div class="col-sm-5">    
                    <div class="panel panel-default panel-menu">
                        <div class="panel-heading text-center">Gerencimento de Paciente</div>
                        <div class="panel-body">Esta opção permite ao administrador do 
                        sistema cadastrar ou remover um paciente do sistema, além de poder
                        consultar por um paciente já cadastrado.</div>
                            <a href="../Paciente/index_paciente.php" class="btn btn-success pull-right btn-sair">Ir</a>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>
