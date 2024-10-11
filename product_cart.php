 <?php
session_start();
require('conn.php');
  if(isset($_POST['add'])){
    @$product=$_POST['product'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $query = "INSERT INTO products_cart (product_name,quantity,price)values('$product','$quantity','$price')";
    $result = mysqli_query($conn,$query);
    if($result){
      header('location:product_cart.php');
    }
}
  
?> 
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>product cart</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
  <link rel="icon" href="assets/images/cosmetics.png">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
   <!-- Bootstrap core CSS -->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>

<?php
  require('header.php');
  ?>


  <form action="product_cart.php" method="post" enctype="multipart/form-data">
<div class="container">
 <div class="row">
  <div class="col-lg-8 mt-5">
    <div class="mb-3 mt-5">
      <label for="" class="form-label">product name</label>
      <select
        class="form-select form-select-lg"
        name="product"
        id="">
        <option selected>select one</option>
        <option value="lipsticks">lipsticks</option>
        <option value="blush">blush</option>
        <option value="eye-liner">eye-liner</option>
        <option value="maskara">maskara</option>
        <option value="foundation">foundation</option>
        <option value="consealer">consealer</option>
        <option value="earring">earring</option>
        <option value="rings">rings</option>
        <option value="necklace">necklace</option>
        <option value="pins">pins</option>
        <option value="hairband">hairband</option>
        <option value="bracelets">bracelets</option>

</select>
    </div>
    <div class="mb-3 mt-5">
        <label for="" class="form-label">quantity</label>
        <input
            type="number"
            class="form-control"
            name="quantity"
            id=""
        />
    </div>
    <div class="mb-3 mt-5">
        <label for="" class="form-label">price</label>
        <input
            type="number"
            class="form-control"
            name="price"
            id=""
            value="2000"
        />
    </div>

  

    <input type="submit" value="add" name="add" class="btn btn-success" id="">
    
  </div>
 </div>
</div>
</form>

  <!-- show cart -->
<div class="container">
<div class="table-responsive">
        <table class="table table-primary mt-5">
        <thead>
    <tr>
        <th scope="col">products name</th>
        <th scope="col">quantity</th>
        <th scope="col">price</th>
    <th scope="col" colspan="2">action</th>
        
    </tr>
</thead>
            <h1 align="center">CART</h1>
<tbody>
    <?php
    $query="SELECT * from products_cart";
    $result = mysqli_query($conn,$query);
    while($data = mysqli_fetch_assoc($result)){
    ?>

    <!-- <th scope="col">products name</th>
    <th scope="col">description</th>
    <th scope="col">price</th>
    <th scope="col" colspan="2">action</th> -->


    <tr class="">
        <td scope="row"><?php echo $data['product_name']?></td>
        <td scope="row"><?php echo $data['quantity']?></td>
        <td scope="row"><?php echo $data['price']?></td>
        <td><a href="edit.php" class="btn btn-warning">EDIT</a> 
        <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger"
         onclick="return confirm('Are you sure you want to delete this item?');">DELETE</a>
    </td>
    </tr>
  <?php
    }
  ?>
</tbody>
</table>


   </div>
</div>

      <!-- footer start -->
      <?php
    // require('footer.php');
    ?>
<!-- footer end -->

  


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
</body>

</html>