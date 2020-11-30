<?php
include 'includes/functions.php';
include 'includes/head.php';
include 'includes/nav.php';

$con = connect();
$query = "SELECT image FROM hero_images WHERE page_name = 'index'";
$hero_result = mysqli_query($con, $query);
$hero = mysqli_fetch_assoc($hero_result);
?>


<div class="hero container-fluid text-center">
	<img src="imgs/heros/<?= $hero['image'] ?>" class="img-fluid">
</div>


<div class="container">
	<?php
	$query = "SELECT * FROM offices WHERE id=1";

	$office_result = mysqli_query($con, $query);
	$office = mysqli_fetch_assoc($office_result);
	?>
	<div class="row my-5 mt-5">
		<div class="col-md-6">
			<img class="img-fluid" src="imgs/offices/<?= $office['image'] ?>">
		</div> <!-- end of hero image  -->

		<div class="col-md-6">
			<h2><?= $office['name'] ?></h2>
			<p><?= substr($office['about'], 0, 400) ?> ...</p>
			<div class="col-md-6 offset-md-3">
				<a href="contact.php" class="btn btn-success btn-lg btn-block active" role="button" aria-pressed="true"> Our Offices</a>
			</div>
		</div>
	</div>

	<?php
	$query = "SELECT * FROM project_videos LIMIT 1";
	$video_result = mysqli_query($con, $query);
	$video = mysqli_fetch_assoc($video_result);
	?>
	<div class="row my-5">

		<div class="col-md-6 order-md-2">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="<?= $video['url'] ?>" allowfullscreen></iframe>
			</div>

		</div>

		<div class="col-md-6 order-md-1">
			<h2><?= $video['title'] ?></h2>
			<p><?= substr($video['description'], 0, 400) ?> ...</p>
			<div class="col-md-6 offset-md-3">
				<a href="project_detail.php?pid=<?= $video['project_id'] ?>" class="btn btn-success btn-lg btn-block active" role="button" aria-pressed="true">More Details</a>
			</div>
		</div>
	</div>

	<?php
	$query = "SELECT * FROM news LIMIT 1";
	$news_result = mysqli_query($con, $query);
	$news = mysqli_fetch_assoc($news_result);
	?>
	<div class="row my-5">
		<div class="col-md-6">
			<img class="img-fluid" src="imgs/news/<?= $news['image'] ?>">
		</div>
		<div class="col-md-6">
			<h2><?= $news['title'] ?></h2>
			<p><?= substr($news['body'], 0, 400) ?> ...</p>
			<div class="col-md-6 offset-md-3">
				<a href="news.php" class="btn btn-success btn-lg btn-block active" role="button" aria-pressed="true">More News</a>
			</div>

		</div>
	</div>

	<div class="row my-5">

		<div class="w-100">
			<div class="slideshow-container">
				<?php
				$query = "SELECT * FROM slides";

				$sliders = mysqli_query($con, $query);

				while ($slide = mysqli_fetch_assoc($sliders)) {
				?>
					<div class="mySlides fading">
						<img src="imgs/slide/<?= $slide['image'] ?>" style="width:100%">
					</div>
				<?php
				}
				?>

				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>

			</div>
			<br>


		</div>
	</div>

</div>

<?php
include 'includes/footer.php';
?>