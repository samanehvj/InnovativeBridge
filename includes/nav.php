
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="index.php">
    <img src="imgs/logo.png" width="110" height="80"  alt="Innovative Bridge Logo">
  </a>
  <a href="contact.php#cta" class="btn align-middle btn-info ml-auto mr-3 order-lg-last" type="button">Call Us Now</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item  
      <?php 
      if(basename($_SERVER['PHP_SELF'], '.php') == 'index' ) { 
        echo 'active'; 
      }
      ?>
      ">
      <a class="nav-link" href="index.php">Home </a>
    </li>
    
    <li class="nav-item dropdown <?php 
    if(basename($_SERVER['PHP_SELF'], '.php') == 'service' ) { 
      echo 'active'; 
    }
    ?>
    ">
    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Services
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" href="service.php">Our Services</a>
      <?php
      $con = connect();
      $query = "SELECT * FROM services";
      $service_result = mysqli_query($con, $query);
      while ($service = mysqli_fetch_assoc($service_result)) {
        ?>
        <a class="dropdown-item" href="service.php?sid=<?=$service['id']?>"><?= $service['name'] ?></a>
        <?php
      }
      ?>
    </div>
  </li>

  <li class="nav-item <?php 
  if(basename($_SERVER['PHP_SELF'], '.php') == 'team' ) { 
    echo 'active'; 
  }
  ?>
  ">
  <a class="nav-link" href="team.php">Team</a>
</li>
<li class="nav-item <?php 
if(basename($_SERVER['PHP_SELF'], '.php') == 'news' ) { 
  echo 'active'; 
}
?>
">
<a class="nav-link" href="news.php">News</a> 
</li>
<li class="nav-item <?php 
if(basename($_SERVER['PHP_SELF'], '.php') == 'contact' ) { 
  echo 'active'; 
}
?>
">
<a class="nav-link " href="contact.php">Contact</a>
</li>
<!-- </li> -->
</ul>
</div>
</nav>


