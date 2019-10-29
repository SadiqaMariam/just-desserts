<?php
    include 'components/header.php';
    include 'components/footer.php';
    include 'components/orderProgress.php';
    include 'components/paymentDetails.php';
    include 'database/databaseConnection.php';
    include 'database/ProductsTableManager.php';

    if(!isset($_SESSION['cart'])){
        header('location: menu.php');
    }

    class CheckoutProductOrder {
        public $ProductId;
        public $Quantity;
        public $Price;

        public function set_productId($ProductId) { $this->ProductId = $ProductId; }
        function set_quantity($Quantity) { $this->Quantity = $Quantity; }
        function set_price($Price) { $this->Price = $Price; }
        
        public function get_productId() { return $this->ProductId; }
        function get_quantity() { return $this->Quantity; }
        function get_price() { return $this->Price; }
    }

    $productIds = $_SESSION['cart'];
    $dbConnection = getDatabaseConnection();
    $products = getProductsByListOfProductIdsFromDatabaseTable($dbConnection, $productIds);
    $productOrders = array();
    $totalPrice = 0;

    foreach($products as &$product){
        $productId = $product->get_productId();
        $qtyId = "productOrderQtyInput_".$productId;
        $quantity = $_POST[$qtyId];
        $pricePerUnit = $product->get_price();

        $productOrder = new CheckoutProductOrder();
        $productOrder->set_productId($productId);
        $productOrder->set_quantity($quantity);
        $productOrder->set_price($pricePerUnit);
        array_push($productOrders, $productOrder);
        $totalPrice = $totalPrice + ($pricePerUnit * $quantity);
    }

    $netPrice = ($totalPrice * 1.07);
    $netPrice = number_format((float)$netPrice, 2, '.', '');
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
        <link rel="stylesheet" href="stylesheets/paymentDetails.css">
    </head>
    <body>
        <?php echo getHeader('payment'); ?>

        <div class="pageContent">
            <div class="pageActiveContent">
                <?php 
                    echo getOrderProgress('payment');
                    echo getPaymentDetails($productOrders, $netPrice);
                ?>
            </div>
        </div>
    </body>
    <?php echo getFooter(); ?>
</html>