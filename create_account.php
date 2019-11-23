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

    //Regular Expressions checks for emails and password lengths to be added afterwards
    //Keeping Simple for testing Database and User Content Logic


    include "db_connection.php";

    $newUser = "INSERT INTO user_creds (user_email, user_pass) VALUES (?, ?)";

    //Prepared Statement for user credentials input into database
    $stmt = mysqli_stmt_init($connect);
    if (!mysqli_stmt_prepare($stmt, $newUser)) {
        echo "SQL ERROR";
    } else {
        mysqli_stmt_bind_param($stmt, "ss", $email, $passwordSecured);
        mysqli_stmt_execute($stmt);
        mysqli_close($connect);
    }
}
?>

<body>


<!------ Include the above in your HEAD tag ---------->
<label for="email"></label>
<input type="email" name="email">
<label for="password"></label>
<input type="password">

<label for="sports">Sports</label>
<input type="checkbox" name="sports">

<label for="sports">Tech</label>
<input type="checkbox" name="sports">

<label for="sports">Music</label>
<input type="checkbox" name="sports">
     <input type="submit" class="btn btn-success" name="submit" value="Register">

</form>
<footer id="footer" class="footer">
        <p class="copyright" href="#">&copy Forum 2019</p>
</footer>
</body>
</html>