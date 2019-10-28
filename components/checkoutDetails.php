<?php 
    include 'database/databaseConnection.php';
    include 'database/ProductsTableManager.php';

    function getCheckoutDetails(){
        $dbConnection = getDatabaseConnection();
        $productIds = $_SESSION['cart'];
        $products = getProductsByListOfProductIdsFromDatabaseTable($dbConnection, $productIds);

        $getCheckoutDetailRows = function($products){
            $getProductImage = function($category, $imagePath){
                return "<img class='checkoutProductImg' src='images/".$category."s/".$imagePath."'/>";
            };
    
            $getQtyInput = function($productId){
                $id = "checkoutQtyInput_".$productId;
                $classes = "input checkoutQtyInput";
                $attributes = "type='number' name='checkoutQtyInput' min='1' value='1'";
                $onChangeHander = "oninput='checkoutQtyHandler(".$productId.")'";
                return "<input ".$attributes." id=".$id." class='".$classes."'".$onChangeHander."/>";
            };

            $getSubtotalField = function($productId, $productPrice){
                $id = "checkoutSubTotalPrice_".$productId;
                return "<p id='".$id."' class='checkoutSubTotalPrice'>S$ {$productPrice}<p>";
            };

            $getPriceField = function($productId, $productPrice){
                $id = "checkoutPrice_".$productId;
                return "<span id=".$id." class='checkoutPrice'>S$ {$productPrice}</span>";
            };

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
                            <span class="checkoutName">{$product->get_name()}</span>
                            <br>
                            {$getPriceField($product->get_productId(), $product->get_price())}
                        </td>
                        <td headers="checkoutProuductQtyColumn">
                            {$getQtyInput($product->get_productId())}
                        </td>
                        <td headers="checkoutProuductSubtotalColumn">
                            {$getSubtotalField($product->get_productId(), $product->get_price())}
                        </td>
                    </tr>
HTML;
            }
            return $tableRows;
        };

        $getCheckoutSummary = function($products){
            $gstPercentage = 7;
            $total = 0;
            $getMoneyValue = function($value){
                return number_format((float)$value, 2, '.', '');
            };

            foreach($products as &$product){
                $total = $total + $product->get_price();
            }

            $total = $getMoneyValue($total);
            $gstAmount = ($total * 7) / 100;
            $gstAmount = $getMoneyValue($gstAmount);
            $netTotal = $total + $gstAmount;
            $netTotal = $getMoneyValue($netTotal);

            return
<<<HTML
            <tr class = "checkoutSummaryTotalRow">
                <td>Total</td>
                <td><span id="checkoutSummaryTotal">S$ {$total}</span></td>
            </tr>
            <tr class = "checkoutSummaryGstRow">
                <td>GST(7%)</td>
                <td><span id="checkoutSummaryGst">S$ {$gstAmount}</span></td>
            </tr>
            <tr class = "checkoutSummaryNetTotalRow">
                <td>Net total</td>
                <td><span id="checkoutSummaryNetTotal">S$ {$netTotal}</span></td>
            </tr>
HTML;
        };

        return 
<<<HTML
        <div class = "checkoutDetails">
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
                        {$getCheckoutDetailRows($products)}
                    </tbody>
                </table>
            </div>
            <div class = "checkoutSummaryWrapper">
                <div class = "checkoutSummary">
                    <p class = "checkoutSummaryHeader">Summary</p>
                    <table class = "checkoutSummaryTable">
                        <tbody>
                            {$getCheckoutSummary($products)}
                        </tbody>
                    </table>
                    <button class="button checkoutSummaryButton"><a href="">Check out</a></button>
                </div>
            </div>
        </div>
HTML;
    }
?>