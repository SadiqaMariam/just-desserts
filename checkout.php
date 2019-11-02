<?php
    include 'components/header.php';
    include 'components/footer.php';
    include 'components/productOrderDetails.php';
    include 'database/databaseConnection.php';
    include 'database/ProductsTableManager.php';

    if(!isset($_SESSION['cart'])){
        header('location: menu.php');
    }

    if(isset($_GET['removeProductId'])){
        $removeProductId = $_GET['removeProductId'];
        $removeProductIndex=-1;
        for ($productIndex = 0; $productIndex < count($_SESSION['cart']); $productIndex++) {
            if($removeProductId === $_SESSION['cart'][$productIndex]){
                $removeProductIndex = $productIndex;
            }
        }
        if($removeProductIndex >= 0){
            array_splice($_SESSION['cart'], $removeProductIndex, 1); 
        }
        if(count($_SESSION['cart']) === 0){
            unset($_SESSION['cart']);
        }
        header('location: '.$_SERVER['PHP_SELF'].'?'.SID);
    }

    $dbConnection = getDatabaseConnection();
    $productIds = $_SESSION['cart'];
    $products = getProductsByListOfProductIdsFromDatabaseTable($dbConnection, $productIds);
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
        <link rel="stylesheet" href="stylesheets/productOrder.css">
        <link rel="stylesheet" href="stylesheets/formErrors.css">
        <script src="eventHandlers/productOrderDetails.js"></script>
        <script src="eventHandlers/formValidations.js"></script>
    </head>
    <body>
        <?php echo getHeader('checkout'); ?>

        <div class="pageContent">
            <div class="pageActiveContent">
                <p>Shopping Cart</p>
                <?php echo getProductOrderDetails($products, false); ?>
            </div>
        </div>
    </body>
    <?php echo getFooter(); ?>
</html>