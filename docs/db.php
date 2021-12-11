<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "tskmgr"; // fill in your database name containing tables: products and categories
$conn = NULL;
try
{
    $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
	if($conn != null){echo "Hey there, you're connected :)";}
}
catch(PDOException $e)
{
	// echo "Connection failed: " . $e->getMessage();
	http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
}

// Runs SQL query and returns results (if valid)
function runQuery($query) {

    try {
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "tskmgr"; // fill in your database name containing tables: products and categories
		$conn = NULL;
		$conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
		$q = $conn->prepare($query);
		$q->execute();
		$results = $q->fetchAll();
		$q->closeCursor();
		return $results;
	} catch (PDOException $e) {
		http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
	}
}

function http_error($message)
{
	header("Content-type: text/plain");
	die($message);
}

?>