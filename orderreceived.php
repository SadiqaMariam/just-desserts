<?php
    include 'components/header.php';
    include 'components/footer.php';
    include 'components/orderProgress.php';
    include 'database/databaseConnection.php';
    include 'database/OrdersTableManager.php';
    include 'database/ProductOrdersTableManager.php';

    if(!isset($_SESSION['cart'])){
        header('location: menu.php');
    }
    
    $productIds = $_SESSION['cart'];
    $dbConnection = getDatabaseConnection();

    function gen_uid(){
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, 6);
    }

    $orderId = gen_uid();
    $email = $_POST['paymentUserEmail'];
    mail(
        $email,
        "JUST DESSERTS - Order received",
        "
            Dear sir/mdm, <br><br>

            We have received your order. Please use the following orderId ".$orderId." to track the progress of the order. <br>
            Thank you. <br><br>

            Kind regards,<br> 
            Just Desserts
        "
    );
    addOrderToOrdersDatabaseTable($dbConnection, $orderId, $email, "processing");
    foreach($productIds as &$productId){
        $quantity = $_POST["quantity_".$productId];
        addProductOrderToProductOrdersDatabase($dbConnection, $orderId, $productId, $quantity);
    };

    unset($_SESSION['cart']);
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
        <link rel="stylesheet" href="stylesheets/orderReceived.css">
    </head>
    <body>
        <?php echo getHeader('orderreceived'); ?>

        <div class="pageContent">
            <div class="pageActiveContent">
                <?php 
                    echo getOrderProgress('received');
                    echo
<<<HTML
                    <div class="orderReceivedWrapper">
                        <div class="orderReceviedContent">
                            <div class="orderReceivedIdHeader">Order Id</div>
                            <div class="orderReceivedId">{$orderId}</div>
                            <div class="orderReceivedRemark">
                                <p>
                                    * Note : Please save this order id to track your order. We have also sent an notification email to 
                                    <span class="orderReceivedRemarkEmail">$email</span>. 
                                </p>
                            </div>
                            <div class="orderReceivedBackToMenuButtonWrapper">
                                <button class="button orderReceivedBackToMenuButton">
                                    <a href="menu.php">Go to Menu</a>
                                </button>
                            </div>
                        </div>
                    </div>
HTML;
                ?>
            </div>
        </div>
    </body>
    <?php echo getFooter(); ?>
</html>