<?php
//get products form db
//1.connect db
$host = "127.0.0.1";
$dbname = "category";
$dbuser = "root";
$dbpass = "";

$conn = new mysqli($host,$dbuser,$dbpass,$dbname);//host user pass name
if ($conn->connect_error) {
    die("Connect refused");
}
//connection succeed

//2.query db
$sql = "select * from categories";
$result = $conn->query($sql);
$category = [];
if ($result->num_rows>0){
    while ($row = $result->fetch_assoc()) {
        $category[] = $row;

    }
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
<section>
    <div class="container">
        <form action="" method="post">
            <button class="btn btn-primary"><a href="create.php" class="text-light"  >Create</a></button>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($category as $item): ?>
                    <tr>
                        <td><?php echo $item['id'] ?></td>
                        <td> <?php echo $item['name'] ?></td>
                        <td> <?php echo $item['slug'] ?></td>


                        <td>
                            <a href="edit.php?id=<?php echo $item["id"] ?>" class="btn btn-warning">Edit</a>
                            <a onclick="return confirm('Chắc chắn muốn xoá sản phẩm: <?php echo $item["name"] ?>')" href="delete.php?id=<?php echo $item["id"] ?>" class="btn btn-danger">Delete</a>
                        </td>
                        </td>

                    </tr>
                <?php endforeach;?>


                </tbody>
            </table>
            <form/>
    </div>
</section>
</body>
</html>