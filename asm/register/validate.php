<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
//khai báo mảng erro để chứa lỗi
$errors = [];
//validate fullname
if (empty($_POST['fullname'])){
    $errors['fullname'] ['required'] = 'Họ tên không được để trống ';

}else{
    if (strlen(trim($_POST['fullname']))<5) { // lọc kí tự
        $errors['fullname'] ['min'] = 'Họ tên phải lớn hơn 5 kí tự ';
    }
}

//email
if (empty($_POST['email'])){
    $errors['email'] ['required'] = 'Email không được để trống ';

}else{
    if (!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)) {
        $errors['email'] ['invaild'] = 'Email không hợp lệ ';
    }
}
if (empty($_POST['password'])){
    $errors['password'] ['required'] = 'Password không được để trống ';

}else {
    if (strlen($_POST['password']) < 8 || strlen($_POST['password']) > 16) {
        $errors['password'] ['min'] = "Password should be min 8 characters and max 16 characters";
    }
    if (!preg_match("/\d/", $_POST['password'])) {
        $errors['password'] ['min'] = "Password should contain at least one digit";
    }
    if (!preg_match("/[A-Z]/", $_POST['password'])) {
        $errors['password'] ['min'] = "Password should contain at least one Capital Letter";
    }
    if (!preg_match("/[a-z]/", $_POST['password'])) {
        $errors['password'] ['min'] = "Password should contain at least one small Letter";
    }
    if (!preg_match("/\W/", $_POST['password'])) {
        $errors['password'] ['min'] = "Password should contain at least one special character";
    }
    if (preg_match("/\s/", $_POST['password'])) {
        $errors['password'] ['min'] = "Password should not contain any white space";
    }

    if ($errors) {
        foreach ($errors as $error) {
            echo $error . "\n";
        }
        die();
    } else {
        echo "$errors => MATCH\n";
    }
}
}




