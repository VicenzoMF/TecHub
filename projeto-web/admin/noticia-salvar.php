<?php  

include_once '../includes/db.php';

include_once 'head.php';

if ( isset($_GET['id']) || !empty($_GET['id'])) {
    
    $id = $_GET['id'];

    $sql = "SELECT * FROM noticias WHERE NoticiaID =" . $id;
    $result = mysqli_query($con, $sql);

    $dados = mysqli_fetch_array($result,MYSQLI_ASSOC);

}else {
    $id = '';
    $dados['Titulo'] = '';
    $dados['Subtitulo'] = '';
    $dados['Noticia'] = '';
    $dados['Imagem'] = '';
}

include_once 'menu.php';
?>

    <main>
        <h2>Adminstração das Noticias</h2>
        <a href="noticia-lista.php">Listagem</a>
        <hr>
        <form action="noticia-processa.php" method="post">
            <input type="text" value="salvar" hidden name="acao">
            <input type="text" name="id" autocomplete="off" hidden value="<?php echo $id; ?>">
            <br>
            <label for="titulo">Titulo:</label>
            <br>
            <input type="text" id="titulo" name="titulo" autocomplete="off" value="<?php echo $dados['Titulo']; ?>">
            <br>
            <label for="subtitulo">Subtitulo:</label>
            <br>
            <input type="text" id="subtitulo" name="subtitulo" autocomplete="off" value="<?php echo $dados['Subtitulo'] ?>">
            <br>
            <label for="noticia">Noticia:</label>
            <br>
            <textarea id="noticia" autocomplete="off" name="noticia"> <?php echo $dados['Noticia']; ?> </textarea>
            <br>
            <label for="imagem">Imagem</label>
            <br>
            <input type="file" id="imagem" name="imagem">
            <br>
            <hr>
            <input type="submit" value="Enviar">
        </form>
    </main>

<?php 
include_once 'footer.php';
?>