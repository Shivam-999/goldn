<?php
include 'dbconnect.php';
    if(isset($_POST['sign_up'])){
    $name = $_POST["name"];
    $contact = $_POST["contact"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    // $exists=false;

        // $exists = false;
        if($password == $confirm_password){
            $sql = "INSERT INTO users( name, contact, username, email, password, confirm_password) VALUES ('$name', '$contact','$username', '$email', '$password', '$confirm_password')";
            $result = mysqli_query($conn, $sql);
            if ($result){
              echo "<script>alert('Signup is successfull')</script>" ;
            }
			else{
           printf("error: %s\n", mysqli_error($conn));
        }
        }
	//	echo "<script>alert('Passwords are not same')</script>" ;
    //    echo "<script>window.open('signup.php','_self')</script>";
}
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
      background-color: lightgray;
    }

    .shape {
      border-radius: 30px;
      text-align: center;
      margin-left: 30px;
    }

    .signup-form {
      width: 400px;
      margin: 0 auto;
      padding: 30px 0;
      margin-top: 1cm;
      color: whitesmoke;
    }

    .signup-form form {
      border-radius: 5px;
      margin-bottom: 5px;
      background: dimgray;
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

  </style>
</head>
<body>

  <!--------------------------------------header------------------------------------------->
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
            <a class="nav-link" href="index.html">How Does it Work? <span class="sr-only">(current)</span></a>
          </li>
           <li class="nav-item active">
            <a class="nav-link" href="#">Who are we? <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
           <a class="nav-link" href="update.html">Updates <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item active">
          <a class="nav-link" href="contribute.php">Contribute Now! <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
         <a class="nav-link" href="signup.php">Sign up <span class="sr-only">(current)</span></a>
       </li>

        </ul>
      </div>

    </nav>
  </header>
  <!---------------------------------signup form-------------------------------------------->


  <div class="signup-form">
    <form action="signup.php" method="post">

      <div class="modal-header">
      <h1 class="">  GOLDN BYRD</h1>
        </div>

      <h3>Create an Account</h3>
      <div class="form-group">
        <input type="text" class="form-control shape input-lg" name="name" placeholder="Name" required="required">
      </div>
      <div class="form-group">
        <input type="number" class="form-control shape input-lg" name="contact" placeholder="Contact" required="required">
      </div>
      <div class="form-group">
        <input type="text" class="form-control shape input-lg" name="username" placeholder="Username" required="required">
      </div>
      <div class="form-group">
        <input type="email" class="form-control shape input-lg" name="email" placeholder="Email Address" required="required">
      </div>
      <div class="form-group">
        <input type="password" class="form-control shape input-lg" name="password" placeholder="Password" required="required">
      </div>
      <div class="form-group">
        <input type="password" class="form-control shape input-lg" name="confirm_password" placeholder="Confirm Password" required="required">
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-success btn-lg shape signup-btn" name="sign_up" placeholder="Sign Up">
      </div>
    </form>
   </div>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>
