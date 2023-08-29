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
    $product = $result->fetch_assoc();
} else{
    die("404 NOT FOUND");
}
?>
<!doctype html>
<html lang="en">
<head>
    <?php include("head.php")?>
</head>
<body>
<div class="container">
    <form method="post" action="update.php?id=<?php echo $id;?> ">

        <div class="mb-3">
            <label  class="form-label">Product</label>
            <input value="<?php echo $product['name']?>" name="product" type="text" class="form-control" placeholder="Enter product">

        </div>
        <div class="mb-3">
            <label  class="form-label">Price</label>
            <input  name="price" type="number" class="form-control" placeholder="Enter price" value="<?php echo $product['price']?>">

        </div>
        <div class="mb-3">
            <label  class="form-label">Description</label>
            <input  name="description" type="text" class="form-control" placeholder="Enter description" value="<?php echo $product['description']?>">

        </div>
        <div class="mb-3">
            <label  class="form-label">Qty</label>
            <input  name="qty" type="number" class="form-control" placeholder="Enter qty" value="<?php echo $product['qty']?>">

        </div>

        <button name="submit" type="submit" class="btn btn-primary" >Submit</button>
    </form>
</div>

</body>
</html>
