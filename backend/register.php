<?php
	if(!isset($_POST["username"])  && !isset($_POST["email"]) && !isset($_POST["password"])) echo "<script>alert('Not Set');</script>";//check input or if it is set or var is define on server 
    if(empty($_POST["username"]) && empty($_POST["email"]) && empty($_POST["password"]) ) echo "<script>alert('Enter the value ');</script>";//to check empty
    $username = trim($_POST["username"]);// var define
   
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    if (empty($_POST["email"])) {
    echo "<script>alert('Enter the email ');</script>";
    echo "<script>window.location='../index.php'</script>";
    
  } else {
    
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "<script>alert('Invalid email ');</script>"; 
      echo "<script>window.location='../index.php'</script>";

    }
  }
    
    include "connect.php";//include connection
    $checkEmailExistQry = "SELECT `username` from `users`  where `username` = '".$username."'";// select email exist or no
    if(!$checkEmailExist = mysqli_query($con,$checkEmailExistQry)){//store result of $checkEmailExistQry in $checkEmailExist with mysqli_query (fire the query)
    	echo "".mysqli_error($con);//error
    	mysqli_close($con);//close
    	die("");//die
    }
    if(mysqli_num_rows($checkEmailExist)){// checks email is already exist (mysqli_num_row = to check number of rows in db)
    	echo "<script>alert('Username already exist');</script>";
        echo "<script>window.location='../index.php'</script>";
    	mysqli_close($con);
        
    	die("");

    }
	$regInsertQry="INSERT INTO `users`(`username`, `password`, `email`) VALUES ('$username','$password','$email')";//insert in to qry db
   
	if(!mysqli_query($con,$regInsertQry)){//fire query 
		echo "".mysqli_error($con);
		mysqli_close($con);
		die("");
	}

	 
     echo "<script>alert('Success! Please login to continue');</script>";
    echo "<script>window.location='../index.php'</script>";
?>	