<?php  
include_once '../includes/db.php';

$acao = $_REQUEST['acao'];

$id = $_REQUEST['id'];

switch ($acao) {
    case 'excluir':
        
        $sql = "DELETE FROM categorianoticias WHERE CategoriaNoticiaID = " . $id;

        mysqli_query($con, $sql);

        break;
    
    case 'salvar';
        
        $nome = $_POST['nome'];

        if ( !isset($_POST['id']) || empty($_POST['id'])) {
            $sql = "INSERT INTO `categorianoticias`( `Nome`) VALUE ('".$nome."' )";
        }else {
            $sql = "UPDATE `categorianoticias` SET `Nome` ='".$nome ."' ' WHERE `CategoriaNoticiaID`= '".$id."' ";
        }

        mysqli_query($con, $sql);

        
        break;

}
        header('location: ./categorianoticia-lista.php');
?>