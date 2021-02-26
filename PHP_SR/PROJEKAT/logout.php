<?php
    session_start();
    if(isset($_SESSION['id'])){
        $_SESSION = array(); // session_unset() je isto sto i ovo
        session_destroy();
    }

    header("Location: index.php");

?>