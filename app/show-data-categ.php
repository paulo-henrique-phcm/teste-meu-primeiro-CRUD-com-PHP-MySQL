<?php
    include_once('conexao.php');
    $query = "SELECT * from categorias";
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
            <h1 class="titulo text">Categorias existentes</h1>
            <table>
                <tr>
                    <td class="text">ID</td>
                    <td class="text">Título</td>
                    <td class="text">Descrição</td>
                    <td class="text">Data de Criação</td>
                </tr>
                <?php
                while($tabela = mysqli_fetch_array($dados)) {
                $id = $tabela['id_cat'];
                $titulo  = $tabela['titulo'];
                $descricao  = $tabela['descricao'];
                $data = $tabela['data_cat'];
                
                // Imprimindo valores dentro de uma tabela
                
                echo "
                <tr>
                    <td class='div2 text'>$id</td>
                    <td class='div2 text'>$titulo </td>
                    <td class='div2 text'>$descricao</td>
                    <td class='div2 text'>$data</td>
                    <td>
                        <button class='btn-show text edit'>Editar</button>
                        <button class='btn-show text apaga'>Apagar</button>
                    </td>
                </tr>";
                
                }
                ?>
            </table>
            <form method="GET" action="../index.php">
                <button class="btn-success text">Voltar</button>
            </form>
        </div>
    </body>

