<?php
    include_once('conexao.php');
    $query = "SELECT * from categorias";
    $dados_categ_option = mysqli_query($conexao, $query);
?>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;0,700;0,800;1,300;1,700&display=swap" rel="stylesheet">
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="UTF-8"/>
    </head>
    <body>
        <div class='div1'>
            <h1 class='titulo text'>Categorias</h1>
            <form method='GET' action='./app/adiciona-categ.php'>
                <h3 class="text">adicionar categoria</h3>
                <input class="text input-s place-s titulo" type='text' name='titulo_categ' placeholder='Titulo'/>
                <input class="text input-s place-s descCat" type='text' name='descricao_categ' placeholder='Descricao'/>
                <input class="text btn-success" type='submit' name='enviar_categ' value='adicionar'/></br>

            </form>
            <form method="GET" action="./app/show-data-categ.php">
                <button class="btn-success text">Mostrar Categorias</button>
            </form>
        
            <h1 class="titulo text">Chamadas</h1>
            <form method='GET' action='./app/adiciona-cham.php'>
                <h3 class="text">adicionar chamado</h3>
                <select class="input-s select" name='vinculo'>
                    <option class="text">1</option>
                    <option class="text">2</option>
                    <option class="text">3</option>
                </select>
                <input class="text input-s desc" type='text' name='descricao_cham' placeholder='Descrição'/>
                <input class="text input-s desc" type='text' name='nome_solicitante_cham' placeholder='Nome do Solicitante'/>
                <select class="input-s select" name='estado'>
                    <option class="text">Pendente</option>
                    <option class="text">Em Execução</option>
                    <option class="text">Concluído</option>
                </select>
                <input class="btn-success text" type='submit' name='enviar_cham' value='adicionar'/>
            </form>
            <form method="GET" action="./app/show-data-cham.php">
                <button class="btn-success text">Mostrar Chamados</button>
            </form>
        </div>
    </body>
</html>