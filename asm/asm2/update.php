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

$sql = "select * from categories where id = $id";
$result = $conn->query($sql);
$category = null;
if ($result->num_rows >0) {
    $new_name = $_POST["name"];
    $new_slug = $_POST["slug"];

    $update_sql = "update categories set name='$new_name', slug = '$new_slug' where id = $id";
    $conn->query($update_sql);
    header("Location: category.php");
} else{
    die("404 NOT FOUND");
}
?>
