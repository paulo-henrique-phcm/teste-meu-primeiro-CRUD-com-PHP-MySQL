<?php
    include_once('./conexao.php');

    $connection = mysqli_connect();

    $vinculo = $_GET['vinculo'];
    $descricao = $_GET['descricao_cham'];
    $nome = $_GET['nome_solicitante_cham'];
    $estado = $_GET['estado'];

    $query = "INSERT INTO chamados(fk_cat,descricao,nome_solicitante, estado) values('{$vinculo}', '{$descricao}', '{$nome}', '{$estado}')";
    $result_adiciona_cat = mysqli_query($conexao, $query);
    //echo $result_adiciona_cat;

    //$bd_alterado = mysqli_affected_rows($result_adiciona_cat); //verifica se ocorreu corretamente

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
                    echo "<h1 class='text'>Chamado Adicionado Com Sucesso</h1>";
                }
            ?>
            <form method="GET" action="../index.php">
                <button class="btn-success text">Voltar</button>
            </form>
        </div>
    </body>
</html>