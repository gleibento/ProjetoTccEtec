<?php
session_start();
if(isset($_SESSION['email'])){
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
    <title>Home</title>
</head>
<body>
<section>
    <header class="open-menu" style="display: none;">
        <div id="menu">
            <ul class="list-unstyled">
                <li><a href="?pagina=home">Inicio</a></li>
                <li><a href="?pagina=usuario">Cadastrar Usuarios</a></li>
                <li><a href="#">Atendimento</a></li>
                <li><a href="#">Prontuario</a></li>
                <li><a href="#">Convenio</a></li>
            </ul>
            <div class="bar-close">
                <button type="button" class="btn btn-close"><i class="fa fa-close"></i></button>
            </div>
        </div>
    </header>
    <div class="container" id="topo">
        <button type="button" id="bars"><i class="fa fa-bars"></i></button>
    </div>
    <div class="logo">
        <!--   Local do logo -->
    </div>
    <div>
        <!---<p class="titulo"><?php include "./titulos.php";?></p>--->
    </div>
    <article class="principal" id="form">
        <?php
        include_once ("../Util/RequestPages.php");
        ?>
    </article>
    <footer>
        <p style="text-align: center" class="copy">&copy; <?= date('Y') ?> UniHealthBase</p>

    </footer>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery.mask.js"></script>
    <script type="text/javascript" src="../css/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/usuario.js"></script>
</section>
</body>
</html>
<?php
}else{
    echo "Sessão não criaada
    
    ";
}
?>