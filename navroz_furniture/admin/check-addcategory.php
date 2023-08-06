<?php include "dbconect.php"; ?>
<?php 
$cname = $_POST['cname']; 

$sql = "INSERT INTO category (name)
VALUES ('$cname')";
 
if ($conn->query($sql) === TRUE) {
    $message = "Category added successfully";
    setcookie("addusermessage", $message, time()+5*60);
    header("Location: category.php");
} 
else {

    $message = "Category not added";
    setcookie("message", $message, time()+5*60);
    header("Location: addcategory.php");
}
?>