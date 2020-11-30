<?php
include 'includes/functions.php';
include 'includes/head.php';
include 'includes/nav.php';

$con = connect();
?>
<div class="container min-vh-100">

	<?php
	
		$query = "SELECT * FROM projects WHERE id=" . $_GET['pid'];
		$project_result = mysqli_query($con, $query);

		$project = mysqli_fetch_assoc($project_result);

		$query = "SELECT * FROM project_images WHERE project_id=" . $_GET['pid'];
		$image_result = mysqli_query($con, $query);
		?>
		<div class="row my-5 mx-1">

			<div class="col-md-6">
				
				<h2 class="text-center"><?= $project['name'] ?></h2>
				<h3><?= $project['location'] ?></h3>
				<p><?= $project['description'] ?></p>
			</div>
			<div class="col-md-6 p-5">
				<div class="row">
					<a href="imgs/projects/<?= $project['image'] ?>" data-fancybox="gallery"><img src="imgs/projects/<?= $project['image'] ?>" class="larg-img img-fluid" ></a>
				</div>
				<div class="row">
					<?php

					while ($image = mysqli_fetch_assoc($image_result)) {
						?>		<div class="col">
							<a href="imgs/projects/<?= $image['image'] ?>" data-fancybox="gallery"><img src="imgs/projects/<?= $image['image'] ?>" class="small-img img-thumbnail"></a>
						</div>

						<?php
					}
					?>
				</div>
			</div> <!-- end of col-md-6 fancy box -->
		</div><!-- end of row -->
<!-- 	<div class="row">
	-->		<?php 

	$query = "SELECT * FROM project_videos WHERE project_id=" . $_GET['pid'];

	$video_result = mysqli_query($con, $query);


	while ($video = mysqli_fetch_assoc($video_result)) {
		?>
		<div class="card my-3">
			<div class="row no-gutters">
				<div class="col-md-4">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="<?= $video['url'] ?>" allowfullscreen></iframe>
					</div>
					
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title"><?= $video['title'] ?></h5>
						<p class="card-text"><?=$video['description']?></p>
					</div>
				</div>
			</div>
		</div>

		<?php
	}
	?>



<!-- 		</div>





</div><!-- end of container -->

<?php
include 'includes/footer.php';
?>