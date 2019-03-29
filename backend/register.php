<?php
    if(isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["email"]) && isset($_POST["gender"]) && isset($_POST["password"]) && isset($_POST["confirm-password"]))
    {
        //$password_hash=md5($password);
        if(!empty($_POST["firstname"])  && !empty($_POST["lastname"]) && !empty($_POST["email"]) && !empty($_POST["gender"]) && !empty($_POST["password"]) && !empty($_POST["confirm-password"]))
        {
            include "connect.php";
            
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];

            $email=$_POST['email'];
            $gender = $_POST['gender'];

            $password=$_POST['password'];
            $confirm_password=$_POST['confirm-password'];
        
            if($password != $confirm_password)
            {
                echo "<script>
                        alert('Password Mismatch.');
                        window.location.href='../signup.php';
                      </script>";
            }

            $query= "INSERT into `users` (`username`, `password`, `fname`, `lname`, `gender`, `last_log`) VALUES ('". $email."','". $password."','". $firstname."','". $lastname."',". $gender. ", CURRENT_TIMESTAMP)";

            if(mysqli_query($con,$query))
            {
                echo "<script>
                        alert('User Created.');
                        window.location.href='../pre_disaster.php';
                      </script>";
            }
            else
            {
                echo "<script>
                        alert('Query Error');
                        window.location.href='../error.php';
                      </script>";
            }
        }
        else
        {
            echo "<script>
                        alert('Enter values.');
                        window.location.href='../signup.php';
                      </script>";
        }
    }
?>