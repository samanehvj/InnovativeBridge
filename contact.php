<?php
include 'includes/functions.php';
include 'includes/head.php';
include 'includes/nav.php';

$con = connect();
$query = "SELECT image FROM hero_images WHERE page_name='contact'";
$hero_result = mysqli_query($con, $query);
$hero = mysqli_fetch_assoc($hero_result);
?>

<div class="hero container-fluid text-center">
	<img src="imgs/heros/<?= $hero['image']?>" class="img-fluid">
</div>


<div class="row my-5 mx-1 ">
	<?php
	$query = "SELECT * FROM offices";
	$office_result = mysqli_query($con, $query);
	while($office = mysqli_fetch_assoc($office_result))
	{
		?>
		<div class="card col-md-3 my-3" >
			<img class="card-img-top" src="imgs/offices/<?=$office['image']?>">
			<div class="card-body">
				<h5 class="card-title"><?=$office['name']?></h5>
				<h6 class="card-subtitle mb-2 text-muted"><?=$office['location']?></h6>
				<p class="card-text"><?=$office['about']?></p>

			</div>
			<div class="card-footer">
				<?= $office['email'] ?> <br> <?= $office['phone'] ?>
			</div>
		</div>
		<?php
	}
	?>
	
</div> <!-- end of row -->




<!--====================Map======================-->
<div class="row">
	<div class="col-sm-10 offset-sm-1">
	<iframe src="https://www.google.com/maps/d/embed?mid=1Sl-6nBztI1JVcUYZJ6dUccXNVDDBtzrE&hl=en" width="100%" height="480"></iframe>
</div>
</div>

<!--=====================Form======================-->

<div class="row mx-1 ">
<div class="container-form col-md-8 offset-md-2">
	<h3 id="cta">Get In touch with me  </h3>
	<form>
		<label for="fname">First Name</label>
		<input type="text" id="fname"name="firstname" placeholder="Your first name.." >

		<label for="lname">Last Name</label>
		<input type="text" id="lname" name="lastname" placeholder="Your last name..">

		<label for="email">Email</label>
		<input type="text" id="lname" name="email" placeholder="Your email ..">


		<label for="subject">Subject</label>
		<textarea id="subject" name="subject" placeholder="Hello...." style="height:200px"></textarea>

		<button onclick="alertFunction()">Submit</button>
	</form>
</div>
</div>
<script type="text/javascript">

</script>


<?php
include 'includes/footer.php';
?>