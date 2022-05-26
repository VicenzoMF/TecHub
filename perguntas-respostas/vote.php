<?php
include_once "db.php";
echo '<br />';

$pergunta = $_POST['pergunta'];
$resposta = $_POST['resposta'];

$query = "INSERT INTO `votos` (`PerguntaID` , `RespotaID`) VALUE ('".$pergunta."' , '".$resposta."') ";

mysqli_query($conn, $query);

header('location : ./resposta.php?msg=1');

 ?>