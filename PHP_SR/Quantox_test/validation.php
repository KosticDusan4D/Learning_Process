<?php

require_once "connection.php";

function emailValidation($email){
    if(empty($email)){
        return "E-mail is required";
    }
    elseif(preg_match('/\s/',$email)){
        return "E-mail can't contain blanks";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return "Invalid e-mail format";
    }
    else{
        return false;
    }
}



function usernameValidation($username, $conn){
    $q = "SELECT `username`
          FROM `users`
          WHERE `username` LIKE '$username'";

    $result = $conn->query($q);

    if(empty($username)){
        return "This field can't be empty!";
    }
    elseif(preg_match('/\s/',$username)){
        return "Username can't contain spaces";
    }
    elseif($result->num_rows) {
        return "The username you entered already exists";
    }
    elseif(strlen($username) < 5 || strlen($username) > 50){
        return "Username must be between 5 and 50 characters";
    }
    else{
        return false;
    }
}

function passwordValidation($pass){
    if(empty($pass)){
        return "This field can't be empty!";
    }
    elseif(preg_match('/\s/',$pass)){
        return "Password can't contain blanks";
    }
    elseif(strlen($pass) < 5 || strlen($pass) > 25){
        return "Password must be between 5 and 25 characters";
    }
    else{
        return false;
    }
}

?>