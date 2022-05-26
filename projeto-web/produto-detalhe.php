<?php
include_once 'includes/db.php';
include_once "includes/head.php";
include_once "includes/header.php";

$query = "SELECT * FROM produtos";

$result = mysqli_query($con, $query);

if ($result) {

?>
<main>
    <h3><?php echo $row['Nome']; ?></h3>
    
</main>
<?php

}
?>