<?php
    require_once "connection.php";
    require_once "validation.php";
    
    $validated = true;
    $email = $gender = $username = $password = $retypePassword = "";
    $emailErr = $usernameErr = $passwordErr = $retypePasswordErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $retypePassword = $_POST['retypePassword'];

        // E-mail validation
        if(emailValidation($email)){
            $validated = false;
            $emailErr = emailValidation($email);
        }

        // Username validation
        if(usernameValidation($username, $conn)){
            $validated = false;
            $usernameErr = usernameValidation($username, $conn);
        }

        // Password validation
        if(passwordValidation($password)){
            $validated = false;
            $passwordErr = passwordValidation($password);
        }

        // Retype password
        if(passwordValidation($retypePassword)){
            $validated = false;
            $retypePasswordErr = passwordValidation($retypePassword);
        }

        // Password == Retype password
        if($password != $retypePassword){
            $validated = false;
            $retypePasswordErr = "Password and Retype password must be the same";
        }
        else {
            $password = md5($password);
        }

        //SQL ready variables
        $email = $conn->real_escape_string($email);
        $username = $conn->real_escape_string($username);
        $password = $conn->real_escape_string($password);

        if($validated){
            $query = "INSERT INTO `users`(`email`, `username`, `password`) 
            VALUES ('$email','$username','$password')";
            if($conn->query($query)){
                header('Location: login.php');
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
    <title>Projekat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br>
    <br>
    <form action="#" method="POST" class="font">
        <p class="form-group">
            <label for="">Userame:</label>
            <input type="text" class="form-control" name="username" id="">
            <span class="error">*<?php echo $usernameErr; ?></span>
        </p>
        <p class="form-group">
            <label for="">Email:</label>
            <input type="text" class="form-control" name="email" id="" value="<?php echo $email; ?>">
            <span class="error">*<?php echo $emailErr; ?></span>
        </p>
        <p class="form-group">
            <label for="">Password:</label>
            <input type="password" class="form-control" name="password" id="">
            <span class="error">*<?php echo $passwordErr; ?></span>
        </p>
        <p class="form-group">
            <label for="">Retype password:</label>
            <input type="password" class="form-control" name="retypePassword" id="">
            <span class="error">*<?php echo $retypePasswordErr; ?></span>
        </p>
        <p class="form-group">
            <input type="submit" class="form-control btn btn-primary" name="submit" value="Submit">
        </p>
        <p class="form-group">
            <input type="reset" class="form-control btn btn-dark" name="reset" value="Reset">
        </p>
    </form>

    
<?php 
    $email = $gender = $username = $password = $retypePassword = "";
    $emailErr = $usernameErr = $passwordErr = $retypePasswordErr = "";;
    require_once "footer.php";
?>