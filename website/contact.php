<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<title>Contact</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
</head>
<body>

<?php include 'menu.php'; ?>

<section class="my-5">
	<div class="py-3">
	<div class="text-center">
		<h2> Contact Us </h2>
	</div>
	</div>
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
            <div class="form-group">
				<label>E-mail</label>
				<input type="email" name="email" autocomplete="off" class="form-control">
			</div>
            <div class="form-group">
				<label>Mobile</label>
				<input type="phone" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Address</label>
				<textarea class="form-control" name="address"></textarea>
			</div>
			<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</section>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <footer>
	<p class="p-3 bg-dark text-white text-center">© Powered by: <a href="index.php">Holy Shrine Public School</a></p>
</footer>
</body>
</html>