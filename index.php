<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <meta name="description" content="Hacer tarea nunca fue tan fácil :)">
    <meta name="author" content="Jose Zacarias Silberio">

    <title>ConstruMath</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">

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
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">¡Cuantificar nunca fue tan fácil!</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form action="procesar.php" method="post" id="basic-form">
                        <div class="form-row">
                            <div class="col-4 col-md-4 mb-6 mb-md-0">
                                <input type="number" class="form-control form-control-lg" name="largo" placeholder="Largo (m)">
                            </div>
                            <div class="col-4 col-md-4 mb-6 mb-md-0">
                                <input type="number" class="form-control form-control-lg" name="ancho" placeholder="Ancho (m)">
                            </div>
                            <div class="col-4 col-md-4 mb-6 mb-md-0">
                                <input type="number" class="form-control form-control-lg" name="alto" placeholder="Alto (m)">
                            </div>
                            <div class="col-12 col-md-12">
                                <h4 class="mt-2 mb-0">Material:</h4>
                                <input type="radio" id="tabique" name="material" checked value="Tabique">
                                <label for="tabique">Tabique</label>
                                <input type="radio" id="tabicon" name="material" value="Tabicon">
                                <label for="tabicon">Tabicon</label>
                                <input type="radio" id="block" name="material" value="Block">
                                <label for="block">Block</label><br>
                            </div>
                            <div class="col-12 col-md-12 justify-content-center align-self-center mt-2">
                                <button type="submit" id="enviar"class="btn btn-block btn-lg btn-primary">Empezar</button>
                            </div>
                        </div>
                    </form>
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
                    <p class="text-muted small mb-4 mb-lg-0">&copy; José Zacarías :3 - 6°B Const.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>