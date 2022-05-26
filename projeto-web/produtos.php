<?php
include_once "includes/db.php";
include_once "includes/head.php";
include_once "includes/header.php";
?>


<main>
    <section id="homeProdutos">
        <h1>Produtos</h1>
        <ul>
<?php


$queryPro = "SELECT * FROM produtos";

$resultPro = mysqli_query($con, $queryPro);

if ($resultPro) {


    while ($row = mysqli_fetch_array($resultPro)) {
        echo '<li>';
        echo '<a href="produto-detalhe.php/pro=' . $row['ProdutoID'] . '">';
        echo '<img src="imagens/produtos/' . $row['Imagem'] . '">';
        echo $row['Nome'];
        echo '</li>';
    }

}

?>
        </ul>
    </section>
    </main>



<?php

include_once "includes/footer.php";
?>