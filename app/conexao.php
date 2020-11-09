<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '123456', 'crud');
//$mysqli_connection = new MySQLi('127.0.0.1', 'root', '123456', 'crud');
if(!$conexao){
   echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
}else{
   echo "Conectado!";
}
?>