<?php
    require_once "connection.php";

    $id = 2; //logged user

    $friendId = $conn->real_escape_string($_GET['friend_id']); //prvo validacija pa ova funkcija za upit

    $q = "SELECT * FROM followers
        WHERE sender_id = $id
        AND receiver_id = $friendId;";

    $result = $conn->query($q);
    if($result->num_rows == 0){
        $q = "INSERT INTO followers(sender_id, receiver_id)
            VALUES ($id, $friendId);";
        $result1 = $conn->query($q);
        if(!$result1){
            die("Error: ". $conn->error);
        }
    }

    header("Location: followers.php") // Redirectioning on page followers.php
?>