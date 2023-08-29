<?php
$id = $_GET['id'];
//1.connect db
$host = "127.0.0.1";
$dbname = "category";
$dbuser = "root";
$dbpass = "";

$conn = new mysqli($host,$dbuser,$dbpass,$dbname);//host user pass name
if ($conn->connect_error) {
    die("Connect refused");
}
$sql = "delete from categories where id = $id";
$result = $conn->query($sql);
header("Location: category.php");
