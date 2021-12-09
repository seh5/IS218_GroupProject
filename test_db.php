<?php
require_once "db.php";
require "newtask.php";

$mode = $_GET["case_label"];
switch ($mode) {
	case 'insert':
		//$date = date('Y-m-d',time());
        $product = new Products();
        $results = $product->iii_ins(00, 'TestUser', 'Test Task', 12.09.2021);
        $sql = "select taskNum, userID, task, taskDate from products";
        $results = runQuery($sql);
		/*;";
		$results = runQuery($sql);
		header("Location: index.php");*/
        //$results = runQuery($sql);
        if(count($results) > 0)
        {
            echo "<table border=\"1\"><tr><th>ID</th><th>CategoryID</th><th>productName</th><th>listPrice</th></tr>";
            foreach ($results as $row) {
                echo "<tr><td>".$row["productID"]."</td><td>".$row["categoryID"]."</td><td>".$row["productName"]."</td><td>".$row["listPrice"]."</td></tr>";
            }

        }else{
            echo '0 results';
        }
		break;
	case 'update':
		$fname = 'strat';
		$sql ="update tasks set tasknum = 2 where ";
		$results = runQuery($sql);
		header("Location: index.php");
		break;
	case 'delete':
        $product = new Products();
        $results = $product->ii_del('38', '');
        $sql = "select taskNum, userID, task, taskDate from products";
        $results = runQuery($sql);
        if(count($results) > 0)
        {
            echo "<table border=\"1\"><tr><th>ID</th><th>CategoryID</th><th>productName</th><th>listPrice</th></tr>";
            foreach ($results as $row) {
                echo "<tr><td>".$row["productID"]."</td><td>".$row["categoryID"]."</td><td>".$row["productName"]."</td><td>".$row["listPrice"]."</td></tr>";
            }

        }else{
            echo '0 results';
        }
		break;

	default:
		header("Location: errors.php");
		break;

}


?>