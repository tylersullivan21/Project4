<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
    include("nav.php");
?>

<?php
if (isset($_POST['submit'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordSecured = sha1($password);


    include "db_connection.php";

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


    echo "<h4>You have successfully created an account! You will be redirected in 5 seconds.</h4>";

    $_SESSION["loggedIn"] = "true";
}
?>

<body>


<!------ Include the above in your HEAD tag ---------->
<form action="" method="POST">
<label for="email"></label>
<input type="email" name="email">
<label for="password"></label>
<input type="password">

<label for="sports">Sports</label>
<input type="checkbox" name="sports" checked>

<label for="sports">Tech</label>
<input type="checkbox" name="tech" checked>

<label for="sports">Music</label>
<input type="checkbox" name="music" checked>
     <input type="submit" class="btn btn-success" name="submit" value="Register">

</form>
<footer id="footer" class="footer">
        <p class="copyright" href="#">&copy Forum 2019</p>
</footer>
</body>
</html>