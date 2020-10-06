<?php

$userName = $_POST['userName'];
$userLastName = $_POST['userLastName'];
$userEmail = $_POST['userEmail'];
$userCpf = $_POST['userCpf'];
$userNameUser = $_POST['userNameUser'];
$userPass = $_POST['userPass'];
$userConfirmPass = $_POST['userConfirmPass'];
$userPhone = (string) $_POST['userDDDPhone'] + (string) $_POST['userPhone'];
$userEstado = $_POST['userEstado'];
$userCidade = $_POST['userCidade'];
$userCEP = $_POST['userCEP'];
$userBairro = $_POST['userBairro'];
$userRua = $_POST['userRua'];
$userNumero = $_POST['userNumero'];
$userComplemento = $_POST['userComplemento'];
 
if(empty($userName)){
    echo ("<script> alert('Insira seu nome') </script>");
    exit();
}
if(empty($userLastName)){
    echo ("<script> alert('Insira seu Sobrenome') </script>");
    exit();
}
if(empty($userEmail)){
    echo ("<script> alert('Insira seu email') </script>");
    exit();
}
if(empty($userCpf)){
    echo ("<script> alert('Insira seu CPF) </script>");
    exit();
}
if(empty($userNameUser)){
    echo ("<script> alert('Insira seu nome de usuário') </script>");
    exit();
}
if(empty($userPass)){
    echo ("<script> alert('Insira sua senha') </script>");
    exit();
}
if(empty($userConfirmPass)){
    echo ("<script> alert('Confirme sua senha') </script>");
    exit();
}
if($userConfirmPass != $userPass){     
     echo ("<script> alert('As senhas não coincidem') </script>");
    exit(); 
}
    

if(empty($userPhone)){
    echo ("<script> alert('Insira seu número de telefone') </script>");
    exit();
}
if(empty($userCidade || $userCEP || $userBairro || $useRua || $userNumero)){
    echo ("<script> alert('Os dados de endereço foram inseridos incorretamente') </script>");
    exit();
}


echo ('<script> alert("Usuário cadastrado com sucesso!!") </script>');
