<?php 
    include 'database/databaseConnection.php';
    include 'database/ProductsTableManager.php';

    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }

    if(isset($_GET['addToCart'])){
        $_SESSION['cart'][] = $_GET['addToCart'];
        header('location: '.$_SERVER['PHP_SELF'].'?'.SID);
    }

    function getProductCards($category){
        $dbConnection = getDatabaseConnection();
        $products = getProductsByCategoryFromDatabaseTable($dbConnection, $category);

        $getProductCard = function($category, $product){
            $getProductImage = function($category, $imagePath){
                return "<img class='productImg' src='images/".$category."s/".$imagePath."'/>";
            };

            $getProductPrice = function($productPrice){
                return "<p class='productCost'>S$".$productPrice."</p>";
            };

            $getProductButtonAddToCartLink = function($productId){
                return "<a href=".$_SERVER['PHP_SELF']."?addToCart=".$productId.">Add to cart</a>";
            };

            return 
            <<<HTML
            <div class="productCardWrapper">
                <div class="productCard">
                    <div class="productImgWrapper">
                        {$getProductImage($category, $product->get_image())}
                    </div>
                    <p class="productName">{$product->get_name()}</p>
                    <p class="productDescription">{$product->get_description()}</p>
                    {$getProductPrice($product->get_price())}
                    <button class="productButtonAddToCart">
                        {$getProductButtonAddToCartLink($product->get_productId())}
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

            $productHTML = $productHTML.$getProductCard($category, $product);
            $productCount = $productCount + 1;
        }

        if($productCount != 0){
            $productHTML = $productHTML."</div>";
        }

        return $productHTML;
    }
?>