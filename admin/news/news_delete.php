<?php
include '../../includes/functions.php';
$con = connect();
$query = "SELECT * FROM news WHERE id='" . $_GET["id"] . "'";
$res = mysqli_query($con, $query);
$news = mysqli_fetch_assoc($res);

if (unlink("../../imgs/news/" . $news['image'])) {
    $sql = "DELETE FROM news WHERE id='" . $_GET["id"] . "'";

    $success = mysqli_query($con, $sql);
} else {
    $success = FALSE;
}



if ($success) {
    header("location: news_list.php?success=1");
} else {
    header("location: news_list.php?error=1");
}
