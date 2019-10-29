<?php
    class Order {
        public $OrderId;
        public $Email;
        public $Status;

        function set_orderId($OrderId) { $this->OrderId = $OrderId; }
        function set_email($Email) { $this->Email = $Email; }
        function set_status($Status) { $this->Status = $Status; }

        function get_orderId() { return $this->ProductId; }
        function get_email() { return $this->Email; }
        function get_status() { return $this->Status; }
    }

    function addOrderToOrdersDatabaseTable($conn, $orderId, $email, $status){
        $fields = "OrderId, Email, Status";
        $values = "'".$orderId."', '".$email."', '".$status."'";
        $insertSql = "INSERT INTO Orders (".$fields.") VALUES (".$values.");";
        $conn->query($insertSql);
    }

    function getOrderByOrderIdFromDatabaseTable($conn, $orderId){
        $sql = "SELECT * FROM Orders WHERE OrderId = '".$orderId."';";
        $result = $conn->query($sql);
        if($result -> num_rows > 0){
            $row = $result->fetch_assoc();

            $order = new Order();
            $order->set_orderId($row["OrderId"]);
            $order->set_email($row["Email"]);
            $order->set_status($row["Status"]);
            return $order;
        }
    }
?>