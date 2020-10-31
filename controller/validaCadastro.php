<?php

$userName = $_POST['userName'];
//$userLastName = $_POST['userLastName'];
$type = 'usuario';
$userEmail = $_POST['userEmail'];
$userCpf = $_POST['userCpf'];
$userNameUser = $_POST['nameUser'];
$userPass = $_POST['userPass'];
$userConfirmPass = $_POST['userConfirmPass'];
/*$userPhone = (string) $_POST['userDDDPhone'] + (string) $_POST['userPhone'];
$userEstado = $_POST['userEstado'];
$userCidade = $_POST['userCidade'];
$userCEP = $_POST['userCEP'];
$userBairro = $_POST['userBairro'];
$userRua = $_POST['userRua'];
$userNumero = $_POST['userNumero'];
$userComplemento = $_POST['userComplemento'];
*/
 
if(empty($userName)){
    die("erroName");
}
//if(empty($userLastName)){
  //  exit("ErroLastName");
//}
if(empty($userEmail)){
    die("erroEmail");
}
if(empty($userCpf)){
    die("erroCpf");
}
if(empty($userNameUser)){
    die("erroNameUser");
}
if(empty($userPass)){
    die("erroPass");
}
if(empty($userConfirmPass)){
    die("erroConfrimPass");
}
if($userConfirmPass != $userPass){     
    die("erroPassConfirm"); 
}
    
/*
if(empty($userPhone)){
    exit("ErroPhone");
}
if(empty($userCity || $userCEP || $userBairro || $userStreet || $userNumber)){
    exit("ErroAddress");
}
*/
include '../model/cadastroModel.php';
?>
