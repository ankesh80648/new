<?php
include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    
<div class="container">
<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add test</a>

</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">num</th>
      <th scope="col">Test Name</th>
      <th scope="col">Test Description</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
$e= 0;
$sql="SELECT * FROM crud WHERE testName IS NOT NULL AND testName <> ''";
$result=mysqli_query($con,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['testName'];
    $description=$row['testDescription'];
    ?>
   <tr>
    <th><?=$id?></th>
    <th><?php echo ++$e;?></th>
    <td><?php echo $name;?></td>
    <td><?php echo $description;?></td>
    <td>
    <button class="btn btn-primary"><a href="edit.php? editid= <?=$id;?>" class="text-light">Edit</a></button>
    <button class="btn btn-danger"><a href="delete.php? deleteid= <?=$id;?> " class="text-light">Delete</a></button>
    </td> 
  </tr>
  <?php
  }
}
?>



  
    
      
  
  </tbody>
  
</table>
</div>


</body>
</html>