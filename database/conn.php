<?php

$server = "student-db";
$username = "root";
$password = "DB_PASSWD";
$dbname = "studentRecord";

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e){
    echo $e->getMessage();
}

require_once 'CRUD.php';
require_once 'User.php';
require_once 'DBTable.php';

$crud =  new CRUD($conn);
$user = new User($conn);
$table = new DBTable($conn);

?>
