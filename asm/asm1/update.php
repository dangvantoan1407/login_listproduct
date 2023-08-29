<?php
$id = $_GET['id'];

//1.connect db
$host = "127.0.0.1";
$dbname = "t2210a_php";
$dbuser = "root";
$dbpass = "";

$conn = new mysqli($host,$dbuser,$dbpass,$dbname);//host user pass name
if ($conn->connect_error) {
    die("Connect refused");
}

$sql = "select * from products where id = $id";
$result = $conn->query($sql);
$product = null;
if ($result->num_rows >0) {
   $new_name = $_POST["product"];
   $new_price = $_POST["price"];
    $new_qty = $_POST["qty"];
    $new_des = $_POST["description"];
    $update_sql = "update products set name='$new_name',price=$new_price,qty=$new_qty, description = '$new_des' where id = $id";
    $conn->query($update_sql);
    header("Location: list.php");
} else{
    die("404 NOT FOUND");
}
?>
