<!-- Items Body -->
<?php
require "/MAMP/htdocs/onlineStore-FullStack/src/php/prodInfo.php";
$_SESSION['products'] = [];
$fileContents = file_get_contents("/MAMP/htdocs/onlineStore-FullStack/src/json/products.json");
$fileContents = json_decode($fileContents, true);
?>

<main class="main">
    <div class="cards">
        <?php createProducts($fileContents); ?>
    </div>
</main>
