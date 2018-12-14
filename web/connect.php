<!-- This creates the connection string used by the website to connect to the database -->
<?php
//$servername = "/cloudsql/airportdatabase:us-east1:airportdatabase";
//$username = "root";
//$password = "";

// Create connection
//$conn = new mysqli($servername, $username, $password);
$conn = new mysqli(null, 'root', null, 'airport_database', null, '/cloudsql/aiportdatabase:us-east1:airportdatabase');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->select_db("airport_database");
?>