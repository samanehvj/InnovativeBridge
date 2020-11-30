<?php
include 'includes/functions.php';
include 'includes/head.php';
include 'includes/nav.php';

$con = connect();
?>
<div class="container min-vh-100">
	<div class="row  my-5 mx-1">
		<?php
		$query = "SELECT * FROM news WHERE id=" . $_GET['nid'];
		$news_result = mysqli_query($con, $query);

		$news = mysqli_fetch_assoc($news_result);

		?>
		<div class="col-md-6">
			<h2 class="text-center"><?= $news['title'] ?></h2>
			<h3><?= $news['publish_date'] ?></h3>
			<p><?= $news['body'] ?></p>
		</div>
		<div class="col-md-6 p-5">
			<div class="row">
				<a href="imgs/news/<?= $news['image'] ?>" data-fancybox="gallery"><img src="imgs/news/<?= $news['image'] ?>" class="larg-img img-fluid"></a>
			</div>
		</div> <!-- end of col-md-6 fancy box -->


	</div><!-- end of row -->
</div><!-- end of container -->

<?php
include 'includes/footer.php';
?>