<?php
include_once "includes/db.php";
include_once "includes/head.php";


if ( isset($_GET['id']) || !empty($_GET['id'])) {
    
    $id = $_GET['id'];

    $sql = "SELECT * FROM usuarios WHERE UsuarioID =" . $id;
    $result = mysqli_query($con, $sql);

    $dados = mysqli_fetch_array($result,MYSQLI_ASSOC);

}else {
    $id = '';
    $dados['NomeCompleto'] = '';
    $dados['Senha'] = '';
    $dados['Email'] = '';
}

?>


    <div class="cadastro-form wrapper">  
            
        <div class="title">Cadastro</div>
            <label for="show" class="close-btn fas fa-times"></label>
                <form action="./admin/cadastro-processa.php" method="post">
                <input type="text" value="salvar" hidden name="acao">
                         <input type="text" name="id" hidden autocomplete="off" value="<?php echo $id; ?>">
                    <div class="field">
                        
                        <input type="text" name="nome" value="<?php echo $dados['NomeCompleto'] ?>" required>
                        <label>Nome Completo</label>
                    </div>
                    <div class="field">
                        <input type="email" name="email" value="<?php echo $dados['Email'] ?>" required>
                        <label>Email</label>
                    </div>
                    <div class="field">
                        <input type="password" name="senha" value="<?php echo $dados['Senha'] ?>" required>
                        <label>Senha</label>
                    </div>
                    <div class="content">
                    <!-- <div class="checkbox">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                    </div>
                    <div class="pass-link"><a href="#">Forgot password?</a></div> -->
                    </div>
                    <div class="field">
                        <input type="submit" value="Cadastre-se">
                    </div>
                    <div class="signup-link">Já tem uma conta? <a href="cadastro.php">Entre</a></div>
                </form>
