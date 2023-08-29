<?php
$sv = [
    "name"=> 'dang van toan',
    "age" => 18,
    "email"=> "dangvantoan@gmail.com"
];

$list = [
    [
        "name"=>"   Nguyen Van A",
        "age"=>18,
        "email" =>"nguyenvana@gmail.com"
    ],
    [
        "name"=>"Nguyen Van B",
        "age"=>19,
        "email" => "nguyenvanb@gmail.com"
    ]
]

?>
<!doctype html>
<html lang="en">
<head>
    <?php include ("head.php")?>
</head>
<body>
<?php include("nav.php") ?>
  <h1>Student List</h1>
   <h2>Tên sinh viên: <?php echo $sv["name"]?></h2>
  <?php if ($sv["age"] ==18) : ?>
      <h3>Thằng ngu chiến</h3>
      <h3>Thằng ngu chiến</h3>
      <h3>Thằng ngu chiến</h3>

 <?php endif; ?>
  <a href="form.php" class="btn btn-primary">Create new student</a>

  <table class="table">
      <thead>
      <tr>
          <th scope="col">#</th>
          <th scope="col">Fullname</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
      </tr>

      </thead>

      <tbody>
      <?php foreach ($list as $item):
          ?>
      <tr>


          <td><?php echo $item["name"];?></td>
          <td><?php echo $item["age"];?></td>
          <td><?php echo $item["email"];?></td>
      </tr>

      <?php endforeach ?>
      </tbody>

  </table>

</body>
</html>
