<?php
include('../connection.php');
if(isset($_POST['insertbrand'])){
    $brandtitle=$_POST['bratitle'];
    $select=mysqli_query($con,"select * from brands where bratitle='$brandtitle'");
    $number=mysqli_num_rows($select);
    if($number>0){
 echo "<script>alert('brand is already inserted in database successfully')</script>";

    }
    else{
       $insert=mysqli_query($con,"insert into brands (bratitle) values('$brandtitle')");  
    
        if($insert){
        echo "<script>alert('brand inserted successfully')</script>";
        }
        else {
            echo "not inserted";
        }
        
    }
}
?>





<form action="" method="post" class="mb-2">
    <div class="input-group mb-2 w-90">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" placeholder="Insert Brand"name="bratitle" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <div class="input-group mb-2 w-10 mb-2 m-auto">
  
  <input type="submit" class=" bg-info border-0 p-2 my-3" name="insertbrand" value="Insert brand" >
</form>