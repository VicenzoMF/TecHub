<?php

    if(empty($_POST["oculto"]) || empty($_POST["txtNome"]) || empty($_POST["txtNoticia"]) || empty($_FILES["Imagem"])){
        header('Location: index.php?mensagem=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $nome = $_POST["txtNome"];
    $noticia = $_POST["txtNoticia"];
    $imagem = $_FILES["Imagem"];
       

    $insere = $bd->prepare("INSERT INTO dados(nome,noticia,imagem) VALUES (?,?,?);");
    $resultado = $insere->execute([$nome,$noticia,$imagem]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensagem=registrado');
    } else {
        header('Location: index.php?mensagem=error');
        exit();
    }

    
?>