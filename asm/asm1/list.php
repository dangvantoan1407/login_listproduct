<?php
//get products form db
  //1.connect db
  $host = "127.0.0.1";
  $dbname = "t2210a_php";
  $dbuser = "root";
  $dbpass = "";

  $conn = new mysqli($host,$dbuser,$dbpass,$dbname);//host user pass name
  if ($conn->connect_error) {
      die("Connect refused");
  }
  //connection succeed

  //2.query db
     $sql = "select * from products";
    $result = $conn->query($sql);
    $products = [];
    if ($result->num_rows>0){
         while ($row = $result->fetch_assoc()) {
             $products[] = $row;

         }
    }

?>
<!doctype html>
<html lang="en">
<head>
    <?php include("head.php")?>
</head>
<body>
 <section>
     <div class="container">
         <form action="" method="post">
             <button class="btn btn-primary"><a href="index.php" class="text-light"  >Create</a></button>
             <table class="table">
                 <thead>
                 <tr>
                     <th scope="col">Id</th>
                     <th scope="col">Product</th>
                     <th scope="col">Price</th>
                     <th scope="col">Description</th>
                     <th scope="col">Qty</th>
                     <th scope="col">Operations</th>
                 </tr>
                 </thead>
                 <tbody>
                   <?php foreach ($products as $item): ?>
                     <tr>
                         <td><?php echo $item['id'] ?></td>
                         <td> <?php echo $item['name'] ?></td>
                         <td> <?php echo $item['price'] ?></td>
                         <td><?php echo $item['description'] ?></td>
                         <td><?php echo $item['qty'] ?></td>

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