<?php 
    function getOrderProgress($currentProgress){
        $progressPaymentStep = "payment";
        $progressReceivedStep = "received";
        $progressProcessingStep = "processing";
        $progressShippingStep = "shipping";
        $progressCollectStep = "collect";

        $getOrderProgressListItem = function($progressStep){
            $progressStepDisplay = ucfirst($progressStep);
            return "<li>".$progressStepDisplay."</li>";
        };

        return      
<<<HTML
            <div class="orderProgressBarWrapper">
                <ul class="orderProgressBar">
                    {$getOrderProgressListItem($progressPaymentStep)}
                    {$getOrderProgressListItem($progressReceivedStep)}
                    {$getOrderProgressListItem($progressProcessingStep)}
                    {$getOrderProgressListItem($progressShippingStep)}
                    {$getOrderProgressListItem($progressCollectStep)}
                </ul>
            </div>
HTML;
    }
?>