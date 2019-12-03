<?php
    session_start();
   
    $title = "News For You - Forum";
    include "include/news.css";

   /* if (isset($_SESSION[LoggedIn])) {
        echo "N e w s";
    } else {
        echo "Redirect";
    }*/

    include "include/db_connection.php";

    $query = "SELECT ID FROM user WHERE mail = 'yoandy.vargas@icloud.com'";
    mysqli_query($connect, $query) or die("SQL Error @tags");




?>
    <head><link rel="stylesheet" href="css/news.css"></head>
    <body>

<main class="news-wrapper"> 

<section class="content-1">
    <p><?php echo $test;?></p>
</section>

<section class="content-2">
    <p>feed2</p>
</section>

<section class="content-3">
    <p>feed3</p>
</section>
</main>





<?php
include 'include/footer.php';
?>

</body>
</html>