<?php 
    include 'database/databaseConnection.php';
    include 'database/ProductsTableManager.php';

    function getCheckoutDetails(){
        $dbConnection = getDatabaseConnection();
        $productIds = $_SESSION['cart'];
        $products = getProductsByListOfProductIdsFromDatabaseTable($dbConnection, $productIds);

        $checkoutDetailsHtml = "<table>";
        foreach($products as &$product){
            $checkoutDetailsHtml = $checkoutDetailsHtml."<p>".$product->get_name()."</p><br>";
        }

        return $checkoutDetailsHtml;
    }
?>