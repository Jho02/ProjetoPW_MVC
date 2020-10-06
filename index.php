<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo!</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <div class="bg-light col-lg-12 mt-0 mb-0 ">
        <div class="text-center pt-4 ">
            <h1 class="display-3"> BEM-VINDOS </h1> 
        </div>
        <div class="form-row px-5 py-2">
            <div class="my-2 ml-auto px-3">
                <a class="nav-link lead" href="view/login/index.php">Sou cadastrado</a>
            </div>
            <div class="my-2 mr-auto px-3">
                <a class="nav-link lead" href="view/cadastro/index.php"> Preciso me cadastrar</a>
            </div>
        </div>
    </div>
    <div id="carousel" class="carousel slide " data-ride="carousel" data-interv="1000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="height: 458px ;">
            <div class="carousel-item active ">
                <img class="d-block w-100" src="imagens/carrosel-1.png" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="imagens/carrosel-2.png" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="imagens/carrosel-3.png" alt="Terceiro Slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-interv data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>