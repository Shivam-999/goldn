<!DOCTYPE html>
<?php
session_start();
include("dbconnect.php");
?>

<?php

if(!isset($_SESSION['email']))
{
  header("location: index.html");
}
else ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="favicon/favicon-32x32.png"/>
  <title>GOLDN BYRD</title>

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<!----font-awsome 5------>
  <script src="https://kit.fontawesome.com/98057905d1.js" crossorigin="anonymous"></script>
  <link href="css/styles.css" rel="stylesheet" />
  <link href="css/signinCss.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script data-ad-client="ca-pub-8708770187314394" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CYZRZBE8TX"></script>

<!---body-------------------------->

<body>
  <!--------------------------------------header------------------------------------------->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <span class="navbar-brand mb-0 h1"><a href="index.html" style="color: whitesmoke;">GOLDN BYRD</a></span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav ">
          <li class="nav-item active">
            <a class="nav-link" href="after.php">How Does it Work? <span class="sr-only">(current)</span></a>
          </li>
           <li class="nav-item active">
            <a class="nav-link" href="team.php">Who are we? <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
           <a class="nav-link" href="update.php">Updates <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item active">
          <a class="nav-link" href="contribute.php">Contribute Now! <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="profile.php">My Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Log out</a>
          </li>
        </ul>
      </div>

    </nav>
  </header>

  <!---------------------------jumbotron------------------------------------->
  <?php
            //$_SESSION['email'] = 'spandey72100@gmail.com';
              $user = $_SESSION['email'];
              if($user){
                $get_user = "select * from users where email='$user'";
                $run_user = mysqli_query($conn,$get_user);
                $row = mysqli_fetch_array($run_user);

                $user_name = $row['name'];
                $user_con = $row['contact'];
                $user_name1 = $row['username'];
                $user = $row['email'];

               }
              else{
                    printf("error: %s\n", mysqli_error($conn));
               }

  ?>

    <div class="jumbotron jumbotron-fluid" style="padding-top: 0; padding-bottom: 10px;">
      <div class="container" >
        <div class="row featurette"  >
          <div class="col-md-12" style="margin-left:10%">
            <h1 class="display-4">Welcome User</h1><br>

            <h4 class="">Name :<b style="word-space:10em">&nbsp;&nbsp;</b>
            <?php echo $user_name; ?></h4><br>

            <h4 class="">Username :<b style="word-space:10em">&nbsp;&nbsp;</b>
            <?php echo $user_name1; ?></h4><br>
            <h4 class="">Email-id :<b style="word-space:10em">&nbsp;&nbsp;</b>
            <?php echo $user; ?></h4><br>
            <h4 class="">Contact Number :<b style="word-space:10em">&nbsp;&nbsp;</b>
            <?php echo $user_con; ?></h4>
            <button onclick="window.location.href='edit_profile.php'">Edit Profile</button>


     <!-------------------------->
          </div>
        </div>

</div>
<br><br>
<div class="sub-footer" style="background-image: url(img/black.png); background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="col-md-4 wow fadeInDown">
        <h4>Contact Us</h4>
        <div class="contact-info">
          <ul type="none" class="mobile">
            <li class="text">
              <a href="https://www.instagram.com/papersporium/"><i class="fab fa-instagram fa-2x gap white"></i> </a>
              <a href="https://www.facebook.com/papers.porium"><i class="fab fa-facebook-square fa-2x gap white"></i></a>
             <a href="https://www.linkedin.com/in/papers-porium-496431200/"><i class="fab fa-linkedin fa-2x white"></i></a>
             <a href="https://t.me/joinchat/LSyHCHOKUucyYTk9"><i class="fab fa-telegram fa-2x white" style="margin-left:15px;"></i></a>
          </li>

          </ul>
        </div>
      </div>
  <div class="col-md-4">
    <div class="copyright sub-footer-text">
      &copy; GOLDN BYRD. All Rights Reserved.
    </div>
  </div>
  <div class="col-md-4">
    <ul type="none" class="mobile">

                    <li class="up">
                      <i class="fas fa-phone-alt"></i>
                      +91 9999999999
                    </li>

                      <li class="up">
                        <i class="far fa-envelope"></i>
                      goldnbyrd@gmail.com
                    </li>
    </ul>
  </div>
</div>
  <!--sJS files-------------------------------------->

  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/functions.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>


</html>
