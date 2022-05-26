<?php
include_once '../includes/db.php';

include_once 'head.php';

$sql = "SELECT * FROM noticias";

$result = mysqli_query($con,$sql);
$total = mysqli_num_rows($result);

include_once 'menu.php'
?>
    <main>
        <h2>Administração das Notícias</h2>


        <a class="btnInserir" href="noticia-salvar.php">Inserir</a>
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
                <td class="tdID"><?php echo $dado['NoticiaID']; ?></td>
                <td><a href="noticia-salvar?acao=salvar&id=<?php echo $dado['NoticiaID']; ?>"><?php echo $dado['Titulo']; ?></php></a></td>
                <td><a class="btnExcluir" href="noticia-processa.php?acao=excluir&id=<?php echo $dado['NoticiaID']; ?>">Excluir</a></td>
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
