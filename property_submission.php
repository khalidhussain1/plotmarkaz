<?php include 'connection.php';

if(count($_POST)>0)
{

    // $eror="No such User Found";
    $society=$_POST['society'];
    $city=$_POST['city'];
    $block=$_POST['block'];
    $number=$_POST['number'];
    $owner=$_POST['owner'];
    $address=$_POST['address'];
    $plotno=$_POST['plotno'];
    $marlas=$_POST['marlas'];
    $road=$_POST['road'];
    $dimension=$_POST['dimension'];
    $demand=$_POST['demand'];
    $finalprice=$_POST['finalprice'];
    $parkfacing=$_POST['parkfacing'];
    $corner=$_POST['corner'];
    $type=$_POST['type'];
    $doctype=$_POST['doctype'];
    $description=$_POST['description'];
    $image=$_POST['image'];
    $usertype="broker";


    $query="INSERT INTO `property`(`society`, `city`, `block`, `number`, `owner`, `address`, `plotno`, `marlas`, `road`, `dimension`, `demand`, `finalprice`, `parkfacing`, `corner`, `type`, `doctype`, `description`, `image`, `user_type`) VALUES 
                                 ('".$society."','".$city."','".$block."','".$number."','".$owner."','".$address."','". $plotno."','".  $marlas."','".$road."','".$dimension."','".$demand."','".$finalprice."','".$parkfacing."','". $corner."','".$type."','".$doctype."','".$description."','".$image."','".$usertype."')";
                                       $response=mysqli_query($connection,$query);
                                       if($response)
                                       {
                                        header("Location:index.php");
                                       }
                                       else
                                       {
                                           echo "erorr";
                                       }
   
    
   
}
