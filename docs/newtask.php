<?php
#db.php file

require_once "db.php";

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "tskmgr"; // fill in your database name containing tables: products and categories
$conn = NULL;


/* 1 : This homework should be based on the tables: products and categories in demo
   sql script and the code in week 11 lab. */

/* 2 : Please write some php code to create a class “products”: (45)*/
#Class and Objects Slide 7
class Products{
/* 2a : Create 4 property: categoryID, ProductCode, ProductName, listPrice*/
#Class and Objects Slide 7

    public $taskNum;
    public $userID;
    public $task;
    public $taskDate;

/* 2b : Create four functions in the class which can do the following four tasks
    i. Display all products (whole records) in the table products
    ii. Delete one product
    iii. Insert a new product with values for all columns
    iv. Update a product’s name
*/
#Class and Objects Slide 7
    public function i_display($taskNum, $userID, $task, $taskDate){

        $this->taskNum=$taskNum;
        $this->userID=$userID;
        $this->task=$task;
        $this->taskDate=$taskDate;
        $sql = "insert into products (taskNum, userID, task, taskDate) values ('$taskNum','$userID', '$task', '$taskDate')";
        $results = runQuery($sql);
        return $results;

    }

    public function ii_del($taskNum, $task){
        $sql ="delete from tasks where task = '$task' ";
        $results = runQuery($sql);
        return $results;

    }

    public function iii_ins($taskNum,$userID, $task, $taskDate){

        $this->taskNum=$taskNum;
        $this->userID=$userID;
        $this->task=$task;
        $this->taskDate=$taskDate;
        $sql = "insert into products (taskNum, userID, task, taskDate) values ('$taskNum','$userID', '$task', '$taskDate')";
        $results = runQuery($sql);
        return $results;
    }



    public function iv_update($taskNum,$userID, $task, $taskDate){
        $sql = "insert into products (taskNum, userID, task, taskDate) values ('$taskNum','$userID', '$task', '$taskDate')";
        $results = runQuery($sql);
        return $results;
        $this->task=$task;

    }
}

/* 3 : Create a new class: named “categories” (45)*/
class categories{
/* 3a : Create 3 properties based on column names*/
    public $taskNum, $task, $taskDate;
/* 3b : Create four functions in the class which can do the following four tasks:
        i. Display all records in categories table
        ii. Delete one category
        iii. Insert a new category
        iv. Update a category*/
    /* 4 : Create objects and call objects to show the results
of 2 and 3 in tables. (10)*/

    public function i_display($taskNum,$userID, $task, $taskDate){

        $this->categoryID=$CategoryID;
        $this->prodCode=$prodCode;
        $this->productName=$productName;
        $this->listPrice=$listPrice;

    }

    public function ii_del($prodCode, $productName){

        $this->prodCode=$prodCode;
        $this->productName=$productName;

    }

    public function iii_ins($categoryID, $prodCode, $productName, $listPrice){

        $this->categoryID=$categoryID;
        $this->prodCode=$prodCode;
        $this->productName=$productName;
        $this->listPrice=$listPrice;

    }

    public function iv_update($productName){

        $this->productName=$productName;

    }
}
?>