<?php  
include_once '../includes/db.php';

$acao = $_REQUEST['acao'];

$id = $_REQUEST['id'];

switch ($acao) {
    case 'excluir':
        
        $sql = "DELETE FROM categorias WHERE CategoriaID = " . $id;

        mysqli_query($con, $sql);

        break;
    
    case 'salvar';
        
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];

        if ( !isset($_POST['id']) || empty($_POST['id'])) {
            $sql = "INSERT INTO `categorias`( `Nome`, `Descricao`) VALUE ('".$nome."' , '".$descricao."' )";
        }else {
            $sql = "UPDATE `categorias` SET `Nome` ='".$nome ."' , `Descricao`='".$descricao."' WHERE `CategoriaID`= '".$id."' ";
        }

        mysqli_query($con, $sql);

        
        break;

}
        header('location: ./categoria-lista.php');
?>