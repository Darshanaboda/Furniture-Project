<?php include "dbconect.php"; ?>
<?php 
$id = $_POST['id'];
$cname = $_POST['cname']; 

$sql = "UPDATE category
SET name = '$cname'
WHERE id='$id';";
 
if ($conn->query($sql) === TRUE) {
    $message = "Category updated successfully";
    setcookie("addusermessage", $message, time()+5*60);
    header("Location: category.php");
} 
else { 
    $message = "Category not updated";
    setcookie("message", $message, time()+5*60);
    header("Location: editcategory.php");
}
?>