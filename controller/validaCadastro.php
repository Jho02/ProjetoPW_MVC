<?php

$userName = $_POST['userName'];
//$userLastName = $_POST['userLastName'];
$type = 'cliente';
$userEmail = $_POST['userEmail'];
$userCpf = $_POST['userCpf'];
$userNameUser = $_POST['userNameUser'];
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
    die("ErroName");
}
//if(empty($userLastName)){
  //  exit("ErroLastName");
//}
if(empty($userEmail)){
    die("ErroEmail");
}
if(empty($userCpf)){
    die("ErroCpf");
}
if(empty($userNameUser)){
    die("ErroNameUser");
}
if(empty($userPass)){
    die("ErroPass");
}
if(empty($userConfirmPass)){
    die("ErroConfrimPass");
}
if($userConfirmPass != $userPass){     
    die("ErroPassConfirm"); 
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
