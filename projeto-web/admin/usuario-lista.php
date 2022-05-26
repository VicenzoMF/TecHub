<?php  
include_once '../includes/db.php';

include_once 'head.php';

$sql = "SELECT * FROM usuarios";
 
$result = mysqli_query($con,$sql);
$total = mysqli_num_rows($result);

include_once 'menu.php'
?>
    <main>
        <h2>Administração dos Usuários</h2>

        
        <!-- <a class="btnInserir" href="usuario
        -salvar.php">Inserir</a> -->
        <table border="1">
            <tr>
                <!-- 1166.47 -->
                <th>ID</th>
                <th width="388px">Nome</th>
                <th width="388px">Email</th>
                <th width="328px">Senha</th>
                <th width="60px">Admin</th>
                <th>Ações</th>
            </tr>

            <?php  
            if ($result) {
                while ($dado = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td class="tdID"><?php echo $dado['UsuarioID']; ?></td>
                <td><a href="usuario
                -salvar?acao=salvar&id=<?php echo $dado['UsuarioID']; ?>"><?php echo $dado['NomeCompleto']; ?></a></td>
                <td><?php echo $dado['Email']; ?></td>
                <td><?php echo $dado['Senha'] ?></td>
                <td><?php echo $dado['Admin'] ?></td>
                <td><a class="btnExcluir" href="usuario-processa.php?acao=excluir&id=<?php echo $dado['UsuarioID']; ?>">Excluir</a></td>
            </tr>
            
            <?php   
                }
            }else{
            ?>
            <tr>
                <td colspan="6">Resultados não encontrados</td>
            </tr>
            <?php 
            }
            ?>
            <tr>
                <td colspan="6">Total de Registros: <?php echo $total; ?></td>
            </tr>
        </table>
    </main>
<?php  
include_once 'footer.php';
?>