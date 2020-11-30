<?php
include 'includes/functions.php';
include 'includes/head.php';
include 'includes/nav.php';
?>
<div class="container">
	<?php
	$query = "SELECT * FROM news";
	$news_result = mysqli_query($con, $query);
	while ($news = mysqli_fetch_assoc($news_result)) {

	?>
		<div class="card my-3">
			<div class="row no-gutters">
				<div class="col-md-4">
					<img src="imgs/news/<?= $news['image'] ?>" class="card-img" alt="<?= $news['name'] ?>">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title"><?= $news['title'] ?></h5>
						<p class="card-text"><?= substr($news['body'], 0, 300) ?> ...</p>
						<a href="news_detail.php?nid=<?= $news['id'] ?>" class="card-link">Read more</a>
					</div>
				</div>
			</div>
		</div>


	<?php
	} // end of while
	?>
</div>
<?php
include 'includes/footer.php';
?>