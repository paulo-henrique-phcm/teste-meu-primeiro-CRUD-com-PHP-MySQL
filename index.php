<?php
    include_once('conexao.php');
    $query = "SELECT * from categorias";
    $dados_categ_option = mysqli_query($conexao, $query);
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="UTF-8"/>
    </head>
    <body>
        <div class='div1'>
            <h1>Categorias</h1>
            <form method='GET' action='./app/adiciona-categ.php'>
                <h3>adicionar categoria</h3>
                <input type='text' name='titulo_categ' placeholder='Titulo'/>
                <input type='text' name='descricao_categ' placeholder='Descricao'/>
                <input type='submit' name='enviar_categ' value='adicionar'/></br>

            </form>
            <form method="GET" action="./app/show-data-categ.php">
                <button><h3>Mostrar Tabela de Categorias</h3></button>
            </form>
        
            <h1>Chamadas</h1>
            <form method='GET' action='./app/adiciona-cham.php'>
            <h3>adicionar chamado</h3>
                <select name='vinculo'>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <input type='text' name='descricao_cham' placeholder='Descrição'/>
                <input type='text' name='nome_solicitante_cham' placeholder='Nome do Solicitante'/>
                <select name='estado'>
                    <option>Pendente</option>
                    <option>Em Execução</option>
                    <option>Concluído</option>
                </select>
                <input type='submit' name='enviar_cham' value='adicionar'/>
            </form>
            <form method="GET" action="./app/show-data-cham.php">
                <button><h3>Mostrar Tabela de Chamados</h3></button>
            </form>
        </div>
    </body>
</html>