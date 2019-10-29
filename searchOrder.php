<?php
    include 'components/header.php';
    include 'components/footer.php';
    include 'components/orderProgress.php';
    include 'components/searchOrderEmpty.php';
    include 'components/searchOrderResult.php';
    include 'components/productOrderDetails.php';
    include 'database/databaseConnection.php';
    include 'database/OrdersTableManager.php';
    include 'database/ProductOrdersTableManager.php';

    $searchOrderId = $_POST["headerSearchOrderInput"];
    $dbConnection = getDatabaseConnection();
    $order = getOrderByOrderIdFromDatabaseTable($dbConnection, $searchOrderId);
    $productOrders = getProductOrderResultsFromDatabase($dbConnection, $searchOrderId);
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
        <link rel="stylesheet" href="stylesheets/productOrder.css">
        <link rel="stylesheet" href="stylesheets/searchOrderResult.css">
    </head>
    <body>
        <?php echo getHeader('orderreceived'); ?>

        <div class="pageContent">
            <div class="pageActiveContent">
                <?php
                    if (isset($order)){
                        echo getOrderProgress($order->get_status());
                        echo "<br/>";
                        echo getSearchOrderResult($order);
                        echo "<br/>";
                        echo getProductOrderDetails($productOrders, true);
                    } else {
                        echo getSearchOrderEmpty();
                    }
                ?>
            </div>
        </div>
    </body>
    <?php echo getFooter(); ?>
</html>