<?php

// register functions
function emptyInputSignup($email, $username, $pwd) {
    $result = false;
    if (empty($username) || empty($email) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result = false;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}

function invalidEmail($email) {
    $result = false;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}



function createUser($conn, $email, $username, $pwd) {
    $sql = "INSERT INTO users (usersEmail, usersUid, pwd) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $email, $username, $pwd);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    header("location: ../index.php?error=none");
    exit();
}


// login functions
function emptyInputLogin($username, $pwd) {
    $result = false;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false) {
        echo '<script>alert("Username/email does not exist!")</script>';
        exit();
    }

    $pwdHashed = $uidExists["pwd"];
    if ($pwdHashed === "qwer1234"){
        echo '<script>alert("that is awkward")</script>';
    } else {
        echo '<script>alert("checking")</script>';
    }

    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        echo '<script>alert("wrong password")</script>';
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../index.php");
        exit();
    }
}