<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link type="text/css" href="cover.css" rel="stylesheet">
	<title>Airport Database Access</title>
</head>
<body>
	<?php include('connect.php'); ?>
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
		<header class="masthead mb-auto">
			<div class="inner">
				<h3 class="masthead-brand">Airport Database</h3>
				<nav class="nav nav-masthead justify-content-center">
					<a class="nav-link" href="index.php">Home</a>
					<a class="nav-link active" href="todays-flights.php">Today's Flights</a>
					<a class="nav-link" href="example-queries.php">Example Queries</a>
				</nav>
			</div>
		</header>
	
		<div class="container">
		<!-- table displays today's flights -->
			<div>
				<table class="table table-bordered" table style="line-height: 1.0">
					<th>Flight ID</th>
					<th>Estimated Departure</th>
					<th>Delayed?</th>
					<th>Cancelled?</th>
					<th>Origin</th>
					<th>Destination</th>
					<?php
					$query = 'SELECT * FROM airport_database.TodaysFlights';
					$result = $conn->query($query);
					while ($row = $result->fetch_array()) {
						print '<tr>';
						print '<td>' . $row["FlightID"] . '</td><td>' . $row["EstDeparture"] . '</td><td>' . (boolval($row["Delay"]) ? '&check;' : '	&#x2717') . '</td><td>' . (boolval($row["Cancelled"]) ? '&check;' : '	&#x2717') . '</td><td>' . $row["Origin"] . '</td><td>' . $row["Desination"] . '</td>';
						print '</tr>';
					}
					?>
				</tbody>
				</table>
			</div>
		</div>
		
		<footer class="mastfoot mt-auto">
			<div class="inner"></div>
		</footer>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
