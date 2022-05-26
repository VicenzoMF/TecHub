<?php


// informações para conectar no DataBase
$db_host = 'localhost';
$db_usuario = 'root';
$db_senha = '';
$db_base = 'crudcartilha';

// conexao com o servidor do Data Base

$con = mysqli_connect($db_host, $db_usuario, $db_senha, $db_base);
// mysqli_select_db($db_base) or die("Houve um erro, entre mais tarde.");
if (!$con) {
    die("Connection Failed" . mysqli_connect_error());
}
?>
