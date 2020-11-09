<?php
    include_once('conexao.php');
    $query = "SELECT id_cat, titulo, descricao from categorias";
    $dados = mysqli_query($conexao, $query);
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <meta charset="UTF-8"/>
    </head>
    <body>
        <div class='div1'>
            <h1>Categorias existentes</h1>
            <table>
                <tr>
                    <td>ID</td>
                    <td>Título</td>
                    <td>Descrição</td>
                </tr>
                <?php
                while($tabela = mysqli_fetch_array($dados)) {
                $id = $tabela['id_cat'];
                $titulo  = $tabela['titulo'];
                $descricao  = $tabela['descricao'];
                
                // Imprimindo valores dentro de uma tabela
                
                echo "
                <tr>
                    <td> <div class='div2'>$id</div> </td>
                    <td> <div class='div2'>$titulo</div> </td>
                    <td> <div class='div2'>$descricao </div></td>
                </tr>";
                
                }
                ?>
            </table>
            <form method="GET" action="../index.php">
                <button><h3>Voltar</h3></button>
            </form>
        </div>
    </body>

