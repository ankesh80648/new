<?php
include 'connect.php';

$name="";
$description="";
if(isset($_POST['submit'])){
    
    $name=$_POST['test_name'];
    $description=$_POST['test_descrip'];

    if ($name === null) {
        echo "Please give proper values";
    } else {
        // Your code to handle the non-null value of $testName goes here
    
    $sql="INSERT INTO `crud`(`testName`, `testDescription`) VALUES ('$name','$description')";
    $result=mysqli_query($con,$sql);
    }
    if($result){
        // echo "Data inserted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }    
    
}

?>