<?php
    $severname="localhost";
    $username="root";
    $password= "root";
    $dbname= "pratica2";

    $conn = new mysqli($severname, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro: $conn->connect_error");
    }

    function inserir(string $table, array $campos, array $values){
        $campos = implode(", ", $campos);
        $values = implode(", ", $values);
        $query = "INSERT INTO $table ($campos) VALUES ($values)";

        global $conn;
        $conn->query($query);
    }

?>