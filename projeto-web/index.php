<?php
include_once "includes/db.php";
include_once "includes/head.php";
include_once "includes/header.php";
?>



    <main>

        <h1>Home</h1>

        <?php

$queryCat = "SELECT * FROM categorias";

$resultCat = mysqli_query($con, $queryCat);



if ($resultCat) {

?>
        <section id="homeCategorias">

            <h3>Categorias</h3>
            <ul>
            <?php



    $tabcategoria = 1;
    while ($row = mysqli_fetch_array($resultCat)) {
        echo '<li>';
        echo '<a href="categoria.php?cat= ' . $row['CategoriaID'] . '" alt="' . $row['Descricao'] . '" title="" tabindex="' . $tabcategoria . '">';
        echo '<img src="imagens/categorias/' . $row['Imagem'] . '" alt="' . $row['Descricao'] . '" title=""/>';
        echo '</a></li>';
        $tabcategoria++;
    }
}
?>
            </ul>

        </section>
        <section id="homeProdutos">
            <h3>Produtos</h3>
            <ul>
            <?php

$queryPro = "SELECT * FROM produtos LIMIT 5";

$resultPro = mysqli_query($con, $queryPro);

if ($resultPro) {

        $a = 0;
    
        while ($row = mysqli_fetch_array($resultPro)) { 
        
        echo '<li>';
        echo '<a href="produto-detalhe.php/pro=' . $row['ProdutoID'] . '">';
        echo '<img src="imagens/produtos/' . $row['Imagem'] . '">';
        echo $row['Nome'];
        echo '</li>';

        $a++;
    }
    
}
?>

            </ul>
        </section>

    </main>

    
<?php

include_once "includes/footer.php";
?>