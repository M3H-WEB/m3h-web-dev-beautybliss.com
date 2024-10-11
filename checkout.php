<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/cosmetics.png">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>checkout</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
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
              <h4>Lorem ipsum dolor sit amet</h4>
              <h2>Checkout</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products call-to-action">
      <div class="container">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="row">
                  <div class="col-6">
                       <em>Sub-total</em>
                  </div>
                  
                  <div class="col-6 text-right">
                       <strong>$ 128.00</strong>
                  </div>
             </div>
          </li>
          
          <li class="list-group-item">
               <div class="row">
                    <div class="col-6">
                         <em>Extra</em>
                    </div>

                    <div class="col-6 text-right">
                         <strong>$ 0.00</strong>
                    </div>
               </div>
          </li>

          <li class="list-group-item">
               <div class="row">
                    <div class="col-6">
                         <em>Tax</em>
                    </div>

                    <div class="col-6 text-right">
                         <strong>$ 10.00</strong>
                    </div>
               </div>
          </li>

          <li class="list-group-item">
               <div class="row">
                    <div class="col-6">
                         <em>Total</em>
                    </div>

                    <div class="col-6 text-right">
                         <strong>$ 138.00</strong>
                    </div>
               </div>
          </li>

          <li class="list-group-item">
               <div class="row">
                    <div class="col-6">
                         <em>Deposit payment required</em>
                    </div>

                    <div class="col-6 text-right">
                         <strong>$ 20.00</strong>
                    </div>
               </div>
          </li>
        </ul>

        <br>
        
        <div class="inner-content">
          <div class="contact-form">
              <form action="#">
                   <div class="row">
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Title:</label>
                                  <select class="form-control" data-msg-required="This field is required.">
                                       <option value="">-- Choose --</option>
                                       <option value="dr">Dr.</option>
                                       <option value="miss">Miss</option>
                                       <option value="mr">Mr.</option>
                                       <option value="mrs">Mrs.</option>
                                       <option value="ms">Ms.</option>
                                       <option value="other">Other</option>
                                       <option value="prof">Prof.</option>
                                       <option value="rev">Rev.</option>
                                  </select>
                             </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Name:</label>
                                  <input type="text" class="form-control">
                             </div>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Email:</label>
                                  <input type="text" class="form-control">
                             </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Phone:</label>
                                  <input type="text" class="form-control">
                             </div>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Address 1:</label>
                                  <input type="text" class="form-control">
                             </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Address 2:</label>
                                  <input type="text" class="form-control">
                             </div>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">City:</label>
                                  <input type="text" class="form-control">
                             </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">State:</label>
                                  <input type="text" class="form-control">
                             </div>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Zip:</label>
                                  <input type="text" class="form-control">
                             </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Country:</label>
                                  <select class="form-control">
                                       <option value="">-- Choose --</option>
                                       <option value="">-- Choose --</option>
                                       <option value="">-- Choose --</option>
                                       <option value="">-- Choose --</option>
                                  </select>
                             </div>
                        </div>
                   </div>

                   <div class="row">
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Payment method</label>

                                  <select class="form-control">
                                       <option value="">-- Choose --</option>
                                       <option value="bank">Bank account</option>
                                       <option value="cash">Cash</option>
                                       <option value="paypal">PayPal</option>
                                  </select>
                             </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label class="control-label">Captcha</label>
                                  <input type="text" class="form-control">
                             </div>
                        </div>
                   </div>

                   <div class="form-group">
                        <label class="control-label">
                             <input type="checkbox">

                             I agree with the <a href="terms.html" target="_blank">Terms &amp; Conditions</a>
                        </label>
                   </div>

                   <div class="clearfix">
                        <button type="button" class="filled-button pull-left">Back</button>
                        
                        <button type="submit" class="filled-button pull-right">Finish</button>
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
