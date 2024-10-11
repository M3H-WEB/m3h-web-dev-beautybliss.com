<?php
session_start();
require('conn.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
  }
  if(isset($_POST['update'])){
    $id = $_POST['id'];
    $product=$_POST['product'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $query = "UPDATE products_cart SET  product_name = '$product', quantity = '$quantity',price = '$price' where id = '$id'";
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
  <link rel="icon" href="assets/images/cosmetics.png">
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
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

<?php
    $query="SELECT * from products_cart";
    $result = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($result);
    ?>
  <form action="edit.php" method="post" enctype="multipart/form-data">
<div class="container">
 <div class="row">
  <div class="col-lg-8 mt-5">
    <div class="mb-3 mt-5">
    <input type="hidden" name="id" value="<?php echo $data['id']?>">
      <label for="" class="form-label">product name</label>
      <select
        class="form-select form-select-lg"
        name="product"
        id="">
        value="<?php echo $data['product_name'] ?>";
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
        value="<?php echo $data['quantity'] ?>";
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
        value="<?php echo $data['price'] ?>"
        />
    </div>
    <input type="submit" value="add" name="update" class="btn btn-success" id="">    
  </div>
 </div>
</div>
</form>

  
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
   <?php
//   }
// }else{
// header('location:authentication-login.php');
// }
?> 
</body>

</html>