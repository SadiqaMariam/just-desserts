<?php
    function addFeedbackToDatabaseTable($conn, $feedback){
        $insertSql = "INSERT INTO Feedback (Feedback) VALUES ('".$feedback."');";
        $conn->query($insertSql);
    }
?>