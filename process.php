<?php

include 'db_connection.php';

if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $encrypt = sha1($password);
    $query = "SELECT * FROM user WHERE user_email = ? AND user_pass = ?";
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
        header('Refresh:2; url=curated.php', true, 303);
        echo "Successful sign";
        $_SESSION["loggedin"] = "true";

    }
}
?>
