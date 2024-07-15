<?php
include('../connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="../index.css">
</head>
<body>
   <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <h5>JanCart</h5>
            <nav class="navbar navbar-expand-lg ">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Welcome Guest</a>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>

    <div class="bg-light"><h3 class="text-center p-2">Manage Details</h3></div>
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center p-3">
            <div class="">
                <a href="#"><img src="../images/fruit.jfif" class="adminimg"alt=""></a>
                <p class="text-light text-center">Admin Name</p>
            </div>
            <div class="button text-center p-2">
                <button class=""><a href="insertproduct.php" class="nav-link bg-info text-light my-1 p-2">Insert Products</a></button>
                <button><a href="" class="nav-link bg-info text-light my-1 p-2">View Products</a></button>
                <button><a href="index.php?insertcat" class="nav-link bg-info text-light my-1 p-2">Insert Catagories</a></button>
                <button><a href="" class="nav-link bg-info text-light my-1 p-2">view Catagories</a></button>
                <button><a href="index.php?insertbrand" class="nav-link bg-info text-light my-1 p-2">Insert Brand</a></button>
                <button><a href="" class="nav-link bg-info text-light my-1 p-2">View Brand</a></button>
                <button><a href="" class="nav-link bg-info text-light my-1 p-2">All Orders</a></button>
                <button><a href="" class="nav-link bg-info text-light my-1 p-2">All Payments</a></button>
                <button><a href="" class="nav-link bg-info text-light my-1 p-2">List Users</a></button>
                <button class="mt-2"><a href="" class="nav-link bg-info text-light my-1 p-2">Log Out</a></button>

            </div>
        </div>
    </div>
    <div class="container my-5">
        <?php
        if(isset($_GET['insertcat'])){
            include('insertcat.php');
        }
         if(isset($_GET['insertbrand'])){
            include('insertbrand.php');
        }
        
        ?>
    </div>
    
<div class="bg-info p-3 text-center footer">
    <p>All rights reserved @ Designed by Janani 2024</p>
</div>
   </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>