<?php
    require_once "header.php";
?>
    <div class="width d-flex justify-content-center">
        <table class="table table-dark table-hover">
            <tr>
                <th>Full name</th>
                <th>Username</th>
                <th>Action</th>
            </tr>
            <?php
                $id = 2; // logged user

                $q = "SELECT users.id AS 'idUser', name, surname, username
                FROM users
                INNER JOIN profiles
                ON users.id = profiles.user_id
                WHERE users.id <> '$id'
                ;";

                $result = $conn->query($q);
                if($result->num_rows){
                    foreach($result as $row){
                        $friendId = $row['idUser'];
                        echo "<tr>";
                        echo "<td>" . $row['name'] . " " . $row['surname'] . "</td>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td><a href='followers.php?follow=$friendId'>Follow</a> | <a href='followers.php?unfollow=$friendId'>Unfollow</a></td>";
                        echo "</tr>";
                    }
                }
                else{
                    echo "There are no users in network";
                }

                //Follow
                if(!empty($_GET['follow'])){
                    $friendId = $conn->real_escape_string($_GET['follow']);

                    $q = "SELECT * FROM followers
                    WHERE sender_id = $id
                    AND receiver_id = $friendId;";
            
                    $result = $conn->query($q);
                    if($result->num_rows == 0){
                        $q = "INSERT INTO followers(sender_id, receiver_id)
                            VALUES ($id, $friendId);";
                        $result1 = $conn->query($q);
                        if(!$result1){
                            echo "<div class='error'>Error: " . $conn->error . "</div>";
                        }
                    }
                }

                //Unfollow
                if(!empty($_GET['unfollow'])){
                    $friendId = $conn->real_escape_string($_GET['unfollow']);

                    $q = "DELETE FROM followers
                        WHERE sender_id = $id
                        AND receiver_id = $friendId;";

                    $result = $conn->query($q);
                    if(!$result){
                        echo "<div class='error'>Error: " . $conn->error . "</div>";
                    }
                }
            ?>
        </table>
    </div>
   
    </body>
    </html>