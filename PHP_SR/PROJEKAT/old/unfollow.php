<?php
    require_once "connection.php";

    $id = 2; //logged user

    $friendId = $conn->real_escape_string($_GET['friend_id']);

    $q = "DELETE FROM followers
        WHERE sender_id = $id
        AND receiver_id = $friendId;";

    $result = $conn->query($q);
    if(!$result){
        die("Greska: " . $conn->error);
    }

    header("Location: followers.php")

?>