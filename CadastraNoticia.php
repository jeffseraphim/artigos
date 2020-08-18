<?php

    require_once('db.class.php');

    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $categoria = $_POST['categoria'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "INSERT INTO artigo (titulo_artigo, texto_artigo, categorias) VALUES ('$titulo', '$texto', '$categoria')";

    //executar a query
    if(mysqli_query($link, $sql)){
        echo "Texto inserido com sucesso!";
    }else{
        echo "Erro ao registrar o texto!";
    }

?>