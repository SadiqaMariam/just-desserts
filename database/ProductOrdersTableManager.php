<?php
    function addProductOrderToProductOrdersDatabase($conn, $orderId, $productId, $quantity){
        $fields = "OrderId, ProductId, Quantity";
        $values = "'".$orderId."', ".$productId.", ".$quantity;
        $insertSql = "INSERT INTO ProductOrders (".$fields.") VALUES (".$values.");";
        $conn->query($insertSql);
    }
?>