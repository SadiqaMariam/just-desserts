<?php 
    include 'database/databaseConnection.php';
    include 'database/ProductsTableManager.php';

    function getProductCards(){
        $dbConnection = getDatabaseConnection();
        $products = getProductsByCategoryFromDatabaseTable($dbConnection, "cake");

        $getProductCard = function($name, $description, $price){
            return 
            <<<HTML
            <div class="productCardWrapper">
                <div class="productCard">
                    <div class="productImgWrapper">
                        <img class="productImg" src="images/cakes/cheesecake.png" />
                    </div>
                    <p class="productName">{$name}</p>
                    <p class="productDescription">{$description}</p>
                    <p class="productCost">S$$price</p>
                    <button class="productButtonAddToCart">
                        <a href="">Add to cart</a>
                    </button>
                </div>
            </div>
HTML;
        };

        $columnsPerRow = 4;
        $productHTML = "";

        $productCount = 1;
        foreach($products as &$product){
            if ($productCount > 4){
                $productCount = 1;
                $productHTML = $productHTML."</div>";
            }
            if ($productCount == 1){
                $productHTML = $productHTML."<div class='allproductsRow'>";
            }

            $productHTML = $productHTML.$getProductCard(
                $product->get_name(),
                $product->get_description(),
                $product->get_price()
            );
            $productCount = $productCount + 1;
        }

        if($productCount != 0){
            $productHTML = $productHTML."</div>";
        }

        return $productHTML;

        return      
        <<<HTML
            <div class="allproductsRow">
                {$getProductCard()}
                {$getProductCard()}
                {$getProductCard()}
                {$getProductCard()}
            </div>
            <div class="allproductsRow">
                {$getProductCard()}
                {$getProductCard()}
                {$getProductCard()}
                {$getProductCard()}
            </div>
            <div class="allproductsRow">
                {$getProductCard()}
                {$getProductCard()}
                {$getProductCard()}
                {$getProductCard()}
            </div>
HTML;
    }
?>