<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>

<body>
    <div class="container-fluid ">
        <div class="bg-light h-80 shadow-sm mt-2 px-5    rounded">
            <div class="col-lg-12 text-left pb-4 pt-3  ">
                <h1 class="display-3 "> Cadastre - se</h1>
            </div>
            <form action="../../controller/validaCadastro.php" method="POST" id="cadastroUsuario">
                <div class="form-row ">
                    <div class=" col-md-5 my-3 mx-5 ">
                        <input type="text" class="form-control form-control-lg" name="userName" id="name" placeholder="Nome">
                        <span class="invalid-feedback bg-transparent " id="nameErro"></span>
                    </div>
                </div>
                <div class="form-row ">
                    <div class="col-lg-5 my-3 mx-5 ">
                        <input class="form-control form-control-lg" type="text" name="userEmail" id="email" placeholder="Digite seu e-mail">
                        <span class="invalid-feedback bg-transparent " id="emailErro"></span>

                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-5 my-3 mx-5 ">
                        <input class="form-control form-control-lg " type="text" name="userCpf" id="cpf" placeholder="Digite seu CPF">
                        <span class="invalid-feedback bg-transparent " id="cpfErro"></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-5 my-3 mx-5 ">
                        <input class="form-control form-control-lg" type="text" name="nameUser" id="userName" placeholder="Digite seu nome de úsuario">
                        <span class="invalid-feedback bg-transparent " id="userNameErro"></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-5 my-3 mx-5 ">
                        <input class="form-control form-control-lg " type="password" name="userPass" id="passCadaster" placeholder="Digite sua senha">
                        <span class="invalid-feedback bg-transparent " id="passErro"></span>
                    </div>
                    <div class="col-lg-5 my-3 mx-1 ">
                        <input class="form-control form-control-lg" type="password" name="userConfirmPass" id="confirPass" placeholder="Confirme sua senha">
                        <span class="invalid-feedback bg-transparent " id="confirErro"></span>
                    </div>
                </div>
                <!-- <div class="form-row ">
                    <div class="col-lg-1 my-3 mx-5 shadow-sm p-0 rounded ">
                        <input class="form-control form-control-lg " name="userDDDPhone" type="text" required placeholder="DDD">
                    </div>
                    <div class="col-lg-5 my-3 mx-1 shadow-sm p-0 rounded">
                        <input class="form-control form-control-lg" name="userPhone" type="text" required placeholder="Telefone">
                    </div>
                </div>
                <h1 class="mx-5 my-5">Dados de Endereço</h1>
                <div class="form-row ">
                    <div class="col-lg-3 my-3 mx-5 shadow-sm p-0 rounded ">
                        <select class="form-control form-control-lg "required name="userEstado">
                            <option selected>Estado</option>
                            <option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            </option>
                        </select>
                    </div>
                    <div class="col-lg-4 my-3 mx-1 shadow-sm p-0 rounded">
                        <input class="form-control form-control-lg" type="text" required name="userCidade" placeholder="Cidade">
                    </div>
                    <div class="col-lg-2 my-3 mx-3 shadow-sm p-0 rounded">
                        <input class="form-control form-control-lg" type="number" required name="userCEP" placeholder="CEP">
                    </div>
                </div>
                <div class="form-row ">
                    <div class="col-lg-5 my-3 mx-5 shadow-sm p-0 rounded ">
                        <input class="form-control form-control-lg " type="text" required name="userBairro"placeholder="Bairro">
                    </div>
                    <div class="col-lg-5 my-3 mx-1 shadow-sm p-0 rounded">
                        <input class="form-control form-control-lg" type="text" required name="userRua"placeholder="Rua">
                    </div>
                </div>
                <div class="form-row ">
                    <div class="col-lg-2 my-3 mx-5 shadow-sm p-0 rounded ">
                        <input class="form-control form-control-lg " type="text" required name="userNumero" placeholder="Número">
                    </div>
                    <div class="col-lg-4 my-3 mx-1 shadow-sm p-0 rounded">
                        <input class="form-control form-control-lg" type="text"  name="userComplemento" placeholder="Complemento">
                    </div>
        -->
                <div class="form-row">
                    <div class="col-lg-3 mt-5 mx-auto shadow-sm p-0 rounded">
                        <input class="form-control form-control-lg btn-lg btn btn-outline-success" required type="submit" value="Cadastrar">
                    </div>
                </div>

            </form>
            <div class="form-row ">
                <div class="col-lg-12 pt-5 pb-3 mr-4 text-right ">
                    <a class="nav-link lead" href="../../index.php">Voltar</a>
                </div>
            </div>
        </div>
    </div>
    <?php
    include '../rodape/index.php'
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../../node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
    <script src="../../js/validacoes.js"></script>

</body>

</html>