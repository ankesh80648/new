<?php
include 'connect.php';

if(isset($_POST['editadv'])){
    $id1=$_POST['editadv'];
    }else{
        $id1='';
    }
    echo "i am here POST" .$id1;




// $name="";
// $description="";
if(isset($_POST['edit'])){
    
    $name=$_POST['test_name'];
    $description=$_POST['test_descrip'];

    $sql="UPDATE crud SET testName='$name',testDescription='$description'WHERE id=$id1";
    
     $result=mysqli_query($con,$sql);
    if($result){
        // echo "Updated successfully";
         header('location:display.php');
    }else{
        die(mysqli_error($con));
    }    
    
}
?>