<?php

require_once "db.php";

$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$UNchange = $_REQUEST['username'];
while (preg_match('/[\'^$%&*()}{@#~?<>,|=_+¬-]/', $UNchange)!=false ||
    strpos($UNchange, '.') == 0 ||
    strpos($UNchange, '.') == strlen($UNchange)-1 || $UNchange == "leslie") {
    break;
    echo "Your New Username is invalid. Please Enter a Username that meets the above requirements";

}
$password = $_REQUEST['password'];
$newPW = $_REQUEST['new'];
while($password!='certain password')
{
    break;
    echo "The Password you entered is incorrect, please enter your current password";
}
while(strlen($newPW) < 8 || strlen($newPW) > 30
    || preg_match('0123456789',$newPW) == false)
{
break;
    echo "Your New Password is invalid. Please enter a password that meets the above requirements";
}

if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
    if ($_REQUEST['username'] == 'admin' && $_REQUEST['password'] == 'admin') {
        return 'login done';
    }
    else {
        return 'invalid user';
    }
}
?>