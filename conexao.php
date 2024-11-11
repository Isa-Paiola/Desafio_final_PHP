<?php

    $servername = "localhost:3309";
    $username = "root";
    $password = "";
    $dbname = "extensao_de_cilios";

// Váriavel de conexão (todos os parâmetros do banco)
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error){
    echo "Erro de conexão".$conn -> connect_error;
} else{}
?>