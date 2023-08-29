<?php
require "db.php";
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

$conn = connect();
//create

//1 Kiểm tra email đã có hay chưa
$sql_check = "select * from signup where email = '$email'";

if ($conn->query($sql_check)->num_rows>0) {
    die("Email is existed");
}
//2. email chưa đăng kí thì hash password
$hashed_password = password_hash($password,PASSWORD_BCRYPT);

$sql = "insert into signup(fullname, email, password)  values ('$fullname', '$email','$hashed_password')";
$conn->query($sql);
header("local: form.php");
