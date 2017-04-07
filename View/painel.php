<?php
session_start();
if (isset($_SESSION['nome'])) {
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset=utf-8>
            <meta name=description content="">
            <meta name=viewport content="width=device-width, initial-scale=1"/>
            <link type="text/css" rel="stylesheet" href="../css/style.css"/>
            <link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css"/>
            <link rel="stylesheet" type="text/css" href="../css/awesome/css/font-awesome.min.css"/>
            <link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet">
            <link rel="icon" type="image/x-icon" href="../img/favico.ico"/>
            <title>Home</title>
        </head>
        <body class="corFundo">
            <!-- Fixed navbar -->
            <nav class="navbar navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span><i class="fa fa-bars" style="color: #000;font-size: 22px"></i></span>
                        </button>
                        <a class="navbar-brand" href="painel.php?pagina=home" style="color: #000;font-size: 28px">UniHealthBase</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="painel.php?pagina=home"><i class="fa fa-home"></i>  Inicio</a></li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" role="button"><i class="fa fa-check"></i>  Cadastros<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="painel.php?pagina=usuario"><i class="fa fa-user"></i>  Usuarios</a></li>
                                    <li><a href="#"><i class="fa fa-user-md"></i>  Profissionais</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="#contact" data-toggle="dropdown" role="button"><i class="fa fa-search"></i>  Pesquisas<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="painel.php?pagina=pesquisa">Usuarios</a></li>
                                    <li><a href="#">Profissionais</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" role="button">Sair <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="../Controller/sigout.php"><i class="fa fa-power-off"></i> Sair</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
            <div class="container">
                <div class="jumbotron" style="font-family: 'Ubuntu',sans-serif;">
                    <?php
                    include_once("../Util/RequestPages.php");
                    ?>
                </div>
            </div>
            <footer style="">
                <p style="" class="copy">&copy; <?= date('Y') ?> UniHealthBase</p>
            </footer>
            <script type="text/javascript" src="../js/lib/jquery.js"></script>
            <script type="text/javascript" src="../js/lib/jquery.mask.js"></script>
            <script type="text/javascript" src="../js/lib/jquery-ui.js"></script>
            <script type="text/javascript" src="../js/lib/jquery-ui.min.js"></script>
            <script type="text/javascript" src="../css/bootstrap/js/bootstrap.js"></script>
            <script type="text/javascript" src="../js/usuario.js"></script>
        </body>
    </html>
    <?php
} else {
    echo "<meta charset='utf-8'>";
    ?>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css"/>
    <img src="../admin/img/load.gif" style="margin: 150px 0 0 450px; ">
    <script>
        window.setTimeout("location.href='../index.php'", 2000);
    </script>
    <div class="alert alert-danger" style="width: 50%;height: 80px;text-align: center;margin-left: 250px">
        <h4>Voce não tem permissão para acessar dessa forma</h4>
    </div>
    <?php
}
?>
