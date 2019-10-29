<?php
    include 'components/header.php';
    include 'components/footer.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Just Desserts</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="stylesheets/common.css">
        <link rel="stylesheet" href="stylesheets/header.css">
        <link rel="stylesheet" href="stylesheets/footer.css">
        <link rel="stylesheet" href="stylesheets/pageContent.css">
        <link rel="stylesheet" href="stylesheets/contact.css">
    </head>
    <body>
        <?php echo getHeader('contact'); ?>

        <div class="pageContent">
            <div class="pageActiveContent">
                <div class="contactWrapper">
                    <div class="contactContent">
                        <div class="contactDetailsWrapper">
                            <div class="contactDetails">
                                <h4 class="contactDetailsHeader">Contact Details</h4>
                                <p class="contactDetailsTelephone">TEL : 6556-6556</p>
                                <p class="contactDetailsEmail">EMAIL : justdesserts@mail.com</p>
                                <p class="contactDetailsAddress">
                                    Address : <br>
                                    Singapore street 1, <br>
                                    Unit #01-34 <br>
                                    Singapore 034034 <br> 
                                </p>
                            </div>
                            <div class="contactAddressMap">
                                <img src="images/contactMap.png" />
                            </div>
                        </div>
                        <div class="contactFeedbackWrapper">
                            <div class="contactFeedbackContent">
                                <h4 class="contactFeedbackHeader">Feedback</h4>
                                <span class="contactFeedbackHint">* We would love to hear any feedback that you might have of our services </span>
                                <textarea placeholder="feedback" class="contactFeedbackInput"></textarea>
                                <div class="contactFeedbackSubmitButtonWrapper">
                                    <button class="contactFeedbackSubmitButton">
                                        <a href="">Submit</a>
                                    </button>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php echo getFooter(); ?>
</html>