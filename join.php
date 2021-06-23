<?php
include 'dbconnect.php';
    if(isset($_POST['register'])){
    $name = $_POST["name"];
    $contact = $_POST["contact"];
    $username = $_POST["username"];
    $email = $_POST["email"];
  //  $yes = $_POST["yes"];
    $contri = $_POST["contri"];
    $choice = $_POST["choice"];
    // $exists=false;

        // $exists = false;

            $sql = "INSERT INTO register ( name, contact, username, email, contri, choice) VALUES ('$name', '$contact','$username', '$email', '$contri', '$choice')";
            $result = mysqli_query($conn, $sql);
            if ($result){
              echo "<script>alert('Registration is successfull')</script>" ;
            }
			else{
           printf("error: %s\n", mysqli_error($conn));
        }
        }
	//	echo "<script>alert('Passwords are not same')</script>" ;
    //    echo "<script>window.open('signup.php','_self')</script>";

    ?>



<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="favicon/favicon-32x32.png"/>
  <title>Sign Up</title>

  <link href="css/styles.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/98057905d1.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script data-ad-client="ca-pub-8708770187314394" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


  <style type="text/css">
    body {
      background-color: white;
    }

    .shape {
      border-radius: 30px;
      text-align: center;
      margin-left: 7px;
    }

    .signup-form {
      width: 80%;
      margin: 0 auto;
      padding: 30px 0;
      margin-top: 1cm;
      color: white;
    }

    .signup-form form {
      border-radius: 5px;
      margin-bottom: 5px;
      background: blueviolet;
      box-shadow: 5px 5px 4px rgba(0, 0, 0, 0.7);
      padding: 20px;
    }


    .signup-form h3 {
      text-align: center;
    }

    .signup-form .hint-text {
      color: dimgray;
      text-align: center;
      margin-bottom: 20px;
    }

    .signup-form .form-group {
      margin-bottom: 20px;
    }

    .signup-form .btn {
      font-size: 18px;
      font-weight: bold;
      margin-left: 45%;
    }

    .signup-btn {
      text-align: center;
      border-color: #5cb85c;

    }

    .signup-btn:hover {
      background:#19cc19;
    }

    .form{
      width: 450px;
      padding: 8px;
    }
  </style>
</head>
<body>

  <!--------------------------------------header------------------------------------------->
  <!--------------------------------------header------------------------------------------->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <span class="navbar-brand mb-0 h1"><a href="index.html" style="color: whitesmoke;">1 Rupee Initiative</a></span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav ">
       <!-- <li class="nav-item active">
         <a class="nav-link" href="signup.php">Sign up <span class="sr-only">(current)</span></a>
       </li> -->

        </ul>
      </div>

    </nav>
  </header>

  <div class="signup-form">
    <form action="join.php" method="post">

      <div class="modal-header">
      <h1 class="text-center" style="margin-left:43%;"> JOIN US</h1>
        </div>

      <h3 style="margin-top:15px;"></h3>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" class="form shape input-lg" name="name" placeholder="Name" required="required">
          </div>
          <div class="form-group">
            <input type="number" class="form shape input-lg" name="contact" placeholder="Contact" required="required">
          </div>
        <!--  <div class="form-group" style="margin-left: 15px;">
          <h6>Are You Willing to donate?</h6>
            <input type="radio" name="yes" value="female">Yes
        <input type="radio" name="yes" value="male">No
      </div> -->
          <div class="form-group" style="margin-left: 15px;">
          <h6>If Yes, Choose the frequency of your donation.</h6> <br>
          <select id="choice" name="choice" style="width: 200px; padding: 5px;" class="form-select shape" required="required">
            <option value=""> Select</option>
            <option value="Weekly"> Weekly</option>
            <option value="Monthly"> Monthly</option>
            <option value="Annually"> Annually</option>
          </select>    </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" class="form shape input-lg" name="username" placeholder="Username" required="required">
          </div>
          <div class="form-group">
            <input type="email" class="form shape input-lg" name="email" placeholder="Email Address" required="required">
          </div>
          <div class="form-group">
            <h6> If Yes, How much do you want to contribute per day?</h6>
            <input type="text" class="form shape input-lg" style=" width: 100px;" name="contri" placeholder="Rs/Day" required="required">
          </div>
        </div>
      </div>
<br>
      <div class="form-group">
        <input type="submit" class="btn btn-success btn-lg shape signup-btn" style="margin-left: 58%" name="register" placeholder="Submit" required="required">
      </div>
    </form>
   </div>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>
