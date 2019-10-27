<?php
    include 'components/header.php';
    include 'components/footer.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Just Desserts</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="stylesheets/common.css">
        <link rel="stylesheet" href="stylesheets/header.css">
        <link rel="stylesheet" href="stylesheets/footer.css">
    </head>
    <body>
        <?php echo getHeader('menu'); ?>

        <div class="pageContent">
           <p>Menu Page</p>
           <a href="cakes.php">Cakes<a>
           <a href="icecreams.php">Ice-creams<a>
           <a href="cupcakes.php">Cup cakes<a>
        </div>
    </body>
    <?php echo getFooter(); ?>
</html>