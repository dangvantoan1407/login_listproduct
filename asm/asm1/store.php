<?php
$p_name= $_POST["product"];
$p_price = $_POST["price"];
$p_des = $_POST["description"];
$p_qty = $_POST["qty"];
//1.connect db
$host = "127.0.0.1";
$dbname = "t2210a_php";
$dbuser = "root";
$dbpass = "";

$conn = new mysqli($host,$dbuser,$dbpass,$dbname);//host user pass name
if ($conn->connect_error) {
    die("Connect refused");
}

$sql = "insert into products(name, price,qty,description) values ('$p_name',$p_price,$p_qty,'$p_des')";
$conn->query($sql);

header("Location: list.php");
