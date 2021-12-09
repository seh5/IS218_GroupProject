<?php
require 'db.php' ;
$sql = "select taskNum, userID, task, taskDate from tasks";
$results = runQuery($sql);
if(count($results) > 0)
{
	echo "<table border=\"1\"><tr><th>taskNum</th><th>userID</th><th>task</th><th>taskDate</th></tr>";
	foreach ($results as $row) {
		echo "<tr><td>".$row["#"]."</td><td>".$row["User"]."</td><td>".$row["Task"]."</td><td>".$row["Date"]."</td></tr>";
	}
	
}else{
    echo '0 results';
}
?>