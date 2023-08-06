<?php include "dbconect.php"; ?>
<?php 
 $id = $_GET['id'];
 $sql = "DELETE FROM product WHERE `id`='" . $id . "'";
 
if ($conn->query($sql) === TRUE) {
    $message = "Product deleted successfully";
    session_start(); 
    $_SESSION['addproductmessege']=$message; 
    header('Location: product.php');
} 
else { 
    $message = "Product not deleted";
    session_start(); 
    $_SESSION['addproductmessege']=$message; 
    header('Location: product.php');
}
?>