<?php
include 'includes/functions.php';
include 'includes/head.php';
include 'includes/nav.php';

$con = connect();
$query ="SELECT image FROM hero_images WHERE page_name = 'services'";
$hero_result = mysqli_query($con, $query);
$hero = mysqli_fetch_assoc($hero_result);
?>

<div class="hero container-fluid text-center">
	<img src="imgs/heros/<?= $hero['image']?>" class="img-fluid">
</div>

<div class="container">
	<?php 
	if(isset($_GET['sid'])) {
		$query = "SELECT * FROM projects WHERE service_id=" . $_GET['sid'];
		$project_result = mysqli_query($con,$query);
		while ($project = mysqli_fetch_assoc($project_result)) {

			?>
			<div class="card mt-5 mb-5">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img src="imgs/projects/<?= $project['image'] ?>" class="card-img" alt="<?= $project['name'] ?>">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><?= $project['name'] ?></h5>
							<p class="card-text"><?= substr($project['description'], 0, 300)?> ...</p>
							<a href="project_detail.php?pid=<?= $project['id'] ?>" class="card-link">Read more</a>
						</div>
					</div>
				</div>
			</div>


			<?php
		} // end of while
	} else {
		?>
		<h2 class="text-center m-5">Our Services</h2>
		<div class="row my-5">
			<?php
			$query = "SELECT * FROM services";
			$service_result = mysqli_query($con, $query);
			while ($service = mysqli_fetch_assoc($service_result)) {
				?>
				<div class="card col-md-4 p-2 " >
					<img class="card-img-top" src="imgs/projects/<?= $service['image']?>">
					<div class="card-body">
						<h5 class="card-title"><?=$service['name']?></h5>
						<p class="card-text"><?=$service['bio']?></p>
						<a href="service.php?sid=<?=$service['id']?>" class="btn btn-primary">See More</a>
					</div>
				</div>
				<?php
			}
			?>	

		</div><!-- end of row -->

		<?php
	}
	?>
</div><!-- end of container -->
<?php
include 'includes/footer.php';
?>