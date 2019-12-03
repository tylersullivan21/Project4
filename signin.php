<?php
session_start();

include "include/db_connection.php";

if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $encrypt = sha1($password);
    $query = "SELECT * FROM user WHERE mail = ? AND pw = ?";
    $stmt = mysqli_stmt_init($connect);

    if (!mysqli_stmt_prepare($stmt, $query)) {
        echo "SQL statement error";
    } else {
        mysqli_stmt_bind_param($stmt, "ss", $email, $encrypt);
        mysqli_stmt_execute($stmt);
        $validate = mysqli_stmt_get_result($stmt);
    }
    if (mysqli_num_rows($validate) == 1) {

         // Test Sign in functionality -- more code to come
        header('Refresh:1; url=news.php', true, 303);
        $_SESSION["loggedIn"] = true;
        $_SESSION["username"] = $email;

    }
}
?>
