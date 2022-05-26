<?php include './template/header.php' ?>

<?php
    include_once "./model/conexion.php";
    $insere = $bd -> query("select * from dados");
    $dados = $insere->fetchAll(PDO::FETCH_OBJ);
    
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
          
            <?php 
                if(isset($_GET['mensagem']) and $_GET['mensagem'] == 'falta'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Preencha todos os campos!.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>


            <?php 
                if(isset($_GET['mensagem']) and $_GET['mensagem'] == 'registrado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registrado!</strong> Registrado com sucesso.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   
            
            

            <?php 
                if(isset($_GET['mensagem']) and $_GET['mensagem'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Tente novamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   



            <?php 
                if(isset($_GET['mensagem']) and $_GET['mensagem'] == 'editado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Editado!</strong> Os dados foram atualizados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 


            <?php 
                if(isset($_GET['mensagem']) and $_GET['mensagem'] == 'eliminado'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Os dados foram excluídos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 

            <div class="card">
                <div class="card-header">
                    Lista de pessoas
                </div>
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Noticia</th>
                                <th scope="col">Imagens</th>
                                <th scope="col" colspan="2">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach($dados as $dato){ 
                            ?>

                            <tr>
                                <td scope="row"><?php echo $dato->id; ?></td>
                                <td><?php echo $dato->nome; ?></td>
                                <td><?php echo $dato->noticia; ?></td>
                                <td><?php echo $dato->imagem; ?></td>
                                <td><a class="text-success" href="editar.php?id=<?php echo $dato->id; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a onclick="return confirm('Quer mesmo excluir?');" class="text-danger" href="eliminar.php?id=<?php echo $dato->id; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>

                            <?php 
                                }
                            ?>

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Inserir dados:
                </div>
                <form class="p-4" method="POST" action="registrar.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Nome: </label>
                        <input type="text" class="form-control" name="txtNome" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Noticia: </label>
                        <input type="text" class="form-control" name="txtNoticia" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label for="Imagem" class="form-label">Imagem: </label>
                        <input type="file" class="form-control" name="Imagem" autofocus required>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>