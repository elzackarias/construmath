<?php
require_once "db/db.php";
$largo = $_POST['largo'];
$ancho = $_POST['ancho'];
$alto = $_POST['alto'];

$area_terreno = $largo*$ancho;

$q = mysqli_query($mysqli,"SELECT * FROM planos WHERE area = '$area_terreno'");

$longitud = $largo+$ancho;

//MEDIDAS DE LOS DISTINTOS 
#Tabique
$tabique_largo = 0.24;
$tabique_ancho = 0.12;
$tabique_alto = 0.06;
$tabique_area = $tabique_alto*$tabique_largo;

#Tabicon
$tabicon_largo = 0.28;
$tabicon_ancho = 0.07;
$tabicon_alto = 0.14;
$tabicon_area = $tabicon_alto*$tabicon_largo;

#Tabicon
$block_largo = 0.4;
$block_ancho = 0.15;
$block_alto = 0.2;
$block_area = $block_alto*$block_largo;

//CALCULO DE AREA DEL MURO
$area_muro = $longitud*$alto;

switch ($_POST['material']) {
    case 'Tabique':
        $total = $area_muro/$tabique_area;
        $txt = "Se utilizarian: <b style='color:cyan;'>".round($total)."</b> Piezas de Tabiques rojos";
        break;

    case 'Tabicon':
        $total = $area_muro/$tabicon_area;
        $txt = "Se utilizarian: <b style='color:cyan;'>".round($total)."</b> Piezas de Tabicon";
        break;

    case 'Block':
        $total = $area_muro/$block_area;
        $txt = "Se utilizarian: <b style='color:cyan;'>".round($total)."</b> Piezas de Block";
        break;

    default:
        # code...
        break;
}


?>
<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <meta name="description" content="Hacer tarea nunca fue tan fácil :)">
    <meta name="author" content="Jose Zacarias Silberio">

    <title>ConstruMath - Calculo</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
    <style>
        .terreno{
            width: <?= $largo*14 ?>px; 
            height: <?= $ancho*14 ?>px; 
            border: 3px solid #000;
            background: #fff;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">ConstruMath</a>
            <!--<a class="btn btn-primary" href="#">Sign In</a>-->
        </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    
                <div class="col-12 mb-4">
                    <center>
                        <h4>Terreno:</h4>
                        <div class="terreno"><span style="margin-left: 104%;color: white;"><?= $ancho ?></span></div>
                        <span><?= $largo ?></span>
                    </center>

                </div>

                    <center>
                        <h3><?= $txt ?></h3>
                    </center>
                    <div class="col-12 col-md-12 justify-content-center align-self-center mt-3">
                        <button id="enviar" class="btn btn-block btn-lg btn-primary">Nuevo calculo</button>
                    </div>


                <dv class="col-12">
                <center><h4>Planos con área de <?= $area_terreno ?></h4></center> 
                <?php 
                    while($ft = mysqli_fetch_assoc($q)){
                 ?>
                    <img src="<?php echo $ft['plano'] ?>" width="100px">
                 <?php 
                  }
                  ?>                   
                </dv>
                </div>
            </div>
        </div>
    </header>

    <!-- Footer -->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item">
                            <a href="about.php">Acerca</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#">Contact</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; ConstruMath 2022. Todos los derechos reservados.</p>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; José Zacarías :3</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        $('#enviar').click(function(){
            location.href = "index.php";
        })
    </script>
</body>
</html>