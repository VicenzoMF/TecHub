<?php  

include_once '../includes/db.php';

include_once 'head.php';

if ( isset($_GET['id']) || !empty($_GET['id'])) {
    
    $id = $_GET['id'];

    $sql = "SELECT * FROM categorias WHERE CategoriaID =" . $id;
    $result = mysqli_query($con, $sql);

    $dados = mysqli_fetch_array($result,MYSQLI_ASSOC);

}else {
    $id = '';
    $dados['Nome'] = '';
    $dados['Descricao'] = '';
}

include_once 'menu.php';
?>

    <main>
        <h2>Adminstração das Categorias</h2>
        <a href="categoria-lista.php">Listagem</a>
        <hr>
        <form action="categoria-processa.php" method="post">
            <input type="text" value="salvar" hidden name="acao">
            <input type="text" name="id" hidden autocomplete="off" value="<?php echo $id; ?>">
            <br>
            <label for="nome">Nome:</label>
            <br>
            <input type="text" id="nome" name="nome" autocomplete="off" value="<?php echo $dados['Nome']; ?>">
            <br>
            <label for="descricao">Descricao:</label>
            <br>
            <textarea id="descricao" autocomplete="off" name="descricao"> <?php echo $dados['Descricao']; ?> </textarea>
            <br>
            <hr>
            <input type="submit" value="Enviar">
        </form>
    </main>

<?php 
include_once 'footer.php';
?>