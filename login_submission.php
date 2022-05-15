<?php include 'connection.php';

if(count($_POST)>0)
{

    // $eror="No such User Found";
    $emailAddress=$_POST['email'];
    $password=$_POST['password'];
    // $role=$_POST['role'];

    $query="SELECT * FROM users WHERE email='$emailAddress' and password='$password' ";
    $response=mysqli_query($connection,$query);
    $row=mysqli_fetch_assoc($response);
    $r=$row['role'];
      SESSION_START();
      $_SESSION['userid']=$row['id'];
    if(!empty($emailAddress)&&($password))
    {
      if(mysqli_num_rows($response)==0)
      {
        $msg="Your Email or password is wrong";
        header("Location:login.php?message=".$msg);
      }
      else if(strlen($password)<8)
      {
        $msg="Your Password Must Be greater Than 8 Characters";
        header("Location:login.php?message=".$msg);
      }

      else {

        if($r==1)
      {
          header("Location:index.php");
      }
      else
      {
          header("Location:index.php");
      }
      }
    }
    else {

      $msg="All Fields Are Required ";
      header("Location:login.php?msg=".$msg);
    }

}
