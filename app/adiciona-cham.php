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
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <meta charset="UTF-8"/>
    </head>
    <body>
        <div class="div1">
            <?php
                if($result_adiciona_cat == 1){
                    echo "<h1>Chamado Adicionado Com Sucesso</h1>";
                }
            ?>
            <form method="GET" action="../index.php">
                <button><h3>Voltar</h3></button>
            </form>
        </div>
    </body>
</html>