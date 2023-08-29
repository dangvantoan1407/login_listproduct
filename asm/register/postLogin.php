<?php
session_start();
require "db.php";
$conn = connect();

$email = $_POST["email"];
$password = $_POST["password"];





//1.Tìm email xem có hay không
//Nếu khoong có thì báo: tài khoản hoặc mật khẩu k đúng
$sql_check = " select * from signup where email = '$email' limit 1";

$result = $conn->query($sql_check);

if ($result->num_rows ==0) {
    die("tài khoản hoặc mật khẩu không đúng ");
}
$user = $result->fetch_assoc();
//2. compare password
 $verify = password_verify($password,$user["password"]);
if ($verify) {
 $_SESSION["auth"] = $user;
 header("Location: list.php ");
} else{
    die("Tài khoản hoặc mật khẩu không đúng");
}

