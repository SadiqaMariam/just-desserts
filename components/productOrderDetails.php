<?php 
    include 'database/databaseConnection.php';
    include 'database/ProductsTableManager.php';

    function getProductOrderDetails(){
        $dbConnection = getDatabaseConnection();
        $productIds = $_SESSION['cart'];
        $products = getProductsByListOfProductIdsFromDatabaseTable($dbConnection, $productIds);

        $getProductOrderDetailRows = function($products){
            $getProductImage = function($category, $imagePath){
                return "<img class='productOrderProductImg' src='images/".$category."s/".$imagePath."'/>";
            };
    
            $getQtyInput = function($productId){
                $id = "productOrderQtyInput_".$productId;
                $classes = "input productOrderQtyInput";
                $attributes = "type='number' name='".$id."' min='1' value='1'";
                $onChangeHander = "oninput='productOrderQtyHandler(".$productId.")'";
                return "<input ".$attributes." id=".$id." class='".$classes."'".$onChangeHander."/>";
            };

            $getSubtotalField = function($productId, $productPrice){
                $id = "productOrderSubTotalPrice_".$productId;
                return "<p id='".$id."' class='productOrderSubTotalPrice'>S$ {$productPrice}<p>";
            };

            $getPriceField = function($productId, $productPrice){
                $id = "productOrderPrice_".$productId;
                return "<span id=".$id." class='productOrderPrice'>S$ {$productPrice}</span>";
            };

            $tableRows = "";
            foreach($products as &$product){
                $tableRows = $tableRows.
<<<HTML
                    <tr class="productOrderProductRow">
                        <td headers="productOrderProductRemoveColumn">
                            <button class = "productOrderRemoveButton">
                                <img class="productOrderRemoveButtonImg" src="images/remove.png" />
                            </button>
                        </td>
                        <td headers="productOrderProductImgColumn">
                            {$getProductImage(
                                $product->get_category(), 
                                $product->get_image())
                            }
                        </td>
                        <td headers="productOrderProuductDetailsColumn">
                            <span class="productOrderName">{$product->get_name()}</span>
                            <br>
                            {$getPriceField($product->get_productId(), $product->get_price())}
                        </td>
                        <td headers="productOrderProuductQtyColumn">
                            {$getQtyInput($product->get_productId())}
                        </td>
                        <td headers="productOrderProuductSubtotalColumn">
                            {$getSubtotalField($product->get_productId(), $product->get_price())}
                        </td>
                    </tr>
HTML;
            }
            return $tableRows;
        };

        $getProductOrderSummary = function($products){
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
            <tr class = "productOrderSummaryTotalRow">
                <td>Total</td>
                <td><span id="productOrderSummaryTotal">S$ {$total}</span></td>
            </tr>
            <tr class = "productOrderSummaryGstRow">
                <td>GST(7%)</td>
                <td><span id="productOrderSummaryGst">S$ {$gstAmount}</span></td>
            </tr>
            <tr class = "productOrderSummaryNetTotalRow">
                <td>Net total</td>
                <td><span id="productOrderSummaryNetTotal">S$ {$netTotal}</span></td>
            </tr>
HTML;
        };

        return 
<<<HTML
        <form action="payment.php" method="post">
            <div class = "productOrderDetails">
                <div class = "productOrderTableWrapper">
                    <table class="productOrderTable">
                        <thead class="productOrderTableHeader">
                            <tr class="productOrderTableHeaderRow">
                                <th class="productOrderTableHeader" id="productOrderProductRemove"></th>
                                <th class="productOrderTableHeader" id="productOrderProuductImg">Product</th>
                                <th class="productOrderTableHeader" id="productOrderProuductDetails">Details</th>
                                <th class="productOrderTableHeader" id="productOrderProuductQty">Qty</th>
                                <th class="productOrderTableHeader" id="productOrderProuductSubtotal">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            {$getProductOrderDetailRows($products)}
                        </tbody>
                    </table>
                </div>
                <div class = "productOrderSummaryWrapper">
                    <div class = "productOrderSummary">
                        <p class = "productOrderSummaryHeader">Summary</p>
                        <table class = "productOrderSummaryTable">
                            <tbody>
                                {$getProductOrderSummary($products)}
                            </tbody>
                        </table>
                        <input type="submit" class="productOrderSummaryButton" value="Check Out" />
                    </div>
                </div>
            </div>
        </form>
HTML;
    }
?>