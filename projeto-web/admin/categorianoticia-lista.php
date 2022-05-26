<?php  
include_once '../includes/db.php';

include_once 'head.php';

$sql = "SELECT * FROM categorianoticias";
 
$result = mysqli_query($con,$sql);
$total = mysqli_num_rows($result);

include_once 'menu.php'
?>
    <main>
        <h2>Administração das Categorias Das Notícias</h2>

        
        <a class="btnInserir" href="categorianoticia-salvar.php">Inserir</a>
        <table border="1">
            <tr>
                <th>ID</th>
                <th class="tdNome">Nome</th>
                <th>Ações</th>
            </tr>

            <?php  
            if ($result) {
                while ($dado = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td class="tdID"><?php echo $dado['CategoriaNoticiaID']; ?></td>
                <td><a href="categorianoticia-salvar?acao=salvar&id=<?php echo $dado['CategoriaNoticiaID']; ?>"><?php echo $dado['Nome']; ?></php></a></td>
                <td><a class="btnExcluir" href="categorianoticia-processa.php?acao=excluir&id=<?php echo $dado['CategoriaNoticiaID']; ?>">Excluir</a></td>
            </tr>
            
            <?php   
                }
            }else{
            ?>
            <tr>
                <td colspan="3">Resultados não encontrados</td>
            </tr>
            <?php 
            }
            ?>
            <tr>
                <td colspan="3">Total de Registros: <?php echo $total; ?></td>
            </tr>
        </table>
    </main>
<?php  
include_once 'footer.php';
?>