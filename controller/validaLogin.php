<?php

$loginUser = $_POST['loginUser'];
$loginPass = $_POST['loginPass'];

if(empty($loginUser) || empty( $loginPass)){
    echo ("<script> alert(' Usuário ou Senha inválido') </script>");
    exit ();
}
if(!empty($loginPass && $loginUser)){
    echo ("<script> alert('Login Efetuado') </script>");
    exit();
}
