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
		<header class="masthead">
			<div class="inner">
				<h3 class="masthead-brand">Airport Database</h3>
				<nav class="nav nav-masthead justify-content-center">
					<a class="nav-link" href="index.php">Home</a>
					<a class="nav-link" href="todays-flights.php">Today's Flights</a>
					<a class="nav-link active" href="#">Example Queries</a>
				</nav>
			</div>
		</header>
	
		<div class="container">
			<div class="accordion" id="accordion">
			
				<div class="card">
					<div class="card-header" id="headingOne">
						<h5 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								Which flights departed from Airport KJFK?
							</button>
						</h5>
					</div>

					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							<table class="table table-bordered">
								<th>Flight ID</th>
								<th>Destination</th>
								<th>Origin</th>
								<th>Flight Date</th>
								<?php
									$query = 'SELECT FlightID, Desination, Origin, FlightDate FROM airport_database.Flight WHERE Origin = \'KJFK\'';
									$result = $conn->query($query);
									while ($row = $result->fetch_array()) {
										print '<tr>';
										print '<td>' . $row["FlightID"] . '</td><td>' . $row["Desination"] . '</td><td>' . $row["Origin"] . '</td><td>' . $row["FlightDate"] . '</td>';
										print '</tr>';
									}
								?>
							</table>
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header" id="headingTwo">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								How many Sky Marshals were present on flight HO1123?
							</button>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<div class="card-body">
							<?php
								$query = 'SELECT Count(*) FROM airport_database.Protects WHERE FlightID = \'HO1123\'';
								$result = $conn->query($query);
								while ($row = $result->fetch_array()) {
									print $row[0] . " Sky Marshals:";
								}
							?>
							<table class="table table-bordered">
								<th>Flight ID</th>
								<th>Badge #</th>
								<?php
									$query = 'SELECT * FROM airport_database.Protects WHERE FlightID = \'HO1123\'';
									$result = $conn->query($query);
									while ($row = $result->fetch_array()) {
										print '<tr>';
										print '<td>' . $row[0] . '</td><td>' . $row[1] . '</td>';
										print '</tr>';
									}
								?>
							</table>
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header" id="headingThree">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								How many flights happening today?
							</button>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						<div class="card-body">
							<?php
								$query = 'SELECT Count(*) FROM airport_database.Flight WHERE FlightDate = CURDATE()';
								$result = $conn->query($query);
								while ($row = $result->fetch_array()) {
									print $row[0] . " ";
								}
							?>
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header" id="headingFour">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								Which Airport has the most Gates?
							</button>
						</h5>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
						<div class="card-body">
							<?php
								$query = 'SELECT ID, Gates FROM airport_database.Airport WHERE Gates = (SELECT MAX(Gates) FROM airport_database.Airport)';
								$result = $conn->query($query);
								while ($row = $result->fetch_array()) {
									print $row["ID"] . ": " . $row["Gates"] . " Gates";
								}
							?>
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header" id="headingFive">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								How many Airports are currently available to receive flights?
							</button>
						</h5>
					</div>
					<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
						<div class="card-body">
							<?php
								$query = 'SELECT Count(*) FROM airport_database.Airport WHERE Available = 1';
								$result = $conn->query($query);
								while ($row = $result->fetch_array()) {
									print $row[0] . " Airports:<br>";
								}
							?>
							<table class="table table-bordered">
								<th>Airport ID</th>
								<th>Gates</th>
								<th>Runway Space</th>
								<th>International</th>
								<th>Available</th>
								<?php
									$query = 'SELECT * FROM airport_database.Airport WHERE Available = 1';
									$result = $conn->query($query);
									while ($row = $result->fetch_array()) {
										print '<tr>';
										print '<td>' . $row["ID"] . '</td><td>' . $row["Gates"] . '</td><td>' . $row["RunwaySpace"] . '</td><td>' . (boolval($row["International"]) ? '&check;' : '	&#x2717') . '</td><td>' . (boolval($row["Available"]) ? '&check;' : '	&#x2717') . '</td>';
										print '</tr>';
									}
								?>
							</table>
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header" id="headingSix">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
								How many Employees does Plane JE1515 require to be functional?
							</button>
						</h5>
					</div>
					<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
						<div class="card-body">
							<?php
								$query = 'SELECT NecessaryCrew FROM airport_database.Plane WHERE SerialNumber = \'JE1515\'';
								$result = $conn->query($query);
								while ($row = $result->fetch_array()) {
									print $row[0] . " Crew Members";
								}
							?>
						</div>
					</div>
				</div>
				
				
				<div class="card">
					<div class="card-header" id="headingSeven">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
								How many Pilots are available with more than 750 Flight Hours?
							</button>
						</h5>
					</div>
					<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
						<div class="card-body">
							<table class="table table-bordered">
								<th>Pilot Name</th>
								<th>Flight Hours</th>
								<?php
									$query = 'SELECT FirstName, LastName, FlightHours FROM airport_database.Employee e INNER JOIN airport_database.Pilot p ON e.EmployeeID = p.EmployeeID WHERE e.Available = 1 AND p.FlightHours > 750';
									$result = $conn->query($query);
									while ($row = $result->fetch_array()) {
										print '<tr>';
										print '<td>' . $row["LastName"] . ', ' . $row["FirstName"] . '</td><td>' . $row["FlightHours"] . '</td>';
										print '</tr>';
									}
								?>
						</div>
					</div>
				</div>
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
