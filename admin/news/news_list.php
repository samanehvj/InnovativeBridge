<?php
include '../../includes/functions.php';
include '../../includes/head.php';
include '../../includes/nav.php';

$query = "SELECT * FROM news ORDER BY id DESC";
$news_results = mysqli_query($con, $query);
if (isset($_GET['success'])) {
    echo "<div class='alert alert-success' role='alert'>
    News Deleted Successfully!
  </div>";
} elseif (isset($_GET['error'])) {
    echo "<div class='alert alert-danger' role='alert'>
    News Can not delete !
    </div>";
}

?>
<div class="container">
    <a class="btn btn-success col-md-2 offset-md-8 my-5" href="admin/news/news_add.php">Add News</a>
    <table class="table table-striped table-responsive-md">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Image</th>
                <th scope="col">Date</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            while ($news = mysqli_fetch_assoc($news_results)) {
            ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $news['title'] ?></td>
                    <td><?= substr($news['body'], 0, 200) ?></td>
                    <td><img src="<?= $URL . 'imgs/news/' . $news['image'] ?>" width="200" height="150" /></td>
                    <td><?= $news['publish_date'] ?></td>
                    <td><a class="btn btn-info" href="admin/news/news_edit.php?id=<?= $news['id'] ?>">Edit</a></td>
                    <td><a class="btn btn-danger" href="admin/news/news_delete.php?id=<?= $news['id'] ?>">Delete</a></td>
                </tr>
            <?php
                $i++;
            }
            ?>

        </tbody>
    </table>
</div>
<?php
include '../../includes/footer.php';
?>