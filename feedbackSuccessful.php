<?php
    include 'components/header.php';
    include 'components/footer.php';
    include 'components/message.php';
    include 'database/databaseConnection.php';
    include 'database/FeedbackTableManager.php';

    $feedback = $_POST["feedback"];
    if(!isset($feedback) || empty($feedback)){
        header('location: contact.php');
        exit();
    }
    
    $dbConnection = getDatabaseConnection();
    addFeedbackToDatabaseTable($dbConnection, $feedback);

    $messageTitle = "Feedback received";
    $message = "Thank you for your valuable feedback. <br> We hope to better ourselves in providing excellent services to our customers.";
    $messageImg = "successful.png";
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
        <link rel="stylesheet" href="stylesheets/message.css">
    </head>
    <body>
        <?php echo getHeader('orderreceived'); ?>

        <div class="pageContent">
            <div class="pageActiveContent">
                <?php
                    echo getMessage($messageTitle, $message, $messageImg);
                ?>
            </div>
        </div>
    </body>
    <?php echo getFooter(); ?>
</html>