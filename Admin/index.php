<?php
session_start();
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset=utf-8>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="../css/awesome/css/font-awesome.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="../img/favico.ico"/>
        <script type="text/javascript">
            document.getElementById("#erro").innerHTML = "Erro ao cadastrar";
        </script>
        <title>Login</title>
    </head>
    <body class="corFundo">
    <div id="login">
        <div class="row">
            <div class="col-lg-12">
                <img src="../img/UniHealthBase.png" alt="logo do login">
            </div>
            <div class="col-lg-12">
                <form action="" method="post">
                    <div class="form-group ">
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario" class="form-control" id="usuario" placeholder="User">
                    </div>
                    <div class="form-group ">
                        <label for="Senha">Senha</label>
                        <input type="password" name="senha" class="form-control" id="inputSuccess3"
                               placeholder="Password">
                    </div>
                    <div class="form-group ">
                        <button type="submit" name="logar" class="btn btn-primary">Logar</button>
                    </div>
                </form>
            </div>
            <p class="cadLodin">Ainda não é cadastrado? <a href="" data-target="#myModal"
                                                           data-toggle="modal">Cadastre-se</a></p>
            <div style="text-align: center" class="resposta"></div>
        </div>
    </div>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery.mask.js"></script>
    <script type="text/javascript" src="../css/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/usuario.js"></script>
    </body>
    </html>
<?php
include_once("../Dao/Cadastrar.php");
$email = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_MAGIC_QUOTES);
$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_MAGIC_QUOTES);
if ($email != "" && $senha != "") {
    if (isset($_POST['logar'])) {
        $cadastrar = new Cadastrar();
        $cadastrar->setEmail($email);
        $cadastrar->setSenha($senha);
        if ($cadastrar->logar() == true) {
            header("Location:../View/painel.php");
        }else{
       ?>
            <script type="text/javascript">alert("Usuario ou senha invalidos")</script>
        <?php
        }
    }
}else{
?>
    <script type="text/javascript">alert("Existe campos em branco")

    </script>
<?php
}



?>