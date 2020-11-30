<?php
include '../../includes/functions.php';
include '../../includes/head.php';
include '../../includes/nav.php';


if (isset($_POST['title'])) {

    $target_dir = "../../imgs/news/";
    $img = basename($_FILES["image"]["name"]);
    $target_file = $target_dir . $img;

    $query = "INSERT INTO news 
    (title, body, image, publish_date) 
    VALUES ('" . $_POST['title'] . "','" . $_POST['content'] . "','" . $img . "','" . $_POST['date'] . "')";

    if (mysqli_query($con, $query)) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "<div class='alert alert-success' role='alert'>
            News Added Successfully!
          </div>";
        } else {
            echo "<div class='alert alert-danger' role='alert'>
            Can not Upload News Image 
          </div>";
        }
    } else {
        echo "<div class='alert alert-danger' role='alert'>
            Can not Add News 
          </div>";
    }
}

?>
<div class="container">
    <a class="btn btn-success col-md-2 offset-md-8 my-5" href="admin/news/news_list.php">Back to News</a>

    <form method="post" enctype="multipart/form-data" action="<?= $URL ?>admin/news/news_add.php" class="my-5">
        <div class="form-group">
            <label for="title">News Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="date">Publish Date</label>
            <input name="date" type="date" class="form-control" id="date">
        </div>
        <div class="form-group">
            <label for="content">News Body</label>
            <textarea name="content" class="form-control" id="content" rows="3"></textarea>
        </div>


        <div class="form-group">
            <label for="image">Image</label>
            <input name="image" type="file" class="form-control-file" id="image">
        </div>

        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
</div>
<?php
include '../../includes/footer.php';
?>