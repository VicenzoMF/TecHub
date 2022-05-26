<?php
    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: index.php?mensagem=error');
    }

    include 'model/conexion.php';
    $id = $_POST['id'];
    $nome = $_POST['txtNome'];
    $noticia = $_POST['txtNoticia'];
    $imagem = $_POST['Imagem'];

    $insere = $bd->prepare("UPDATE dados SET nome = ?, noticia = ?, imagem = ? where id = ?;");
    $resultado = $insere->execute([$nome, $noticia, $imagem, $id]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensagem=editado');
    } else {
        header('Location: index.php?mensagem=error');
        exit();
    }
    
?>