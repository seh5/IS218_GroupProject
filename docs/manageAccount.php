<?php
require_once "db.php";

if(isset($_POST['username'])){
    //validating username input
    if (!preg_match('/[\'^$%&*()}{@#~?<>,|=_+¬-]/', $_POST['username'])||
        strpos($_POST['username'],'..') != false ||
        strpos($_POST['username'], '.') == 0 ||
        strpos($_POST['username'], '.') == strlen($_POST['username'])-1 || $_POST['username'] == "leslie") {
        echo "Your New Username is invalid. Please Enter a Username that meets the above requirements";
    }
    else{
        echo "Your username has been changed";
    }
}
if(isset($_POST['password']) && isset($_POST['new'])) {
    //validating password input
    if ($password != 'certain password') {
        echo "The Password you entered is incorrect, please enter your current password";
    }
    if (strlen($_POST['new']) < 8 || strlen($_POST['new']) > 30
        || preg_match('/0123456789/', $_POST['new']) == false) {
        echo "Your New Password is invalid. Please enter a password that meets the above requirements";
    }
}
/*
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_REQUEST['username'] == 'admin' && $_REQUEST['password'] == 'admin') {
        return 'login done';
    }
    else {
        return 'invalid user';
    }
}
*/
?>