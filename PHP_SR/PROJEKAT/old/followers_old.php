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
                $id_logged = 2; // logged user

                $q = "SELECT users.id AS 'idUser', name, surname, username
                FROM users
                INNER JOIN profiles
                ON users.id = profiles.user_id
                WHERE users.id <> '$id_logged'
                ;";

                $result = $conn->query($q);
                if($result->num_rows){
                    foreach($result as $row){
                        $friendId = $row['idUser'];
                        echo "<tr>";
                        echo "<td>" . $row['name'] . " " . $row['surname'] . "</td>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td><a href='follow.php?friend_id=$friendId'>Follow</a> | <a href='unfollow.php?friend_id=$friendId'>Unfollow</a></td>";
                        echo "</tr>";
                    }
                }
                else{
                    echo "There are no users in network";
                }
            ?>
        </table>
    </div>
    