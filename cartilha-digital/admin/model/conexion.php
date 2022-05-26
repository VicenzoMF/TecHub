<?php 
$senha = "";
$usuario = "root";
$nome_bd = "crudcartilha";

try {
	$bd = new PDO (
		'mysql:host=localhost;
		dbname='.$nome_bd,
		$usuario,
		$senha,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema na conexão: ".$e->getMessage();
}
?>