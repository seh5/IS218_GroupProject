<?php
// define variables and set to empty values
$emailErr = $userErr = $passwordErr = $cpasswordErr = $firstErr = $lastErr = "";
$email = $username = $password = $cpassword = $firstname = $lastname = "";

// The preg_match() function searches a string for pattern, returning true if the pattern exists, and false otherwise.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Validates email
    if (empty($_POST["email"])) {
        $emailErr = "Please enter your email";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address syntax is valid
        if (!preg_match("#[@.]+#",$email)) {
            $emailErr = "Please enter a valid email address";
        }
    }
    //Validates Username
    if (empty($_POST["username"])) {
        $userErr = "Please enter your username";
        if(preg_match("#[&=_'–+,<>]+#",$username)){
            $passwordErr = "Your password can not contain these characters: &=_'-+,<>";
        }
    } else {
        $username = test_input($_POST["username"]);
    }

    //Validates password & confirm passwords.
    if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
        $password = test_input($_POST["password"]);
        $cpassword = test_input($_POST["cpassword"]);
        if (strlen($_POST["password"]) < '8') {
            $passwordErr = "Password must contain at least 8 characters";
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            $passwordErr = "Password must include at least one number";
        }
        elseif(!preg_match("#[A-Z]+#",$password)) {
            $passwordErr = "Password must include at least one capital letter";
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            $passwordErr = "Password must include at least one lowercase letter";
        }
    }
    elseif(!empty($_POST["password"])) {
        $cpasswordErr = "Please check if you have entered or confirmed your password";
    } else {
        $passwordErr = "Please enter password ";
    }

    //Validates firstname
    if (empty($_POST["firstname"])) {
        $firstErr = "Please enter your first name";
    } else {
        $firstname = test_input($_POST["firstname"]);
        //Checks if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
            $firstErr = "Only letters and white space are allowed";
        }
    }
    if (empty($_POST["lastname"])) {
        $lastErr = "Please enter your last name";
    } else {
        $lastname = test_input($_POST["lastname"]);
        //Checks if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
            $lastErr = "Only letters and white space are allowed";
        }
    }
}
/*Each $_POST variable with be checked by the function*/
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>