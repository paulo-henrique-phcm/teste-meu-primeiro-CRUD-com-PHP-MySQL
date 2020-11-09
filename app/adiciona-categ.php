<?php
    include_once('./conexao.php');

    $connection = mysqli_connect();
    $titulo = $_GET['titulo_categ'];
    $descricao = $_GET['descricao_categ'];

    $query = "INSERT INTO categorias(titulo, descricao) values('{$titulo}', '{$descricao}')";
    $result_adiciona_cat = mysqli_query($conexao, $query);
    //echo $result_adiciona_cat;

    $bd_alterado = mysqli_affected_rows($result_adiciona_cat); //verifica se ocorreu corretamente


?>