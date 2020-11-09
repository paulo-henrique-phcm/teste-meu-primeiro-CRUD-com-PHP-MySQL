<?php
    include_once('conexao.php');
    $query = "SELECT * from chamados";
    $dados = mysqli_query($conexao, $query);
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <meta charset="UTF-8"/>
    </head>
    <body>
        <div class='div1'>
        <h1>Chamados existentes</h1>
            <table>
                <tr>
                    <td>ID</td>
                    <td>ID Vínculo</td>
                    <td>Nome Solicitante</td>
                    <td>Descrição</td>
                    <td>Status</td>
                </tr>
                <?php
                while($tabela = mysqli_fetch_array($dados)) {
                $ID = $tabela['id_cha'];
                $fk = $tabela['fk_cat'];
                $descricao  = $tabela['descricao'];
                $nome = $tabela['nome_solicitante'];
                $estado = $tabela['estado'];
                
                
                // Imprimindo valores dentro de uma tabela
                
                echo "
                <tr>
                    <td> <div class='div2'>$ID</div> </td>
                    <td> <div class='div2'>$fk</div> </td>
                    <td> <div class='div2'>$descricao </div></td>
                    <td> <div class='div2'>$nome</div> </td>
                    <td> <div class='div2'>$estado</div> </td>
                </tr>";
                
                }
                ?>
            </table>
            <form method="GET" action="../index.php">
                <button><h3>Voltar</h3></button>
            </form>
        </div>
    </body>

