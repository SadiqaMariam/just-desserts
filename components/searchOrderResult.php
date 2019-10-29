<?php
    function getSearchOrderResult($order){
        return 
<<<HTML
        <div class = "searchOrderResultWrapper">
            <div class = "searchOrderResultContent">
                <p class = "searchOrderResultIdTitle">Order Id</p>
                <p class = "searchOrderResulId">{$order->get_orderId()}</p>
                <p class = "searchOrderResultHint">
                    * you will be notificed with 
                        <span class="searchOrderResultEmail">{$order->get_email()}</span> 
                    on the progress of this order.
                </p>
            </div>
        </div>
HTML;
    };
?>