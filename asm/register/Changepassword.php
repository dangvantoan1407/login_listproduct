<?php

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
<?php include("nav.php") ?>

<div class="container">
    <h3>Đổi mật khẩu </h3>
    <?php
    if (isset($error)) {
        echo '<p style="color: red;">' . $error . '</p>';
    } elseif (isset($success)) {
        echo '<p style="color: green;">' . $success . '</p>';
    }
    ?>
    <form method="post" action="postPw.php">
<!--        <div class="mb-3">-->
<!--            <label for="exampleInputEmail1" class="form-label">Email </label>-->
<!--            <input type="email" name="email">-->
<!---->
<!--        </div>-->
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password Cũ</label>
            <input type="password" name="passwordcu">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password Mới</label>
            <input type="password" name="passwordmoi">
        </div>
<!--        <div class="mb-3">-->
<!--            <label for="exampleInputPassword1" class="form-label">Xác nhận Password Mới</label>-->
<!--            <input type="password" name="confirm">-->
<!--        </div>-->

        <button type="submit" class="btn btn-primary" name="doimatkhau" value="Đổi mật khẩu">Submit</button>
    </form>
</div>

</body>
</html>

