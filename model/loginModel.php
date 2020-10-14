<?php
include 'conexao.php';

$user = mysqli_real_escape_string($conn, $_POST['loginUser']);
$pass =  mysqli_real_escape_string($conn, $_POST['loginPass']);

$query = ("SELECT email,userName,senha FROM Usuario WHERE email  = '$user' OR userName = '$user' AND senha = '$pass' ;");

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);
if ($row) {
    header('Location: ../view/home/');
} 
else {

    header('Location: ../view/login/');
}


?>