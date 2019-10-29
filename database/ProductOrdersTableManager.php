<?php
    class ProductOrder {
        public $ProductId;
        public $Name;
        public $Price;
        public $Category;
        public $Image;
        public $Quantity;

        function set_productId($ProductId) { $this->ProductId = $ProductId; }
        function set_name($Name) { $this->Name = $Name; }
        function set_price($Price) { $this->Price = $Price; }
        function set_category($Category) { $this->Category = $Category; }
        function set_image($Image) { $this->Image = $Image; }
        function set_quantity($Quantity) { $this->Quantity = $Quantity; }

        function get_productId() { return $this->ProductId; }
        function get_name() { return $this->Name; }
        function get_price() { return $this->Price; }
        function get_category() { return $this->Category; }
        function get_image() { return $this->Image; }
        function get_quantity() { return $this->Quantity; }
    }

    function addProductOrderToProductOrdersDatabase($conn, $orderId, $productId, $quantity){
        $fields = "OrderId, ProductId, Quantity";
        $values = "'".$orderId."', ".$productId.", ".$quantity;
        $insertSql = "INSERT INTO ProductOrders (".$fields.") VALUES (".$values.");";
        $conn->query($insertSql);
    }

    function getProductOrderResultsFromDatabase($conn, $orderId){
        $sql = "";
        $sql = $sql."SELECT Products.ProductId, Products.Name, Products.Price, Products.Category, Products.Image, ProductOrders.Quantity"; 
        $sql = $sql." FROM ProductOrders";
        $sql = $sql." JOIN Products ON Products.ProductId = ProductOrders.ProductId";
        $sql = $sql." WHERE ProductOrders.OrderId = '".$orderId."'";

        $result = $conn->query($sql);
        $productOrders = array();
        if($result -> num_rows > 0){
            while($row = $result->fetch_assoc()){
                $productOrder = new ProductOrder();
                $productOrder->set_productId($row["ProductId"]);
                $productOrder->set_name($row["Name"]);
                $productOrder->set_price($row["Price"]);
                $productOrder->set_category($row["Category"]);
                $productOrder->set_image($row["Image"]);
                $productOrder->set_quantity($row["Quantity"]);
                array_push($productOrders, $productOrder);
            }
        }

        return $productOrders;
    }
?>