<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<title>Official Homepage of HSPS Khunti</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 
</head>
<body>
<?php include 'menu.php'; ?>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/school.png" alt="School Building" width="1100" height="500">
       <div class="carousel-caption">
        <h3>School Building</h3>
        <p>Kadma Branch, Khunti</p>
      </div>  
    </div>
    <div class="carousel-item">
      <img src="images/two.png" alt="Annual Day" width="1100" height="500">
      <div class="carousel-caption">
         <h3>Annual Day 2019-20</h3>
        <p>Sunshine</p>
      </div>  
    </div>
    <div class="carousel-item">
      <img src="images/three.png" alt="Annual Day" width="1100" height="500">
      <div class="carousel-caption">
         <h3>Annual Day 2019-20</h3>
        <p>Sunshine</p>
      </div>  
    </div>
    <div class="carousel-item">
      <img src="images/four.png" alt="Annual Day" width="1100" height="500">
      <div class="carousel-caption">
         <h3>Annual Day 2019-20</h3>
        <p>Sunshine</p>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div> 

<section class="my-5">
	<div class="py-5">
	<div class="text-center">
		<h2> About Us </h2>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/principal1.jpg" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-4"> The Principal</h2>
			<p class="py-2"> Apart from being a basic need of every civilized society I would describe education as a choreographer that choreographs a society’s move in a perfect synchrony. It purges the society, trains the human souls in the pursuit of truth, practice of virtue, in the initiation of spiritual life and to nurture a sound body and a sound mind.<br> - Usha Devi
			</p>
			<a href="aboutus.php" class="btn btn-success">Know more</a>
		</div>
	</div>
 		</div>

</section>

<section class="my-5">
	<div class="py-5">
	<div class="text-center">
		<h2> Our Services </h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				 <div class="card" style="width:400px; height:350px">
    <img class="card-img-top" src="images/adm.jpg" alt="Card image" style="width:100%; height: 150px" >
    <div class="card-body">
      <h4 class="card-title">Admissions</h4>
      <p class="card-text">Admissions for class Nursery to VI are now open. Kindly visit the branch for more details.</p>
      <a href="#" class="btn btn-primary stretched-link">Know more</a>
    </div>
  </div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				 <div class="card" style="width:400px; height:350px">
    <img class="card-img-top" src="images/activities.jpg" alt="Card image" style="width:100%; height: 150px">
    <div class="card-body">
      <h4 class="card-title">Activities</h4>
      <p class="card-text">Several Co-Curricular activities were conducted in the school in the session 19-20.</p>
      <a href="#" class="btn btn-primary stretched-link">Know more</a>
    </div>
  </div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				 <div class="card" style="width:400px; height:350px">
    <img class="card-img-top" src="images/final.jpg" alt="Card image" style="width:100%; height: 150px">
    <div class="card-body">
      <h4 class="card-title">Final Exams</h4>
      <p class="card-text">Final Exams of class Nursery to VI will commence from February 28th, 2020.</p>
      <a href="#" class="btn btn-primary stretched-link">Know more</a>
    </div>
  </div>
			</div>
		</div>

	</div>

</div>
</section>





<footer>
	<p class="p-3 bg-dark text-white text-center">© Powered by: <a href="index.php">Holy Shrine Public School</a></p>
</footer>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>