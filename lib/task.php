<?php
include_once('DB.php');
//receiving the data from index file
$task = $_POST['task'];

//Db connection
//const SERVER_NAME='localhost';
//const DB_USER_NAME='root';
//const PASSWORD='sangi2529';
//const DB_NAME='practice_test';

$db = new DB();

$result = $db->insertTask($task);
if($result==false){
    die('error in adding task');
}

/*$connection= new mysqli(SERVER_NAME,DB_USER_NAME,PASSWORD,DB_NAME);

if($connection->connect_error==true){
    die('connection failed');
}
//prepare sql query
$query = "insert into tasks(task) values ('${task}')";
if($connection->query($query)==false){
    die('error executing the query');
}
$result = $connection->query($query);

$connection->close();*/
$msg='task added';
header('LOCATION: ../index.php?taskAdded=1&msg='.$msg);

