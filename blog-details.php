<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/cosmetics.png">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>blog-details</title>

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
              <h4><i class="fa fa-user"></i>John Doe  &nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-calendar"></i> 12/06/2020 10:30   &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-eye"></i> 114</h4>
              <h2>Lorem ipsum dolor sit amet, consectetur adipisicing</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Lorem ipsum dolor sit amet, consectetur.</h2>
              </div>
            </div>

            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, sed. Ex, id autem cum assumenda, quisquam cupiditate amet dolorem atque ipsam pariatur sequi voluptatem est nesciunt eum, aspernatur, tenetur rem. <br>

                <br>

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, consequatur, magnam. Dolorum vitae a vel quisquam. Fuga quia suscipit id veritatis sint earum impedit corporis quidem eum consectetur ipsam ex sequi ad, distinctio enim tenetur eveniet eligendi. Laborum, sapiente, magnam.</p>

                <br>

                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, modi.</h5>

                <br>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam officia in adipisci. Corporis rem beatae cupiditate neque consequuntur necessitatibus expedita laudantium temporibus quam ex quidem, aut non blanditiis soluta deserunt dolores mollitia repudiandae voluptatibus perspiciatis dolor quos distinctio! Atque, magnam. <br>

                <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt dolore ducimus, ad itaque reprehenderit repellat dignissimos, qui velit dolores voluptas.</p>
            </div>

            <div class="col-md-4">
              <div class="left-content">
                <h4>Lorem ipsum dolor sit amet.</h4>

                <br>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti.</p>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, minus?</p>
              </div>
            </div>
        </div>

        <br>
        
        <div>
          <img src="assets/images/blog-image-fullscren-1-1920x700.jpg" class="img-fluid" alt="">
        </div>
      </div>
    </div>

    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Leave a Comment</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Submit</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-4">
              <div class="left-content">

                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur. Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti.</p>

                <br> 

                <ul class="social-icons">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
              </div>
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
