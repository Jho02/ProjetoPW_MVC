<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
     <?php
    
     if (($_SESSION['idUsuario'] == true)) {
        unset($_SESSION['idUsuario']);
    }
    else {
        header('location: ../../index.php');
    } 
    ?>
     
</head>

<body>

    <div class="col-lg-12">
        <div class="form-row">
            <div class="mt-4 mx-5">
                <img src="../../imagens/construcao.jpg" alt="Página em Manuntenção" style="height: 547px; ">
            </div>
        </div>
        <div class="form-row">
            <div class=" col-lg-12 mr-0 text-right ">
                <a class="nav-link lead" <?php session_unset();?> href="../../index.php">Voltar</a>
            </div>
        </div>
    </div>
    <script src="../../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../../node_modules/popper.js/dist/umd/popper.js"></script>
    
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>