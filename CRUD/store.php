<?php

    include('conexion.php');

    if(count($_POST) > 0){
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $editorial = $_POST['editorial'];
        $tipo = $_POST['tipo'];
        $formato = $_POST['formato'];

        $sql = "INSERT INTO datos (titulo, autor, editorial,tipo, formato) VALUES('$titulo', '$autor', '$editorial', '$tipo', '$formato')";

        $conn->exec($sql);

        header("Location: index.php");
    }
?>