<?php
require('conn.php');
  if(isset($_POST['add'])){
    @$cate=$_POST['cate'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $dob=$_POST['db'];
    @$gender=$_POST['gender'];
    $ad1=$_POST['ad1'];
    $ad2=$_POST['ad2'];
    @$city=$_POST['city'];
    @$payment=$_POST['payment'];
    $query = "INSERT INTO costumer_form(`category`,`name`,`email`,`phone`,`date_of_birth`,`gender`,`address1`,
    `address2`,`city`,`payment`)values('$cate','$name','$email','$phone' , '$dob', '$gender', '$ad1', 
    '$ad2', '$city', '$payment')";
    $result = mysqli_query($conn,$query);
    if($result){
      header('location:costumer_form.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/cosmetics.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <?php
  require('header.php');
  ?>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/jkl.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Dolore doloribus sint</h4>
              <h2>FORM</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="products call-to-action">
      <div class="container">
        <div class="inner-content">
          <div class="contact-form">
                   <div class="row " >
                        <div class="col-sm-6 col-xs-12 mt-4">
                             <div class="form-group">
                                  <label class="control-label">category:</label>
                                  <select class="form-control"  name="cate" data-msg-required="This field is required.">
                                       <option value="">-- Choose --</option>
                                       <option value="cosmetics">cosmetics</option>
                                       <option value="jewellery">jewellery</option>
                                  </select>
                             </div>
                        </div>
                        <div class="col-sm-6 col-xs-12 mt-4">
                             <div class="form-group">
                                  <label class="control-label">Name:</label>
                                  <input type="text" class="form-control" name="name">
                             </div>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-sm-6 col-xs-12 mt-4">
                             <div class="form-group">
                                  <label class="control-label">Email:</label>
                                  <input type="email" class="form-control" name="email">
                             </div>
                        </div>
                        <div class="col-sm-6 col-xs-12 mt-4">
                             <div class="form-group">
                                  <label class="control-label">Phone:</label>
                                  <input type="number" class="form-control" name="phone">
                             </div>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-sm-6 col-xs-12 mt-4">
                             <div class="form-group">
                                  <label class="control-label">date-of-birth:</label>
                                  <input type="number" class="form-control" name="db">
                             </div>
                        </div>
                        <div class="col-sm-6 col-xs-12 mt-4">
                             <div class="form-group">
                             <label class="control-label" >Gender:</label>
                             <select class="form-control" name="gender" data-msg-required="This field is required.">
                                       <option value="">-- Choose --</option>
                                       <option value="male">male</option>
                                       <option value="female">female</option>
                                  </select>
                             </div>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-sm-6 col-xs-12 mt-4">
                             <div class="form-group">
                                  <label class="control-label">Address 1:</label>
                                  <input type="text" class="form-control" name="ad1">
                             </div>
                        </div>
                        <div class="col-sm-6 col-xs-12 mt-4">
                             <div class="form-group">
                                  <label class="control-label">Address 2:</label>
                                  <input type="text" class="form-control" name="ad2">
                             </div>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-sm-6 col-xs-12 mt-4">
                             <div class="form-group">
                                  <label class="control-label" >City:</label>
                                  <select class="form-control" name="city">
                                       <option value="">-- Choose --</option>
                                       <option value="karachi">karachi</option>
                                       <option value="hyderabad">hyderabad</option>
                                       <option value="peshawar">peshawar</option>
                                       <option value="lahore">lahore</option>
                                       <option value="faislabad">faislabad</option>
                                       <option value="pindi">pindi</option>
                                       <option value="islmabad">islamabad</option>
                                       <option value="nawabshah">nawabshah</option>
                                  </select>
                             </div>
                        </div>
                        <div class="col-sm-6 col-xs-12 mt-4">
                             <div class="form-group">
                                  <label class="control-label" >Payment method</label>
                                  <select class="form-control" name="payment">
                                       <option value="">-- Choose --</option>
                                       <option value="bank">Bank account</option>
                                       <option value="cash">Cash</option>
                                  </select>
                             </div>
                   </div>

                   <div class="form-group">
                        <label class="control-label">
                             <input type="checkbox">

                             I agree with the <a href="terms.html" target="_blank">Terms &amp; Conditions</a>
                        </label>
                   </div>

                   <div class="clearfix">
                        <a href="products.php" type="submit" class="filled-button pull-left">Back</a>
                        <input type="submit" class="btn btn-success pull-right" name="add" id="" value="submit">

                        
                   </div>
              </form>
          </div>
        </div>
      </div>
    </div>
    
<!-- footer start -->
<?php
    require('footer.php');
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
