<?php

    $DBservidor = "localhost";
    $DBusuario = "root";
    $DBsenha = "";
    $DBbanco = "Projeto_MVC";

    $conn = mysqli_connect($DBservidor, $DBusuario, $DBsenha, $DBbanco );

    $sql = "SET NAMES 'utf8'";
    mysqli_query($conn, $sql);
    $sql = "SET character_set_connection=utf8";
    mysqli_query($conn, $sql);
    $sql = "SET character_set_client=utf8";
    mysqli_query($conn, $sql);
    $sql = "SET character_set_results=utf8";
    mysqli_query($conn, $sql);
    
    if(mysqli_connect_error($conn))
    {
        echo("Erro de conexão :" . mysqli_connect_error());
    }

?>