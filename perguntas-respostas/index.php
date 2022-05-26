<?php
include_once "db.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perguntas e Respostas</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    <h1>Perguntas</h1>


    <form method="post" action="vote.php">
        <?php  
            $sqlPergunta = "SELECT * FROM perguntas WHERE Ativo = 1";
            $result = mysqli_query($conn, $sqlPergunta);
            $pergunta = mysqli_fetch_array($result, MYSQLI_ASSOC);
        ?>
        <h1><?php echo $pergunta['Nome']; ?></h1>
        <input type="hidden" name="pergunta" value="<?php echo $pergunta['PerguntaID']; ?>">
        <hr>

        <?php  
        
        $sqlResposta = "SELECT * FROM respostas WHERE Ativo = 1 AND PerguntaID =".$pergunta['PerguntaID'];
        $result = mysqli_query($conn, $sqlResposta);
        $total = mysqli_num_rows($result);       
        
        if ( $total > 0) {
            while ($respostas = mysqli_fetch_assoc($result)) {                
        ?>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="resposta" value="<?php echo $respostas['RespostaID']; ?>">
            <label class="form-check-label" for="alternativa">
                <?php echo $respostas['Alternativa']; ?>
            </label>
        </div>
        <?php }} ?>
        <input class="btn btn-primary btn-lg" type="submit" value="Votar">
    </form>







<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>