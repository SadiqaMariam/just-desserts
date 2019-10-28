<?php 
    function getOrderProgress($currentProgress){
        $progressPaymentStep = "payment";
        $progressReceivedStep = "received";
        $progressProcessingStep = "processing";
        $progressShippingStep = "shipping";
        $progressCollectStep = "collect";

        $getOrderProgressListItem = function($progressStep, $currentProgress){
            $progressStepDisplay = ucfirst($progressStep);
            $class = $currentProgress == $progressStep
                ? "orderProgressActive" 
                : "";
            return "<li class='".$class."'>".$progressStepDisplay."</li>";
        };

        return      
<<<HTML
            <div class="orderProgressBarWrapper">
                <ul class="orderProgressBar">
                    {$getOrderProgressListItem($progressPaymentStep, $currentProgress)}
                    {$getOrderProgressListItem($progressReceivedStep, $currentProgress)}
                    {$getOrderProgressListItem($progressProcessingStep, $currentProgress)}
                    {$getOrderProgressListItem($progressShippingStep, $currentProgress)}
                    {$getOrderProgressListItem($progressCollectStep, $currentProgress)}
                </ul>
            </div>
HTML;
    }
?>