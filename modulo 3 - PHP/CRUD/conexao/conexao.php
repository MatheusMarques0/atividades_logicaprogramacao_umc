<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "faculdade";

    $conn = new mysqli($servername, $username, $password, $dbname );

    // verificar conexão
    if ($conn->connect_error){
        die("Conexão falhou");
    }
?>