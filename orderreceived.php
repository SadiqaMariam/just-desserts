<?php
    include 'components/header.php';
    include 'components/footer.php';
    include 'components/orderProgress.php';
    include 'database/databaseConnection.php';
    include 'database/OrdersTableManager.php';
    include 'database/ProductOrdersTableManager.php';

    $productIds = $_SESSION['cart'];
    $dbConnection = getDatabaseConnection();

    function gen_uid(){
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, 6);
    }

    $orderId = gen_uid();
    $email = $_POST['paymentUserEmail'];
    addOrderToOrdersDatabaseTable($dbConnection, $orderId, $email, "received");
    foreach($productIds as &$productId){
        $quantity = $_POST["quantity_".$productId];
        addProductOrderToProductOrdersDatabase($dbConnection, $orderId, $productId, $quantity);
    };
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
        <link rel="stylesheet" href="stylesheets/orderProgress.css">
    </head>
    <body>
        <?php echo getHeader('orderreceived'); ?>

        <div class="pageContent">
            <div class="pageActiveContent">
                <?php 
                    echo getOrderProgress('received');
                ?>
            </div>
        </div>
    </body>
    <?php echo getFooter(); ?>
</html>