<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="bg-light h-80 mt-2 mx-2 shadow-sm rounded">
        <div class="col-lg-12 text-left py-3 pl-5 ">
            <h1 class="display-4"> Realizar login </h1>
        </div>
        <form action="../../controller/validaLogin.php" method="POST" id="login">
            <div class="form-row">
                <div class="col-lg-5 col-md-6 my-4 pt-3 mx-auto ">
                    <input class="form-control form-control-lg" id="user" name="user" type="text" placeholder="Digite seu nome de usuário ou e-mail">
                    <span class="invalid-feedback bg-transparent " id="userErro"></span>
                </div>
               
            </div>
            <div class="form-row">
                <div class="col-lg-5 col-md-6 my-4 mx-auto ">
                    <input class="form-control form-control-lg" id="pass" name="pass" id="stop" onkeypress="" type="password" placeholder="Digite sua senha">
                    <span class="invalid-feedback bg-transparent " id="passErro"></span>
                </div>
               
            </div>
            <div class="form-row">
                <div class="col-lg-9 pr-5 text-right">
                    <a class="nav-link lead" href="#">Esqueci minha senha</a>
                </div>
            </div>
            <div class="form-row">
                <div class="col-lg-3 my-5 mx-auto">
                    <input class="form-control form-control-lg btn-lg btn btn-outline-primary" name="text" type="submit" value="Acessar">
                </div>
            </div>
            <div class="form-row">
                <div class="col-lg-12 my-4 mb-0 pt-4 pr-3 text-right">
                    <a class="nav-link lead" href="../../index.php">Voltar</a>
                </div>
            </div>

        </form>

    </div>

    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../../node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
    <script src="../../js/validacoes.js"></script>
</body>

</html>