<?php
    require_once "header.php";
    require_once "validation.php";
    
    $validated = true;
    $name = $surname = $gender = $dob = $username = $password = $retypePassword = "";
    $nameErr = $surnameErr = $dobErr = $usernameErr = $passwordErr = $retypePasswordErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $retypePassword = $_POST['retypePassword'];

        // Name validation
        if(textValidation($name)){
            $validated = false;
            $nameErr = textValidation($name);
        }
        else {
            $name = trim($name); //Odsecanje praznina pre i nakon stringa
            $name = preg_replace('/\s\s+/', ' ', $name); //Odsecanje duplih praznina unutar stringa
        }

        // Surname validation
        if(textValidation($surname)){
            $validated = false;
            $surnameErr = textValidation($surname);
        }
        else {
            $surname = trim($surname); //Odsecanje praznina pre i nakon stringa
            $surname = preg_replace('/\s\s+/', ' ', $surname); //Odsecanje duplih praznina unutar stringa
        }

        // Date of birth validation
        if(dobValidation($dob)){
            $validated = false;
            $dobErr = dobValidation($dob);
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
        $name = $conn->real_escape_string($name);
        $surname = $conn->real_escape_string($surname);
        $gender = $conn->real_escape_string($gender);
        $dob = $conn->real_escape_string($dob);
        $username = $conn->real_escape_string($username);
        $password = $conn->real_escape_string($password);
        $retypePassword = $conn->real_escape_string($retypePassword);
    }
?>
<br>
    <form action="#" method="POST" class="font">
        <p>
            <label for="">Name:</label>
            <input type="text" name="name" id="" value="<?php echo $name; ?>">
            <span class="error">*<?php echo $nameErr; ?></span>
        </p>
        <p>
            <label for="">Surname:</label>
            <input type="text" name="surname" id="" value="<?php echo $surname; ?>">
            <span class="error">*<?php echo $surnameErr; ?></span>
        </p>
        <p>
            <label for="">Gender:</label>
            <input type="radio" name="gender" id="" value="m">Male
            <input type="radio" name="gender" id="" value="f">Female
            <input type="radio" name="gender" id="" value="o" checked>Other
        </p>
        <p>
            <label for="">Date of birth:</label>
            <input type="date" name="dob" min="1900-01-01" id="" value="<?php echo $dob; ?>">
        </p>
        <p>
            <label for="">Userame:</label>
            <input type="text" name="username" id="">
            <span class="error">*<?php echo $usernameErr; ?></span>
        </p>
        <p>
            <label for="">Password:</label>
            <input type="password" name="password" id="">
            <span class="error">*<?php echo $passwordErr; ?></span>
        </p>
        <p>
            <label for="">Retype password:</label>
            <input type="password" name="retypePassword" id="">
            <span class="error">*<?php echo $retypePasswordErr; ?></span>
        </p>
        <p>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="reset" value="Reset">
        </p>
    </form>

    <p class="font">
        <?php 
            if($validated && !empty($name)){
                $q1 = "INSERT INTO users (username, password) VALUES ('$username', '$password');";
                $conn->query($q1);
                    
                $q2 = "SELECT id FROM users WHERE `username` LIKE '$username';";
                $result = $conn->query($q2);
                if($result->num_rows){
                    foreach($result as $row){
                        $user_id = $row['id'];
                    }
                }

                $q3 = "INSERT INTO profiles (name, surname, gender, dob, user_id) VALUES ('$name', '$surname', '$gender', '$dob', '$user_id');";
                if($conn->query($q3)){
                    echo "***Successful registration";
                }
            }
            $name = $surname = $gender = $dob = $username = $password = $retypePassword = "";
            $nameErr = $surnameErr = $dobErr = $usernameErr = $passwordErr = $retypePasswordErr = "";
        ?>
    </p>





    </body>
</html>