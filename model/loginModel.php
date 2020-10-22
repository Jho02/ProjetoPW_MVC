<?php
include_once 'conexao.php';

$sql = $conn->prepare("SELECT * FROM Usuario WHERE  (email = ? OR userName =? ) AND  senha = ? AND ativo = true  ");

$sql->bind_param("sss", $login, $login, $pass);

$sql->execute();

$result = $sql->get_result();

$linha = $result->fetch_assoc();


$sql->close();
$conn->close();

if (empty($linha)) {
  echo "falha login";
  die();
} else {

  $_SESSION['login'] = true;
  $_SESSION['idUsuario'] = $linha['idUsuario'];
  $_SESSION['nome'] = $linha['nome'];
  $_SESSION['email'] = $linha['email'];
  $_SESSION['userName'] = $linha['idUsuario'];
  $_SESSION['cpf'] = $linha['cpf'];
  $_SESSION['tipo'] = $linha['tipo'];
}

switch ($linha['tipo']) {
  case "administrador":
    echo "SucessoADM";
    break;
  case "funcionario":
    echo "SucessoFuncionario";
    break;
  case "usuario":
    echo "SucessoUsuario";
    break;
  default:
    echo "FalhaLogin";
    die();
}

if (isset($_SESSION['idUsuario']))  {
  header("Location: ../view/home/index.php ");
} else {
  header('Location : ../view/login/');
}

?>