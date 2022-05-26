<?php
include_once "db.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perguntas e Respostas</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Perguntas</h1>

    <?php

$query = "SELECT * FROM perguntas";

$result = mysqli_query($conn, $query);


if ($result) {
  while ($row = mysqli_fetch_array($result)) {
?>

<form action="vote-processa.php" method="post">
<h3><?php echo $row['tittle'] ?></h3>
<input type="radio" id="<?php echo $row['op1']; ?>" name="<?php echo $row['VoteID']; ?>" value="<?php echo $row['op1']; ?>" />
<label for="<?php echo $row['op1']; ?>"> <?php echo $row['op1']; ?></label>
<br />
<input type="radio" id="<?php echo $row['op2']; ?>" name="<?php echo $row['VoteID']; ?>" value="<?php echo $row['op2']; ?>" />
<label for="<?php echo $row['op2']; ?>"><?php echo $row['op2']; ?></label>
<br />
<input type="radio" id="<?php echo $row['op3']; ?>" name="<?php echo $row['VoteID']; ?>" value="<?php echo $row['op3']; ?>" />
<label for="<?php echo $row['op3']; ?>"><?php echo $row['op3']; ?></label>
<br />
<input type="radio" id="<?php echo $row['op4']; ?>" name="<?php echo $row['VoteID']; ?>" value="<?php echo $row['op4']; ?>" />
<label for="<?php echo $row['op4']; ?>"><?php echo $row['op4']; ?></label>
<br />
<input type="radio" id="<?php echo $row['op5']; ?>" name="<?php echo $row['VoteID']; ?>" value="<?php echo $row['op5']; ?>" />
<label for="<?php echo $row['op5']; ?>"><?php echo $row['op5'] ?> </label>
<br />
<input type="submit" value="Votar" />
</form>












<?php
    // echo '<form action="vote-processa.php" method="post">';
    // echo '<h3>'. $row['tittle'] .'</h3>';
    // echo '<input type="radio" id="'. $row['op1'] .'" name="'. $row['VoteID'] .'" value="'. $row['op1'] .'" />';
    // echo '<label for="'. $row['op1'] .'">'. $row['op1'] .'</label>';
    // echo '<br />';
    // echo '<input type="radio" id="'. $row['op2'] .'" name="'. $row['VoteID'] .'" value="'. $row['op2'] .'" />';
    // echo '<label for="'. $row['op2'] .'">'. $row['op2'] .'</label>';
    // echo '<br />';
    // echo '<input type="radio" id="'. $row['op3'] .'" name="'. $row['VoteID'] .'" value="'. $row['op3'] .'" />';
    // echo '<label for="'. $row['op3'] .'">'. $row['op3'] .'</label>';
    // echo '<br />';
    // echo '<input type="radio" id="'. $row['op4'] .'" name="'. $row['VoteID'] .'" value="'. $row['op4'] .'" />';
    // echo '<label for="'. $row['op4'] .'">'. $row['op4'] .'</label>';
    // echo '<br />';
    // echo '<input type="radio" id="'. $row['op5'] .'" name="'. $row['VoteID'] .'" value="'. $row['op5'] .'" />';
    // echo '<label for="'. $row['op5'] .'">'. $row['op5'] .'</label>';
    // echo '<br />';
    // echo '<input type="submit" value="Votar" />';
    // echo '</form>';
  }
}








     ?>

  </body>
</html>
