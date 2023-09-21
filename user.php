<?php
include 'connect.php';

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
        <form method="post" action="target.php">
            <div class="form-group">
                <label>Test Name</label>
                <input type="text" class="form-control" placeholder="Enter Test Name" name="test_name" autocomplete="off" value="" required>
                
            </div>
            <div class="form-group">
                <label>Test Description</label>
                <input type="text" class="form-control" placeholder="Enter Test Description" name="test_descrip" autocomplete="off" value="" required>
            </div>


            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>



</body>

</html>

