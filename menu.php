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
        <link rel="stylesheet" href="stylesheets/pageContent.css">
        <link rel="stylesheet" href="stylesheets/menu.css">
    </head>
    <body>
        <?php echo getHeader('menu'); ?>

        <div class="pageContent">
            <div class="pageActiveContent">
                <div class="menuWrapper">
                    <div class="menuContent">
                        <div class="menuOptionWrapper menuPageCakesWrapper">
                            <a href="cakes.php">
                                <img src="images/menuCakes.png"><br><br>
                                <span>Cakes</span>
                            </a>
                        </div>
                        <div class="menuOptionWrapper menuPageIcecreamsWrapper">
                            <a href="icecreams.php">
                                <img src="images/menuIceCreams.png"><br><br>
                                <span>Ice Creams</span>
                            </a>
                        </div>
                        <div class="menuOptionWrapper menuPageCupcakesWrapper">
                            <a href="cupcakes.php">
                                <img src="images/menuCupcakes.png"><br><br>
                                <span>Cup cakes</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php echo getFooter(); ?>
</html>