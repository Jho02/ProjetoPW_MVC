<?php
include 'conexao.php';

$sql = $conn->prepare("INSERT INTO Usuario (nome, email, userName, senha, tipo, cpf )
VALUES (?,?,?,?,?,?)");
$sql -> bind_param("ssssss", $userName, $userEmail, $userNameUser, $userPass, $type, $userCpf);

$sql -> execute() or die("ErroBanco");

echo "Sucesso";

$sql -> close();
$conn -> close();


?>