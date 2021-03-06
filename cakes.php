<?php
    include 'components/header.php';
    include 'components/footer.php';
    include 'components/productCards.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Just Desserts</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="stylesheets/common.css">
        <link rel="stylesheet" href="stylesheets/header.css">
        <link rel="stylesheet" href="stylesheets/footer.css">
        <link rel="stylesheet" href="stylesheets/pageContent.css">
        <link rel="stylesheet" href="stylesheets/products.css">
    </head>
    <body>
        <?php echo getHeader('menu'); ?>

        <div class="pageContent">
            <div class="pageActiveContent">
                <div class="menuPageLinks">
                    <a class="menuPageLinksActive" href="cakes.php">Cakes<a> | 
                    <a class="menuPageLinksInactive" href="icecreams.php">Ice-creams<a> | 
                    <a class="menuPageLinksInactive" href="cupcakes.php">Cup cakes<a>
                </div>
                <?php echo getProductCards('cake'); ?>
            </div>
        </div>
    </body>
    <?php echo getFooter(); ?>
</html>