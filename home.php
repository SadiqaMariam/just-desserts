<?php
    include 'components/header.php';
    include 'components/footer.php';
    include 'components/menuOptions.php';
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
        <link rel="stylesheet" href="stylesheets/home.css">
        <link rel="stylesheet" href="stylesheets/menuOptions.css">
    </head>
    <body>
        <?php echo getHeader('home'); ?>
    </div>
        <div class="pageContent">
            <div class="homePageDemoWrapper">
                <img class="homePageDemo" src="images/justDessertHome.gif" />
            </div>
            <div class="pageActiveContent">
                <div class="AboutUsWrapper">
                    <div class="AboutUsHeaderWrapper">
                        <p> Just Desserts </p>
                    </div>
                    <div class="getStartedMenuOptionsWrapper">
                        <?php echo getMenuOptions(); ?>
                    </div>
                    <div class="AboutUsDescriptionWrapper">
                        <p>
                            Just desserts started out as a humble cupcakery in 2019 and has since grown into a household name, with over 12 outlets islandwide. 
                            Baked fresh daily, our cupcakes come in a variety of delectable flavours with new creations added regularly to our menu.  
                            Besides the awesome cupcakes, our versatile team also dreams up favorite bakes with delectable cookies as well. 
                            The chunky chewy cookies come in a plethora of flavours. All our desserts are MUIS Halal certified.

                            <br><br>
                            We at Just desserts are passionate about our craft. 
                            Each product is tenderly made by hand. 
                            We understand that not only must your dessert taste good, it certainly must look good too. 
                            That’s why we practice relentless attention to detail and emphasise not only on deliciousness but on eye-catching presentation as well. 
                            So that every treat in hand is a treat worth talking about. 
                            And with so many tantalising choices to choose from, you can be assured we have the perfect accompaniment to your any occasion.
                            
                            <br><br>
                            We deliver every day, islandwide. 
                            Be it birthday parties, weddings, corporate events, or just any reason to throw a celebration, we got you covered. 
                            Let us be a part of your experience! To start your order, click here.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php echo getFooter(); ?>
</html>