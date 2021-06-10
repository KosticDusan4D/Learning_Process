<?php
    session_start();
    require_once "connection.php";

    // Changes to the nav bar in case that user is logged in or not
    $search = "<li class='nav-item'><a class='nav-link' href='login.php'>Search</a></li>";
    if(isset($_SESSION['id'])){
        $search = "<li class='nav-item'><a class='nav-link' href='search.php'>Search</a></li>";
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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <?php echo $search; ?>
                
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
        </ul>
        </nav>
    </div>

    <h1 class="indexh1">Welcome</h1>
<?php
    require_once "footer.php";
?>