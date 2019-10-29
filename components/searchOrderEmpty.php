<?php
    include 'components/message.php';

    function getSearchOrderEmpty(){
        $messageTitle = "No match found";
        $message = "The orderId you have provided does not match with our records. <br> Please email us if you would like to seek further help.";
        $messageImg = "unsuccessful.png";

        return getMessage($messageTitle, $message, $messageImg);
    };
?>