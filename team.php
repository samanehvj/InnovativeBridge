<?php
include 'includes/functions.php';
include 'includes/head.php';
include 'includes/nav.php';

$con = connect();
$query = "SELECT image FROM hero_images WHERE page_name = 'team'";
$hero_result = mysqli_query($con, $query);
$hero = mysqli_fetch_assoc($hero_result);
?>

<div class="hero container-fluid text-center">
	<img src="imgs/heros/<?= $hero['image'] ?>" class="img-fluid">
</div>

<h4>Our Team</h4>
<div class="container">
	<?php
	$query = "SELECT * FROM team_members WHERE id=1";

	$team_result = mysqli_query($con, $query);
	$team = mysqli_fetch_assoc($team_result);
	?>



	<div class="card-group">
		<div class="card mt-5 ">
			<img src="imgs/team/<?= $team['image'] ?>" class="card-img" alt="<?= $team['team_member'] ?>">
			<div class="card-body">
				<h2><?= $team['full_name'] ?></h2>
				<h5 class="card-title"><?= $team['title'] ?></h5>
				<p class="card-text"><?= $team['bio'] ?></p>
			</div>
		</div>

		<?php
		$query = "SELECT * FROM team_members WHERE id=2";

		$team_result = mysqli_query($con, $query);
		$team = mysqli_fetch_assoc($team_result);
		?>


		<div class="card mt-5">
			<img src="imgs/team/<?= $team['image'] ?>" class="card-img" alt="<?= $team['team_member'] ?>">
			<div class="card-body">
				<h2><?= $team['full_name'] ?></h2>
				<h5 class="card-title"><?= $team['title'] ?></h5>
				<p class="card-text"><?= $team['bio'] ?></p>
				</p>

			</div>
		</div>
		<?php
		$query = "SELECT * FROM team_members WHERE id=3";

		$team_result = mysqli_query($con, $query);
		$team = mysqli_fetch_assoc($team_result);
		?>

		<div class="card mt-5">
			<img src="imgs/team/<?= $team['image'] ?>" class="card-img" alt="<?= $team['team_member'] ?>">
			<div class="card-body">
				<h2><?= $team['full_name'] ?></h2>
				<h5 class="card-title"><?= $team['title'] ?></h5>
				<p class="card-text"><?= $team['bio'] ?></p>
				</p>

			</div>
		</div>
	</div>




	<?php
	$query = "SELECT * FROM team_members WHERE id=4";

	$team_result = mysqli_query($con, $query);
	$team = mysqli_fetch_assoc($team_result);
	?>



	<div class="card-group">
		<div class="card mt-5">
			<img src="imgs/team/<?= $team['image'] ?>" class="card-img" alt="<?= $team['team_member'] ?>">
			<div class="card-body">
				<h2><?= $team['full_name'] ?></h2>
				<h5 class="card-title"><?= $team['title'] ?></h5>
				<p class="card-text"><?= $team['bio'] ?></p>
				</p>
			</div>
		</div>

		<?php
		$query = "SELECT * FROM team_members WHERE id=5";

		$team_result = mysqli_query($con, $query);
		$team = mysqli_fetch_assoc($team_result);
		?>


		<div class="card mt-5">
			<img src="imgs/team/<?= $team['image'] ?>" class="card-img" alt="<?= $team['team_member'] ?>">
			<div class="card-body">
				<h2><?= $team['full_name'] ?></h2>
				<h5 class="card-title"><?= $team['title'] ?></h5>
				<p class="card-text"><?= $team['bio'] ?></p>
				</p>

			</div>
		</div>
		<?php
		$query = "SELECT * FROM team_members WHERE id=6";

		$team_result = mysqli_query($con, $query);
		$team = mysqli_fetch_assoc($team_result);
		?>

		<div class="card mt-5 ">
			<img src="imgs/team/<?= $team['image'] ?>" class="card-img" alt="<?= $team['team_member'] ?>">
			<div class="card-body">
				<h2><?= $team['full_name'] ?></h2>
				<h5 class="card-title"><?= $team['title'] ?></h5>
				<p class="card-text"><?= $team['bio'] ?></p>
				</p>

			</div>
		</div>
	</div>




</div>

<?php
include 'includes/footer.php';
?>