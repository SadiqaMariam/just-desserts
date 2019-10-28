<?php
    function addOrderToOrdersDatabaseTable($conn, $orderId, $email, $status){
        $fields = "OrderId, Email, Status";
        $values = "'".$orderId."', '".$email."', '".$status."'";
        $insertSql = "INSERT INTO Orders (".$fields.") VALUES (".$values.");";
        $conn->query($insertSql);
    }
?>