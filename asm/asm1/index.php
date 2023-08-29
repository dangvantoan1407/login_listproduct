<!doctype html>
<html lang="en">
<head>
    <?php include("head.php")?>
</head>
<body>
<div class="container">
    <form method="post" action="store.php">
        <div class="mb-3">
            <label  class="form-label">Product</label>
            <input  name="product" type="text" class="form-control" placeholder="Enter product" required/>

        </div>
        <div class="mb-3">
            <label  class="form-label">Price</label>
            <input  name="price" type="number" class="form-control" placeholder="Enter price" required/>

        </div>
        <div class="mb-3">
            <label  class="form-label">Description</label>
            <textarea name="description" type="text" class="form-control" placeholder="Enter description"></textarea>

        </div>
        <div class="mb-3">
            <label  class="form-label">Qty</label>
            <input  name="qty" type="number" class="form-control" placeholder="Enter qty" required/>

        </div>

        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
