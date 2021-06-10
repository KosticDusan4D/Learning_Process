<?php
    session_start();
    require_once "connection.php";
    $who_logged = "";
    $logout = "";
    $pleaseLogin = "<p class='redirectLink'>Please login <a href='login.php'>here!</a></p>";
    if(isset($_SESSION['id'])){
        $username = $_SESSION['username'];
        $who_logged = "<li class='nav-item'><a class='nav-link' href='#'>Welcome, $username</a></li>";
        $logout = "<li class='nav-item'><a class='nav-link' href='logout.php'>Logout</a></li>";
        $pleaseLogin = "";
    }

    $textSearch = "";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $textSearch = $conn->real_escape_string($_POST['textSearch']);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-sm bg-dark justify-content-center">
            <ul class="navbar-nav">
                <?php echo $who_logged; ?>
                <li class="nav-item">
                    <a class="nav-link" href="search.php">Search</a>
                </li>
                <?php echo $logout; ?>
        </ul>
        </nav>
    </div>

    <form class="font" action="" method="POST">
    <br>
    <br>
    <p class="form-group">
        <input type="text" class="form-control" name="textSearch" id="textSearch">
    </p>
        <input type="submit" class="form-control btn btn-primary" name="search" value="Search">
    <?php echo $pleaseLogin; ?>
    </form>
    <div class="width d-flex justify-content-center">
        <table class="table table-dark table-hover">
            <tr>
                <th>E-mail</th>
                <th>Username</th>
            </tr>

            <?php
            if(isset($_SESSION['id'])){
                if(!empty($textSearch)){
                    $q = "SELECT username, email
                    FROM users
                    WHERE email LIKE '%$textSearch%' OR username LIKE '%$$textSearch%';";

                    $result = $conn->query($q);
                    if($result->num_rows){
                        foreach($result as $row){
                            echo "<tr>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['username'] . "</td>";
                        }
                    }
                }
            }
            ?>
            
        </table>
    </div> 


<?php
require_once "footer.php";
?>