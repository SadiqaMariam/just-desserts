<?php 
    include 'database/databaseConnection.php';
    include 'database/ProductsTableManager.php';

    function getCheckoutDetails(){
        $dbConnection = getDatabaseConnection();
        $productIds = $_SESSION['cart'];
        $products = getProductsByListOfProductIdsFromDatabaseTable($dbConnection, $productIds);

        $getProductImage = function($category, $imagePath){
            return "<img class='checkoutProductImg' src='images/".$category."s/".$imagePath."'/>";
        };

        $getCheckoutDetialRows = function($products, $getProductImage){
            $tableRows = "";
            foreach($products as &$product){
                $tableRows = $tableRows.
<<<HTML
                    <tr class="checkoutProductRow">
                        <td headers="checkoutProductRemoveColumn">
                            <button class = "checkoutRemoveButton">
                                <img class="checkoutRemoveButtonImg" src="images/remove.png" />
                            </button>
                        </td>
                        <td headers="checkoutProductImgColumn">
                            {$getProductImage(
                                $product->get_category(), 
                                $product->get_image())
                            }
                        </td>
                        <td headers="checkoutProuductDetailsColumn">
                            <span class="checkoutName">{$product->get_name()}<span>
                            <br>
                            <span class="checkoutPrice">S$ {$product->get_price()}<span>
                        </td>
                        <td headers="checkoutProuductQtyColumn">
                            <p class="checkoutQty">1</p>
                        </td>
                        <td headers="checkoutProuductSubtotalColumn">
                            <p class="checkoutSubTotalPrice">S$ {$product->get_price()}<p>
                        </td>
                    </tr>
HTML;
            }
            return $tableRows;
        };

        return 
<<<HTML
            <div class = "checkoutTableWrapper">
                <table class="checkoutTable">
                    <thead class="checkoutTableHeader">
                        <tr class="checkoutTableHeaderRow">
                            <th class="checkoutTableHeader" id="checkoutProductRemove"></th>
                            <th class="checkoutTableHeader" id="checkoutProuductImg">Product</th>
                            <th class="checkoutTableHeader" id="checkoutProuductDetails">Details</th>
                            <th class="checkoutTableHeader" id="checkoutProuductQty">Qty</th>
                            <th class="checkoutTableHeader" id="checkoutProuductSubtotal">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        {$getCheckoutDetialRows($products, $getProductImage)}
                    </tbody>
                </table>
            </div>
HTML;
    }
?>