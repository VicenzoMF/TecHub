<?php 
    if(!isset($_GET['id'])){
        header('Location: index.php?mensagem=error');
        exit();
    }

    include 'model/conexion.php';
    $id = $_GET['id'];

    $insere = $bd->prepare("DELETE FROM dados where id = ?;");
    $resultado = $insere->execute([$id]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensagem=eliminado');
    } else {
        header('Location: index.php?mensagem=error');
    }
    
?>