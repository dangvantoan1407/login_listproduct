<?php
include ("db.php");
session_start();
$conn = connect();
$user = isset($_SESSION["auth"])?$_SESSION["auth"]:null;

    $email = $user['email'];
    $passwordcu = $_POST['passwordcu'];
    $passwordmoi = $_POST['passwordmoi'];
    $confirm  = $_POST["confirm"];

$sql = "select * from signup where email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows >0) {
//       $user = $result->fetch_assoc();
       if (password_verify($passwordcu, $user['password'])) {
           $hashed_password = password_hash($passwordmoi, PASSWORD_BCRYPT);
           $sql_update = "UPDATE signup SET password = '$hashed_password' WHERE email = '$email'";
           $conn->query($sql_update);
               echo "đổi mật khẩu thành công";
               header("Location: login.php ");
           } else {
              die("password k chính xác");
           }

    }

//$email = $user["email"];
//$pass = $_POST["pass"];
//$newpass = $_POST["newpass"];
//
//$sql = "select * from listaccount where email = '$email' ";
//$result = $conn->query($sql);
//if ($result->num_rows >0) {
//    if ( $verify = password_verify($pass,$user["pass"])
//    ) {
//        $new_pass = password_hash($newpass,PASSWORD_BCRYPT);
//        $update_pass = "update listaccount set  pass = '$new_pass' where email = '$email'";
//        $conn->query($update_pass);
//        header("Location: login.php");
//    } else {
//        die("password k chính xác");
//    }
//}
//Viết cho Phạm Ngọc Chiến
//




