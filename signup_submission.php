<?php include 'connection.php';

// $query="INSERT INTO `users` VALUES ('".$register_name."', '".$register_email."','".$register_password."')";







 if(count($_POST)>0)
 {
  

   $register_name=$_POST['regname'];
   $register_email=$_POST['regemail'];
   $register_password=$_POST['regpassword'];
   $role=$_POST['role'];

   if(empty($register_name))
   {
     $message="Name Field is Empty" ;
     header("Location:signup.php?message=".$message);

   }
   else if (empty($register_email))
   {

     $message="Email field is empty";
     header("Location:signup.php?message=".$message);
   }
   else if (!empty($register_email))
   {
     $query="SELECT * FROM users WHERE email='$register_email'";
       $response=mysqli_query($connection,$query);
       if(mysqli_num_rows($response)>0)
       {
         $message="Email is already Exist";
         header("Location:signup.php?message=".$message);
       }
       else if (empty($register_password))
       {
         $message="Password Field is Empty";
         header("Location:signup.php?message=".$message);

       }

       else {
         // code...
         $query="INSERT INTO `users` (`name`, `email`, `password`,`role`) VALUES ( '".$register_name."', '".$register_email."', '".$register_password."','$role')";
         $response=mysqli_query($connection,$query);
         header("Location:index.php");
            }
          }

    }



?>
