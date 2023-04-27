<?php

if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];


        
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($email, $username, $pwd) !== false) {
        header("location: ../index.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../index.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../index.php?error=invalidemail");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../index.php?error=usernametaken");
        exit();
    }

    createUser($conn, $email, $username, $pwd);

}
else {
    header("location: ../index.php");
}



?>