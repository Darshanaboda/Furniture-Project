<?php include "dbconect.php"; ?>
<?php 
$id = $_POST['id'];
$scname = $_POST['scname']; 
$category = $_POST['category'];
$sql = "UPDATE subcategory
SET name = '$scname',categoryid='$category'
WHERE id='$id';";
 
 if ($conn->query($sql) === TRUE) {
    $message = "Sub Category added successfully";
    setcookie("addusermessage", $message, time()+5*60);
    header("Location: subcategory.php");
} 
else {

    $message = "Sub Category not added";
    setcookie("message", $message, time()+5*60);
    header("Location: subcategory.php");
}
?>