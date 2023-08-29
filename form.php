<!doctype html>
<html lang="en">
<head>
    <?php include ("head.php")?>
</head>
<body>
<?php include("nav.php") ?>
 <div class="container">
     <form action="store.php" method="post">
     <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Email address</label>
         <input name="email" type="text" class="form-control" id="exampleInputEmail1" >
         <div id="emailHelp" class="form-text">Well never....</div>
     </div>
     <div class="mb-3">
         <label class="form-label">Fullname</label>
         <input name="fullname" type="text" class="form-control" >
     </div>
     <div class="mb-3">
         <label class="form-label">Age</label>
         <input name="age" type="number" class="form-control" >
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
     </form>
 </div>

</body>
</html>
