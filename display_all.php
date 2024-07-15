<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="index.css">
</head>
<body>
    
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-danger bg-gradient">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">JanCart</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="display_all.php">Products</a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-white" href="#">Register</a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fa-solid fa-cart-arrow-down"></i><sup>1</sup></a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-white" href="#">Total Price:100/</a>
        </li>
       
      </ul>
      <form class="d-flex" role="search" action="search.php" method="get">
        <input class="form-control me-2" type="search" name="search_data" placeholder="Search" aria-label="Search">
        <input class="btn btn-outline-light" type="submit" value="Search" name="search_data_product">
      </form>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a href="#" class="nav-link">Welcome Guest</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">login</a>
        </li>
    </ul>
</nav>
<div class="bg-light">
    <h3 class="text-center">Hidden Store</h3>
    <p class="text-center">Explore the World with your favarite purchasing</p>
</div>

<div class="row">
    <div class="col-md-10">
      <div class="row">

      <?php
      if(!isset($_GET['cat_id'])){
        if(!isset($_GET['brand_id'])){
      $select=mysqli_query($con, "select * from products order by rand() ");
      // $row=mysqli_fetch_assoc($select);
      while( $row=mysqli_fetch_assoc($select)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
    $product_des=$row['product_des'];
    $product_image1=$row['product_image1'];
     $product_cat=$row['catid'];
    $product_bra=$row['brandid'];
    $product_price=$row['product_price'];
    echo "    <div class='col-md-4 mb-2'>
          <div class='card' >
          <img src='./admin/product_images/$product_image1' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
            <p class='card-text'>$product_des</p>
            <a href='#' class='btn btn-primary'>Add to Cart</a>
    <a href='product_details.php?product_id=$product_id' class='btn btn-dark'>View More</a>
  </div>
</div>
        </div>";

      }
    }
  }
  if(isset($_GET['cat_id'])){
      $catid=$_GET['cat_id']; 
      $select=mysqli_query($con, "select * from products where catid=$catid");
      $num=mysqli_num_rows($select);
      if($num==0){
  echo "<h2 class='text-center text-danger'>No stocks for this catogory</h2>";
      }
      // $row=mysqli_fetch_assoc($select);
      while( $row=mysqli_fetch_assoc($select)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
    $product_des=$row['product_des'];
    $product_image1=$row['product_image1'];
     $product_cat=$row['catid'];
    $product_bra=$row['brandid'];
    $product_price=$row['product_price'];
    echo "    <div class='col-md-4 mb-2'>
          <div class='card' >
          <img src='./admin/product_images/$product_image1' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
            <p class='card-text'>$product_des</p>
            <a href='#' class='btn btn-primary'>Add to Cart</a>
    <a href='product_details.php?product_id=$product_id' class='btn btn-dark'>View More</a>
  </div>
</div>
        </div>";

      }
    }
  if(isset($_GET['brand_id'])){
      $brand_id=$_GET['brand_id']; 
      $select=mysqli_query($con, "select * from products where brandid=$brand_id");
      $num=mysqli_num_rows($select);
      if($num==0){
  echo "<h2 class='text-center text-danger'>No stocks for this Brands</h2>";
      }
      // $row=mysqli_fetch_assoc($select);
      while( $row=mysqli_fetch_assoc($select)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
    $product_des=$row['product_des'];
    $product_image1=$row['product_image1'];
     $product_cat=$row['catid'];
    $product_bra=$row['brandid'];
    $product_price=$row['product_price'];
    echo "    <div class='col-md-4 mb-2'>
          <div class='card' >
          <img src='./admin/product_images/$product_image1' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
            <p class='card-text'>$product_des</p>
            <a href='#' class='btn btn-primary'>Add to Cart</a>
    <a href='product_details.php?product_id=$product_id' class='btn btn-dark'>View More</a>
  </div>
</div>
        </div>";

      }
    }

      ?>
    
     
       
      
        
      </div>

    </div>
    <div class="col-md-2 bg-secondary p-0">
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
          <a href="#" class="nav-link text-light"><h4>Delivary Brands</h4></a>
        </li>

        <?php
        $select=mysqli_query($con,"select * from brands");
        while($row=mysqli_fetch_assoc($select)){
          $brandtitle=$row['bratitle'];
          $brandid=$row['brand_id'];
          echo "<li class='nav-item'>
          <a href='index.php?brand_id=$brandid' class='nav-link text-light'>$brandtitle</a>
        </li>";
        }
       
        ?>
        
      </ul>
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
          <a href="#" class="nav-link text-light"><h4>Catogaries</h4></a>
        </li>
         <?php
        $select=mysqli_query($con,"select * from catagories");
        while($row=mysqli_fetch_assoc($select)){
          $cattitle=$row['cattitle'];
          $catid=$row['id'];
          echo "<li class='nav-item'>
          <a href='index.php?cat_id=$catid' class='nav-link text-light'>$cattitle</a>
        </li>";
        }
       
        ?>
      </ul>
    </div>
</div>


<div class="bg-danger bg-gradient text-white p-3 text-center">
    <p>All rights reserved @ Designed by Janani 2024</p>
</div>
    </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body> 
</html>