<?php 
    function getPaymentDetails($checkoutOrders, $totalPrice){
        return
<<<HTML
            <div class="paymentDetailsWrapper">
                <div class="paymentDetailsSummary">
                    <p>Total Amount : S$ {$totalPrice}</p>
                </div>
                <div class="paymentDetailsFormWrapper">
                    <form class="paymentDetailsFormWrapper">
                        <fieldset class="paymentDetailsPersonalInformation">
                            <legend>Personal Information</legend>
                            <label for="paymentUserEmail">Email</label>
                            <input type="email" name="paymentUserEmail" /><br> 
                            <label for="paymentUserTelephone">Telephone</label>
                            <input type="numeric" name="paymentUserTelephone" /><br> 
                        </fieldset>
                        <fieldset class="paymentDetailsPaymentInformation">
                            <legend>Payment Information</legend>
                            <label for="paymentOption">Card options</label>
                            <select name="paymentOption">
                                <option value="visa">Visa</option>
                                <option value="masterCard">Master Card</option>
                            </select><br>
                            <label for="paymentCardNumber">Card number</label>
                            <input type="text" name="paymentCardNumber" /><br> 
                            <label for="paymentCardHolder">Name on card</label>
                            <input type="numeric" name="paymentCardHolder" /><br> 
                            <label for="paymentCardExpiryDate">Expiry date</label>
                            <input type="numeric" name="paymentCardExpiryDate" /><br> 
                            <label for="paymentCardSecurityCode">Security code</label>
                            <input type="numeric" name="paymentCardSecurityCode" /><br> 
                        </fieldset>
                        <input type="submit" value="Make Payment">
                    </form>
                </div>
            </div>
HTML;
    }
?>