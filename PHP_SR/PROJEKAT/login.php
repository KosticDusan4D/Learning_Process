<?php
    // Otvaranje SESIJE! - OVO JE OBAVEZNO DA BUDE PRVO!!!
    session_start();

    require_once "connection.php";

    $usernameError = $passwordError = "*";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $conn->real_escape_string($_POST['username']);
        $password = $conn->real_escape_string($_POST['password']);
        $validated = true;

        if(empty($username)){
            $validated = false;
            $usernameError = "Username can't be left blank!";
        }
        if(empty($password)){
            $validated = false;
            $passwordError = "Password can't be left blank!";
        }

        if($validated){
            $q = "SELECT * FROM users WHERE username = '$username'";
            $result = $conn->query($q);
            if($result->num_rows == 0){
                $usernameError = "Invalid username";
            }
            else{
                $row = $result->fetch_assoc();
                $dbPassword = $row['password']; //password from database
                if($dbPassword != md5($password)){
                    $passwordError = "Invalid password";
                }
                else{
                    //OVDE SE RADI LOGOVANJE - SESIJA
                    $_SESSION['id'] = $row['id'];
                    // $_SESSION['full_name'] = "ZA DOMACI";
                    header('Location: followers_stef.php');
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to the site</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="font" action="" method="POST">
    <br>
    <br>
        <label for="username">Username: </label>
        <input type="text" name="username" id="username">
        <span class="error"><?php echo $usernameError ?></span>
        <br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
        <span class="error"><?php echo $passwordError ?></span>
        <br>
        <input type="submit" value="Log in!">
    </form>
</body>
</html>