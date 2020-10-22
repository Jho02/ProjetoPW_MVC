<?php
session_start();

$login = $_POST['login'];
$pass = $_POST['pass'];

if (isset($login) && empty($login)) {
    echo "erroUser";
    die();
}
if (isset($pass) && empty($pass)) {
    echo "erroPass";
    die();
}

include("../model/loginModel.php");
 

    

?>