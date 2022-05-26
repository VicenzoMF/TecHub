<?php
include_once '../includes/db.php';

$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = "SELECT * FROM usuarios WHERE email='" .$email. "'";
$result = mysqli_query($con, $sql);

if(!$sql) {
    die("Query failed");

} else {
        
    $dados = mysqli_fetch_array($result);
  
    if ($email == $dados['Email']) {
        if ($senha == $dados['Senha']) {
            echo "FUNCIONOU";
            if ($dados['Admin'] == 1) {
                echo '<hr><a href="../admin/categoria-lista.php">Acessar</a>';
            }
        }else {
            echo "errou a senha";
        }
    } else {
        echo "nao tem esse email no nosso banco de dados";
    }
 }

?>