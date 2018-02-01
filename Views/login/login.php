<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../styles/estilo.css">
    </head>
    <body id="grad">
    
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <div class="panel panel-default panel-login">
                        <div class="panel-heading text-center"><h4>Efetue o login para acessar o HCS</h4></div>
                        <div class="panel-body">
                            <form method="post" action="../../Controller/validacao.php">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="login" type="text" class="form-control" name="login" placeholder="Login de acesso" required>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Senha" required>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Entrar</button>
                                <button type="reset" class="btn btn-danger pull-right">Limpar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </body>
</html>