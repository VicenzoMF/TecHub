<?php  
include_once '../includes/db.php';
include_once 'head.php';
$acao = $_REQUEST['acao'];

$id = $_REQUEST['id'];
$CategoriaID = $_REQUEST['valor'];

switch ($acao) {
    case 'excluir':
        
        $sql = "DELETE FROM produtos WHERE ProdutoID = " . $id;

        mysqli_query($con, $sql);

        break;
    
    case 'salvar';
        
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];

        if ( !isset($_POST['id']) || empty($_POST['id'])) {
            $sql = "INSERT INTO `produtos`( `Nome`, `Descricao`, `CategoriaID`) VALUE ('".$nome."' , '".$descricao."' , '".$CategoriaID."' )";
        }else {
            $sql = "UPDATE `produtos` SET `Nome` ='".$nome ."' , `Descricao`='".$descricao."' WHERE `CategoriaID`= '".$id."' ";
        }

        mysqli_query($con, $sql);

        
        break;

}
        header('location: ./produto-lista.php');
?>