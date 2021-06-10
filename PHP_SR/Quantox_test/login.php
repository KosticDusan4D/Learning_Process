<?php
    session_start();

    require_once "connection.php";
    require_once "validation.php";

    $emailError = $passwordError = "*";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);
        $validated = true;

        // E-mail validation
        if(emailValidation($email)){
            $validated = false;
            $emailError = emailValidation($email);
        }

        // Password validation
        if(passwordValidation($password)){
            $validated = false;
            $passwordError = passwordValidation($password);
        }

        if($validated){
            $q = "SELECT id, password, email, username
            FROM users
            WHERE email = '$email'";
            $result = $conn->query($q);
            if($result->num_rows == 0){
                $emailError = "Invalid E-mail address";
            }
            else{
                $row = $result->fetch_assoc();
                $dbPassword = $row['password'];
                if($dbPassword != md5($password)){
                    $passwordError = "Invalid password";
                }
                else{
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    header('Location: search.php');
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
    <h2 class="font">Please login</h2>
    <form class="font" action="" method="POST">
    <br>
    <br>
    <p class="form-group">
        <label for="email">E-mail: </label>
        <input type="text" class="form-control" name="email" id="email">
        <span class="error"><?php echo $emailError ?></span>
    </p>
        <br>
    <p class="form-group">
        <label for="password">Password: </label>
        <input type="password"  class="form-control" name="password" id="password">
        <span class="error"><?php echo $passwordError ?></span>
    </p>
        <br>
        <input type="submit" class="form-control btn btn-primary" name="submit" value="Log in!">
    <p class="redirectLink">
        If you don't have account, please <a href="register.php">register!</a>
    </p>
    </form>
<?php
    require_once "footer.php";
?>