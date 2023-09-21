<?php
include 'connect.php';
if(isset($_GET['editid'])){
$id=$_GET['editid'];

$sql="SELECT * FROM crud WHERE id=$id";
echo $sql, $id;
$result=mysqli_query($con,"SELECT * FROM crud WHERE id=$id");
$row=mysqli_fetch_assoc($result);
echo $name=$row['testName'];
echo $description=$row['testDescription'];

}else{
    $id='';
}
echo "i am here GET" .$id;

//if(isset($_POST['editadv'])){
//    $id1=$_POST['editadv'];
//    }else{
//        $id1='';
//    }
//    echo "i am here POST" .$id1;




// $name="";
// $description="";
//if(isset($_POST['edit'])){
//    
//    $name=$_POST['test_name'];
//    $description=$_POST['test_descrip'];
//
//    $sql="UPDATE crud SET testName='$name',testDescription='$description'WHERE id=$id1";
//    
//     $result=mysqli_query($con,$sql);
//    if($result){
//        // echo "Updated successfully";
//         header('location:display.php');
//    }else{
//        die(mysqli_error($con));
//    }    
//    
//}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Crud operation</title>
</head>

<body>
    <div class="container my-5">
        <form method="post" action="edit2222.php">
        <input type="text" class="form-control" placeholder="Enter Test Name" name="editadv" autocomplete="off" value="<?=$id;?>">
            <div class="form-group">
                <label>Test Name</label>
                <input type="text" class="form-control" placeholder="Enter Test Name" name="test_name" autocomplete="off" value=<?php echo $name;?>>
                
            </div>
            <div class="form-group">
                <label>Test Description</label>
                <input type="text" class="form-control" placeholder="Enter Test Description" name="test_descrip" autocomplete="off" value=<?php echo $description;?>>
            </div>


            <button type="submit" class="btn btn-primary" name="edit">Edit</button>
        </form>
    </div>



</body>

</html>