<?php include "dbconect.php"; ?>
<?php 
$pname = $_POST['pname'];
$category = $_POST['category'];
$subcategory = $_POST['subcategory'];
$type = $_POST['type']; 
$color = $_POST['color']; 
$price = $_POST['price'];  

$image="" ;
if(isset($_FILES['image'])){
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
 

$sql = "INSERT INTO product (name, categoryid, subcategoryid,typeid,color,	price,image)
VALUES ('$pname', '$category', '$subcategory','$type','$color','$price','$image')";
 
if ($conn->query($sql) === TRUE) {
    $message = "Product added successfully";
    session_start(); 
    $_SESSION['addproductmessege']=$message; 
    header('Location: product.php');
} 
else {

    $message = "Product not added";
    setcookie("message", $message, time()+5*60); 
    header('Location: addproduct.php');
}
?>