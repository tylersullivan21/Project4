<?php

include "include/db_connection.php";



if (isset($_POST['signup'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordSecured = sha1($password);


    $newUser = "INSERT INTO user (mail, pw) VALUES (?, ?)";
    $stmt = mysqli_stmt_init($connect);
    if (!mysqli_stmt_prepare($stmt, $newUser)) {
        echo "SQL ERROR";
    } else {
        mysqli_stmt_bind_param($stmt, "ss", $email, $passwordSecured);
        mysqli_stmt_execute($stmt);
    }

    $last_id = mysqli_insert_id($connect);
    $userID = $last_id;

    if (isset($_POST['sports'])) {
        $query = "INSERT INTO user_tag (user_id, tag_id) VALUES ('$userID', '1')";
        mysqli_query($connect, $query) or die("SQL Error @tags");
    }
    if (isset($_POST['tech'])) {
        $query = "INSERT INTO user_tag (user_id, tag_id) VALUES ('$userID', '2')";
        mysqli_query($connect, $query) or die("SQL Error @tags");
    }
    if (isset($_POST['music'])) {
        $query = "INSERT INTO user_tag (user_id, tag_id) VALUES ('$userID', '3')";
        mysqli_query($connect, $query) or die("SQL Error @tags");
    }

    mysqli_close($connect);

    echo $email;
    echo $userID;
    echo "<h4>You have successfully created an account! You will be redirected in 5 seconds.</h4>";
    $_SESSION["loggedIn"] = "true";
}
?>