<?php
    include 'components/header.php';
    include 'components/footer.php';
    include 'components/checkoutDetails.php';
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
    </head>
    <body>
        <?php echo getHeader('checkout'); ?>

        <div class="pageContent">
            <div class="pageActiveContent">
                <p>Shopping Cart</p>
                <?php echo getCheckoutDetails(); ?>
            </div>
        </div>
    </body>
    <?php echo getFooter(); ?>
</html>