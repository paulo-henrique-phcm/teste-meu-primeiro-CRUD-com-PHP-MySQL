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

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <meta charset="UTF-8"/>
    </head>
    <body>
        <div class="div1">
            <?php
                if($result_adiciona_cat == 1){
                    echo "<h1>Categoria Adicionada Com Sucesso</h1>";
                }
            ?>
            <form method="GET" action="../index.php">
                <button><h3>Voltar</h3></button>
            </form>
        </div>
    </body>
</html>