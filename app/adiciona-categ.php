<?php
    include_once('./conexao.php');

    $connection = mysqli_connect();
    $titulo = $_GET['titulo_categ'];
    $descricao = $_GET['descricao_categ'];

    $hoje = date('d/m/Y');
    echo $hoje;

    $query = "INSERT INTO categorias(titulo, descricao, data_cat) values('{$titulo}', '{$descricao}', '{$hoje}')";
    $result_adiciona_cat = mysqli_query($conexao, $query);
    echo $result_adiciona_cat;

    $bd_alterado = mysqli_affected_rows($result_adiciona_cat); //verifica se ocorreu corretamente
?>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;0,700;0,800;1,300;1,700&display=swap" rel="stylesheet">
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <meta charset="UTF-8"/>
    </head>
    <body>
        <div class="div1">
            <?php
                if($result_adiciona_cat == 1){
                    echo "<h1 class='text'>Categoria Adicionada Com Sucesso</h1>";
                }
            ?>
            <form method="GET" action="../index.php">
                <button class="btn-success text">Voltar</button>
            </form>
        </div>
    </body>
</html>