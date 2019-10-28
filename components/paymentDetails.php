<?php 
    function getPaymentDetails($checkoutOrders, $totalPrice){
        return
<<<HTML
            <div class="paymentDetailsWrapper">
                <div class="paymentDetailsSummary">
                    <p>{$totalPrice}</p>
                </div>
                <div class="paymentDetailsFormWrapper">
                    <form>
                    </form>
                </div>
            </div>
HTML;
    }
?>