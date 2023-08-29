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


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <h3>Register</h3>
        <form method="post" action="dbsignup.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">fullname </label>
                <input type="text" class="form-control" name="fullname" value="<?php echo (!empty($_POST['fullname']))?$_POST['fullname']:false; ?>"/>
                <br/>
                <?php

                echo (!empty($errors['fullname']['required']))?'<span style="color: red;">'.$errors['fullname']['required'].'</span>':false;
                echo (!empty($errors['fullname']['min']))?'<span style="color: red;">'.$errors['fullname']['min'].'</span>':false;
                ?>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" class="form-control" name="email" value="<?php echo (!empty($_POST['email']))?$_POST['email']:false; ?>"/>
                <br/>
                <?php

                echo (!empty($errors['email']['required']))?'<span style="color: red;">'.$errors['email']['required'].'</span>':false;
                echo (!empty($errors['email']['invaild']))?'<span style="color: red;">'.$errors['email']['invaild'].'</span>':false;
                ?>

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo (!empty($_POST['password']))?$_POST['password']:false; ?>"/>
                <?php

                echo (!empty($errors['password']['required']))?'<span style="color: red;">'.$errors['password']['required'].'</span>':false;
                echo (!empty($errors['password']['min']))?'<span style="color: red;">'.$errors['password']['min'].'</span>':false;
              ?>
            </div>
<!--            <div class="mb-3">-->
<!--                <label for="exampleInputPassword1" class="form-label">Check Password</label>-->
<!--                <input type="password" class="form-control" name="checkpassword" >-->
<!--            </div>-->

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>
</html>
