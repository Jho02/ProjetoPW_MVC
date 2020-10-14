<?php

if(empty($_POST['loginUser']) || empty($_POST['loginPass'])){

    die ("Usuário ou Senha inválido");
    header("Location: index.php");
    exit();
}
else{
include '../model/loginModel.php';
}
