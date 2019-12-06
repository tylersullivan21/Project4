<?php
    session_start();
    include 'include/header.php';
    $title = "News For You - Forum";
    include "include/news.css";
    $rsslink = "https://www.espn.com/espn/rss/news";



   /* if (isset($_SESSION[LoggedIn])) {
        echo "N e w s";
    } else {
        echo "Redirect";
    }*/

    include "include/db_connection.php";

    $user = $_SESSION["username"];

    $query = "SELECT ID FROM user WHERE mail = '$user'";
    $result = mysqli_query($connect, $query) or die("SQL Error @tags");

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"];
        }
    } else {
        echo "0 results";
    }

    /*This is the idea, check the query for which tags and then selection which would be echo'd for the user. We will create an rss feed*/


?>
    <head><link rel="stylesheet" href="css/news.css"></head>
    <body>

<main class="news-wrapper"> 

<section class="content-1">
    <p><blockquote class="embedly-card" data-card-key="ebb7de6b6ca24fff80d7dd010fad7fee" data-card-controls="0"><h4><a href="<?php echo $rsslink ?>"></a></h4><p></p></blockquote>
<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script></p>
</section>

<section class="content-2">
    <p><blockquote class="embedly-card" data-card-key="ebb7de6b6ca24fff80d7dd010fad7fee" data-card-controls="0"><h4><a href="<?php echo $rsslink ?>"></a></h4><p></p></blockquote>
<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script></p>
</section>

<section class="content-3">
    <p><?php echo $_SESSION["userID"]; ?></p>
</section>
</main>





<?php
include 'include/footer.php';
?>

</body>
</html>