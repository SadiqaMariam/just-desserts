<?php
    function getMessage($messageTitle, $message, $messageImg){
        $getMessageImg = function($messageImg){
            return "<img src='images/unsuccessful.png'/>";
        };

        return
<<<HTML
            <div class="messagePageWrapper">
                <div class="messageTitleWrapper">
                    <p class="messageTitle">{$messageTitle}</p>
                </div>
                <div class="messageWrapper">
                    <p class="message">{$message}</p>
                </div>
                <div class="messageImgWrapper">
                    {$getMessageImg($messageImg)}
                </div>
            </div>
HTML;
    };
?>