<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Sparks Bank</title>
    <link rel="icon" href="images/favicon.png">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <?php include 'styles.php' ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Merriweather+Sans:wght@300&display=swap" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.13.1/js/all.js"></script>
  </head>
  <body>

    <section id="top">
    <nav id="navbarr" class="navbar navbar-expand-lg navbar-dark ">
        <a class="navbar-brand"  >SPARKS BANK</a>
          <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item ">
            <a class="nav-link" href="#about">ABOUT</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="customerdetails.php">VIEW CUSTOMERS</a>
            </li>
            <li class="nav-item ">
            <a class="nav-link" href="transactionhistory.php">TRANSACTION HISTORY</a>
            </li>
            <li class="nav-item ">
            <a class="nav-link" href="#contact">CONTACT</a>
            </li>

        </ul>
      </div>
    </nav>
<div class="content">
    <h1 class="heading">Welcome to Sparks Bank</h1>
    <section id="about">
      <h1>ABOUT </h1>
      <p><b>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </b></p>


    </section>
  </section>
    <section id="contact" style="  background: url('images/coin.jpg') no-repeat center;background-size:cover;      background-position: 0 0;">
      <div class="container">
        <h1 style="color:white">Contact us</h1>
    <div class="d-flex justify-content-center h-100">
      <div class="card">

        <div class="card-body">
          <form action="mailto:sanoferrasheed29@gmail.com" method="post">
            <div class="input-group form-group">

              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" name="name" class="form-control" placeholder="Your Name">

            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              </div>
              <input type="text" name="mail" class="form-control" placeholder="Your mail">
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-comments"></i></span>
              </div>
              <textarea name="message" placeholder="Your Message"class="form-control" rows="5" cols="80"></textarea>
            </div>

            <div class="form-group">

              <input type="submit"  value="Submit" class="btn float-right login_btn">
                <button type="reset" class="btn  login_btn" name="button">Reset</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

    </section>


<p style="text-align:center;">
  By Sanofer
</p>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<?php include 'script.php' ?>

  </body>
</html>
