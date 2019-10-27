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
                        <td headers="checkoutProductRemove">
                            <button>Delete</button>
                        </td>
                        <td headers="checkoutProuductImg">
                            {$getProductImage(
                                $product->get_category(), 
                                $product->get_image())
                            }
                        </td>
                        <td headers="checkoutProuductDetails">
                            <p class="checkoutName">{$product->get_name()}<p>
                            <p class="checkoutPrice">{$product->get_price()}<p>
                        </td>
                        <td headers="checkoutProuductQty">
                            <p class="checkoutQty">1</p>
                        </td>
                        <td headers="checkoutProuductSubtotal">
                            <p class="checkoutSubTotalPrice">{$product->get_price()}<p>
                        </td>
                    </tr>
HTML;
            }
            return $tableRows;
        };

        return 
<<<HTML
            <table class="checkoutTable">
                <thead class="checkoutTableHeader">
                    <tr class="checkoutTableHeaderRow">
                        <th id="checkoutProductRemove"></th>
                        <th id="checkoutProuductImg">Product</th>
                        <th id="checkoutProuductDetails">Details</th>
                        <th id="checkoutProuductQty">Qty</th>
                        <th id="checkoutProuductSubtotal">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    {$getCheckoutDetialRows($products, $getProductImage)}
                </tbody>
            </table>
HTML;
    }
?>