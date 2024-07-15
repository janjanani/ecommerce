<?php
include('../connection.php');
if(isset($_POST['insertcat'])){
    $cattitle=$_POST['cattitle'];
   
    $select=mysqli_query($con,"select * from catagories where cattitle='$cattitle'");
    $number=mysqli_num_rows($select);
    if($number>0){
 echo "<script>alert('catagory is already inserted in database successfully')</script>";

    }
    else{
       $insert=mysqli_query($con,"insert into catagories (cattitle) values('$cattitle')");  
    
    if($insert){
        echo "<script>alert('catagory inserted successfully')</script>";
    }
    else {
        echo "not inserted";
    }}
}
?>




<form action="" method="post" class="mb-2">
    <div class="input-group mb-2 w-90">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" placeholder="Insert catagories"name="cattitle" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <div class="input-group mb-2 w-10 mb-2 m-auto">
  
  <input type="submit" class=" bg-info border-0 p-2 my-3" name="insertcat" value="Insert catagories" >
</div>
</form>