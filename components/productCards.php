<?php 
    function getProductCards(){
        $getProductCard = function(){
            return 
            <<<HTML
            <div class="productCardWrapper">
                <div class="productCard">
                    <div class="productImgWrapper">
                        <img class="productImg" src="images/cakes/cheesecake.png" />
                    </div>
                    <p class="productDescription"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
                    <p class="productCost"> S$12.00 </p>
                    <button class="productButtonAddToCart">
                        <a href="">Add to cart</a>
                    </button>
                </div>
            </div>
HTML;
        };

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