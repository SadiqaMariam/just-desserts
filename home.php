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
        <?php echo getHeader('home'); ?>

        <div class="pageContent">
           <p>Home Page</p>
        </div>
    </body>
    <?php echo getFooter(); ?>
</html>