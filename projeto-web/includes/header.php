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
    $dados['Email'] = '';
    $dados['Senha'] = '';
    
}

?>



<header>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="produtos.php">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="empresa.php">Empresa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.php">Contato</a>
        </li>
        <li class="nav-item">

        </li>
      </ul>
    </div>
  </div>

</nav>    
        <input type="checkbox" hidden id="show">
        <label for="show" class="show-btn">Login</label>
        <div class="wrapper">  
            
        <div class="title">Login</div>
            <label for="show" class="close-btn fas fa-times"></label>
                <form action="./admin/login-processa.php" method="post">
                    <div class="field">
                        <input type="email" name="email" autocomplete="off" value="<?php echo $dados['Email']; ?>" required>
                        <label>Email</label>
                    </div>
                    <div class="field">
                        <input type="password" name="senha" autocomplete="off" value="<?php $dados['Senha']; ?>" required>
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
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></div>
                </form>

   

</header>