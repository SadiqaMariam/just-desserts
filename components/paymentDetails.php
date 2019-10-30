<?php 
    function getPaymentDetails($checkoutOrders, $price){
        $getHiddenCheckoutOrderFields = function($checkoutOrders, $price){
            $hiddenInputs = "";
            foreach($checkoutOrders as &$checkoutOrder){
                $productId = $checkoutOrder->get_productId();
                $quantity = $checkoutOrder->get_quantity();
                $hiddenInputs = $hiddenInputs."<input type='hidden' name='quantity_".$productId."' value='".$quantity."'/>";
            }
            return $hiddenInputs;
        };

        return
<<<HTML
            <div class="paymentDetailsWrapper">
                <div class="paymentDetailsSummary">
                    <p>Total Amount : 
                        <span class="paymentDetailsTotalPrice">S$ {$price}</span>
                    </p>
                </div>
                <div class="paymentDetailsFormWrapper">
                    <form class="paymentDetailsFormWrapper" action="orderreceived.php" method="post">
                        {$getHiddenCheckoutOrderFields($checkoutOrders, $price)}
                        <fieldset class="paymentDetailsPersonalInformation">
                            <legend>Personal Information</legend>

                            <label for="paymentUserEmail">Email</label>
                            <input type="email" name="paymentUserEmail" 
                                id="paymentUserEmail" onfocusout="paymentUserEmailHandler()" /><br> 
                            <div id="paymentUserEmail_error">&nbsp;</div>

                            <label for="paymentUserTelephone">Telephone</label>
                            <input type="numeric" name="paymentUserTelephone" 
                                id="paymentUserTelephone" onfocusout="paymentUserTelephoneHandler()" /><br> 
                            <div id="paymentUserTelephone_error">&nbsp;</div>

                        </fieldset>
                        <fieldset class="paymentDetailsPaymentInformation">
                            <legend>Payment Information</legend>
                            <label for="paymentCardNumber">Card number</label>
                            <input type="text" name="paymentCardNumber" 
                                id="paymentCardNumber" onfocusout="paymentCardNumberHandler()" /><br> 
                            <div id="paymentCardNumber_error">&nbsp;</div>
                            
                            <label for="paymentCardHolder">Name on card</label>
                            <input type="numeric" name="paymentCardHolder" 
                                id="paymentCardHolder" onfocusout="paymentCardHolderHandler()" /><br> 
                            <div id="paymentCardHolder_error">&nbsp;</div>

                            <label for="paymentCardExpiryDate">Expiry date</label>
                            <input type="numeric" name="paymentCardExpiryDate" 
                                id="paymentCardExpiryDate" onfocusout="paymentCardExpiryDateHandler()" /><br> 
                            <div id="paymentCardExpiryDate_error">&nbsp;</div>

                            <label for="paymentCardSecurityCode">Security code</label>
                            <input type="numeric" name="paymentCardSecurityCode" 
                                id="paymentCardSecurityCode" onfocusout="paymentCardSecurityCodeHandler()" /><br> 
                            <div id="paymentCardSecurityCode_error">&nbsp;</div>

                        </fieldset>
                        <div class="makePaymentButtonWrapper">
                            <input type="submit" id="makePaymentButton" class="formDisableButton" value="Make Payment">
                        </div>
                    </form>
                </div>
            </div>
HTML;
    }
?>