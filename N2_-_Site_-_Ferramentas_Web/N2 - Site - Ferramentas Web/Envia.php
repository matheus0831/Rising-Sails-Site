<?php

    $conecta = new mysqli("127.0.0.1", "root", "", "db_usuario");
    $nome = $_POST["NOME"];
    $discord = $_POST["ID_DISCORD"];
    $comentario = $_POST["COMENTARIO"];

    $comando = "INSERT into jogadores(NOME, DISCORD, COMENTARIO) VALUES ('$nome', '$discord', '$comentario')";


    if(mysqli_query($conecta, $comando)){
        header("Location: http://localhost/Arquivo.php");
        die();
    }






?>