<?php
include '../../includes/functions.php';
include '../../includes/head.php';
include '../../includes/nav.php';

$query = "SELECT * FROM news WHERE id='" . $_GET['id'] . "'";
$res = mysqli_query($con, $query);
$news = mysqli_fetch_assoc($res);

if (isset($_POST['title'])) {

    $target_dir = "../../imgs/news/";
    $img = basename($_FILES["image"]["name"]);
    $target_file = $target_dir . $img;

    $query = "UPDATE news SET 
    title='" . $_POST['title'] . "', 
    body='" . $_POST['content'] . "', 
    image='" . $img . "', 
    publish_date='" . $_POST['date'] . "'
    WHERE id='" . $_GET['id'] . "'";

    if (mysqli_query($con, $query)) {
        unlink("../../imgs/news/" . $news['image']);
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "<div class='alert alert-success' role='alert'>
                    News Edited Successfully!
                </div>";
        } else {
            echo "<div class='alert alert-danger' role='alert'>
                Can not Upload News Image 
            </div>";
        }

        $query = "SELECT * FROM news WHERE id='" . $_GET['id'] . "'";
        $res = mysqli_query($con, $query);
        $news = mysqli_fetch_assoc($res);
    } else {
        echo "<div class='alert alert-danger' role='alert'>
            Can not Edit News 
          </div>";
    }
}

?>
<div class="container">
    <a class="btn btn-success col-md-2 offset-md-8 my-5" href="admin/news/news_list.php">Back to News</a>

    <form method="post" enctype="multipart/form-data" action="<?= $URL ?>admin/news/news_edit.php?id=<?= $news['id'] ?>" class="my-5">
        <div class="form-group">
            <label for="title">News Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Title" value="<?= $news['title'] ?>">
        </div>
        <div class="form-group">
            <label for="date">Publish Date</label>
            <input name="date" type="date" class="form-control" id="date" value="<?= $news['publish_date'] ?>">
        </div>
        <div class="form-group">
            <label for="content">News Body</label>
            <textarea name="content" class="form-control" id="content" rows="3"><?= $news['body'] ?></textarea>
        </div>


        <div class="form-group">
            <label for="image">Image</label>
            <input name="image" type="file" class="form-control-file" id="image">
        </div>
        <img src="<?= $URL . "imgs/news/" . $news['image'] ?>">

        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
</div>
<?php
include '../../includes/footer.php';
?>