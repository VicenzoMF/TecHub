 <?php  

include_once '../includes/db.php';

include_once 'head.php';

$sql = "SELECT * FROM categorias";
$result = mysqli_query($con, $sql);
 ?>
    <main>
        <h2>Adminstração dos Produtos</h2>

        <form action="produto-processa.php" method="post">
            <input type="text" value="salvar" hidden name="acao">
            <label for="nome">Nome:</label>
            <br>
            <input ttype="text" id="nome" autocomplete="off" name="nome">
            <br>
            <label for="descricao">Descrição:</label>
            <br>
            <textarea id="descricao" autocomplete="off" name="descricao"></textarea>
            <br>
            <input type="">
            <br>
            <label for="categoria">Categoria:</label>
            <br>
            <select name="valor" style="width: 175px;">
                <?php  
                    while ($dado = mysqli_fetch_array($result)) {
                        echo '<option value="'.$dado['CategoriaID'].'">'. $dado['Nome'].'</option>';
                    }                
                ?>
            </select>
            <hr>
            <input type="submit" value="Enviar">
        </form>
    </main>
<?php  
include_once 'footer.php';
?>
