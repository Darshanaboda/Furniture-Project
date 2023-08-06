<?php include "dbconect.php"; ?>
<?php 
$pname = $_POST['pname'];
$id = $_POST['id'];
$category = $_POST['category'];
$subcategory = $_POST['subcategory'];
$type = $_POST['type']; 
$color = $_POST['color']; 
$price = $_POST['price'];   
$image=$_POST['imageurl'];
echo "<script>console.log('$image')</script>";
if(!isset($_FILES['image']) || $_FILES['image']['error'] == UPLOAD_ERR_NO_FILE){
    
$image=$_POST['imageurl'];
} 
else{
    
    echo "<script>console.log('$image')</script>";
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type']; 
       $image=$file_name;
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"img/product/".$file_name); 
      } 
      else{
        $message = "image not added";
        setcookie("message", $message, time()+5*60); 
        header('Location: addproduct.php');
      }
}
 

$sql = "UPDATE product
SET name = '$pname',categoryid = '$category',subcategoryid = '$subcategory',typeid = '$type',color = '$color',price = '$price',image='$image'
WHERE id='$id';";
 
 if ($conn->query($sql) === TRUE) {
    $message = "Product updated successfully";
    session_start(); 
    $_SESSION['addproductmessege']=$message; 
    header('Location: product.php');
} 
else {

    $message = "Product not updated";
    session_start(); 
    $_SESSION['addproductmessege']=$message; 
    header('Location: product.php');
} 
?>