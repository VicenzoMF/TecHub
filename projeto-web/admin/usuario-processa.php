<?php  
include_once '../includes/db.php';
include_once 'head.php';
$acao = $_REQUEST['acao'];

$id = $_REQUEST['id'];

switch ($acao) {
    case 'excluir':
        
        $sql = "DELETE FROM usuarios WHERE UsuarioID = " . $id;

        mysqli_query($con, $sql);

        break;

}
        header('location: ./usuario-lista.php');
?>