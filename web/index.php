<!doctype html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="cover.css" rel="stylesheet">
	<title>Airport Database Access</title>
 </head>
<body class="text-center">
	<?php include 'connect.php'; ?>
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
		<header class="masthead mb-auto">
			<div class="inner">
				<h3 class="masthead-brand">Airport Database</h3>
				<nav class="nav nav-masthead justify-content-center">
					<a class="nav-link active" href="index.php">Home</a>
					<a class="nav-link" href="todays-flights.php">Today's Flights</a>
					<a class="nav-link" href="#">Contact</a>
				</nav>
			</div>
		</header>

		<main role="main" class="inner cover">
			<p class="lead">Welcome to the Airport Database access site. </p>
			<p class = "lead">Choose one of the options in the navbar to interact with the database.</p>
		</main>

		<footer class="mastfoot mt-auto">
			<div class="inner"></div>
		</footer>
    </div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 </body>
</html>
