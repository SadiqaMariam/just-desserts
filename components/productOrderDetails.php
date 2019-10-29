<?php 
    function getProductOrderDetails($products, $readonly){
        $getProductOrderDetailRows = function($products, $readonly){
            $getProductImage = function($category, $imagePath){
                return "<img class='productOrderProductImg' src='images/".$category."s/".$imagePath."'/>";
            };
    
            $getQtyInput = function($product, $readonly){
                $productId = $product->get_productId();
                $quantity = method_exists($product, "get_quantity")
                    ? $product->get_quantity()
                    : 1;

                $id = "productOrderQtyInput_".$productId;
                $classes = "input productOrderQtyInput";
                $attributes = "type='number' name='".$id."' min='1' value='1'";
                $onChangeHander = "oninput='productOrderQtyHandler(".$productId.")'";
                return $readonly 
                    ? "<p>".$quantity."</p>"
                    : "<input ".$attributes." id=".$id." class='".$classes."'".$onChangeHander."/>";
            };

            $getSubtotalField = function($product){
                $productId = $product->get_productId();
                $productPrice = $product->get_price();
                $quantity = method_exists($product, "get_quantity")
                    ? $product->get_quantity()
                    : 1;
                $subTotal = $productPrice * $quantity;
                $subTotal = number_format((float)$subTotal, 2, '.', '');

                $id = "productOrderSubTotalPrice_".$productId;
                return "<p id='".$id."' class='productOrderSubTotalPrice'>S$ {$subTotal}<p>";
            };

            $getPriceField = function($productId, $productPrice){
                $id = "productOrderPrice_".$productId;
                return "<span id=".$id." class='productOrderPrice'>S$ {$productPrice}</span>";
            };

            $getProductRemoveButtonRow = function($readonly){
                return $readonly ? "" : 
<<<HTML
                        <td headers="productOrderProductRemoveColumn">
                            <button class = "productOrderRemoveButton">
                                <img class="productOrderRemoveButtonImg" src="images/remove.png" />
                            </button>
                        </td>
HTML;
            };

            $tableRows = "";
            foreach($products as &$product){
                $tableRows = $tableRows.
<<<HTML
                    <tr class="productOrderProductRow">
                        {$getProductRemoveButtonRow($readonly)}
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
                            {$getQtyInput($product, $readonly)}
                        </td>
                        <td headers="productOrderProuductSubtotalColumn">
                            {$getSubtotalField($product)}
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
                $price = $product->get_price();
                $quantity = method_exists($product, "get_quantity")
                    ? $product->get_quantity()
                    : 1;
                $total = $total + ($price * $quantity);
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

        $getProductRemoveColumn = function($readonly){
            return $readonly ? "" : "<th class='productOrderTableHeader' id='productOrderProductRemove'></th>";
        };

        $getProductOrderSummaryCheckoutButton = function($readonly){
            return $readonly ? "" : "<input type='submit' class='productOrderSummaryButton' value='Check Out' />";
        };

        return 
<<<HTML
        <form action="payment.php" method="post">
            <div class = "productOrderDetails">
                <div class = "productOrderTableWrapper">
                    <table class="productOrderTable">
                        <thead class="productOrderTableHeader">
                            <tr class="productOrderTableHeaderRow">
                                {$getProductRemoveColumn($readonly)}
                                <th class="productOrderTableHeader" id="productOrderProuductImg">Product</th>
                                <th class="productOrderTableHeader" id="productOrderProuductDetails">Details</th>
                                <th class="productOrderTableHeader" id="productOrderProuductQty">Qty</th>
                                <th class="productOrderTableHeader" id="productOrderProuductSubtotal">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            {$getProductOrderDetailRows($products, $readonly)}
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
                        {$getProductOrderSummaryCheckoutButton($readonly)}
                    </div>
                </div>
            </div>
        </form>
HTML;
    }
?>