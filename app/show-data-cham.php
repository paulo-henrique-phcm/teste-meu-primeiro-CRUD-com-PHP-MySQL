<?php
    include_once('conexao.php');
    $query = "SELECT * from chamados";
    $dados = mysqli_query($conexao, $query);
?>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;0,700;0,800;1,300;1,700&display=swap" rel="stylesheet">
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <meta charset="UTF-8"/>
    </head>
    <body>
        <div class='div1'>
        <h1 class="text">Chamados existentes</h1>
            <table>
                <tr>
                    <td class="text">ID</td>
                    <td class="text">ID Vínculo</td>
                    <td class="text">Nome Solicitante</td>
                    <td class="text">Descrição</td>
                    <td class="text">Status</td>
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
                    <td> <div class='div2 text'>$ID</div> </td>
                    <td> <div class='div2 text'>$fk</div> </td>
                    <td> <div class='div2 text'>$descricao </div></td>
                    <td> <div class='div2 text'>$nome</div> </td>
                    <td> <div class='div2 text'>$estado</div> </td>
                </tr>";
                
                }
                ?>
            </table>
            <form method="GET" action="../index.php">
                <button class="btn-success text">Voltar</button>
            </form>
        </div>
    </body>

