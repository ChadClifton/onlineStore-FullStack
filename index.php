<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dead&Dice</title>
    <link rel="stylesheet" href="src/css/stylesheet.css">
    <link rel="stylesheet" href="src/css/styleProd.css">
    <script src="/src/javascript/script.js" defer></script>
</head>


<body>
<?php
    // PHP Mailer
    include("/MAMP/htdocs/onlineStore-FullStack/vendor/autoload.php");

    // Header
    include("/MAMP/htdocs/onlineStore-FullStack/src/php/header.php");

    // Main
    include("/MAMP/htdocs/onlineStore-FullStack/src/php/includeMain.php");

    //Cart space 
    include("/MAMP/htdocs/onlineStore-FullStack/src/php/cart.php");

    // Footer
    include("/MAMP/htdocs/onlineStore-FullStack/src/php/footer.php");

?>
</body>

</html>