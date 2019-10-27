<?php
    class Product {
        public $ProductId;
        public $Name;
        public $Description;
        public $Price;
        public $Category;
        public $Image;

        function set_productId($ProductId) { $this->ProductId = $ProductId; }
        function set_name($Name) { $this->Name = $Name; }
        function set_description($Description) { $this->Description = $Description; }
        function set_price($Price) { $this->Price = $Price; }
        function set_category($Category) { $this->Category = $Category; }
        function set_image($Image) { $this->Image = $Image; }

        function get_productId() { return $this->ProductId; }
        function get_name() { return $this->Name; }
        function get_description() { return $this->Description; }
        function get_price() { return $this->Price; }
        function get_category() { return $this->Category; }
        function get_image() { return $this->Image; }

    }

    function getProductsByCategoryFromDatabaseTable($conn, $cateogry){
        $sql = "SELECT * FROM Products WHERE Category = '".$cateogry."'";
        return getProductResultsFromQuery($conn, $sql);
    }

    function getProductsByListOfProductIdsFromDatabaseTable($conn, $productIds){
        $productIdsQuery = implode(', ', $productIds);
        $sql = "SELECT * FROM Products WHERE ProductId IN (".$productIdsQuery.")";
        return getProductResultsFromQuery($conn, $sql);
    }

    function getProductResultsFromQuery($conn, $sql){
        $result = $conn->query($sql);
        $products = array();
        if($result -> num_rows > 0){
            while($row = $result->fetch_assoc()){
                $product = new Product();
                $product->set_productId($row["ProductId"]);
                $product->set_name($row["Name"]);
                $product->set_description($row["Description"]);
                $product->set_price($row["Price"]);
                $product->set_category($row["Category"]);
                $product->set_image($row["Image"]);
                array_push($products, $product);
            }
        }

        return $products;
    }
?>