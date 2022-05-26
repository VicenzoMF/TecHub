<?php include 'template/header.php' ?>

<?php
    if(!isset($_GET['id'])){
        header('Location: index.php?mensagem=error');
        exit();
    }

    include_once 'model/conexion.php';
    $id = $_GET['id'];

    $insere = $bd->prepare("select * from dados where id = ?;");
    $insere->execute([$id]);
    $dados = $insere->fetch(PDO::FETCH_OBJ);
    
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar dados:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb-3">
                        <label class="form-label">Nome: </label>
                        <input type="text" class="form-control" name="txtNome" required 
                        value="<?php echo $dados->nome; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Noticia: </label>
                        <input type="text" class="form-control" name="txtNoticia" autofocus required
                        value="<?php echo $dados->noticia; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Imagem: </label>
                        <input type="file" class="form-control" name="Imagem" autofocus required
                        value="<?php echo $dados->imagem; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id" value="<?php echo $dados->id; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>