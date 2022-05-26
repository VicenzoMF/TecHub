<?php  

include_once '../includes/db.php';

include_once 'head.php';

if ( isset($_GET['id']) || !empty($_GET['id'])) {
    
    $id = $_GET['id'];

    $sql = "SELECT * FROM categorianoticias WHERE CategoriaNoticiaID =" . $id;
    $result = mysqli_query($con, $sql);

    $dados = mysqli_fetch_array($result,MYSQLI_ASSOC);

}else {
    $id = '';
    $dados['Nome'] = '';
}

include_once 'menu.php';
?>

<main>
    <h2>Adminstração das Categorias Das Noticias</h2>
    <a href="categorianoticia-lista.php">Listagem</a>
    <hr>
    <form action="categorianoticia-processa.php" method="post">
        <input type="text" value="salvar" hidden name="acao">
        <input type="text" name="id" hidden autocomplete="off" value="<?php echo $id; ?>">
        <br>
        <label for="nome">Nome:</label>
        <br>
        <input type="text" id="nome" name="nome" autocomplete="off" value="<?php echo $dados['Nome']; ?>">
        <hr>
        <input type="submit" value="Enviar">
    </form>
</main>

<?php 
include_once 'footer.php';
?>