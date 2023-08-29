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
    $category = $result->fetch_assoc();
} else{
    die("404 NOT FOUND");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <form method="post" action="update.php?id=<?php echo $id;?> ">

        <div class="mb-3">
            <label  class="form-label">Name</label>
            <input value="<?php echo $category['name']?>"  name="name" type="text" class="form-control" placeholder="Enter name">

        </div>



        <button name="submit" type="submit" class="btn btn-primary" >Submit</button>
    </form>
</div>

</body>
</html>

