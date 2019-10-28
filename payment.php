<?php
    include 'components/header.php';
    include 'components/footer.php';
    include 'components/orderProgress.php';
    include 'components/paymentDetails.php';
    include 'database/databaseConnection.php';
    include 'database/ProductsTableManager.php';

    class CheckoutOrder {
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
    $checkoutOrders = array();
    $totalPrice = 0;

    foreach($products as &$product){
        $productId = $product->get_productId();
        $qtyId = "checkoutQtyInput_".$productId;
        $quantity = $_POST[$qtyId];
        $pricePerUnit = $product->get_price();

        $checkoutOrder = new CheckoutOrder();
        $checkoutOrder->set_productId($productId);
        $checkoutOrder->set_quantity($quantity);
        $checkoutOrder->set_quantity($pricePerUnit);
        array_push($checkoutOrders, $checkoutOrder);
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
                    echo getPaymentDetails($checkoutOrders, $netPrice);
                ?>
            </div>
        </div>
    </body>
    <?php echo getFooter(); ?>
</html>