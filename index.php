<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/awesome/css/font-awesome.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="../img/favico.ico"/>
        <title>Login</title>
    </head>
    <body class="corFundo">
        <div id="login">
                <div class="row">
                    <div class="col-lg-12">
                        <img src="img/UniHealthBase.png" alt="logo do login">
                    </div>
                    <div class="col-lg-12">
                        <form method="post" action="Controller/loginController.php">
                            <div class="form-group ">
                                <label for="usuario">Usuario</label>
                                <input type="text" name="usuario" class="form-control" id="usuario" placeholder="User" required="Campo obrigatorio">
                            </div>
                            <div class="form-group ">
                                <label for="Senha">Senha</label>
                                <input type="password" name="senha" class="form-control" id="senha" placeholder="Password" required="Campo obrigatorio">
                            </div>
                            <div class="form-group ">
                                <button type="submit" id="enviar" class="btn btn-primary">Logar</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        <script type="text/javascript" src="js/lib/jquery.js"></script>
        <script type="text/javascript" src="js/lib/jquery.mask.js"></script>
        <script type="text/javascript" src="css/bootstrap/js/bootstrap.js"></script>
    </body>
</html>

