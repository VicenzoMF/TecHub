<?php  
include_once '../includes/db.php';

$acao = $_REQUEST['acao'];

$id = $_REQUEST['id'];

switch ($acao) {
    case 'excluir':
        
        $sql = "DELETE FROM usuarios WHERE UsuarioID = " . $id;

        mysqli_query($con, $sql);

        break;
    
    case 'salvar';
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if ( !isset($_POST['id']) || empty($_POST['id'])) {
            $sql = "INSERT INTO `usuarios`( `NomeCompleto`, `Email`, `Senha`) VALUE ('".$nome."' , '".$email."' , '".$senha."' )";
        }else {
            $sql = "UPDATE `usuarios` SET `NomeCompleto` ='".$nome ."' , `Email`='".$email."' , `Senha`='".$senha."' WHERE `UsuarioID`= '".$id."' ";
        }

        mysqli_query($con, $sql);

        
        break;

}
        header('location: ../index.php');
?>