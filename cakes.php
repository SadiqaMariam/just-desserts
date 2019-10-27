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
        <link rel="stylesheet" href="stylesheets/cakes.css">
    </head>
    <body>
        <?php echo getHeader('menu'); ?>

        <div class="pageContent">
            <div class="cakesPageContent">
                <div class="menuPageLinks">
                    <a class="menuPageLinksActive" href="cakes.php">Cakes<a> | 
                    <a class="menuPageLinksInactive" href="icecreams.php">Ice-creams<a> | 
                    <a class="menuPageLinksInactive" href="cupcakes.php">Cup cakes<a>
                </div>
                <div class="allCakes">
                    <div class="cakeCardWrapper">
                        <div class="cakeCard">
                            <div class="cakeImgWrapper">
                                <img class="cakeImg" src="images/cakes/cheesecake.png" />
                            </div>
                            <p class="cakeDescription"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
                            <p class="cakeCost"> S$12.00 </p>
                            <br>
                            <button> Add to cart </button>
                        </div>
                    </div>
                    <div class="cakeCardWrapper">2</div>
                    <div class="cakeCardWrapper">3</div>
                    <div class="cakeCardWrapper">4</div>
                </div>
            </div>
        </div>
    </body>
    <?php echo getFooter(); ?>
</html>