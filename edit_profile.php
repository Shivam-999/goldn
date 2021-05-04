<!DOCTYPE html>
<?php

session_start();
include("dbconnect.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!isset($_SESSION['email']))
{
  	echo "not working";
}
else {

?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Profile</title>

  <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <link href="css/styles.css" rel="stylesheet" />
  <link href="css/signinCSS.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>


<?php

$user = $_SESSION['email'];
if($user){
$get_user = "select * from users where email='$user'";
$run_user = mysqli_query($conn,$get_user);
$row = mysqli_fetch_array($run_user);

$user_name = $row['name'];
$user_con = $row['contact'];
$user_name1 = $row['username'];
$user = $row['email'];
$password = $row['password'];
}
else{
    printf("error: %s\n", mysqli_error($conn));
}

?>
<br><br>  <h2 class="featurette-heading text-center">EDIT PROFILE</h2>
<div class="container">
<form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"><b>Name:</b></label>
            <input type="text" name="u_name" class="form-control" id="recipient-name" required="required" value="<?php echo $user_name; ?>">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"><b>Contact:</b></label>
            <input type="text" name="u_clg" class="form-control" id="recipient-clg" required="required" value="<?php echo $user_con; ?>">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"><b>Email-id:</b></label>
            <input type="text" name="u_branch" class="form-control" id="recipient-branch" required="required" value="<?php echo $user; ?>">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"><b>Password:</b></label>
            <input type="text" name="u_pass" class="form-control" id="recipient-password" required="required" value="<?php echo $password; ?>" >
          </div>
		     <input type="submit" name="update" value="Save">
        </form>


	<?php

              if(isset($_POST['update']))
              {
                $u_name=$_POST['u_name'];
                $u_pass=$_POST['u_pass'];
                $u_clg=$_POST['u_clg'];
                $u_branch=$_POST['u_branch'];


					$update = "UPDATE users SET username='$u_name', password='$u_pass' ,contact='$u_clg', email='$u_branch' WHERE email='$user'";

					$run = mysqli_query($conn,$update);

					if($run)
					{
						echo "Your Profile Updated";
						echo "<script>alert('Your Profile Updated')</script>";
						echo "<script>window.open('profile.php','_self')</script>";
					}
					else
					{
						printf("error: %s\n", mysqli_error($conn));
					}
        }



			  }
?>
</div>

</body>
</html>
<?php

?>
