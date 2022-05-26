<?php  
include_once '../includes/db.php';

$acao = $_REQUEST['acao'];

$id = $_REQUEST['id'];

switch ($acao) {
    case 'excluir':
        
        $sql = "DELETE FROM noticias WHERE NoticiaID = " . $id;

        mysqli_query($con, $sql);

        break;
    
    case 'salvar';
        
        $titulo = $_POST['titulo'];
        $subtitulo = $_POST['subtitulo'];
        $noticia = $_POST['noticia'];
        $imagem = $_POST['imagem'];


        ////////////////////////////////////////////////////////////////////
        // NAO TESTEI ESSA PARTE DA FOTO ENTAO VOU DEIXAR COMO COMENTARIO //
        ////////////////////////////////////////////////////////////////////

        // if ($_FILES['imagem']['size'] > 0) {
        //     $uploaddir = "../imagens/noticias/";
        //     $extensão  = pathinfo($_FILES['Imagem']['name'], PATHINFO_EXTENSION);
        //     $nomearquivo = 'noticia-'.$id.'-'.rand().'-'.$extensão;
        //     $uploadfile = $uploaddir . $nomearquivo;
        //     move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile);
        // }else {
        //     $nomearquivo = $_POST['imagem'];
        // }

        if ( !isset($_POST['id']) || empty($_POST['id'])) {
            $sql = "INSERT INTO `noticias`( `Titulo`, `Subtitulo`, `Noticia`, `Imagem`) VALUE ('".$titulo."' , '".$subtitulo."' , '".$noticia."' , '".$imagem."' )";
        }else {
            $sql = "UPDATE `noticias` SET `Titulo` ='".$titulo ."' , `Subtitulo`='".$subtitulo."' , `Noticia`='".$noticia."' , `Imagem`='".$imagem."' WHERE `NoticiaID`='".$id."' ";
        }

        mysqli_query($con, $sql);

        
        break;

}
        header('location: ./noticia-lista.php');
?>