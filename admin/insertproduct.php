<?php


include('../connection.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(isset($_POST['insert_product'])){
    $product_title=$_POST['ptitle'];
    $product_des=$_POST['description'];
    $product_key=$_POST['keyword'];
     $product_cat=$_POST['product_cat'];
    $product_bra=$_POST['product_bra'];
    $product_price=$_POST['price'];
    $status='true';

    $product_image1=$_FILES['image1']['name'];
    $product_image2=$_FILES['image2']['name'];
    $product_image3=$_FILES['image3']['name'];

    $temp_image1=$_FILES['image1']['tmp_name'];
    $temp_image2=$_FILES['image2']['tmp_name'];
    $temp_image3=$_FILES['image3']['tmp_name'];

    if($product_title=='' or  $product_des=='' or $product_key=='' or $product_cat=='' or  $product_bra=='' or  $product_price=='' or  $product_image1=='' or  $product_image2=='' or  $product_image3==''){
        echo "<script>alert('please fill valid details')</script>";
        exit();
    }
    else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
         move_uploaded_file($temp_image2,"./product_images/$product_image2");
          move_uploaded_file($temp_image3,"./product_images/$product_image3");
          $insert_query = mysqli_query($con,"INSERT INTO products (product_title, product_des, product_key, catid, brandid, product_image1, product_image2, product_image3, product_price, date, status) VALUES ('$product_title', '$product_des', '$product_key', '$product_cat', '$product_bra', '$product_image1', '$product_image2', '$product_image3', '$product_price', NOW(), '$status')");
          if($insert_query){
             echo "<script>alert('Suceesfully inserted the products')</script>";
          }
          else{
            echo"not inserted";
          }
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="../index.css">
</head>
<body>
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="ptitle" class="form-label">Product Title</label>
                <input type="text" name="ptitle" id="ptitle" autocomplete="off" placeholder="Enter product title" class="form-control" required>
            </div>
          <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product description</label>
                <input type="text" name="description" id="description" autocomplete="off" placeholder="Enter product description" class="form-control" required>
            </div>
           <div class="form-outline mb-4 w-50 m-auto">
                <label for="keyword" class="form-label">Product keyword</label>
                <input type="text" name="keyword" id="keyword" autocomplete="off" placeholder="Enter product keyword" class="form-control" required>
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_cat" id="" class="form-select">
                    <option value="">Select a catagories</option>
                    <?php
        $select=mysqli_query($con,"select * from catagories");
        while($row=mysqli_fetch_assoc($select)){
          $cattitle=$row['cattitle'];
          $catid=$row['id'];
          echo "<option value='$catid'>$cattitle</option>";
        }
        ?>
                </select>
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_bra" id="" class="form-select">
                    <option value="">Select a Brands</option>
                    <?php
        $select=mysqli_query($con,"select * from brands");
        while($row=mysqli_fetch_assoc($select)){
          $brandtitle=$row['bratitle'];
          $brandid=$row['brand_id'];
          echo " <option value='$brandid'>$brandtitle</option>";
        }
       
        ?>
                </select>
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="image1" class="form-label">Product image1</label>
                <input type="file" name="image1" id="image1" class="form-control" required>
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="image2" class="form-label">Product image2</label>
                <input type="file" name="image2" id="image2" class="form-control" required>
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="image3" class="form-label">Product image3</label>
                <input type="file" name="image3" id="image3" class="form-control" required>
            </div>
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="price" class="form-label">Product price</label>
                <input type="text" name="price" id="price" autocomplete="off" placeholder="Enter product price" class="form-control" required>
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
               <input type="submit" name="insert_product" class="btn btn-info" value="insert product">
            </div>
            

        </form>
    </div>
</body>
</html>