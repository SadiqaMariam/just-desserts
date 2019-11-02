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
                            <input type="email" name="paymentUserEmail" placeholder="e.g. email@provider.com"
                                id="paymentUserEmail" onfocusout="paymentUserEmailHandler()" /><br> 
                            <div class='formErrorMessage' id="paymentUserEmail_error">&nbsp;</div>

                            <label for="paymentUserTelephone">Telephone</label>
                            <input type="number" name="paymentUserTelephone" placeholder="e.g. 62226222"
                                id="paymentUserTelephone" onfocusout="paymentUserTelephoneHandler()" /><br> 
                            <div class='formErrorMessage' id="paymentUserTelephone_error">&nbsp;</div>

                        </fieldset>
                        <fieldset class="paymentDetailsPaymentInformation">
                            <legend>Payment Information</legend>
                            <label for="paymentCardNumber">Card number</label>
                            <table>
                                <tr>
                                    <td>
                                        <input type="text" name="paymentCardNumberFirst" placeholder="e.g. 1234"
                                            id="paymentCardNumberFirst" onfocusout="paymentCardNumberFirstHandler()" /><br> 
                                        <div class='formErrorMessage' id="paymentCardNumberFirst_error">&nbsp;</div>
                                    </td>
                                    <td>
                                        <input type="text" name="paymentCardNumberSecond" placeholder="e.g. 1234"
                                            id="paymentCardNumberSecond" onfocusout="paymentCardNumberSecondHandler()" /><br> 
                                        <div class='formErrorMessage' id="paymentCardNumberSecond_error">&nbsp;</div>
                                    </td>
                                    <td>
                                        <input type="text" name="paymentCardNumberThird" placeholder="e.g. 1234"
                                            id="paymentCardNumberThird" onfocusout="paymentCardNumberThirdHandler()" /><br> 
                                        <div class='formErrorMessage' id="paymentCardNumberThird_error">&nbsp;</div>
                                    </td>
                                    <td>
                                        <input type="text" name="paymentCardNumberFourth" placeholder="e.g. 1234"
                                            id="paymentCardNumberFourth" onfocusout="paymentCardNumberFourthHandler()" /><br> 
                                        <div class='formErrorMessage' id="paymentCardNumberFourth_error">&nbsp;</div>
                                    </td>
                                </tr>
                            </table>
 
                            
                            <label for="paymentCardHolder">Name on card</label>
                            <input type="text" name="paymentCardHolder" placeholder="e.g. firstname lastname"
                                id="paymentCardHolder" onfocusout="paymentCardHolderHandler()" /><br> 
                            <div class='formErrorMessage' id="paymentCardHolder_error">&nbsp;</div>

                            <label for="paymentCardExpiryDate">Expiry date</label>
                            <input type="date" name="paymentCardExpiryDate" 
                                id="paymentCardExpiryDate" onfocusout="paymentCardExpiryDateHandler()" /><br> 
                            <div class='formErrorMessage' id="paymentCardExpiryDate_error">&nbsp;</div>

                            <label for="paymentCardSecurityCode">Security code</label>
                            <input type="number" name="paymentCardSecurityCode" placeholder="e.g. 123" 
                                id="paymentCardSecurityCode" onfocusout="paymentCardSecurityCodeHandler()" /><br> 
                            <div class='formErrorMessage' id="paymentCardSecurityCode_error">&nbsp;</div>

                        </fieldset>
                        <div class="makePaymentButtonWrapper">
                            <input type="button" id="makePaymentButton" value="Make Payment" onclick="PaymentButtonClick()">
                        </div>
                    </form>
                </div>
            </div>
HTML;
    }
?>